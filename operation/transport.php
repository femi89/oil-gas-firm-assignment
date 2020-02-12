<?php
$root = './../';
$title = 'Transportation Services'; //page title
require_once $root.'public/general.php';
$theme = new Template($root);
echo $theme->header($title); //import header
?>
<!-- Start: header -->
<header>
    <!-- Start: navigation -->
    <?php echo $theme->nav('operation');?>
    <!-- End: navigation -->
</header>
<!-- End: header -->
    <main>
        <div class="page-hero" style="background-image: url(&quot;../assets/img/operations-transportation.jpg&quot;);height: 228px;background-attachment: fixed;"></div>
        <div class="container bg-white page-title">
            <div class="row">
                <div class="col">
                    <h1>Transportation-Operations</h1>
                    <p>we deliver energy safely and efficiently</p>
                </div>
            </div>
        </div>
        <div class="block bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col"><img class="img-fluid mb-3" src="../assets/img/gorgon-tile.jpg"></div>
                    <div class="col-md-7">
                        <h2 class="title">An extensive Network</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pharetra massa massa ultricies mi. Leo urna molestie at elementum eu facilisis. Pharetra diam sit amet
                            nisl suscipit adipiscing bibendum est ultricies. Mattis rhoncus urna neque viverra justo. Consequat nisl vel pretium lectus. Nulla pharetra diam sit amet nisl suscipit adipiscing bibendum est. Nunc lobortis mattis aliquam faucibus
                            purus in massa tempor. Adipiscing enim eu turpis egestas pretium aenean pharetra magna ac. In aliquam sem fringilla ut morbi tincidunt augue interdum velit. Mauris pellentesque pulvinar pellentesque habitant.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 order-2 order-md-1">
                        <h2 class="title">Shipping services</h2>
                        <p>We transport crude oil, refined products adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pharetra massa massa ultricies mi. Leo urna molestie at elementum eu facilisis. Pharetra diam sit amet
                            nisl suscipit adipiscing bibendum est ultricies. Mattis rhoncus urna neque viverra justo. Consequat nisl vel pretium lectus. Nulla pharetra diam sit amet nisl suscipit adipiscing bibendum est. Nunc lobortis mattis aliquam faucibus
                            purus in massa tempor. Adipiscing enim eu turpis egestas pretium aenean pharetra magna ac. In aliquam sem fringilla ut morbi tincidunt augue interdum velit. Mauris pellentesque pulvinar pellentesque habitant.</p>
                    </div>
                    <div class="col order-1 order-md-2"><img class="img-fluid mb-3" src="../assets/img/ferry-boat-123059_1280.jpg"></div>
                </div>
            </div>
        </div>
        <div class="block bg-light">
            <div class="container">
                <div class="row">
                    <div class="col"><img class="img-fluid mb-3" src="../assets/img/shutterstock_124714090.jpg"></div>
                    <div class="col-md-7">
                        <h3 class="title">Pipeline Network</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pharetra massa massa ultricies mi. Leo urna molestie at elementum eu facilisis. Pharetra diam sit amet
                            nisl suscipit adipiscing bibendum est ultricies. Mattis rhoncus urna neque viverra justo. Consequat nisl vel pretium lectus. Nulla pharetra diam sit amet nisl suscipit adipiscing bibendum est. Nunc lobortis mattis aliquam faucibus
                            purus in massa tempor. Adipiscing enim eu turpis egestas pretium aenean pharetra magna ac. In aliquam sem fringilla ut morbi tincidunt augue interdum velit. Mauris pellentesque pulvinar pellentesque habitant.</p>
                    </div>
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
                            <li><a href="../about.php">our history</a></li>
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