<footer class="c-footer-new" data-scroll-section>
  <footer class="c-footer wf-section"  data-scroll data-scroll-speed="-4">
    <div id="w-node-_1a3f9d75-fade-0261-77cf-dbcd634834f4-634834ce" data-w-id="6b0044af-cfeb-c4a5-c4cd-13a67fc3d0e3"
      style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);opacity:0"
      class="c-grid-block__p4 cta1">
      <a href="mailto:<?php echo get_theme_mod('mail_us'); ?>" class="div-block-36 h5"
        style="display: flex;align-items: center;justify-content: center;">
        <h2 class="c-hero--txt is--large text-white">Let's &nbsp;</h2>
        <div style="display: flex;align-items: center;justify-content: center;">
          <div class="div-block-39">
            <h2 class="co c-hero--txt is--large long-gradient">Co</h2>
          </div>
          <div class="div-block-41">
            <div class="lottie-animation-2 c-hero--txt is--large" data-w-id="78b1404a-ffbe-fa92-9807-8ff36c095341"
              data-animation-type="lottie" data-src="<?php bloginfo('template_directory'); ?>/assets/ping-pong.json"
              data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg"
              data-default-duration="2.602602496596432" data-duration="0">
            </div>
          </div>
          <div class="div-block-40">
            <h2 class="co c-hero--txt is--large long-gradient">aborate</h2>
          </div>
        </div>
      </a>
    </div>
    <div class="row c-grid-block__p4" id="w-node-_1a3f9d75-fade-0261-77cf-dbcd634834d1-634834ce">
      <div class="col c-footer__address">
        <h3 class="pb-1">USA</h3>
        <h5 class="heading-4"> Heigh10 Interactive <br>Union City<br>
          CA, United States</h5>
      </div>
      <div class="col">
        <h3 class="pb-1">INDIA</h3>
        <h5 class="heading-4"> Heigh10 Interactive <br>Mumbai<br>
          MH, India</h5>
      </div>
      <div class="col">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-1','menu_class'=> 'nav_menu' ) ); ?>
      </div>
      <div class="col">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2', 'menu_class'=> 'nav_menu' ) ); ?>
      </div>
      <div class="col">
        <div class="footer">
          <a href="<?php echo get_theme_mod('social_links'); ?>" target="_blank" class="h5"><b>ln</b></a><br>
          <br>

        </div>

      </div>
    </div>
  </footer>
  <div class="f-bottom">
    <div class="col">
      <p>&copy;
        <?php echo date('Y');   ?>
        <?php bloginfo('name'); ?>. All Rights Reserved.
      </p>
    </div>
    <div class="col">
      <?php wp_nav_menu( array( 'theme_location' => 'privacy-policy',  'menu_class'=> 'nav_menu privacy_menu', 'container'=> false ) ); ?>
    </div>
  </div>
</footer>
</div>
</div>
</div>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/custom.js" type="text/javascript"></script>
<script defer src="<?php bloginfo('template_directory'); ?>/assets/js/scripts.js"></script>
<?php wp_footer(); ?>
</body>

</html>