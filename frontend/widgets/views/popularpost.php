<?php

use frontend\widgets\PopularPost;
use yii\helpers\Html;

?>

<div class="dt-news-list-4">
	<div class="dt-news-layout-wrap dt-sidebar-news">


		<h2 class="widget-title">Popular posts</h2>

		<div class="dt-news-layout4">
			<?php foreach ($listRecentPost as $key => $recentPost): ?>
				<?php  
			        if($recentPost->image == ''){
			            $recentPost->image = 'no-image.jpg';
			        }
			    ?>
			<div class="dt-news-post">
				<figure class="dt-news-post-img">
					<a href="/post/show?id=<?= $recentPost->id ?>" title="<?= $recentPost->name; ?>">
						<img width="230" height="184" src="/upload/<?= $recentPost->image; ?>" class="attachment-dt-featured-post-small size-dt-featured-post-small wp-post-image" alt="<?= $recentPost->name; ?>" title="<?= $recentPost->name; ?>" />
					</a>
					<a href="/post/show?id=<?= $recentPost->id ?>" rel="bookmark">
						<span class="transition35"><i class="fa fa-search transition35"></i></span>
					</a>
				</figure>
				<!-- .dt-news-post-img -->

				<div class="dt-news-post-content">
					<h3><a href="/post/show?id=<?= $recentPost->id ?>" title="<?= $recentPost->name; ?>"><?= $recentPost->name; ?></a></h3>
				</div>
				<!-- .dt-news-post-content -->
			</div>
			<!-- .dt-news-post -->
			<?php endforeach ?>


			<div class="clearfix"></div>
		</div>
		<!-- .dt-news-layout4 -->


	</div>
	<!-- .dt-news-layout-wrap .dt-sidebar-news -->
</div>