<?php

//connect the database
function db_connect()
{
    GLOBAL $db;
    $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    confirm_db($db);
    return $db;
}
//check database connections
function confirm_db($db)
{
    if ($db->connect_errno) {
        $error_message = 'Server error: ';
        $error_message .= $db->connect_error;
        $error_message .= "(" . $db->connect_errno . ")";
        exit($error_message);
    }
}
//close active connections
function db_stop($db)
{
    if (isset($db)) {
        $db->close();
    }
}


