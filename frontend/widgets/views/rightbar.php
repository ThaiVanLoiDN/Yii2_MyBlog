<?php

use frontend\widgets\Rightbar;
use yii\helpers\Html;

?>
<div id="secondary" class="widget-area dt-sidebar" role="complementary">
	<?php require('inc/popularpost.php'); ?>
	<a href="" title="Sidebar Ads" rel="dofollow" target="_blank">
		<img style="margin-top: 20px" src="images/shoes-ads.png" alt="Sidebar Ads"> 
	</a>
	<?php require('inc/featuredpost.php'); ?>
	<?php require('inc/category.php'); ?>
</div>
<!-- #secondary -->