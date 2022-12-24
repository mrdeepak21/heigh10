<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Heigh10
 */

 get_header('2'); the_post( ); ?>
<div class="row blog-detail mt-5">
		<div class="col-md-10 col-xl-6 mx-auto">
			<div class="row">
				<div class=""> 
					<div class="col-md-12"><div class="blog-detail-image"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" class="w-100" data-lazy-src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'full')[0]; ?>"><noscript><img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(),'full')[0]; ?>" class="w-100"></noscript></div></div>
					<div class="col-md-12 bg-white">
						<div class="card border-0">
							<div class="card-body p-0">
								<div class="py-3">
									<p class="line-title"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></span></p>
									<h4 class="title-card"><?php the_title( ); ?></h4>
									<div class="row mt-3 mt-md-4">
										<div class="col col-md-4">
											<p class="date"> <?php the_date(); ?> </p>
										</div>
										<!--div class="col col-md-4">
											<p class="share"><span class="essb-total " data-network-list="facebook,twitter,pinterest,linkedin" data-url="https://flynaut.com/blog/10-online-business-ideas-to-invest-in-during-post-covid-19/" data-full-number="false" data-post="62910" ><span class="essb-total-value essb-block">2</span></span> SHARE</p>
										</div-->
									</div>
								</div> 
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 my-1 my-xl-2 blog-content">
					<?php the_content( ); ?>					
				</div>
				<div class="col-md-12 share-links">
					<p class="line">Share with friends</p>
					<div class="essb_links essb_counters essb_displayed_shortcode essb_share essb_template_round-retina essb_1868727330 essb_size_m essb_button_animation_legacy2 print-no" id="essb_displayed_shortcode_1868727330" data-essb-postid="62910" data-essb-position="shortcode" data-essb-button-style="icon" data-essb-template="round-retina" data-essb-counter-pos="hidden" data-essb-url="https://flynaut.com/blog/10-online-business-ideas-to-invest-in-during-post-covid-19/" data-essb-fullurl="https://flynaut.com/blog/10-online-business-ideas-to-invest-in-during-post-covid-19/" data-essb-instance="1868727330"><ul class="essb_links_list essb_force_hide_name essb_force_hide"><li class="essb_item essb_totalcount_item" data-counter-pos="hidden"><span class="essb_totalcount essb_t_l_big essb_total_icon essb_icon_share-tiny" title="" data-shares-text="shares"><span class="essb_t_nb">2<span class="essb_t_nb_after">shares</span></span></span></li><li class="essb_item essb_link_facebook nolightbox"> <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fflynaut.com%2Fblog%2F10-online-business-ideas-to-invest-in-during-post-covid-19%2F&amp;t=10+Online+Business+Ideas+to+Invest+in+During+%26amp%3B+Post+COVID+19+-+Flynaut" title="Share on Facebook" onclick="essb.window(&#39;https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fflynaut.com%2Fblog%2F10-online-business-ideas-to-invest-in-during-post-covid-19%2F&t=10+Online+Business+Ideas+to+Invest+in+During+%26amp%3B+Post+COVID+19+-+Flynaut&#39;,&#39;facebook&#39;,&#39;1868727330&#39;); return false;" target="_blank" rel="noreferrer noopener nofollow" class="nolightbox" ><span class="essb_icon essb_icon_facebook"></span><span class="essb_network_name essb_noname"></span></a><span class="essb_counter_hidden" data-cnt="" data-cnt-short=""></span></li><li class="essb_item essb_link_twitter nolightbox"> <a href="#" title="Share on Twitter" onclick="essb.window(&#39;https://twitter.com/intent/tweet?text=10%20Online%20Business%20Ideas%20to%20Invest%20in%20During%20%26%20Post%20COVID%2019%20-%20Flynaut&amp;url=https://flynaut.com/blog/10-online-business-ideas-to-invest-in-during-post-covid-19/&amp;counturl=https%3A%2F%2Fflynaut.com%2Fblog%2F10-online-business-ideas-to-invest-in-during-post-covid-19%2F&#39;,&#39;twitter&#39;,&#39;1868727330&#39;); return false;" target="_blank" rel="noreferrer noopener nofollow" class="nolightbox" ><span class="essb_icon essb_icon_twitter"></span><span class="essb_network_name essb_noname"></span></a><span class="essb_counter_hidden" data-cnt="" data-cnt-short=""></span></li><li class="essb_item essb_link_pinterest nolightbox"> <a href="#" title="Share on Pinterest" onclick="essb.pinterest_picker(&#39;1868727330&#39;); return false;" target="_blank" rel="noreferrer noopener nofollow" class="nolightbox" ><span class="essb_icon essb_icon_pinterest"></span><span class="essb_network_name essb_noname"></span></a><span class="essb_counter_hidden" data-cnt="" data-cnt-short=""></span></li><li class="essb_item essb_link_linkedin nolightbox"> <a href="https://www.linkedin.com/shareArticle?mini=true&amp;ro=true&amp;trk=EasySocialShareButtons&amp;title=10+Online+Business+Ideas+to+Invest+in+During+%26amp%3B+Post+COVID+19+-+Flynaut&amp;url=https%3A%2F%2Fflynaut.com%2Fblog%2F10-online-business-ideas-to-invest-in-during-post-covid-19%2F" title="Share on LinkedIn" onclick="essb.window(&#39;https://www.linkedin.com/shareArticle?mini=true&amp;ro=true&amp;trk=EasySocialShareButtons&amp;title=10+Online+Business+Ideas+to+Invest+in+During+%26amp%3B+Post+COVID+19+-+Flynaut&amp;url=https%3A%2F%2Fflynaut.com%2Fblog%2F10-online-business-ideas-to-invest-in-during-post-covid-19%2F&#39;,&#39;linkedin&#39;,&#39;1868727330&#39;); return false;" target="_blank" rel="noreferrer noopener nofollow" class="nolightbox" ><span class="essb_icon essb_icon_linkedin"></span><span class="essb_network_name essb_noname"></span></a><span class="essb_counter_hidden" data-cnt="2" data-cnt-short=""></span></li></ul></div>				</div>
				<div class="col-md-12 my-4">
				<span class="badge badge-secondary">business ideas</span><span class="badge badge-secondary">digital marketing agency</span><span class="badge badge-secondary">mobile app development</span><span class="badge badge-secondary">online business</span><span class="badge badge-secondary">Strategy &amp; Consulting</span>				</div>
			</div>
		</div>
	</div>
	<!-- <div class="row">
		<div class="col-md-6 col-xl-3 p-4 subscribe d-flex align-items-end mx-auto" style="min-height: 500px;">
			<div class="py-3 py-md-5">							
				<?php comments_template( ); ?>
			</div>
		</div>
	</div> -->
</div>
<div class="containter-fluid overflow-hidden">
	<div data-bg="<?php bloginfo('template_directory'); ?>/uploads/2020/04/slider-bg2.png" class="slider-blog rocket-lazyload">
		<div class="text-slider">
			<p class="slider-text">You Might Also Like</p>
		</div>
		<div class="blog-slide slider py-4 row">
								<div class="col-md-3 slide">
						<div class="card blog-card">
							<a href="../why-mobile-app-development-is-in-high-demand/index.html" >
								<img class="card-img-top" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Card image cap" data-lazy-src="<?php bloginfo('template_directory'); ?>/uploads/2022/05/WhatsApp-Image-2022-05-16-at-3.10.26-PM.jpg"><noscript><img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/uploads/2022/05/WhatsApp-Image-2022-05-16-at-3.10.26-PM.jpg" alt="Card image cap"></noscript>
								<div class="card-body">
									
									<div>
										<span class="line-title">Mobile App Development</span>
										<span class="blog-date  float-right">May 05, 2022 </span>
									</div>
									<h4 class="title mt-3">Why Mobile App Development Is in High Demand</h4>
									<p class="desc"></p>
									<span class="read-more">Read More</a>
								</div>
							</a>
						</div>
					</div>
									<div class="col-md-3 slide">
						<div class="card blog-card">
							<a href="../what-will-mobile-app-development-cost-for-world-class-mobile-apps/index.html" >
								<img class="card-img-top" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Card image cap" data-lazy-src="<?php bloginfo('template_directory'); ?>/uploads/2022/04/What-Will-Mobile-App-Development-Cost-for-World-Class-Mobile-Apps.png"><noscript><img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/uploads/2022/04/What-Will-Mobile-App-Development-Cost-for-World-Class-Mobile-Apps.png" alt="Card image cap"></noscript>
								<div class="card-body">
									
									<div>
										<span class="line-title">Mobile App Development</span>
										<span class="blog-date  float-right">April 26, 2022 </span>
									</div>
									<h4 class="title mt-3">What Will Mobile App Development Cost for World-Cl...</h4>
									<p class="desc"></p>
									<span class="read-more">Read More</a>
								</div>
							</a>
						</div>
					</div>
									<div class="col-md-3 slide">
						<div class="card blog-card">
							<a href="../stay-ahead-of-the-curve-5-latest-trends-in-digital-marketing-2/index.html" >
								<img class="card-img-top" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Card image cap" data-lazy-src="<?php bloginfo('template_directory'); ?>/uploads/2022/04/Stay-Ahead-of-the-Curve-5-Latest-Trends-in-Digital-Marketing.png"><noscript><img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/uploads/2022/04/Stay-Ahead-of-the-Curve-5-Latest-Trends-in-Digital-Marketing.png" alt="Card image cap"></noscript>
								<div class="card-body">
									
									<div>
										<span class="line-title">Digital Marketing</span>
										<span class="blog-date  float-right">April 26, 2022 </span>
									</div>
									<h4 class="title mt-3">Stay Ahead of the Curve: 5 Latest Trends in Digita...</h4>
									<p class="desc"></p>
									<span class="read-more">Read More</a>
								</div>
							</a>
						</div>
					</div>
									<div class="col-md-3 slide">
						<div class="card blog-card">
							<a href="../top-three-business-friendly-markets-for-startups/index.html" >
								<img class="card-img-top" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Card image cap" data-lazy-src="<?php bloginfo('template_directory'); ?>/uploads/2022/04/Top-Three-Business-Friendly-Markets-for-Startups1.jpg"><noscript><img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/uploads/2022/04/Top-Three-Business-Friendly-Markets-for-Startups1.jpg" alt="Card image cap"></noscript>
								<div class="card-body">
									
									<div>
										<span class="line-title">Startups</span>
										<span class="blog-date  float-right">April 26, 2022 </span>
									</div>
									<h4 class="title mt-3">Top Three Business-Friendly Markets for Startups</h4>
									<p class="desc"></p>
									<span class="read-more">Read More</a>
								</div>
							</a>
						</div>
					</div>
									<div class="col-md-3 slide">
						<div class="card blog-card">
							<a href="../the-tiny-but-mighty-square-5-industry-insider-tips-for-a-killer-mobile-app-icon/index.html" >
								<img class="card-img-top" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" alt="Card image cap" data-lazy-src="<?php bloginfo('template_directory'); ?>/uploads/2021/12/shutterstock_1937521549.jpg"><noscript><img class="card-img-top" src="<?php bloginfo('template_directory'); ?>/uploads/2021/12/shutterstock_1937521549.jpg" alt="Card image cap"></noscript>
								<div class="card-body">
									
									<div>
										<span class="line-title">mobile app icon</span>
										<span class="blog-date  float-right">December 07, 2021 </span>
									</div>
									<h4 class="title mt-3">The Tiny But Mighty Square: 5 Industry Insider Tip...</h4>
									<p class="desc"></p>
									<span class="read-more">Read More</a>
								</div>
							</a>
						</div>
					</div>
						</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-4 col-xl-3 offset-md-1">
			<button type="button" class="btn prev ml-5 mr-3">
				<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" class="non-hover" data-lazy-src="<?php bloginfo('template_directory'); ?>/uploads/2020/04/left.png"><noscript><img src="<?php bloginfo('template_directory'); ?>/uploads/2020/04/left.png" class="non-hover"></noscript>
				<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" class="hover" data-lazy-src="<?php bloginfo('template_directory'); ?>/uploads/2020/04/left-active.png"><noscript><img src="<?php bloginfo('template_directory'); ?>/uploads/2020/04/left-active.png" class="hover"></noscript>
			</button>
			<button type="button" class="btn next">
				<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" class="non-hover" data-lazy-src="<?php bloginfo('template_directory'); ?>/uploads/2020/04/right.png"><noscript><img src="<?php bloginfo('template_directory'); ?>/uploads/2020/04/right.png" class="non-hover"></noscript>
				<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" class="hover" data-lazy-src="<?php bloginfo('template_directory'); ?>/uploads/2020/04/right-active.png"><noscript><img src="<?php bloginfo('template_directory'); ?>/uploads/2020/04/right-active.png" class="hover"></noscript>
			</button>
		</div>
	</div>
</div>

<?php get_footer( );