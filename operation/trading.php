<?php
$root = './../';
$title = 'Trading services';
require_once $root.'public/general.php';
$theme = new Template($root);
echo $theme->header($title); //import header
?>
<!-- Start: header -->
<header>
    <!-- Start: navigation -->
    <?php echo $theme->nav('home');?>
    <!-- End: navigation -->
</header>
<!-- End: header -->
    <main>
        <div class="page-hero" style="background-image: url(&quot;../assets/img/engineer-in-red-uniform-with-yellow-hard-hat-by-marsb-platform-construction.jpeg&quot;);height: 228px;"></div>
        <div class="container bg-white page-title">
            <div class="row">
                <div class="col">
                    <h1 class="text-capitalize title">horizontal drilling</h1>
                </div>
            </div>
        </div>
        <div class="block" style="padding-top: 0;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10"><img class="img-fluid mb-3" src="../assets/img/drilling-unlocking-innovation-in-the-uk.jpg"></div>
                    <div class="col-md-10">
                        <p>Horizontal drilling helps us reach resources that would otherwise be too uneconomic or complex to pursue. The U.K.’s Captain Field languished &nbsp;after its discovery in 1977 because its shallow reservoir consisted of loose, unconsolidated
                            sand that would have required about 300 wells to produce.&nbsp;</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pharetra massa massaultricies mi. Leo urna molestie at elementum eu facilisis. Pharetra diam sit amet nisl
                            suscipit adipiscing bibendum est ultricies. Mattis rhoncus urna neque viverra justo. Consequat nisl vel pretium lectus. Nulla pharetra diam sit amet nisl suscipit adipiscing bibendum est. Nunc lobortis mattis aliquam faucibus
                            purus in massa tempor. Adipiscing enim eu turpis egestas pretium aenean pharetra magna ac. In aliquam sem fringilla ut morbi tincidunt augue interdum velit. Mauris pellentesque pulvinar pellentesque habitant.</p><a class="btn btn-danger btn-lg"
                            role="button" href="../about.php">Contact Us&nbsp;<i class="fa fa-long-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
    </main>
    <!-- Start: footer -->
    <footer>
        <div class="footer-menu-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <h5>who we are</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Business line</a></li>
                            <li><a href="#">our history</a></li>
                            <li><a href="#">management committee</a></li>
                            <li><a href="#">Guiding principles</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <h5>guide</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Find a station</a></li>
                            <li></li>
                            <li><a href="#">station ownership</a></li>
                            <li><a href="#">investors</a></li>
                            <li><a href="#">investors</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-2">
                        <h5>career</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Work with us</a></li>
                            <li><a href="#">opportunities</a></li>
                            <li><a href="#">professionals</a></li>
                            <li><a href="#">Graduate Intern</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-7 col-md-4">
                        <h5>Subscribe to our newsletter</h5>
                        <p>Sign up today for tips and latest news and exclusive special offers.<br></p>
                        <form method="post" enctype="application/x-www-form-urlencoded">
                            <div class="form-group">
                                <div class="input-group"><input class="form-control" type="text" placeholder="Enter your Email">
                                    <div class="input-group-append"><button class="btn btn-primary" type="submit"><i class="fa fa-envelope-o"></i></button></div>
                                </div>
                            </div>
                        </form>
                        <p>We promise not to spam your inbox</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start: copyright -->
        <div class="copyright"><span>© 2020 oil &amp; gas&nbsp;Company Ltd All rights reserved</span><span class="top-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></span></div>
        <!-- End: copyright -->
    </footer>
    <!-- End: footer -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="../assets/js/script.min.js"></script>
</body>

</html>