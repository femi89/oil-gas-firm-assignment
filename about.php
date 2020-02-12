<?php
$root = './';
$title = 'About Us';
require_once $root.'public/general.php';
$theme = new Template($root);

echo $theme->header($title); //import header
?>
<!-- Start: header -->
<header>
    <!-- Start: navigation -->
    <?php echo $theme->nav('about');?>
    <!-- End: navigation -->
</header>
<!-- End: header -->
    <main>
        <div class="page-hero" style="background-image: url(&quot;assets/img/engineer-in-red-uniform-with-yellow-hard-hat-by-marsb-platform-construction.jpeg&quot;);height: 228px;"></div>
        <div class="container bg-white page-title">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1 class="title">About us</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pharetra massa massa ultricies mi. Leo urna molestie at elementum eu facilisis. Pharetra diam sit amet nisl
                        suscipit adipiscing bibendum est ultricies. Mattis rhoncus urna neque viverra justo. </p>
                </div>
            </div>
        </div>
        <div class="block bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="image-box">
                            <h4 class="title"><a href="#">Who we are</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pharetra massa massa ultricies mi. Leo urna molestie at elementum eu facilisis.&nbsp;</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="image-box">
                            <h4 class="title"><a href="#">What we do</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pharetra massa massa ultricies mi. Leo urna molestie at elementum eu facilisis.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="image-box">
                            <h4 class="title"><a href="#">Our value</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pharetra massa massa ultricies mi. Leo urna molestie at elementum eu facilisis.&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start: board of directors -->
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="text-capitalize title">board of directors</h3>
                        <p>onsequat nisl vel pretium lectus. Nulla pharetra diam sit amet nisl suscipit adipiscing bibendum est. Nunc lobortis mattis aliquam faucibus purus in massa tempor. Adipiscing enim eu turpis egestas pretium aenean pharetra magna
                            ac. In aliquam sem fringilla ut morbi tincidunt</p>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-sm-6 col-md-4 team"><img class="img-fluid" src="assets/img/1.jpg">
                                <h5>Agbado M.C</h5><span class="text-secondary">Chairman</span></div>
                            <div class="col-sm-6 col-md-4 team"><img class="img-fluid" src="assets/img/3.jpg">
                                <h5>John jame</h5><span class="text-secondary">HR Manager</span></div>
                            <div class="col-sm-6 col-md-4 team"><img class="img-fluid" src="assets/img/4.jpg">
                                <h5>Adeboye M.C</h5><span class="text-secondary">Head of operation</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: board of directors -->
    </main>
    <!-- Start: footer -->
    <?php
    echo $theme->footer();
    ?>
    <!-- End: footer -->
</body>

</html>