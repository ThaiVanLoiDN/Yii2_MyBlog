<?php

use frontend\widgets\Menu;
use yii\helpers\Html;

?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="dt-main-menu">
                <div class="menu-main-menu-container">
                    <ul id="primary-menu" class="menu">
                        <?php foreach ($listCategory as $key => $category): ?>

                        <li id="menu-item-<?= $category->id; ?>" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-<?= $category->name; ?>">
                            <a href="/category/show?id=<?= $category->id; ?>"><?= $category->name; ?></a>
                        </li>

                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
            <!-- .dt-main-menu -->

            <div class="dt-main-menu-md">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="dt-logo-md">
                            <a href="/" rel="home">MyBlog</a>
                        </div>
                        <!-- .dt-logo-md -->
                    </div>
                    <!-- .col-lg-8 .col-md-8 .col-sm-8 .col-xs-8 -->

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="dt-nav-md-trigger">
                            <i class="fa fa-bars transition35"></i>
                        </div>
                        <!-- .transition35 -->
                    </div>
                    <!-- .col-lg-4 .col-md-4 .col-sm-4. col-xs-4 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .dt-main-menu-md -->
        </div>
        <!-- .col-lg-12 .col-md-12 -->
    </div>
    <!-- .row -->
</div>
<!-- .container -->

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="dt-nav-md transition35">
                <div class="menu-main-menu-container">
                    <ul id="primary-menu" class="menu">
                        <?php foreach ($listCategory as $key => $category): ?>

                        <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-<?= $category->id; ?>">
                            <a href="/category/show?id=<?= $category->id; ?>"><?= $category->name; ?></a>
                        </li>

                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
            <!-- .dt-nav-md .transition35 -->
        </div>
        <!-- .col-lg-12 -->
    </div>
    <!-- .row -->
</div>
<!-- .container -->