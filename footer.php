<footer class="c-footer-new">
  <footer class="c-footer wf-section">
    <div id="w-node-_1a3f9d75-fade-0261-77cf-dbcd634834f4-634834ce" data-w-id="6b0044af-cfeb-c4a5-c4cd-13a67fc3d0e3" style="-webkit-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-moz-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);-ms-transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);transform:translate3d(0, 40PX, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 2DEG);opacity:0" class="c-grid-block__p4 cta1">        
      <a href="mailto:<?php echo get_theme_mod('mail_us'); ?>" class="div-block-36 h5" style="display: flex;align-items: center;justify-content: center;">
        <h2 class="c-hero--txt is--large text-white">Let's &nbsp;</h2>
        <div style="display: flex;align-items: center;justify-content: center;">
          <div class="div-block-39">
              <h2 class="co c-hero--txt is--large long-gradient">Co</h2>
          </div>
          <div class="div-block-41">
              <div class="lottie-animation-2 c-hero--txt is--large" data-w-id="78b1404a-ffbe-fa92-9807-8ff36c095341"
                  data-animation-type="lottie"
                  data-src="<?php bloginfo('template_directory'); ?>/assets/ping-pong.json"
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
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-1', 'menu_class'=> 'nav_menu' ) ); ?>
    </div>
    <div class="col">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2','menu_class'=> 'nav_menu' ) ); ?>        
    </div>
    <div class="col">
        <div class="footer">           
        <a href="<?php echo get_theme_mod('social_links_ln'); ?>"
            target="_blank" class="h5"><b>In</b></a>&nbsp;&nbsp;
            <a href="<?php echo get_theme_mod('social_links_fb'); ?>"
            target="_blank" class="h5"><b>Fb</b></a>&nbsp;&nbsp;
             <a href="<?php echo get_theme_mod('social_links_ig'); ?>"
            target="_blank" class="h5"><b>Ig</b></a><br>
             <br>                      
        </div>
        
    </div>
  </div>
  </footer>
  <div class="f-bottom">
<div class="col"><p>&copy; <?php echo date('Y');   ?> 
  <?php bloginfo('name'); ?>. All Rights Reserved. 
</p> </div>
<div class="col">
  <?php wp_nav_menu( array( 'theme_location' => 'privacy-policy',  'menu_class'=> 'nav_menu privacy_menu', 'container'=> false ) ); ?>        
</div>
  </div>
</footer>
</main>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/custom.js" type="text/javascript"></script>
<!-- swiper JS -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/swiper-bundle.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/parallelx.js"></script>

<script>
  

  // Load first dropdown as open
  //$('#first-dropdown').find('.dropdown-toggle.w-dropdown-toggle').click()
  //$('#first-dropdown').find('.dropdown-list.w-dropdown-list').click()
  $('#first-dropdown').click()

  // Hero vertical marquee
  //  --set variables
  let items = $(".marquee_item");
  let textItem = $(".marquee_text-item");
  let wrap = $(".marquee_wrap");
  let totalItems = items.length / 2 + 1;
  let duration = totalItems * 1.2;

  // --switch which item is active
  function makeItemActive(myIndex) {
  items.removeClass("active");
  $(".marquee_list").each(function (index) {
    $(this).find(".marquee_item").eq(myIndex).addClass("active");
  });
  textItem.removeClass("active");
  textItem.eq(myIndex).addClass("active");
  }
  makeItemActive(3);

  // --check if item is in center of wrapper
  function checkPosition() {
  let wrapCenter = wrap.offset().top + wrap.height() / 2;
  items.each(function (index) {
    let itemHeight = $(this).height() / 2;
    let offsetTop = $(this).offset().top + itemHeight;
    if (offsetTop < wrapCenter + itemHeight / 2 && offsetTop > wrapCenter) {
      let myIndex = $(this).index();
      makeItemActive(myIndex);
    }
  });
  }

  //--create vertical loop
  let marquee = gsap.timeline({ repeat: -1 }).fromTo(
  ".marquee_track",
  { yPercent: 0 },
  {
    yPercent: -50,
    duration: duration,
    ease: "none",
    onUpdate: () => {
      checkPosition();
    }
  }
  );



  // Counting Jobs
  let JobsAvailable = $('.jobs-collection_item').length;
  $('#jobs-count-1').text(JobsAvailable);
  $('#jobs-count-2').text(JobsAvailable);



  // TEXT ANIMATIONS ADDING ATTRIBUTES
  $('.faded-text').each(function () {
        $(this).attr('data-split', '200');
        $(this).attr('data-split-type', 'lines');
  });
  $('.stats-numbers').each(function () {
        $(this).attr('data-split', '200');
        $(this).attr('data-split-type', 'chars');
  });

  // Scrolled into view handler
  function isScrolledIntoView(elem) {
  var docViewTop = $(window).scrollTop();
  var docViewBottom = docViewTop + $(window).height();

  var elemTop = $(elem).offset().top;
  var elemBottom = elemTop + $(elem).height();

  return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
  }

  $(window).scroll(function () {
    $('.line,.char').each(function () {
      if (isScrolledIntoView(this) === true) {
        $(this).addClass('animate-text');
      }
    });

  }); 
</script>

<!-- swiper JS Initialize -->
<script>

  const baseSettings = {
    spaceBetween: 16,
    freeMode: true,
    loop: false,
    centeredSlides: false,
    lazy: true,
    grabCursor: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
    },
    keyboard: {
      enabled: true,
    },
  };

  const mySwiper = new Swiper(".blog", {
    ...baseSettings,
    scrollbar: {
      el: document.querySelectorAll(".swiper-scrollbar")[0],
      draggable: true,
      hide: false,
    },
    breakpoints: {
      0: {
        /* when window >=0px - webflow mobile landscape/portrait */
        slidesPerView: 1,
        spaceBetween: 24,
      },
      767: {
        /* when window >= 767px - webflow tablet */ slidesPerView: 2,
        spaceBetween: 36,
      },
      988: {
        /* when window >= 988px - webflow desktop */ slidesPerView: 2,
        spaceBetween: 56,
      },
    },
  });
  const mySwiper1 = new Swiper(".homeportfolio", {
    ...baseSettings,
    scrollbar: {
      el: document.querySelectorAll(".swiper-scrollbar-1")[0],
      draggable: true,
      hide: false,
    },
    breakpoints: {
      0: {
        /* when window >=0px - webflow mobile landscape/portrait */
        slidesPerView: 1,
        spaceBetween: 0,
      },
      767: {
        /* when window >= 767px - webflow tablet */ slidesPerView: 2.25,
        spaceBetween: 0,
      },
      988: {
        /* when window >= 988px - webflow desktop */ slidesPerView: 3.25,
        spaceBetween: 0,
      },
    },
  });
</script>
<script defer src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<?php wp_footer(); ?>
</body>

</html>