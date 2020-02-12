<?php
$root = './';
$title = 'Careers';
require_once $root.'public/general.php';
$theme = new Template($root);
echo $theme->header($title); //import header
?>
<!-- Start: header -->
<header>
    <!-- Start: navigation -->
    <?php echo $theme->nav('career');?>
    <!-- End: navigation -->
</header>
<!-- End: header -->
    <main>
        <div class="page-hero" style="background-image: url(&quot;assets/img/Careers%20Banner.jpg&quot;);height: 228px;background-size: cover;"></div>
        <div class="container bg-white page-title">
            <div class="row">
                <div class="col">
                    <h1 class="title">Career&nbsp;</h1>
                    <p>For specific comments and enquiries about oil &amp; gas industry, use the contact information below.</p>
                </div>
            </div>
        </div>
        <div class="mini-block">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="alert alert-danger" role="alert">
                            <p class="text-center">We are not recruting at this moment.&nbsp;</p>
                        </div>
                    </div>
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