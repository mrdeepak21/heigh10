<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Heigh10
 */

?>

<div data-bg="<?php echo get_theme_mod('footer_image'); ?>" id="footer"
	class="container-fluid rocket-lazyload" style="">
	<div class="row pl-xl-5 pr-xl-0 px-md-5">
		<div class="col-md-6 ml-auto pl-md-5 my-md-5 my-4 mb-md-7">
			<h2 class="header mb-5">Become The Go-To Resource In <br> Your Niche, A Market Leader<br> And A Better-Known
				Brand Today!</h2>

			<a href="<?php echo site_url(); ?>/contact-us/" class="fullbutton fullbutton-mat fullbtn">
				<div class="fullpsuedo-text">Let's Get Started</div>
			</a>
		</div>
		<div class="col-md-6 ml-auto pl-md-5 my-md-5 my-4 mb-md-7">
			<h2 class="talk-expert pl-md-5">Talk To An Expert<br><span class="theme-color"><?php echo get_theme_mod('call_us'); ?></span></h2>
		</div>
		<div class="col-xl-2 col-lg-6 col-md-6 col-6">
			<p class="footer-label">About Us</p>
			<?php wp_nav_menu([
						'container'     => false,
						'theme_location'=>'footer-menu-1',
						'menu_class'=> false,
						'fallback_cb'   => false,
    					'add_li_class'  => 'sub-title',
						'items_wrap' => '%3$s',						
					]); ?>
			<div class="footer-social-links mt-3">
				<?php dynamic_sidebar('footer-social'); ?>			
			</div>
		</div>

		<div class="col-xl-5 col-lg-6 col-md-5 col-6">
			<div class="pl-xl-2">
				<p class="footer-label">What we offer</p>
				<?php wp_nav_menu([
						'container'     => false,
						'theme_location'=>'footer-menu-2',
						'menu_class'=> false,
						'fallback_cb'   => false,
    					'add_li_class'  => 'sub-title',
						'items_wrap' => '%3$s',						
					]); ?>
			</div>

		</div>

		<!--div class="col-xl-2 col-lg-6 col-md-3 col-6">
							<p class="footer-label">Resources</p></a>
				<p class="sub-title"><a href="https://heigh10.com/blogs/">Blog</a></p><p class="sub-title"><a href="">White Papers</a></p>			</div-->

		<!-- <div class="col-xl-4 col-lg-6 col-md-8 mx-auto">
				<p class="footer-label text-center text-lg-left mt-5 mt-xl-0 mb-2 mb-xl-2 font-white txt-shadow">Subscribe to newsletter</p>
				<form action="#" class="subscribe-form mb-md-0 mb-4">
					<div class="input-group">
						<input type="email" class="form-control px-4" id="subscribe-email" placeholder="Email Address">
						<div class="input-group-append">
							<button class="btn subscribe-btn pr-4" type="button"><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" data-lazy-src="images/arrow-pointing-to-right.webp"/><noscript><img src="images/arrow-pointing-to-right.webp"/></noscript>  </button>
						</div>
					</div>
				</form>
			</div> -->
		<div class="col-xl-4 col-lg-6 col-md-8 mx-auto">
			<p class="footer-label text-center text-lg-left mt-5 mt-xl-0 mb-2 mb-xl-2 font-white txt-shadow">Subscribe
				to newsletter</p>
			<!-- Mailchimp for WordPress v4.8.1 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
			<form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-62670">
				<div class="mc4wp-form-fields">
					<div class="input-group">
						<input type="email" class="form-control px-4" id="" name="EMAIL" placeholder="Email Address"
							required />
						<div class="input-group-append">
							<button class="btn subscribe-btn pr-4" type="submit" value="Sign up"><img
									src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
									data-lazy-src="<?php bloginfo('template_directory'); ?>/assets/images/arrow-pointing-to-right.png" /><noscript><img
										src="<?php bloginfo('template_directory'); ?>/assets/images/arrow-pointing-to-right.png" /></noscript></button>
						</div>
					</div>
				</div>
				<div class="mc4wp-response"></div>
			</form>
		</div>
	</div>

	<div class="row pl-xl-5 mt-5 d-flex align-items-end footer-bg">
		<div class="col-xl-2 col-md-6 order-3 order-xl-1 my-3 my-xl-0">
			<a href="<?php echo site_url(); ?>">
				<div class="text-center text-md-left"><img
						src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
						data-lazy-src="<?php echo get_theme_mod( 'footer_logo' ); ?>"><noscript><img
							src="<?php echo get_theme_mod( 'footer_logo' ); ?>"></noscript></div>
			</a>
			<div class="footer-pp"><a href="<?php echo site_url(); ?>/privacy-policy">Privacy Policy</a></div>
			<p class="copyright-text mt-3 mt-xl-0 mb-0">HEIGH10 LLC. ©
				<?php echo date('Y'); ?>  | All rights reserved
			</p>
		</div>

		<div class="col-xl-6 col-md-12 mt-md-3 mt-lg-3 pb-2  order-4 order-xl-3 footer-award">
			<div class="pl-xl-2 text-center">
				<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
					class="mx-2 footer-social"
					data-lazy-src="<?php bloginfo('template_directory'); ?>/uploads/2020/05/Pledge1_ProudMember_Large.jpg"><noscript><img
						src="<?php bloginfo('template_directory'); ?>/uploads/2020/05/Pledge1_ProudMember_Large.jpg"
						class="mx-2 footer-social"></noscript><img
					src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
					class="mx-2 footer-social"
					data-lazy-src="<?php bloginfo('template_directory'); ?>/uploads/2020/05/bbb.png"><noscript><img
						src="<?php bloginfo('template_directory'); ?>/uploads/2020/05/bbb.png"
						class="mx-2 footer-social"></noscript><img
					src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
					class="mx-2 footer-social"
					data-lazy-src="<?php bloginfo('template_directory'); ?>/uploads/2020/05/goodfirm.png"><noscript><img
						src="<?php bloginfo('template_directory'); ?>/uploads/2020/05/goodfirm.png"
						class="mx-2 footer-social"></noscript><img
					src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
					class="mx-2 footer-social"
					data-lazy-src="<?php bloginfo('template_directory'); ?>/uploads/2020/05/clutch.png"><noscript><img
						src="<?php bloginfo('template_directory'); ?>/uploads/2020/05/clutch.png"
						class="mx-2 footer-social"></noscript>
			</div>
		</div>
		<!--div class="col-xl-2 col-md-6 order-xl-2 px-0 pb-5 h-80px d-flex align-items-center" >
					<div>
						<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E" data-lazy-src="//heigh10.com/<?php bloginfo('template_directory'); ?>/images/Pledge1_ProudMember_Large.jpg" /><noscript><img src="//heigh10.com/<?php bloginfo('template_directory'); ?>/images/Pledge1_ProudMember_Large.jpg" /></noscript>
					</div>
			</div-->


		<div class="col-xl-4 col-md-6 order-2 order-xl-3 px-0"><a href="<?php echo site_url(); ?>/contact-us">
				<div data-bg="<?php bloginfo('template_directory'); ?>/uploads/2020/04/footer-contact.png"
					class="footer-contact us d-flex align-items-end rocket-lazyload" style="">
					<h5>Contact us</h5>
					<div class="link"><img
							src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
							class="mr-4"
							data-lazy-src="<?php bloginfo('template_directory'); ?>/assets/images/play-button-footer.png" /><noscript><img
								src="<?php bloginfo('template_directory'); ?>/assets/images/play-button-footer.png"
								class="mr-4" /></noscript>DO YOU HAVE A PROJECT IN MIND?</div>
				</div>
			</a></div>
	</div>
</div>

<!-- End Code -->
<script src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js'></script>
<script>window.lazyLoadOptions = { elements_selector: "img[data-lazy-src],.rocket-lazyload", data_src: "lazy-src", data_srcset: "lazy-srcset", data_sizes: "lazy-sizes", class_loading: "lazyloading", class_loaded: "lazyloaded", threshold: 300, callback_loaded: function (element) { if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") { if (element.classList.contains("lazyloaded")) { if (typeof window.jQuery != "undefined") { if (jQuery.fn.fitVids) { jQuery(element).parent().fitVids() } } } } } }; window.addEventListener('LazyLoad::Initialized', function (e) {
		var lazyLoadInstance = e.detail.instance; if (window.MutationObserver) {
			var observer = new MutationObserver(function (mutations) {
				var image_count = 0; var iframe_count = 0; var rocketlazy_count = 0; mutations.forEach(function (mutation) {
					for (var i = 0; i < mutation.addedNodes.length; i++) {
						if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') { continue }
						if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') { continue }
						images = mutation.addedNodes[i].getElementsByTagName('img'); is_image = mutation.addedNodes[i].tagName == "IMG"; iframes = mutation.addedNodes[i].getElementsByTagName('iframe'); is_iframe = mutation.addedNodes[i].tagName == "IFRAME"; rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload'); image_count += images.length; iframe_count += iframes.length; rocketlazy_count += rocket_lazy.length; if (is_image) { image_count += 1 }
						if (is_iframe) { iframe_count += 1 }
					}
				}); if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) { lazyLoadInstance.update() }
			}); var b = document.getElementsByTagName("body")[0]; var config = { childList: !0, subtree: !0 }; observer.observe(b, config)
		}
	}, !1)</script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/flynaut.js" defer></script>
<script data-no-minify="1" async src="<?php bloginfo('template_directory'); ?>/assets/js/lazyload.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/custom.js" defer></script>
<?php wp_footer( ); ?>
</body>

</html>
