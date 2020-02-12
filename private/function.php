<?php
function emailLink($email){
    return '<a href="mailto:'.$email.'">'.$email.'</a>';
}
function screen_input($input){

}

function display_error($error){
    return '<div class="alert alert-danger" role="alert">
            <p class="mb-0">'.$error.'</p>
                            </div>';
}

function display_error_array($error_array){
    if(!empty($error_array)){
        echo'<div class="alert alert-danger" role="alert"><p class="mb-0">Correct the following error(s)</p><ul>';
        foreach ($error_array as $value){
            echo ' <li>'.$value.'</li>';
        }
        echo ' </ul></div>';
    }
    return;
}
function display_success($message){
    return '<div class="alert alert-success" role="alert"><p class="mb-0">'.$message.'</p></div>';
}
function loading(){
    return '<div class="alert alert-light" role="alert"><p class="text-center mb-0"><span class="spinner-border spinner-border-sm" role="status"></span> Processing</p></div>';
}