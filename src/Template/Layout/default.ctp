<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!--<?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>-->

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
        
    <!-- ==========================
        Fonts 
    =========================== -->
    <link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <!-- ==========================
        CSS 
    =========================== -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('animate.css') ?>
    <?= $this->Html->css('owl.carousel.css') ?>
    <?= $this->Html->css('owl.theme.css') ?>
    <?= $this->Html->css('owl.transitions.css') ?>
    <?= $this->Html->css('creative-brands.css') ?>
    <?= $this->Html->css('jquery.vegas.min.css') ?>
    <?= $this->Html->css('magnific-popup.css') ?>
    <?= $this->Html->css('custom.css') ?>
    
    <!-- ==========================
        JS 
    =========================== -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <header class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand visible-xs">Progaming</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="team.html">Admin team</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gaming</a>
                        <ul class="dropdown-menu">
                            <li><a href="gaming-team.html"><i class="fa fa-plus"></i>Gaming team</a></li>
                            <li><a href="matches-list.html"><i class="fa fa-plus"></i>List of matches</a></li>
                            <li><a href="match-single.html"><i class="fa fa-plus"></i>Single match</a></li>
                            <li><a href="tournament.html"><i class="fa fa-plus"></i>Tournament</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Forum</a>
                        <ul class="dropdown-menu">
                            <li><a href="forum.html"><i class="fa fa-plus"></i>Forum Page</a></li>
                            <li><a href="forum-list.html"><i class="fa fa-plus"></i>Forum threads</a></li>
                            <li><a href="forum-single.html"><i class="fa fa-plus"></i>Single forum post</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a href="signup.html"><i class="fa fa-plus"></i>Sign up</a></li>
                            <li><a href="signin.html"><i class="fa fa-plus"></i>Sign in</a></li>
                            <li><a href="servers.html"><i class="fa fa-plus"></i>Servers</a></li>
                            <li><a href="404.html"><i class="fa fa-plus"></i>Error Page</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="pull-right navbar-buttons hidden-xs">
                    <a href="signup.html" class="btn btn-primary">Register</a>
                    <a href="signin.html" class="btn btn-inverse">Login</a>
                    <a class="navbar-icon show2" id="open-search"><i class="fa fa-search"></i></a>
                    <a class="navbar-icon hidden" id="close-search"><i class="fa fa-times"></i></a>
                    <div class="hidden" id="navbar-search-form">
                        <form role="search">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" value="" name="navbar-search" id="navbar-search" class="form-control" placeholder="Search">
                                    <span class="input-group-btn"><button class="btn btn-primary" type="submit" id="navbar-search-submit"><i class="fa fa-search"></i></button></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==========================
        TITLE - START 
    =========================== -->
    <div class="container hidden-xs">
        <div class="header-title">
            <div class="pull-left">
                <h2><a href="index.html"><span class="text-primary">Video</span>Time</a></h2>
                <p>La Primera Revista de Videjuegos En Honduras</p>
            </div>
        </div>
    </div>
    <!-- ==========================
        TITLE - END 
    =========================== -->

    <div class="container">
        <div class="jumbotron">
            <div class="jumbotron-panel">
                <div class="panel panel-primary collapse-horizontal">
                    <a data-toggle="collapse" class="btn btn-primary collapsed" data-target="#toggle-collapse">Check our Servers <i class="fa fa-caret-down"></i></a>
                    <div class="jumbotron-brands">
                        <ul class="brands brands-sm brands-inline brands-circle">
                            <li><a href="https://www.facebook.com/VideoTimehn/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-twitch"></i></a></li>
                            <li><a href=""><i class="fa fa-steam"></i></a></li>
                        </ul>
                    </div>
                    <div id="toggle-collapse" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table table-bordered table-header">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>IP Address</th>
                                        <th>Map</th>
                                        <th>Players</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="/VideoTime/icons/csgo.jpg" alt=""></td>
                                        <td>[EU] CS:GO #1 | pixelized.cz</td>
                                        <td>123.221.45.12:29999</td>
                                        <td>de_dust2</td>
                                        <td>18/18</td>
                                    </tr>
                                    <tr>
                                        <td><img src="/VideoTime/icons/csgo.jpg" alt=""></td>
                                        <td>[CZ/SK] CS:GO Public | pixelized.cz</td>
                                        <td>45.184.170.200:27851</td>
                                        <td>de_inferno</td>
                                        <td>24/32</td>
                                    </tr>
                                    <tr>
                                        <td><img src="/VideoTime/icons/lol.png" alt=""></td>
                                        <td>[EU] League of Legends</td>
                                        <td>50.243.180.246:25429</td>
                                        <td>normal</td>
                                        <td>10/30</td>
                                    </tr>
                                    <tr>
                                        <td><img src="/VideoTime/icons/gta.png" alt=""></td>
                                        <td>[EU] GTA Server</td>
                                        <td>132.24.45.83:27852</td>
                                        <td>classic</td>
                                        <td>22/60</td>
                                    </tr>                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="jumbotron-slider" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                
                <!-- JUMBOTRON ITEM - START -->       
                <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 3600px; left: 0px; display: block; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 360px;"><div class="item">
                    <a href="single.html">
                        <div class="overlay-wrapper">
                            <?php echo $this->Html->image('image_001.jpg', array('class' => 'img-responsive', 'alt' => '')) ?>
                            <span class="overlay"></span>
                            <h2>Lorem Ipsum dolor<span>27 March 2014</span></h2>
                        </div>
                    </a>
                </div></div><div class="owl-item" style="width: 360px;"><div class="item">
                    <a href="single.html">
                        <div class="overlay-wrapper">
                            <?php echo $this->Html->image('image_002.jpg', array('class' => 'img-responsive', 'alt' => '')) ?>
                            <span class="overlay"></span>
                            <h2>Lorem Ipsum dolor<span>27 March 2014</span></h2>
                        </div>
                    </a>
                </div></div><div class="owl-item" style="width: 360px;"><div class="item">
                    <a href="single.html">
                        <div class="overlay-wrapper">
                            <?php echo $this->Html->image('image_003.jpg', array('class' => 'img-responsive', 'alt' => '')) ?>
                            <span class="overlay"></span>
                            <h2>Lorem Ipsum dolor<span>27 March 2014</span></h2>
                        </div>
                    </a>
                </div></div><div class="owl-item" style="width: 360px;"><div class="item">
                    <a href="single.html">
                        <div class="overlay-wrapper">
                            <?php echo $this->Html->image('image_004.jpg', array('class' => 'img-responsive', 'alt' => '')) ?>
                            <span class="overlay"></span>
                            <h2>Lorem Ipsum dolor<span>27 March 2014</span></h2>
                        </div>
                    </a>
                </div></div><div class="owl-item" style="width: 360px;"><div class="item">
                    <a href="single.html">
                        <div class="overlay-wrapper">
                            <?php echo $this->Html->image('image_005.jpg', array('class' => 'img-responsive', 'alt' => '')) ?>
                            <span class="overlay"></span>
                            <h2>Lorem Ipsum dolor<span>27 March 2014</span></h2>
                        </div>
                    </a>
                </div></div></div></div>
                <!-- JUMBOTRON ITEM - END -->     
                
                <!-- JUMBOTRON ITEM - START -->
            <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div></div></div>
        </div>
    </div>


    <!-- ==========================
        CONTENT - START 
    =========================== -->
    <div class="container">
        <section class="content-wrapper">
            <div class="row">
            
                <!-- SIDEBAR - START -->
                <div class="col-sm-4 hidden-xs">
                    
                    <!-- SIDEBAR BOX - START -->
                    <div class="box sidebar-box widget-wrapper">
                        <h3>Upcoming tournament</h3>
                        <div class="tournament">
                            <a href="tournament.html"><img src="/VideoTime/img/esl.png" class="img-responsive" alt=""></a>
                            <h4>ESL 2015</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam posuere magna a dapibus luctus.</p>
                            <div class="date">21 - 29 June 2015</div>
                            <div class="text-center"><a href="tournament.html" class="btn btn-primary">More info</a></div>
                        </div>
                    </div>
                    <!-- SIDEBAR BOX - END -->
                    
                    <!-- SIDEBAR BOX - START -->
                    <div class="box sidebar-box widget-wrapper widget-matches">
                        <h3>Upcoming matches <a href="matches-list.html" class="btn btn-primary pull-right btn-sm">All matches</a></h3>
                        
                        <a href="match-single.html">
                            <table class="table match-wrapper">
                                <tbody>
                                    <tr>
                                        <td class="game">
                                            <img src="/VideoTime/img/dota2.png" alt="">
                                            <span>Dota 2</span>
                                        </td>
                                        <td class="game-date">
                                            <span>5/10/2015 - 19:30</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="team-name"><img src="/VideoTime/icons/cze.png" alt="">Czech Republic</td>
                                        <td class="team-score">-</td>
                                    </tr>
                                    <tr>
                                        <td class="team-name"><img src="/VideoTime/icons/swe.png" alt="">Sweden</td>
                                        <td class="team-score">-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </a>
                        
                        <a href="match-single.html">
                            <table class="table match-wrapper">
                                <tbody>
                                    <tr>
                                        <td class="game">
                                            <img src="/VideoTime/icons/csgo.jpg" alt="">
                                            <span>CS GO</span>
                                        </td>
                                        <td class="game-date">
                                            <span>22/11/2015 - 22:00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="team-name"><img src="/VideoTime/icons/den.png" alt="">Fnatic</td>
                                        <td class="team-score">-</td>
                                    </tr>
                                    <tr>
                                        <td class="team-name"><img src="/VideoTime/icons/swe.png" alt="">Ninjas in Pyjamas</td>
                                        <td class="team-score">-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </a>
                    </div>
                    <!-- SIDEBAR BOX - END -->
                    
                    <!-- SIDEBAR BOX - START -->
                    <div class="box sidebar-box widget-wrapper widget-matches">
                        <h3>Latest matches <a href="matches-list.html" class="btn btn-primary pull-right btn-sm">All matches</a></h3>
                        
                        <a href="match-single.html">
                            <table class="table match-wrapper">
                                <tbody>
                                    <tr>
                                        <td class="game">
                                            <img src="/VideoTime/icons/lol.png" alt="">
                                            <span>LoL</span>
                                        </td>
                                        <td class="game-date">
                                            <span>18/02/2015 - 14:00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="team-name"><img src="/VideoTime/icons/usa.png" alt=""><b>Ninjas in Pyjamas</b></td>
                                        <td class="team-score win">9</td>
                                    </tr>
                                    <tr>
                                        <td class="team-name"><img src="/VideoTime/icons/den.png" alt="">Natus Vincere</td>
                                        <td class="team-score lose">5</td>
                                    </tr>
                                </tbody>
                            </table>
                        </a>
                        
                        <a href="match-single.html">
                            <table class="table match-wrapper">
                                <tbody>
                                    <tr>
                                        <td class="game">
                                            <img src="/VideoTime/icons/gta.png" alt="">
                                            <span>GTA</span>
                                        </td>
                                        <td class="game-date">
                                            <span>8/6/2015 - 12:00</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="team-name"><img src="/VideoTime/icons/swe.png" alt=""><b>Ninjas in Pyjamas</b></td>
                                        <td class="team-score win">9</td>
                                    </tr>
                                    <tr>
                                        <td class="team-name"><img src="/VideoTime/icons/usa.png" alt="">Natus Vincere</td>
                                        <td class="team-score lose">5</td>
                                    </tr>
                                </tbody>
                            </table>
                        </a>
                    </div>
                    <!-- SIDEBAR BOX - END -->
                    
                    <!-- SIDEBAR BOX - START -->
                    <div class="box sidebar-box widget-wrapper">
                        <h3>Categories</h3>
                        <ul class="nav nav-sidebar">
                            <li><a href="#">Tournaments<span>45</span></a></li>
                            <li><a href="#">Leagues<span>122</span></a></li>
                            <li><a href="#">Counter Strike<span>684</span></a></li>
                            <li><a href="#">Dota 2<span>1242</span></a></li>
                            <li><a href="#">World of Warcraft<span>112</span></a></li>
                            <li><a href="#">Minecraft<span>18</span></a></li>
                        </ul>
                    </div>
                    <!-- SIDEBAR BOX - END -->
                    
                    <!-- SIDEBAR BOX - START -->
                    <div class="box sidebar-box widget-wrapper">
                        <h3>Latest Tweets</h3>
                        <div id="twitter-wrapper">
                        </div>
                        <a class="twitter-timeline" href="https://twitter.com/AleMadrid1492" data-widget-id="732743643849613314">Tweets by @AleMadrid1492</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </div>
                    <!-- SIDEBAR BOX - END -->
                    
                </div>
                <!-- SIDEBAR - END -->
                
                <!-- CONTENT BODY - START -->
                <div class="col-sm-8">
                    
                    <div class="box colored tournament-partner">
                        <div class="row">
                            <div class="col-xs-4"><a href=""><img src="/VideoTime/img/partner_1.png" class="img-responsive center-block" alt=""></a></div>
                            <div class="col-xs-4"><a href=""><img src="/VideoTime/img/partner_2.png" class="img-responsive center-block" alt=""></a></div>
                            <div class="col-xs-4"><a href=""><img src="/VideoTime/img/partner_3.png" class="img-responsive center-block" alt=""></a></div>
                        </div>
                    </div>
                    
                    <div class="box">
                        <?= $this->fetch('content') ?>
                    </div>
                </div>
                <!-- CONTENT BODY - END -->
                
            </div>
        </section>
    </div>
    <!-- ==========================
        CONTENT - END 
    =========================== -->

    <!-- ==========================
        FOOTER - START 
    =========================== -->

   <div class="container">
        <div class="footer-boxes">
            <div class="row">
                        
                <!-- FOOTER BOX - START -->
                <div class="col-md-4 hidden-xs hidden-sm">
                    <div class="box">
                        <h4>About Us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam auctor dictum nibh, ac gravida orci porttitor et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac.</p>
                    </div>
                </div>
                <!-- FOOTER BOX - END -->
                
                <!-- FOOTER BOX - START -->
                <div class="col-sm-6 col-md-4">
                    <div class="box footer-tags">
                        <h4>Tags</h4>
                        <a href=""><span class="text-10">Clean</span></a>
                        <a href=""><span class="text-20">CV</span></a>
                        <a href=""><span class="text-20">Flat</span></a>
                        <a href=""><span class="text-14">Freelance</span></a>
                        <a href=""><span class="text-20">Modern</span></a>
                        <a href=""><span class="text-12">One Page</span></a>
                        <a href=""><span class="text-14">Professional</span></a>
                        <a href=""><span class="text-14">Responsive</span></a>
                        <a href=""><span class="text-16">Resume</span></a>
                        <a href=""><span class="text-20">Business</span></a>
                        <a href=""><span class="text-16">Corporate</span></a>
                        <a href=""><span class="text-18">CSS3</span></a>
                        <a href=""><span class="text-12">HTML5</span></a>
                        <a href=""><span class="text-16">Mobile First</span></a>
                        <a href=""><span class="text-20">Multipurpose</span></a>
                        <a href=""><span class="text-14">Portfolio</span></a>                   
                    </div>
                </div>
                <!-- FOOTER BOX - END -->
                
                <!-- FOOTER BOX - START -->
                <div class="col-sm-6 col-md-4 hidden-xs">
                    <div class="box footer-posts">
                        <h4>Recent Posts</h4>   
                        <ul class="list-unstyled">
                            <li><a href="#">Pellentesque habitant morbi</a> <span class="post-date">6.2.2015</span></li>
                            <li><a href="#">Tristique senectus et netus</a> <span class="post-date">31.1.2015</span></li>
                            <li><a href="#">Et malesuada fames ac</a> <span class="post-date">9.12.2014</span></li>
                            <li><a href="#">Turpis egestas nullam</a> <span class="post-date">1.12.2014</span></li>
                            <li><a href="#">Posuere magna a dapibus luctus</a> <span class="post-date">25.11.2014</span></li>
                        </ul>
                    </div>
                </div>
                <!-- FOOTER BOX - END -->
                
            </div>
        </div>
        <footer class="navbar navbar-default">
            <div class="row">
                <div class="col-md-6 hidden-xs hidden-sm">
                    <ul class="nav navbar-nav">
                        
                    </ul>
                </div>
                <div class="col-md-6">
                    <p class="copyright">© VideoTime 2016 All right reserved.</a></p>
                </div>
            </div>
        </footer>
    </div>

    <!-- ==========================
        FOOTER - END 
    =========================== -->

    <!-- ==========================
        JS 
    =========================== -->        
    <?= $this->Html->script('http://code.jquery.com/jquery-latest.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('owl.carousel.js') ?>
    <?= $this->Html->script('jquery.magnific-popup.min.js') ?>
    <?= $this->Html->script('creative-brands.js') ?>
    <?= $this->Html->script('jquery.vegas.min.js') ?>
    <?= $this->Html->script('twitterFetcher_min.js') ?>
    <?= $this->Html->script('jquery.countdown.min.js') ?>
    <?= $this->Html->script('custom.js') ?>


</body>
</html>
