<?php

use frontend\widgets\Banner;
use yii\helpers\Html;

?>
<div class="container bt-news-ticker-wrap">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="bt-news-ticker">

				<div class="bt-news-ticker-tag">headlines</div>
				<ul class="dt-newsticker">
					<?php foreach ($listRecentPost as $key => $recentPost): ?>

					<li><a href="" title="<?= $recentPost->name; ?>"><?= $recentPost->name; ?></a> 
					- <?= $recentPost->preview; ?></li>

                    <?php endforeach ?>
				</ul>
				<!-- .dt-newsticker -->
			</div>
			<!-- .bt-news-ticker -->
		</div>
		<!-- .col-lg-12 /col-md-12 -->
	</div>
	<!-- .row -->
</div>
<!-- .bt-news-ticker-wrap -->

<div class="container">
	<div class="row">

		<div class="col-lg-6 col-md-6">


			<div class="dt-featured-post-slider-wrap">
				<div class="dt-featured-post-slider">
					<div class="swiper-wrapper">


						<div class="swiper-slide">
							<div class="dt-featured-posts-wrap">
								<figure class="dt-featured-post-img">
									<a href="https://daisythemes.com/easymag/2016/03/06/nasa-wants-to-build-a-quieter-supersonic-jet/" title="NASA Wants to Build a ‘Quieter’ Supersonic Jet"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/16-022-supersoniccontract-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="NASA Wants to Build a ‘Quieter’ Supersonic Jet" title="NASA Wants to Build a ‘Quieter’ Supersonic Jet" /></a>
								</figure>
								<!-- .dt-featured-post-img -->

								<h2>
									<span class="dt-featured-post-date">
								<span class="dt-featured-post-month">Mar<br/>2016</span>
									<span class="dt-featured-post-day">06</span>
									</span>

									<a href="https://daisythemes.com/easymag/2016/03/06/nasa-wants-to-build-a-quieter-supersonic-jet/" title="NASA Wants to Build a ‘Quieter’ Supersonic Jet">NASA Wants to Build a ‘Quieter’ Supersonic Jet</a>
								</h2>
							</div>
							<!-- .dt-featured-posts-wrap -->
						</div>
						<!-- .swiper-slide -->


						<div class="swiper-slide">
							<div class="dt-featured-posts-wrap">
								<figure class="dt-featured-post-img">
									<a href="" title=""><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/flibanserin-female-viagra-pill-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="‘Female Viagra’ Doesn’t Work Very Well: Study" title="‘Female Viagra’ Doesn’t Work Very Well: Study" /></a>
								</figure>
								<!-- .dt-featured-post-img -->

								<h2>
									<span class="dt-featured-post-date">
								<span class="dt-featured-post-month">Mar<br/>2016</span>
									<span class="dt-featured-post-day">06</span>
									</span>

									<a href="https://daisythemes.com/easymag/2016/03/06/female-viagra-doesnt-work-very-well-study/" title="‘Female Viagra’ Doesn’t Work Very Well: Study">‘Female Viagra’ Doesn’t Work Very Well: Study</a>
								</h2>
							</div>
							<!-- .dt-featured-posts-wrap -->
						</div>
						<!-- .swiper-slide -->


						<div class="swiper-slide">
							<div class="dt-featured-posts-wrap">
								<figure class="dt-featured-post-img">
									<a href="https://daisythemes.com/easymag/2016/03/06/rich-people-are-buying-more-super-yachts/" title="Rich People Are Buying More Super-Yachts"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/pexels-photo-large-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="Rich People Are Buying More Super-Yachts" title="Rich People Are Buying More Super-Yachts" /></a>
								</figure>
								<!-- .dt-featured-post-img -->

								<h2>
									<span class="dt-featured-post-date">
								<span class="dt-featured-post-month">Mar<br/>2016</span>
									<span class="dt-featured-post-day">06</span>
									</span>

									<a href="https://daisythemes.com/easymag/2016/03/06/rich-people-are-buying-more-super-yachts/" title="Rich People Are Buying More Super-Yachts">Rich People Are Buying More Super-Yachts</a>
								</h2>
							</div>
							<!-- .dt-featured-posts-wrap -->
						</div>
						<!-- .swiper-slide -->


					</div>
					<!-- .swiper-wrapper -->

					<!-- Add Arrows -->
					<div class="swiper-button-next transition5"><i class="fa fa-angle-right"></i></div>
					<div class="swiper-button-prev transition5"><i class="fa fa-angle-left"></i></div>
				</div>
				<!-- .dt-featured-post-slider -->
			</div>
			<!-- .dt-featured-post-slider-wrap -->


		</div>
		<!-- .col-lg-6 .col-md-6 -->



		<div class="col-lg-6 col-md-6">

			<div class="dt-highlighted-news">


				<div class="dt-highlighted-news-holder">
					<figure class="dt-highlighted-news-img">
						<a href="https://daisythemes.com/easymag/2016/03/06/white-house-may-be-vetting-appeals-judge-for-supreme-court-vacancy/" title="White House May Be Vetting Appeals Judge for Supreme Court Vacancy"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/photo-1453945619913-79ec89a82c51-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="White House May Be Vetting Appeals Judge for Supreme Court Vacancy" title="White House May Be Vetting Appeals Judge for Supreme Court Vacancy" /></a>
					</figure>
					<!-- .dt-highlighted-news-img -->

					<div class="dt-highlighted-news-desc">
						<span class="dt-highlighted-news-cat" style="background: rgba( 204,41,54,0.75 )">
				   <a href="https://daisythemes.com/easymag/category/politics/" title="Politics">Politics</a>
				</span>

						<h2 class="transition5"><a href="https://daisythemes.com/easymag/2016/03/06/white-house-may-be-vetting-appeals-judge-for-supreme-court-vacancy/" title="White House May Be Vetting Appeals Judge for Supreme Court Vacancy">White House May Be Vetting Appeals Judge for Supreme Court Vacancy</a></h2>
					</div>
					<!-- .dt-highlighted-news-desc -->
				</div>
				<!-- .dt-highlighted-news-holder -->



				<div class="dt-highlighted-news-holder">
					<figure class="dt-highlighted-news-img">
						<a href="https://daisythemes.com/easymag/2016/03/06/meghan-trainor-on-why-her-new-single-no-sounds-nothing-like-meghan-trainor/" title="Meghan Trainor on Why Her New Single ‘No’ Sounds Nothing Like Meghan Trainor"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/15411665243_903255c5ba_k-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="Meghan Trainor on Why Her New Single ‘No’ Sounds Nothing Like Meghan Trainor" title="Meghan Trainor on Why Her New Single ‘No’ Sounds Nothing Like Meghan Trainor" /></a>
					</figure>
					<!-- .dt-highlighted-news-img -->

					<div class="dt-highlighted-news-desc">
						<span class="dt-highlighted-news-cat" style="background: rgba( 204,41,54,0.75 )">
				   <a href="https://daisythemes.com/easymag/category/entertainment/" title="Entertainment">Entertainment</a>
				</span>

						<h2 class="transition5"><a href="https://daisythemes.com/easymag/2016/03/06/meghan-trainor-on-why-her-new-single-no-sounds-nothing-like-meghan-trainor/" title="Meghan Trainor on Why Her New Single ‘No’ Sounds Nothing Like Meghan Trainor">Meghan Trainor on Why Her New Single ‘No’ Sounds Nothing Like Meghan Trainor</a></h2>
					</div>
					<!-- .dt-highlighted-news-img -->
				</div>
				<!-- .dt-highlighted-news-holder -->



				<div class="dt-highlighted-news-holder">
					<figure class="dt-highlighted-news-img">
						<a href="https://daisythemes.com/easymag/2016/03/06/tom-brady-will-play-for-patriots-through-2019/" title="Tom Brady Will Play for Patriots Through 2019"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/800px-Italy_vs_Wales_Six_Nations_rugby-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="Tom Brady Will Play for Patriots Through 2019" title="Tom Brady Will Play for Patriots Through 2019" /></a>
					</figure>
					<!-- .dt-highlighted-news-img -->

					<div class="dt-highlighted-news-desc">
						<span class="dt-highlighted-news-cat" style="background: rgba( 204,41,54,0.75 )">
				   <a href="https://daisythemes.com/easymag/category/sports/" title="Sports">Sports</a>
				</span>

						<h2 class="transition5"><a href="https://daisythemes.com/easymag/2016/03/06/tom-brady-will-play-for-patriots-through-2019/" title="Tom Brady Will Play for Patriots Through 2019">Tom Brady Will Play for Patriots Through 2019</a></h2>
					</div>
					<!-- .dt-highlighted-news-desc -->
				</div>
				<!-- .dt-highlighted-news-holder -->



				<div class="dt-highlighted-news-holder">
					<figure class="dt-highlighted-news-img">
						<a href="https://daisythemes.com/easymag/2016/03/06/spacex-scrubs-mission-ses-9-for-third-time-in-a-week/" title="SpaceX Scrubs Mission SES-9 for Third Time in a Week"><img width="410" height="260" src="https://daisythemes.com/easymag/wp-content/uploads/sites/4/2016/03/24589505473_74c0268b7e_o-410x260.jpg" class="attachment-dt-featured-post-medium size-dt-featured-post-medium wp-post-image" alt="SpaceX Scrubs Mission SES-9 for Third Time in a Week" title="SpaceX Scrubs Mission SES-9 for Third Time in a Week" /></a>
					</figure>
					<!-- .dt-highlighted-news-img -->

					<div class="dt-highlighted-news-desc">
						<span class="dt-highlighted-news-cat" style="background: rgba( 204,41,54,0.75 )">
				   <a href="https://daisythemes.com/easymag/category/science/" title="Science">Science</a>
				</span>

						<h2 class="transition5"><a href="https://daisythemes.com/easymag/2016/03/06/spacex-scrubs-mission-ses-9-for-third-time-in-a-week/" title="SpaceX Scrubs Mission SES-9 for Third Time in a Week">SpaceX Scrubs Mission SES-9 for Third Time in a Week</a></h2>
					</div>
					<!-- .dt-highlighted-news-desc -->
				</div>
				<!-- .dt-highlighted-news-holder -->



				<div class="clearfix"></div>

			</div>

		</div>
		<!-- .col-lg-6. col-md-6 -->


	</div>
	<!-- .row -->
</div>
<!-- .container -->