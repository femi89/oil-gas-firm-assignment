<?php
require_once './public/general.php';
require_once CLASS_PATH.'/Database.php';

class Post extends Database
{
    public function __construct($db)
    {
        $this->db = $db;
    }
    private $table_name = 'post';
    /*
    * post block
    *cond Set the condition of the requested
    *Set the limit to an integer higher than 0
    */
    private function set_postBlock($cond, $limit){
        $sql = "SELECT * FROM `".$this->table_name."`  ";
        switch ($cond){
            case'latest':
                $sql.=" ORDER BY date DESC";
                break;
            default:
                $sql.="";
        }
        $sql .= " LIMIT ".$limit." ";
        $result = $this->query_data($sql);
        if(!$result){
            //catch the error received from the mysql data processing
            $error_message = 'Server error. please try again later';
        }
        $post_count = $this->count_data($result);//check if the request didn't return empty query
        if($post_count <= 0){
            $error_message = 'No post at this moment. Try again later';
        }
        if(empty($error_message)){
           while($data=mysqli_fetch_array($result)){
               echo '<div class="col-md-4">';
                echo '<div class="image-box"><img class="img-fluid" data-bs-hover-animate="pulse" src="'.$root.'/'.$data["feature_image"].'"><h4 class="title"><a href="news-post.php?post='.$data["post_id"].'"> '.$data["post_title"].'</a></h4><p>'.substr_replace($data["post_body"],"...", 200, -1).'</p><a class="btn btn-danger" role="button" href="news-post.php?post='.$data["post_id"].'">read more&nbsp;<i class="fa fa-long-arrow-right"></i></a></div>
                </div>';
           }
        }
    }
    public function latestPost($limit){
        return $this->set_postBlock('latest', $limit);
    }
    //function to control the information on the post page
    public function post_view($post_id){
        $sql = "SELECT * FROM `".$this->table_name."` WHERE post_id= '".$post_id."'";
       $result = $this->query_data($sql);
        if(!$result){
            //catch the error received from the mysql data processing
            $error_message = 'Server error. please try again later';
        }
        $post_count = $this->count_data($result);//check if the request didn't return empty query
        if($post_count <= 0){
            $error_message = 'No post at this moment. Try again later';
        }
        if(empty($error_message)){
            return $result;
        }
        return false;
    }
}