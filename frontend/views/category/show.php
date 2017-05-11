<?php
/* @var $this yii\web\View */

$this->title = $model->name;
?>
<main id="main" class="site-main" role="main">
	<header class="page-header">
		<h1 class="page-title">Category: <?= $model->name ?></h1>
	</header>
	<!-- .page-header -->
	<div class="dt-category-posts">
	<?php foreach ($listPost as $key => $post): ?>
		
	<?php if ($key == 1): ?>
		<div class="dt-news-post-list">	
		<?php endif ?>	

	<?php if ($key == 0): ?>
		<div class="dt-news-post-highlighted">
	<?php endif ?>
		
	<div class="dt-news-post">
				<figure class="dt-news-post-img">
					<a href="/post/show?id=<?= $post->id ?>" title="<?= $post->name ?>"><img width="410" height="260" src="/upload/<?= $post->image ?>" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="<?= $post->name ?>" title="<?= $post->name ?>" /></a>
					<a href="/post/show?id=<?= $post->id ?>" title="<?= $post->name ?>" rel="bookmark"><span class="transition35"> <i class="fa fa-search transition35"></i></span></a>
				</figure>
				<!-- .dt-news-post-img -->

				<div class="dt-news-post-content">
					<div class="dt-news-post-meta">
						<span class="dt-news-post-date"><i class="fa fa-calendar"></i><?= date('M d, Y', strtotime($post->created_at)) ?></span>

						<span class="dt-news-post-comments"><i class="fa fa-user"></i> <?= $post->user->fullname ?></span>
					</div>
					<!-- .dt-news-post-meta -->

					<h3><a href="/post/show?id=<?= $post->id ?>" title="Police say they have arrested bearded woman in stabbing"><?= $post->name ?></a></h3>

					<div class="dt-news-post-desc"><?= $post->preview ?></div>
					<!-- .dt-news-post-desc -->
				</div>
				<!-- .dt-news-post-content -->

				<div class="dt-category-post-readmore">
					<a class="transition35" href="/post/show?id=<?= $post->id ?>">read more</></a>
				</div>
				<!-- .dt-category-post-readmore -->
			</div>	

		<!-- .dt-category-posts -->
	<?php if ($key == 0): ?>
		</div>
	<?php endif ?>
	<?php endforeach ?>
		</div>

		<div class="clearfix"></div>
		

		<div class="dt-pagination-nav">
			<span class='page-numbers current'>1</span>
			<a class='page-numbers' href='https://daisythemes.com/easymag/category/world/page/2/'>2</a>
			<a class="next page-numbers" href="https://daisythemes.com/easymag/category/world/page/2/">Next &raquo;</a> 

			<? 
				echo $pages;
			?>
		</div>
		<!---- .jw-pagination-nav ---->
</main>
<!-- #main -->