<?php


class Validator
{
//sanitize values
public function sanitizeInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//check for empty variables
    public function isEmpty($input){
        if(empty($input)){
            return true;
        }
        return false;
    }
//check if the value is a valid email
public function ValidEmail($email){
    if($this->isEmpty($email)){
        return false;
    }
    $email = $this->sanitizeInput($email);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return false;
    }
    return filter_var($email, FILTER_SANITIZE_EMAIL);
}
//validate an integer input
public function validInt($number){
    if($this->isEmpty($number)){return false;}
    $new_number = $this->sanitizeInput($number);
    return filter_var($new_number, FILTER_VALIDATE_INT);
}
public function validString($string){
    if($this->isEmpty($string)){return false;}
    $new_string = $this->sanitizeInput($string);
    return filter_var($new_string, FILTER_SANITIZE_STRING);
}




}