<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

use frontend\widgets\Advs;
use frontend\widgets\Banner;
use frontend\widgets\Category;
use frontend\widgets\FeaturedPost;
use frontend\widgets\Footer;
use frontend\widgets\Menu;
use frontend\widgets\PopularPost;
use frontend\widgets\Rightbar;
use frontend\widgets\TopBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="post-template-default single single-post postid-242 single-format-standard">
<?php $this->beginBody() ?>
    <div class="dt-body-wrap">
    	<?= TopBar::widget([]) ;?>
        <nav class="dt-menu-bar dt-sticky">
            <?= Menu::widget([]) ;?>
        </nav>
        <!-- .dt-menu-bar -->
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9">

	        <?= $content ?>

	        </div>
			<!-- .col-lg-9 -->

			<div class="col-lg-3 col-md-3">
				<div style="margin-top: 20px">
					<div id="secondary" class="widget-area dt-sidebar" role="complementary">
						<?= PopularPost::widget([]) ;?>
						<?= Category::widget([]) ;?>
					</div>
					<!-- #secondary -->
				</div>
			</div>
			<!-- .col-lg-4 -->
		</div>
		<!-- .row -->
	</div>
	<!-- .container -->
	<?= Footer::widget([]) ;?>
   
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
