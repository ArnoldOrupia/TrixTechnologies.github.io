<?php
$page_link = pathinfo(curPageURL(),PATHINFO_FILENAME);
function curPageURL() {
    $pageURL = 'http';
    if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic page needs -->
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TrixTechnologies </title>
    <meta name="description" content="best template, template free, responsive theme, fashion store, responsive theme, responsive html theme, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
    <meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"/>

    <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon  -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- CSS Style -->
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="contact_us_page">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<div id="page">

    <!-- Header -->
    <header id="header"  >
        <div style="background-color: #f5f5f5" class="header-container">

            <div class="container">
            <div class="row">
                    <!-- Header Logo -->
             <div class="col-xs-12 col-lg-5 col-md-3 col-sm-3">


           <div class="logo"><a title="e-commerce" href="index.html"><img alt="e-commerce" src="images/trixlogo.png"></a> </div>
<!--                       <h1 style="height: 100px ;text-shadow:2px 2px red";> VSOFT Technologies</h1>-->

            </div>

                <div class="fl_right">
                    <ul class="nospace" style="margin-left: 910px;">
                        <span> <i class="fa fa-envelope"></i>trixtechnologies@gmail.com</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span><i class="fa fa-phone"></i> +254700442656</span>

                    </ul>
                </div>

            </div>
            </div>
        </div>

        <nav>
            <!-- Start Menu Area -->
            <div class="menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-menu" style="position:center">
                                <div class="mm-toggle-wrap hidden-lg hidden-md hidden-sm">
                                    <div class="mm-toggle"> <i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
                                </div>
                                <ul class="hidden-xs">

                                    <li class="custom-menu <?php if($page_link != '' && $page_link=='index'){echo 'active';} ?> "><a href="index.php">Home</a>
                                    </li>

                                    <li class=" custom-menu  <?php if($page_link != '' && $page_link=='about_us'){echo 'active';} ?>"><a href="about_us.php">About Us</a>
                                        <ul class="dropdown">
                                            <li><a href="about_us.php">Our  Mission &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                            <li><a href="about_us.php">Our  Vission  </a></li>
                                            <li><a href="about_us.php"> Core Objectives  </a></li></ul>
                                    </li>


                                    <li class="custom-menu <?php if($page_link != '' && $page_link=='services'){echo 'active';} ?>"><a href="services.php">Services</a>
                                        <ul class="dropdown">
                                            <li><a href="#">IT Consultancy</a></li>
                                            <li><a href="#">Helpdesk Maintainance</a></li>
                                            <li><a href="#">system & data Recovery</a></li>
                                            <li><a href="#">Data Analytics</a></li>
                                            <li><a href="#">ICT Training</a></li>
                                        </ul>
                                    </li>
                                    <li class="custom-menu  <?php if($page_link != '' && $page_link=='products'){echo 'active';} ?>"><a href="products.php">Products</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Web-based Applications</a></li>
                                            <li><a href="#mobile">Mobile Development</a></li>
                                            <li><a href="#">E-commerce Applications</a></li>
                                            <li><a href="#">Desktop Applications</a></li>
                                            <li><a href="#">Backend Development</a></li>
                                        </ul>
                                    </li>

                                        <li class="custom-menu  <?php if($page_link != '' && $page_link=='directors'){echo 'active';} ?>"><a href="directors.php">Directors</a>

                                    </li>


                                    <li class="megamenu  <?php if($page_link != '' && $page_link=='pricing'){echo 'active';} ?>"><a href="pricing.php">Pricing</a>
                                    </li>
                                    <li class=" megamenu <?php if($page_link != '' && $page_link=='contact_us'){echo 'active';} ?>"><a href="contact_us.php">Contact</a></li>

                                </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav> </header></div>