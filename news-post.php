<?php
$root = './';
$title = '';
require_once $root.'public/general.php';
require_once CLASS_PATH.'/Validator.php';
$validate = new Validator();
$theme = new Template($root);
require_once CLASS_PATH.'/Post.php';
$post = new Post($db);
$post_id = $_GET['post']??'';
if(empty($post_id)){
    $error_message = 'Page error. Check and try again later';
}
else{
    //sanitize the request data
    $sanitized_post_Id= $validate->validInt($post_id);
    if(!$sanitized_post_Id){
        $error_message = 'Invalid Page';
    }
}
if(empty($error_message)){
    $post_result = $post->post_view($sanitized_post_Id);
if(!$post_result){
    $error_message = 'Nothing to display';
}
else{
    $post_data = mysqli_fetch_assoc($post_result); //fetch the post data and save it as an array
    $title = $post_data['post_title'] ?? '';

}
}
echo $theme->header(); //import header

?>
<!-- Start: header -->
<header>
    <!-- Start: navigation -->
    <?php echo $theme->nav();?>
    <!-- End: navigation -->
</header>
<!-- End: header -->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-10">

                    <?php
                    if(!empty($error_message)){
                       echo display_error($error_message);
                    }
                    else{
                    ?>
                    <div class="post-image"><img src="<?php echo $root.$post_data['feature_image'];?>"></div>
                    <div class="post-header">
                        <h2 class="title"><?php echo $post_data['post_title']??'';?></h2>
                    </div>
                    <div class="post-body">
                        <p><?php echo $post_data['post_body']??'';?></p>
                    </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="archived-post">
            <div class="container">
                <hr>
                <h2 class="block-title title">Recent Article</h2>
                <div class="row">
                    <?php
                    //post blocks
                    $post = new Post($db);
                    echo $post->latestPost('3');
                    ?>
                </div>
            </div>
        </div>
    </main>
    <!-- Start: footer -->
    <?php
    echo $theme->footer();
    ?>
    <!-- End: footer -->
</body>
</html>