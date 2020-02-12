<?php


class Database{
    public $db;

    //fetch data from database
    public function query_data($sql){
        if(empty($sql)){return false;} //check if the input value is empty
        $result = mysqli_query($this->db, $sql) or die(mysqli_error($this->db));
        if(!$result){return false;} //return error if the operation fail
        return $result;
    }
    public function count_data($result){
        $count = mysqli_num_rows($result);
        if( $count<= 0){
            return 0;
        }
        else{
            return $count;
        }
    }


}