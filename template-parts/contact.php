<?php 
/*
Template Name: Contact Us
*/
get_header('5');
?>
<div data-w-id="aca8126f-0046-3aac-26f1-36121ae34dd5" class="c-transition-blk--in"></div>
<div class="c-page-blk--out"></div>
<div class="c-transition-blk-out--menu"></div>
<main class="wrapper">
	<div class="contact-hero">
		<div class="bottom-shadow">
			<p>/ Inquiries</p>
		<h1>
			Let's get the<br>
		ball rolling.
		</h1>
		</div>
		</div>
	<footer data-w-id="1b175ab3-d1ad-baea-6bb5-59e25653e69b" class="c-contact-hero wf-section">
		<div class="w-layout-grid c-contact-grid">
			<div id="w-node-_1b175ab3-d1ad-baea-6bb5-59e25653e69d-81140177" class="c-grid-block__p4 cc--contact">
				<div class="c-hero--statement Contact">
					<h1 class="c-hero--txt">Contact</h1>
					<h1 class="c-hero--txt is--large long-gradient">Get in
						touch</h1>
				</div>
			</div>
			<div id="w-node-ccae5761-7003-af69-5fc2-94466dd74194-81140177" class="c-contact--image">
				<?php the_content(); ?>
			</div>
			
		</div>
		<!-- <a href="<?php echo site_url(); ?>/careers" class="c-grid__link-block cc--contact w-inline-block">
			<div class="c-link-block__left-col">
				<div class="c-link-block__vovi-block">
					<img src="<?php echo esc_url( wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' ) ); ?>"
						loading="lazy" width="71" alt="" class="c-team___careers-logo">
					<h4>Jobs</h4>
				</div>
				<h4>View our open positions</h4>
			</div><img
				src="<?php bloginfo('template_directory'); ?>/assets/images/right-arrow.svg"
				loading="lazy" alt="right arrow inside a circle" class="c-button--arrow cc--dark">
		</a> -->
		<a data-w-id="65d4a801-7e19-2555-6edb-08eab5b4201b" href="mailto:hello@heigh10.com?subject=Hi%20Heigh10!"
			class="c-full-width-title-block cc--contact w-inline-block">
			<div class="c-link__title-wrapper">
        <div data-split="100" data-split-type="chars" class=
        "c-title-block__text" style="text-align:center">
          hello@heigh10.com
        </div>
        <div style=
        "-webkit-transform:translate3d(-50%, null, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-50%, null, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-50%, null, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-50%, null, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
        class="c-title-block__text cc--absolute is--centred">
          send it
        </div>
      </div>
		</a>
	</footer>
</main>
<?php
  get_sidebar();
get_footer();