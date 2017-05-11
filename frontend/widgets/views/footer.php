<?php

use frontend\widgets\Footer;
use yii\helpers\Html;

?>
<footer class="dt-footer">

            <div class="container">
                <div class="dt-footer-cont">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <aside id="text-3" class="widget widget_text">
                                <h2 class="widget-title">EasyMag</h2>
                                <div class="textwidget">EasyMag is a Professional WordPress News and Magazine theme is fully responsive for all the screen sizes. It includes theme customizer to customize and setup basic settings logo, color, and layouts. You can have 6 different news layouts, social icons to create beautiful homepage and do support different advertisement banner size. </div>
                            </aside>
                        </div>
                        <!-- .col-lg-3 .col-md-3 .col-sm-6 -->

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <aside id="recent-posts-2" class="widget widget_recent_entries">
                                <h2 class="widget-title">Recent Posts</h2>
                                <ul>
                                    <?php foreach ($listRecentPost as $key => $recentPost): ?>
                                    <li>
                                        <a href="/post/show?id=<?= $recentPost->id; ?>"><?= $recentPost->name; ?></a>
                                    </li>
                                    <?php endforeach ?>
                                </ul>
                            </aside>
                        </div>
                        <!-- .col-lg-3 .col-md-3 .col-sm-6 -->

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <aside id="categories-2" class="widget widget_categories">
                                <h2 class="widget-title">Categories</h2>
                                <ul>
                                    <?php foreach ($listCategory as $key => $category): ?>
            
                                    <li class="cat-item cat-item-<?= $category->id; ?>"><a href="/category/show?id=<?= $category->id; ?>"><?= $category->name; ?></a></li>
                                    <?php endforeach ?>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                        <!-- .col-lg-3 .col-md-3 .col-sm-6 -->

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <?php 

                                if(count($listAdvs)){
                                    $count = count($listAdvs);

                                    $random = rand(1, $count);
                            ?>
                            <a href="<?= $listAdvs[$count-1]->link; ?>" title="Footer ADS" rel="dofollow" target="_blank">
                                <img style="margin-top: 20px" src="/upload/<?= $listAdvs[$count-1]->image; ?>" alt="Footer ADS"> 
                            </a>

                            <?php                                    
                                }
                            ?>

                        </div>
                        <!-- .col-lg-3 .col-md-3 .col-sm-6 -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .dt-footer-cont -->
            </div>
            <!-- .container -->


            <div class="dt-footer-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="dt-copyright">
                                Copyright &copy; 2017 <a href="" title="Thái Văn Lợi">Thái Văn Lợi</a></div>
                            <!-- .dt-copyright -->
                        </div>
                        <!-- .col-lg-6 .col-md-6 -->

                        <div class="col-lg-6 col-md-6">
                            <div class="dt-footer-designer">
                                thaivanloidn@gmail.com
                            </div>
                            <!-- .dt-footer-designer -->
                        </div>
                        <!-- .col-lg-6 .col-md-6 -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </div>
            <!-- .dt-footer-bar -->
        </footer>
        <!-- .dt-footer -->

        <a id="back-to-top" class="transition35"><i class="fa fa-angle-up"></i></a>
        <!-- #back-to-top -->

    </div>
    <!-- .dt-body-wrap -->