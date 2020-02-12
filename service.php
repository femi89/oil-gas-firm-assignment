<?php
$root = './';
$title = 'Our Services';
require_once $root.'public/general.php';
$theme = new Template($root);

echo $theme->header($title); //import header
?>
<!-- Start: header -->
<header>
    <!-- Start: navigation -->
    <?php echo $theme->nav('service');?>
    <!-- End: navigation -->
</header>
<!-- End: header -->
    <main>
        <div class="page-hero" style="background-image: url(&quot;assets/img/engineer-in-red-uniform-with-yellow-hard-hat-by-marsb-platform-construction.jpeg&quot;);height: 228px;"></div>
        <div class="container bg-white page-title">
            <div class="row">
                <div class="col">
                    <h1 class="title">Our Service</h1>
                    <p>For specific comments and enquiries about oil &amp; gas industry, use the contact information below.</p>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="icon-box"><i class="fa fa-tint"></i>
                            <h5><strong>Physical Supply &amp; Trading</strong></h5>
                            <p>We trade in crude oil and petroleum products ranging from Naphtha, Gasoline, Fuel Oil, Gas Oil, Kerosene, and Bitumen.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-box"><i class="fa fa-dollar"></i>
                            <h5><strong>Financial Trading &amp; Hedging</strong></h5>
                            <p>We trade in crude oil and petroleum products ranging from Naphtha, Gasoline, Fuel Oil, Gas Oil, Kerosene, and Bitumen.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-box"><i class="fa fa-ship"></i>
                            <h5><strong>Supply &amp; Trading</strong></h5>
                            <p>We trade in crude oil and petroleum products ranging from Naphtha, Gasoline, Fuel Oil, Gas Oil, Kerosene, and Bitumen.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-box"><i class="fa fa-fort-awesome"></i>
                            <h5><strong>Refining</strong></h5>
                            <p>We trade in crude oil and petroleum products ranging from Naphtha, Gasoline, Fuel Oil, Gas Oil, Kerosene, and Bitumen.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-box"><i class="fa fa-envira"></i>
                            <h5><strong>Alternative Energy</strong></h5>
                            <p>We trade in crude oil and petroleum products ranging from Naphtha, Gasoline, Fuel Oil, Gas Oil, Kerosene, and Bitumen.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-box"><i class="fa fa-flask"></i>
                            <h5><strong>Chemical &amp; Additive</strong></h5>
                            <p>We trade in crude oil and petroleum products ranging from Naphtha, Gasoline, Fuel Oil, Gas Oil, Kerosene, and Bitumen.</p>
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