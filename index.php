<?php
$root = './';
$title = 'Home';
require_once $root.'public/general.php';
require_once CLASS_PATH.'/Post.php';
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
    <!-- Start: home-hero -->
    <div class="home-hero" style="background-image: url(&quot;assets/img/vllkytg7q4ef8c6v.jpg&quot;);background-position: bottom;background-size: cover;background-repeat: no-repeat;/*background-attachment: fixed;*/">
        <div class="container">
            <div class="row home-hero-row">
                <div class="col-md-6">
                    <div class="hero-content">
                        <h1 style="text-shadow: 2px 2px 5px #1b1919;">OIL &amp; GAS Industry</h1>
                        <p>Through its extensive supply chain, it employs hundreds&nbsp;of thousands of people and makes a major contribution to the UK economy in terms of tax revenues, technology and exports.&nbsp;</p>
                        <div class="hero-footer"><button class="btn btn-light" type="button">About us&nbsp;<i class="fa fa-long-arrow-right"></i></button></div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
    <!-- End: home-hero -->
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-capitalize">Production, reserves &amp; resources</h2>
                    <p>well positioned as a leading E&amp;P player in the Nigerian Oil and Gas sector, as measured by our December 31, 2018 Independent Reserves Evaluation report.</p>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col-12">
                            <ul class="list-inline text-center">
                                <li class="list-inline-item"><i class="fa fa-circle" style="color: rgb(50,27,142);"></i>&nbsp;Oil &amp; Condensate</li>
                                <li class="list-inline-item"><i class="fa fa-circle" style="color: rgb(5,90,218);"></i>&nbsp;Natural gas</li>
                                <li class="list-inline-item"><i class="fa fa-circle" style="color: rgb(231,93,16);"></i>&nbsp;NGL</li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="chart"><canvas data-bs-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Natural Gas&quot;,&quot;NGL&quot;,&quot;Oil&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Revenue&quot;,&quot;backgroundColor&quot;:[&quot;#055ada&quot;,&quot;#e75d10&quot;,&quot;#321b8e&quot;],&quot;borderColor&quot;:[&quot;rgba(0,0,0,0.1)&quot;,&quot;rgba(0,0,0,0.1)&quot;,&quot;rgba(0,0,0,0.1)&quot;],&quot;data&quot;:[&quot;12&quot;,&quot;50&quot;,&quot;38&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{&quot;display&quot;:true,&quot;text&quot;:&quot;Reserve&quot;}}}"></canvas></div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="chart"><canvas data-bs-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Natural Gas&quot;,&quot;NGL&quot;,&quot;Oil&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Revenue&quot;,&quot;backgroundColor&quot;:[&quot;#055ada&quot;,&quot;#e75d10&quot;,&quot;#321b8e&quot;],&quot;borderColor&quot;:[&quot;rgba(0,0,0,0.1)&quot;,&quot;rgba(0,0,0,0.1)&quot;,&quot;rgba(0,0,0,0.1)&quot;],&quot;data&quot;:[&quot;22&quot;,&quot;32&quot;,&quot;38&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{&quot;display&quot;:true,&quot;text&quot;:&quot;Productions&quot;}}}"></canvas></div>
                        </div>
                        <div class="col-md-4">
                            <div class="chart"><canvas data-bs-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Natural Gas&quot;,&quot;NGL&quot;,&quot;Oil&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Revenue&quot;,&quot;backgroundColor&quot;:[&quot;#055ada&quot;,&quot;#e75d10&quot;,&quot;#321b8e&quot;],&quot;borderColor&quot;:[&quot;rgba(0,0,0,0.1)&quot;,&quot;rgba(0,0,0,0.1)&quot;,&quot;rgba(0,0,0,0.1)&quot;],&quot;data&quot;:[&quot;12&quot;,&quot;50&quot;,&quot;38&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{&quot;display&quot;:true,&quot;text&quot;:&quot;Resources&quot;}}}"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light mini-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <h3 class="title">Innovation</h3>
                        <p>oil and gas industry benefits our lives in many ways. Its products underpin modern society, supplying energy to power industry and heat homes, fuel for transport to carry goods and people all &nbsp;<br></p><a href="#">More&nbsp;<i class="fas fa-long-arrow-alt-right"></i>&nbsp;</a></div>
                </div>
                <div class="col-md-4">
                    <div>
                        <h3 class="title">Sustainability</h3>
                        <p>oil and gas industry benefits our lives in many ways. Its products underpin modern society, supplying energy to power industry and heat homes, fuel for transport to carry goods and people all &nbsp;<br></p><a href="#">More&nbsp;<i class="fas fa-long-arrow-alt-right"></i>&nbsp;</a></div>
                </div>
                <div class="col-md-4">
                    <div>
                        <h3 class="title">Innovation</h3>
                        <p>oil and gas industry benefits our lives in many ways. Its products underpin modern society, supplying energy to power industry and heat homes, fuel for transport to carry goods and people all &nbsp;<br></p><a href="#">More&nbsp;<i class="fas fa-long-arrow-alt-right"></i>&nbsp;</a></div>
                </div>
            </div>
        </div>
    </div>
    <div id="project-slider" class="project-slider">
        <div class="container">
            <div class="carousel slide carousel-fade" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div>
                                    <h3 class="text-capitalize" data-aos="fade">Career opportunities</h3>
                                    <p>oil and gas industry benefits our lives in many ways. Its products underpin modern society, supplying energy to power industry and heat homes, fuel for transport to carry goods and people all over the world and the
                                        raw materials used to produce many everyday items. Through its extensive supply chain, it employs hundreds of thousands of people and makes a major contribution to the UK economy in terms of tax revenues, technology
                                        and exports.</p>
                                </div><button class="btn btn-danger btn-lg mb-3" type="button">Apply Now&nbsp;<i class="fa fa-long-arrow-right"></i></button></div>
                            <div class="col"><img class="img-fluid" src="assets/img/permian-project-tile.jpg"></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div>
                                    <h3 class="text-capitalize">Coporate responsibilty reporting</h3>
                                    <p>oil and gas industry benefits our lives in many ways. Its products underpin modern society, supplying energy to power industry and heat homes, fuel for transport to carry goods and people all over the world and the
                                        raw materials used to produce many everyday items. Through its extensive supply chain, it employs hundreds of thousands of people and makes a major contribution to the UK economy in terms of tax revenues, technology
                                        and exports.</p>
                                </div><button class="btn btn-danger btn-lg" type="button">Read more&nbsp;<i class="fa fa-long-arrow-right"></i></button></div>
                            <div class="col"><img class="img-fluid" src="assets/img/363.jpg"></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div>
                                    <h3 class="text-capitalize">Coporate responsibilty reporting</h3>
                                    <p>oil and gas industry benefits our lives in many ways. Its products underpin modern society, supplying energy to power industry and heat homes, fuel for transport to carry goods and people all over the world and the
                                        raw materials used to produce many everyday items. Through its extensive supply chain, it employs hundreds of thousands of people and makes a major contribution to the UK economy in terms of tax revenues, technology
                                        and exports.</p>
                                </div><button class="btn btn-danger btn-lg" type="button">Read more&nbsp;<i class="fa fa-long-arrow-right"></i></button></div>
                            <div class="col"><img class="img-fluid" src="assets/img/363.jpg"></div>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- Start: Previous --><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a>
                    <!-- End: Previous -->
                    <!-- Start: Next --><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a>
                    <!-- End: Next -->
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="block bg-light">
        <div class="container">
            <h2 class="block-title title">Industrial News / Article</h2>
            <div class="row">
                <?php
                //post blocks
                $post = new Post($db);
                echo $post->latestPost('3');
                ?>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="text-center">
                        <h1 class="mb-3">Energy is at the heart of everything we do</h1>
                        <p>Our success is driven by our people and their commitment to get results the right way – by operating responsibly, executing with excellence, applying innovative technologies and capturing new opportunities for profitable growth.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col"><img class="img-fluid" src="assets/img/1112.jpg"></div>
            </div>
        </div>
    </div>
    <!-- Start: footer -->
<?php
echo $theme->footer();
?>
    <!-- End: footer -->
</body>
</html>