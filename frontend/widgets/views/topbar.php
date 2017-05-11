<?php

use frontend\widgets\TopBar;
use yii\helpers\Html;

?>

<div class="dt-top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-7">
                <div class="dt-bar-left">
                    <!-- .dt-sec-nav -->
                    <div class="dt-date">
                        
                        <p><?= date('l, d F Y', time()) ?></p>
                    </div>
                    <!-- .dt-date -->

                </div>
                <!-- .dt-bar-left -->
            </div>
            <!-- .col-lg-6 .col-md-6 .col-sm-8 .col-xs-7 -->

            <div class="col-lg-6 col-md-6 col-sm-4 col-xs-5">
                <div class="dt-top-social">
                    <span class="dt-search-icon"><a><i class="fa fa-search transition35"></i></a></span>
                    <span class="dt-social-trigger transition35"><i class="fa fa-share-alt transition35"></i> </span>
                    <span class="dt-social-icons-lg">
						<div class="dt-social-icons">
							<h2 class="widget-title">Follow Us</h2>
							<ul>
                                <?php foreach ($listSocialNetwork as $key => $socialNetwork): ?>
                                <li>
                                    <a href="<?= $socialNetwork->link; ?>" target="_blank">
                                        <i class="fa <?= $socialNetwork->class; ?> transition35"></i>
                                    </a> 
                                </li>
                                    <?php endforeach ?>
                                <div class="clearfix"></div>
							</ul>
						</div>
					</span>
                </div>
                <!-- .dt-top-social -->
            </div>
            <!-- .col-lg-6 .col-md-6 .col-sm-4 .col-xs-5 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</div>
<!-- .dt-top-bar -->
<div class="dt-search-bar transition35">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="dt-search-wrap">
                    <aside id="search-2" class="widget widget_search">
                        <form role="search" method="get" class="search-form" action="">
                            <label>
								<span class="screen-reader-text">Search for:</span>
								<input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
							</label>
                            <input type="submit" class="search-submit" value="Search" />
                        </form>
                    </aside>
                </div>
                <!-- .dt-search-wrap -->
            </div>
            <!-- .col-lg-12 .col-md-12 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</div>
<!-- .dt-search-bar .transition35 -->

<div class="dt-top-social dt-social-sticky-bar transition35">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="dt-social-sticky-wrap">

                    <div class="dt-social-icons">
                        <h2 class="widget-title">Follow Us</h2>
                        <ul>
                            <li><a href="http://f" target="_blank"><i class="fa fa-facebook transition35"></i></a> </li>

                            <li><a href="http://f" target="_blank"><i class="fa fa-twitter transition35"></i></a> </li>

                            <li><a href="http://f" target="_blank"><i class="fa fa-google-plus transition35"></i></a> </li>

                            <li><a href="http://f" target="_blank"><i class="fa fa-instagram transition35"></i></a> </li>

                            <li><a href="http://f" target="_blank"><i class="fa fa-github transition35"></i></a> </li>

                            <li><a href="http://f" target="_blank"><i class="fa fa-flickr transition35"></i></a> </li>

                            <div class="clearfix"></div>
                        </ul>
                    </div>
                </div>
                <!-- .dt-social-sticky-wrap -->
            </div>
            <!-- .col-lg-12 .col-md-12 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</div>
<!-- .dt-top-social .dt-social-sticky-bar .transition35 -->

<header class="dt-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="dt-logo">
                    <h1><a href="/" rel="home">EasyMag</a></h1>
                    <p class="site-description">WordPress News &amp; Magazine </p>
                </div>
                <!-- .dt-logo -->
            </div>
            <!-- .col-lg-4 .col-md-4 -->
            <div class="col-lg-8 col-md-8">
                <div class="dt-top-ads">
                    <a href="https://daisythemes.com/wordpress-themes/" title="Header Advertisement" rel="dofollow" target="_blank"><img src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2015/12/wide-ads.png" alt="Header Advertisement"> </a>
                </div>
                <!-- .dt-top-ads -->
            </div>
            <!-- .col-lg-8 col-md-8 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</header>
<!-- .dt-header -->