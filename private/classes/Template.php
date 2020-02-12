<?php
/*
* Controller for the template of the website.
*
*
*
*/

class Template
{
    private $root;

    public function __construct($path)
    {
        $this->root = $path ?? ''; //initiate and assign a value to the path the moment the class is called
    }
    public function footer(){
        return '
    <footer>
        <div class="footer-menu-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <h5>who we are</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Business line</a></li>
                            <li><a href="about.php">our history</a></li>
                            <li><a href="#">management committee</a></li>
                            <li><a href="#">Guiding principles</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <h5>guide</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Find a station</a></li>
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
                        <form method="post" enctype="application/x-www-form-urlencoded" action="'.$this->root.'newsletter.php">
                            <div class="form-group">
                                <div class="input-group">
                                <input class="form-control" type="email" placeholder="Enter your Email" name="email" />
                                    <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-envelope-o"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p>We promise not to spam your inbox</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start: copyright -->
        <div class="copyright"><span>© '.date("Y").' oil &amp; gas&nbsp;Company Ltd All rights reserved</span><span class="top-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></span></div>
        <!-- End: copyright -->
    </footer>

   
    <script src="'.$this->root.'assets/js/jquery.min.js"></script>
    <script src="'.$this->root.'assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="'.$this->root.'assets/js/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="'.$this->root.'assets/js/script.min.js"></script>
';
    }
    public function header($title=''){
        if(!empty($title)){
          $title.=' |';
        }
       return'<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="og:url" content="https://femak.website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="No 1 oil and Gas in Africa">
    <meta name="twitter:image" content="https://femak.website/assets/img/1112.jpg">
    <meta property="og:type" content="website">
    <meta name="description" content="oil and gas industry benefits our lives in many ways. Its products underpin modern society, supplying energy to power industry and heat homes, fuel for transport to carry goods and people all  ">
    <meta property="og:image" content="https://femak.website/assets/img/1112.jpg">
    <meta name="twitter:description" content="oil and gas industry benefits our lives in many ways. Its products underpin modern society, supplying energy to power industry and heat homes, fuel for transport to carry goods and people all  ">
    <title>'.$title.' oil & Gas incorporation</title>
    <link rel="icon" type="image/png" sizes="231x67" href="'.$this->root.'oil&amp;gas.png">
    <link rel="stylesheet" href="'.$this->root.'assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="'.$this->root.'manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="'.$this->root.'assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="'.$this->root.'assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="'.$this->root.'assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="'.$this->root.'assets/css/styles.min.css">
</head>
<body>';
    }
    public function nav($active=''){

       echo '<nav class="navbar navbar-light navbar-expand-lg border-bottom border-top">
            <div class="container-fluid"><a class="navbar-brand" href="'.$this->root.'index.php"><img class="logo" src="'.$this->root.'assets/img/oil&gas.png"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link ',$active=="home"? "active":"",'" href="'.$this->root.'index.php">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link ',$active=="about"? "active":"",'" href="'.$this->root.'about.php">About</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link ',$active=="service"? "active":"",'" href="'.$this->root.'service.php">Services</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link ',$active=="operation"? "active":"",'" data-toggle="dropdown" aria-expanded="false">Operations&nbsp;</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="'.$this->root.'operation/transport.php">transportation</a><a class="dropdown-item" role="presentation" href="'.$this->root.'operation/Drilling.php">Drilling</a></div>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link ',$active=="career"? "active":"",'" href="'.$this->root.'career.php">Careers</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link ',$active=="contact"? "active":"",'" href="'.$this->root.'contact.php">Contact us</a></li>
                    </ul>
            </div>
            </div>
        </nav>';
    }
}