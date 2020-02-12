<?php
$path = './';
require_once $path.'public/general.php';
require_once CLASS_PATH.'/Validator.php';
$validate = new Validator();
$error_array = array();
$error_message = '';
if($_SERVER['REQUEST_METHOD']==='POST' && !empty($_POST)){
    $email = $_POST['email']??'';//default the value of email
    //validate tbe email format
    $clean_email = $validate->ValidEmail($email);
    if(!$clean_email){
        $error_array[]='invalid email address';
    }

    //validate the message body
    $message = $_POST['message'] ?? '';
    $clean_message = $validate->validString($message);
    if(!$clean_message){
        $error_array[] = 'You can\'t send an empty message';
    }
    //validate and sanitize the name input
    $name = $_POST['name']??'';
    $clean_name = $validate->validString($name);
    if(!$clean_name){
        $error_array = 'Please provide a valid Name';
    }
    if(empty($error_array)){
        //initiate the email parameters

        $subject = 'New message from'.$name;
        $admin_email = $site_data['email'];
        $message = $clean_message;
        $headers = 'From:'.$name.' <noreply@oilgas.com>'."\r\n";
        $headers .= "To:".strip_tags($admin_email)."\r\n";
        $headers .= "Reply-To:noreply@examlpe.com\r\n";
        mail($admin_email, $subject, $message, $headers);//send the contact message to admin email address
        echo display_success('Message sent successfully. We will get back to you as soon as possible via the email address provided.');
    }
    else{
        echo display_error_array($error_array);
        echo '<br /> <button class="btn btn-primary" type="submit" id="contact" >Submit</button>';
    }

}
