<?php
/* @var $this yii\web\View */

$this->title = $model->name;
?>


<main id="main" class="site-main" role="main">
	<article id="post-242" class="post-242 post type-post status-publish format-standard has-post-thumbnail hentry category-politics">
		<header class="entry-header">
			<h1 class="entry-title"><?= $model->name ?></h1>
			<div class="entry-meta">
				<span class="posted-on">Posted on 
					<a rel="bookmark">
						<time class="entry-date published"><?= date('M d, Y', strtotime($model->created_at)) ?></time>
					</a>
				</span>
				<span class="byline"> by 
					<span class="author vcard">
						<a class="url fn n"><?= $model->user->fullname ?></a>
					</span>
				</span>
			</div>
			<!-- .entry-meta -->
		</header>
		<!-- .entry-header -->

		<div class="entry-content">
			<?= $model->content ?>
		</div>
		<!-- .entry-content -->

		<footer class="entry-footer">
			<span class="cat-links">Posted in <a href="#" rel="category tag"><?= $model->category->name ?></a></span> </footer>
		<!-- .entry-footer -->



		<div class="dt-news-layout-wrap dt-related-posts">
			<h2>Related posts</h2>

			<ul>
				<li class="dt-news-post">
					<figure class="dt-news-post-img">
						<a href="https://daisythemes.com/easymag/2015/12/27/un-security-council-adopts-resolution-syria-peace-process/" title="UN security council adopts resolution on Syria peace process"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2015/12/united-nations-419885_960_720-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="UN security council adopts resolution on Syria peace process" title="UN security council adopts resolution on Syria peace process" /></a>
						<a href="https://daisythemes.com/easymag/2015/12/27/un-security-council-adopts-resolution-syria-peace-process/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
					</figure>

					<h3><a href="https://daisythemes.com/easymag/2015/12/27/un-security-council-adopts-resolution-syria-peace-process/" rel="bookmark" title="UN security council adopts resolution on Syria peace process">UN security council adopts resolution on Syria peace process</a></h3>
				</li>
				<li class="dt-news-post">
					<figure class="dt-news-post-img">
						<a href="https://daisythemes.com/easymag/2015/12/27/obama-tells-republicans-climate-change-pretty-big-problem/" title="Obama tells Republicans climate change is &#8216;a pretty big problem&#8217;"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2015/12/obama-356133_960_720-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="Obama tells Republicans climate change is &#8216;a pretty big problem&#8217;" title="Obama tells Republicans climate change is &#8216;a pretty big problem&#8217;" /></a>
						<a href="https://daisythemes.com/easymag/2015/12/27/obama-tells-republicans-climate-change-pretty-big-problem/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
					</figure>

					<h3><a href="https://daisythemes.com/easymag/2015/12/27/obama-tells-republicans-climate-change-pretty-big-problem/" rel="bookmark" title="Obama tells Republicans climate change is &#8216;a pretty big problem&#8217;">Obama tells Republicans climate change is &#8216;a pretty big problem&#8217;</a></h3>
				</li>
				<li class="dt-news-post">
					<figure class="dt-news-post-img">
						<a href="https://daisythemes.com/easymag/2015/12/27/campaign-against-isis-is-there-any-hope-for-military-success/" title="Campaign against Isis: Is there any hope for military success?"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2015/12/soldiers-1002_960_720-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="Campaign against Isis: Is there any hope for military success?" title="Campaign against Isis: Is there any hope for military success?" /></a>
						<a href="https://daisythemes.com/easymag/2015/12/27/campaign-against-isis-is-there-any-hope-for-military-success/" rel="bookmark"><span class="transition35"><i class="fa fa-search transition35"></i></span></a>
					</figure>

					<h3><a href="https://daisythemes.com/easymag/2015/12/27/campaign-against-isis-is-there-any-hope-for-military-success/" rel="bookmark" title="Campaign against Isis: Is there any hope for military success?">Campaign against Isis: Is there any hope for military success?</a></h3>
				</li>
				<div class="clearfix"></div>
			</ul>
		</div>


	</article>
	<!-- #post-## -->


	<nav class="navigation post-navigation" role="navigation">
		<h2 class="screen-reader-text">Post navigation</h2>
		<div class="nav-links">
			<div class="nav-previous"><a href="https://daisythemes.com/easymag/2016/03/06/donald-trumps-boxing-strategy-for-winning-the-nomination/" rel="prev">Donald Trump’s Boxing Strategy for Winning the Nomination</a></div>
			<div class="nav-next"><a href="https://daisythemes.com/easymag/2016/03/06/whole-foods-pre-peeled-oranges-sparked-a-fascinating-argument/" rel="next">Whole Foods’ Pre-Peeled Oranges Sparked a Fascinating Argument</a></div>
		</div>
	</nav>

</main>
<!-- #main -->