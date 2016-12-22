<?php
echo '
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>China Air Pollution Index</title>
    <meta property="og:site_name" content="China Air Pollution Index" />
    <meta property="og:locale" content="en-US" />
    <meta property="og:image" content="http://cdn.simplesite.com/i/2b/3d/283726781034872107/i283726791556726766._szw1280h1280_.jpg" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="China Air Pollution Index" />
    <link rel="stylesheet" type="text/css" href="http://css.simplesite.com/60/f5/18871648.design.v29762.css?h=a3dbe25a3a1e843e4c7c5b2444a28a37fc35583a1da79b78b12bb7712f7e6aae" />
    <script type="text/javascript" src="http://css.simplesite.com/c/js/frontendApp.min.js?_v=c3745b49b3583731aea941058c4b63a8"></script>
    <!-- import ECharts file -->
    <script src="/air_pollution/echarts/echarts.js"></script>
</head>
<body>
<div class="container-fluid site-wrapper" style="position: relative; z-index: 0;"> <!-- this is the Sheet -->
    <div class="container-fluid header-wrapper " id="header"> <!-- this is the Header Wrapper -->
        <div class="container">
            <div class="title-wrapper">
                <div class="title-wrapper-inner">
                    <a class="title title-only" href="/air_pollution/index.html">
                        China Air Pollution Index
                    </a>
                </div>
            </div>  <!-- these are the titles -->
            <div class="navbar navbar-compact" style="position: relative; z-index: 1;">
                <div class="navbar-inner">
                    <div class="container">
                        <div class="nav-collapse collapse">
                            <ul class="nav" id="topMenu" data-submenu="horizontal">
                                <li class=" active ">
                                    <a rel="nofollow"  href="">Real time</a>
                                    <ul>
                                        <li><a href="real_time/one_city.html">One City</a></li>
                                        <li><a href="real_time/multi_city.html">All Cities</a></li>
                                    </ul>
                                </li>
                                <li class=" active ">
                                    <a rel="nofollow"  href="">History</a>
                                    <ul>
                                        <li><a href="">One City</a></li>
                                        <li><a href="">All Cities</a></li>
                                    </ul>
                                </li>
                                <li class=" active ">
                                    <a rel="nofollow"  href="">Peak value</a>
                                    <ul>
                                        <li><a href="">One City</a></li>
                                        <li><a href="">All Cities</a></li>
                                    </ul>
                                </li>
                                <li class=" active ">
                                    <a rel="nofollow"  href="">Natural environment</a>
                                </li>
                                <li class=" active ">
                                    <a rel="nofollow"  href="">Emission source</a>
                                </li>
                                <li class=" active ">
                                    <a rel="nofollow"  href="">Human Behavior</a>
                                </li>
                            </ul>
                        </div> <!-- nav-collapse ends -->
                    </div><!-- container ends -->
                </div> <!-- navbar-inner ends -->
            </div><!-- nav bar ends -->
        </div><!-- container-fluid ends -->
    </div>  <!-- this is the Header content -->

    <div class="container-fluid content-wrapper" id="content"
         style="position: relative; z-index: 0; margin-top: 50px;"> <!-- this is the Content Wrapper -->
        <div class="container">
            <div class="row-fluid content-inner">
'
?>
