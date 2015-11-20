<!DOCTYPE html>
<html lang="en">



<?php include"templates/head.php"?>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

        <section class="well panels">
            <div class="container">
                <ul class="inline-list">
                    <li><a href="#">Forums</a></li>
                    <li><a href="#">Community </a></li>
                    <li><a href="#">Affiliates </a></li>
                    <li><a href="#">Help</a></li>
                </ul>

                <div class="btn-wr-header">
                    <a href="#" class="btn btn-default btn-default__mod">Create an account</a>
                    <a href="#" class="btn btn-default btn-default__mod">Sign In</a>
                </div>
            </div>
        </section>

        <div id="stuck_container" class="stuck_container">
            <nav class="navbar navbar-default navbar-static-top clearfix">
                <div class="container">
                    <div class="navbar-header">
                        <h1 class="navbar-brand">
                            <a href="./">scripts</a>
                            <span class="brand-slogan">Online Scripts Directory </span>
                        </h1>

                    </div>

                    <div class="navbar-right">
                        <ul class="navbar-nav sf-menu" data-type="navbar">
                            <li class="active">
                                <a href="./">Home</a>
                            </li>
                            <li>
                                <a href="index-1.html">About</a>
                            </li>
                            <li>
                                <a href="index-2.html">Most Viewed </a>
                            </li>
                            <li class="dropdown">
                                <a href="index-3.html">Highest rated</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Lorem ipsum dolor </a>
                                    </li>
                                    <li>
                                        <a href="#">Ait amet conse </a>
                                    </li>
                                    <li>
                                        <a href="#">Ctetur adipisicing elit</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#">Latest</a>
                                            </li>
                                            <li>
                                                <a href="#">Archive</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Sed do eiusmod </a>
                                    </li>
                                    <li>
                                        <a href="#">Tempor incididunt </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="index-4.html">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <section class="cont-wr">
            <div class="parallax well1" data-url="images/parallax1.jpg" data-mobile="true">

            </div>

            <div class="container text-center banner">
                <div class="cnt">
                    <p class="fw-b"><span id="max-number">0</span></p>

                    <h2 class="wow fadeIn" data-wow-duration="2s">Resources Listed
                        <small>in Over 1,000 Categories</small>
                    </h2>
                </div>

                <form class="search-form" action="search.php" method="GET" accept-charset="utf-8">
                    <label class="search-form_label">
                        <input class="search-form_input" type="text" name="s" autocomplete="off"
                               placeholder="Search Scripts"/>
                        <span class="search-form_liveout"></span>
                    </label>
                    <button class="search-form_submit fa-search" type="submit"></button>
                </form>
            </div>
        </section>

    </header>

    <!--========================================================
                              CONTENT
    =========================================================-->

    <main>

        <section class="well2 bg-secondary">
            <div class="container  text-center">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <ul class="icon-list">
                            <li class="box">
                                <div class="box_aside">
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/images/icon1.jpg" alt=""/></a>
                                </div>
                                <div class="box_cnt box_cnt__no-flow">
                                    <a href="#">Ajax <br/> <span class="badge">[ 189 ]</span></a>
                                </div>
                            </li>

                            <li class="box">
                                <div class="box_aside">
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/images/icon2.jpg" alt=""/></a>
                                </div>
                                <div class="box_cnt box_cnt__no-flow">
                                    <a href="#">C and C++ <br/> <span class="badge">[ 589 ]</span></a>
                                </div>
                            </li>

                            <li class="box">
                                <div class="box_aside">
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/images/icon3.jpg" alt=""/></a>
                                </div>
                                <div class="box_cnt box_cnt__no-flow">
                                    <a href="#">Flash <br/> <span class="badge">[ 889 ]</span></a>
                                </div>
                            </li>

                            <li class="box">
                                <div class="box_aside">
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/images/icon4.jpg" alt=""/></a>
                                </div>
                                <div class="box_cnt box_cnt__no-flow">
                                    <a href="#">ASP <br/> <span class="badge">[ 2189 ]</span></a>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <ul class="icon-list">
                            <li class="box">
                                <div class="box_aside">
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/images/icon5.jpg" alt=""/></a>
                                </div>
                                <div class="box_cnt box_cnt__no-flow">
                                    <a href="#">JavaScript <br/> <span class="badge">[ 1289 ]</span></a>
                                </div>
                            </li>

                            <li class="box">
                                <div class="box_aside">
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/images/icon6.jpg" alt=""/></a>
                                </div>
                                <div class="box_cnt box_cnt__no-flow">
                                    <a href="#">XML <br/> <span class="badge">[ 689 ]</span></a>
                                </div>
                            </li>

                            <li class="box">
                                <div class="box_aside">
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/images/icon7.jpg" alt=""/></a>
                                </div>
                                <div class="box_cnt box_cnt__no-flow">
                                    <a href="#">CFML <br/> <span class="badge">[ 287 ]</span></a>
                                </div>
                            </li>

                            <li class="box">
                                <div class="box_aside">
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/images/icon8.jpg" alt=""/></a>
                                </div>
                                <div class="box_cnt box_cnt__no-flow">
                                    <a href="#">CGI and Perl <br/> <span class="badge">[ 189 ]</span></a>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-4 ">
                        <ul class="icon-list">
                            <li class="box">
                                <div class="box_aside">
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/images/icon9.jpg" alt=""/></a>
                                </div>
                                <div class="box_cnt box_cnt__no-flow">
                                    <a href="#">HTML5 <br/> <span class="badge">[ 7589 ]</span></a>
                                </div>
                            </li>

                            <li class="box">
                                <div class="box_aside">
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/images/icon10.jpg" alt=""/></a>
                                </div>
                                <div class="box_cnt box_cnt__no-flow">
                                    <a href="#">PHP <br/> <span class="badge">[ 378 ]</span></a>
                                </div>
                            </li>

                            <li class="box">
                                <div class="box_aside">
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/images/icon11.jpg" alt=""/></a>
                                </div>
                                <div class="box_cnt box_cnt__no-flow">
                                    <a href="#">Java <br/> <span class="badge">[ 589 ]</span></a>
                                </div>
                            </li>

                            <li class="box">
                                <div class="box_aside">
                                    <a href="#"><img src="<?php bloginfo('template_directory');?>/images/icon12.jpg" alt=""/></a>
                                </div>
                                <div class="box_cnt box_cnt__no-flow">
                                    <a href="#">Python <br/> <span class="badge">[ 289 ]</span></a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <a href="#" class="btn btn-default__mod2 btn-default">See all categories</a>
            </div>
        </section>

        <section class="well3 bg-alt">
            <div class="container">
                <h3 class="text-center"><strong>New </strong>Scripts</h3>

                <div class="row">
                    <div class="resp-tabs">
                        <ul class="resp-tabs-list">
                            <li>Ajax</li>
                            <li> C and C++</li>
                            <li>Flash</li>
                            <li>ASP</li>
                            <li>JavaScript</li>
                            <li>XML</li>
                            <li>HTML5</li>
                        </ul>
                        <div class="resp-tabs-container">
                            <div>
                                <ul class="icon-list2">
                                    <li class="col-md-6 col-sm-6 col-xs-6 icon1 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Excepteur sint occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon2 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Lorem ipsum dolor sit amet</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon3 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.4s">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Conse ctetur adipisicing eli</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>
                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon4 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.4s">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Sed do eiusmod tempor incididunt ut lab</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua.
                                            <a href="#" class="fa fa-angle-right btn-link"></a>
                                        </p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon5 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.6s">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Sint occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon6 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.6s">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                </ul>

                            </div>

                            <div>
                                <ul class="icon-list2">


                                    <li class="col-md-6 col-sm-6 col-xs-6 icon2">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Lorem ipsum dolor sit amet</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon3">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Conse ctetur adipisicing eli</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>
                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon4">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Sed do eiusmod tempor incididunt ut lab</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua.
                                            <a href="#" class="fa fa-angle-right btn-link"></a>
                                        </p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon1">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Excepteur sint occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon5">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Sint occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon6">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                </ul>

                            </div>

                            <div>
                                <ul class="icon-list2">
                                    <li class="col-md-6 col-sm-6 col-xs-6 icon1">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Excepteur sint occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>


                                    <li class="col-md-6 col-sm-6 col-xs-6 icon3">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Conse ctetur adipisicing eli</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>
                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon4">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Sed do eiusmod tempor incididunt ut lab</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua.
                                            <a href="#" class="fa fa-angle-right btn-link"></a>
                                        </p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon5">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Sint occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon6">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon2">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Lorem ipsum dolor sit amet</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                </ul>

                            </div>

                            <div>
                                <ul class="icon-list2">


                                    <li class="col-md-6 col-sm-6 col-xs-6 icon2">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Lorem ipsum dolor sit amet</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon3">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Conse ctetur adipisicing eli</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>
                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon4">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Sed do eiusmod tempor incididunt ut lab</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua.
                                            <a href="#" class="fa fa-angle-right btn-link"></a>
                                        </p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon5">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Sint occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon6">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon1">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Excepteur sint occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                </ul>

                            </div>

                            <div>
                                <ul class="icon-list2">
                                    <li class="col-md-6 col-sm-6 col-xs-6 icon1">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Excepteur sint occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon2">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Lorem ipsum dolor sit amet</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>


                                    <li class="col-md-6 col-sm-6 col-xs-6 icon4">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Sed do eiusmod tempor incididunt ut lab</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua.
                                            <a href="#" class="fa fa-angle-right btn-link"></a>
                                        </p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon5">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Sint occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon6">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon3">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Conse ctetur adipisicing eli</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>
                                    </li>

                                </ul>

                            </div>

                            <div>
                                <ul class="icon-list2">
                                    <li class="col-md-6 col-sm-6 col-xs-6 icon1">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Excepteur sint occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>


                                    <li class="col-md-6 col-sm-6 col-xs-6 icon3">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Conse ctetur adipisicing eli</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>
                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon4">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Sed do eiusmod tempor incididunt ut lab</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua.
                                            <a href="#" class="fa fa-angle-right btn-link"></a>
                                        </p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon5">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Sint occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon2">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Lorem ipsum dolor sit amet</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon6">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                </ul>

                            </div>

                            <div>
                                <ul class="icon-list2">
                                    <li class="col-md-6 col-sm-6 col-xs-6 icon1">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Excepteur sint occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>


                                    <li class="col-md-6 col-sm-6 col-xs-6 icon3">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Conse ctetur adipisicing eli</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>
                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon4">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Sed do eiusmod tempor incididunt ut lab</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua.
                                            <a href="#" class="fa fa-angle-right btn-link"></a>
                                        </p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon5">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Sint occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon6">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Occaecat cupidatat non</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>

                                    <li class="col-md-6 col-sm-6 col-xs-6 icon2">
                                        <span>JavaScript</span>
                                        <h4 class="txt-sec">Lorem ipsum dolor sit amet</h4>

                                        <p>Lorem ipsum dolor sit amet conse ctetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                            magna aliqua. <a href="#" class="fa fa-angle-right btn-link"></a></p>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-wr btn-wr__mod text-center">
                    <a href="#" class="btn btn-default__mod2 btn-default__mod3 btn-default">See all scripts</a>
                </div>
            </div>
        </section>

        <section class="parallax parallax2" data-url="images/parallax2.jpg" data-mobile="true" data-speed="0.7">
            <div class="container text-center wow fadeIn" data-wow-duration="2s">
                <h2>Start different
                    <small>profitable web sites with ease</small>
                </h2>
                <h4>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore <br/> magna aliqua. Ut enim ad minim ve wow fadeInn data-wow-duration="2s" data-wow-delay="0.4" iam, quis nostrud exercitation.</h4>
                <a href="#" class="btn btn-info">Read more</a>
            </div>
        </section>

        <section class="well4 bg-alt">
            <div class="container center767">
                <h3 class="text-center"><strong>Featured </strong>Scripts</h3>

                <div class="row offs">
                    <div class="block-icon box box__mod col-md-6  col-sm-6 col-xs-12">
                        <div class="box_aside icon icon1 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
                            <i class="fa   fa-shekel"></i> <br/>
                            <span>Lorem ipsum <br/> dolor sit </span>
                        </div>
                        <div class="block_caption box_cnt__no-flow">
                            <span class="fw-n">JavaScript</span>
                            <h4 class="txt-sec">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do
                                eiusmod.</h4>

                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore.</p>
                            <a href="#" class=" fz17 btn btn-default btn-default__mod btn-sm">Buy Now!</a>
                        </div>
                    </div>

                    <div class="block-icon box box__mod col-md-6 col-sm-6 col-xs-12">
                        <div class="icon box_aside icon2 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                            <i class="fa fa-compass"></i>
                            <span>Excepteur <br/> sint </span>
                        </div>
                        <div class="block_caption box_cnt__no-flow">
                            <span class="fw-n">JavaScript</span>
                            <h4 class="txt-sec">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do
                                eiusmod.</h4>

                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore.</p>
                            <a href="#" class=" fz17 btn btn-default btn-default__mod btn-sm">Buy Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="parallax parallax2" data-url="images/parallax3.jpg" data-mobile="true" data-speed="0.7" data-direction="inverse">
            <div class="container text-center wow fadeIn" data-wow-duration="2s">
                <h2>High quality PHP scripts
                    <small>/ PHP Software</small>
                </h2>
                <h4>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore <br/> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</h4>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
        </section>

        <section class="well5 bg-alt">
            <div class="container">
                <h3 class="text-center">Our<strong> Events</strong></h3>
                <ul class="index-list row offs">
                    <li class="col-md-4 col-sm-4 col-xs-4">
                        <h4 class="fw-n txt-sec"><a href="#">Lorem ipsum dolor sit amet conse ctetur adipisicing
                                elit</a></h4>

                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea.</p>

                    </li>

                    <li class="col-md-4 col-sm-4 col-xs-4">
                        <h4 class="fw-n txt-sec"><a href="#">Lorem ipsum dolor sit amet conse ctetur adipisicing
                                elit</a></h4>

                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea.</p>

                    </li>

                    <li class="col-md-4 col-sm-4 col-xs-4">
                        <h4 class="fw-n txt-sec"><a href="#">Lorem ipsum dolor sit amet conse ctetur adipisicing
                                elit</a></h4>

                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea.</p>

                    </li>
                </ul>
            </div>
        </section>

    </main>


    <!--========================================================
                            FOOTER
    =========================================================-->
    <footer class="bg-secondary">
        <div class="container">
            <h2 class="navbar-brand">
                <a href="./">scripts</a>
                <span class="brand-slogan">Online Scripts Directory </span>
            </h2>
        </div>
        <hr/>

        <section class="well6">
            <div class="container center767">
                <div class="row">
                    <div class="col-md-2 col-sm-6 col-xs-6 wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
                        <h4 class="txt-clr1">About</h4>
                        <ul>
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Dolor sit amet</a></li>
                            <li><a href="#">Conse ctetur adipisicing</a></li>
                            <li><a href="#">Elit sed do eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Incididunt ut labore</a></li>
                        </ul>
                    </div>

                    <div class="col-md-2 col-sm-6 col-xs-6  wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                        <h4 class="txt-clr1">Need Help?</h4>

                        <ul>
                            <li><a href="#">Ctetur adipisicing</a></li>
                            <li><a href="#">Elit sed do eiusmod</a></li>
                            <li><a href="#">Incididunt ut labore</a></li>
                            <li><a href="#">Et dolore magna aliqua</a></li>
                            <li><a href="#">Ut enim ad mini</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4  col-sm-6 col-xs-6 wow fadeIn  clearboth" data-wow-duration="2s" data-wow-delay="0.6s">
                        <h4 class="txt-clr1">Email Newsletters</h4>

                        <form id="subscribe-form" class="subscribe-form">
                            <label class="email">
                                <input type="email" value="Enter your E-mail">
                                <span class="error">*Invalid email.</span>
                                <span class="success">Subscription request sent!</span>
                            </label>
                            <button class="subscribe-form_submit fa-angle-right" type="submit"></button>
                        </form>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-6 fb-plug-wr">
                        <div class="fb-page" data-href="https://www.facebook.com/TemplateMonster?fref=ts"
                             data-width="370" data-height="244" data-hide-cover="false" data-show-facepile="true"
                             data-show-posts="false">
                            <div class="fb-xfbml-parse-ignore">
<!--                                <blockquote -->
<!--                                    cite="https://www.facebook.com/TemplateMonster?fref=ts"><a-->
<!--                                        -->
<!--                                        href="https://www.facebook.com/TemplateMonster?fref=ts">TemplateMonster</a>-->
<!--                                </blockquote>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr/>

        <div class="container">
            <p class="copyright">
                Scripts  &#169; <span id="copyright-year"></span>.
                <a href="index-5.html">Privacy Policy</a>
                <!-- {%FOOTER_LINK} -->
            </p>
        </div>


    </footer>
</div>

<?php include"templates/js.php"?>


</body>
</html>