<!doctype html>
<html  <?php language_attributes(); ?>>

<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php bloginfo('name'); ?> |
    <?php bloginfo('description'); ?>
  </title>
  <link href="<?php bloginfo('template_directory'); ?>/assets/css/app.css" rel="stylesheet" type="text/css">
  <script defer src="<?php bloginfo('template_directory'); ?>/assets/js/scripts.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
  <?php wp_body_open(); ?>
        <div class="cursor" data-cursor>
            <div class="inner">
                <div class="circle">
                    <span class="cursor_text"></span></div>
            </div>
        </div>

        

<header>

  <div class="header-wrap">

    <a href="<?php echo site_url(); ?>" class="logo" id="main-logo" title="Fleava — Digital Agency">
        <img src="<?php echo esc_url( wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' ) ); ?>" title="Fleava — Digital Agency" alt="Fleava - Indonesia &amp; Singapore Digital Agency" height="20px" />
        <span>Digital</span>
    </a>
  </div>

  <div class="nav-menu" id="nav">
    
    <span class="line"></span>
    <span class="line"></span>
    <span class="text">Menu</span>
  </div>

</header>
        <div class="menu-cover" id="menu-cover"></div>

<div class="menu__bg">
	<svg viewBox="0 0 100 100"  preserveAspectRatio="xMidYMid slice">
		<defs>
			<radialGradient id="Gradient1" cx="50%" cy="50%" fx="10%" fy="50%" r=".5">
				<animate attributeName="fx" dur="64s" values="0%;3%;0%" repeatCount="indefinite"/>
				<stop offset="0%" stop-color="#777"/>
				<stop offset="100%" stop-color="#0000"/>
			</radialGradient>
			<radialGradient id="Gradient2" cx="50%" cy="50%" fx="10%" fy="50%" r=".5">
				<animate attributeName="fx" dur="47s" values="0%;3%;0%" repeatCount="indefinite"/>
				<stop offset="0%" stop-color="#000"/>
				<stop offset="100%" stop-color="#8880"/>
			</radialGradient>
			<radialGradient id="Gradient3" cx="50%" cy="50%" fx="50%" fy="50%" r=".5">
				<animate attributeName="fx" dur="43s" values="0%;3%;0%" repeatCount="indefinite"/>
				<stop offset="0%" stop-color="#000"/>
				<stop offset="100%" stop-color="#0000"/>
			</radialGradient>
		</defs>
		<rect x="0" y="0" width="100%" height="100%" fill="url(#Gradient1)">
			<animate attributeName="x" dur="40s" values="25%;0%;25%" repeatCount="indefinite"/>
			<animate attributeName="y" dur="42s" values="0%;25%;0%" repeatCount="indefinite"/>
			<animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="34s" repeatCount="indefinite"/>
		</rect>
		<rect x="0" y="0" width="100%" height="100%" fill="url(#Gradient2)">
			<animate attributeName="x" dur="46s" values="-25%;0%;-25%" repeatCount="indefinite"/>
			<animate attributeName="y" dur="48s" values="0%;50%;0%" repeatCount="indefinite"/>
			<animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="36s" repeatCount="indefinite"/>
		</rect>
		<rect x="0" y="0" width="100%" height="100%" fill="url(#Gradient3)">
			<animate attributeName="x" dur="50s" values="0%;25%;0%" repeatCount="indefinite"/>
			<animate attributeName="y" dur="52s" values="0%;25%;0%" repeatCount="indefinite"/>
			<animateTransform attributeName="transform" type="rotate" from="360 50 50" to="0 50 50" dur="38s" repeatCount="indefinite"/>
		</rect>
	</svg>

</div>

<nav id="menuNav" class="menu">

	<div class="menu_content menu__hover">
		<ol>
			<li class="menu__item" data-img="<?php bloginfo('template_directory'); ?>/assets/img/general/menu_home.jpg">
				<a href="index.html" class="inner_link">
					<span class="menu__item-text"><span class="menu__item-textinner">Home <sup></sup></span></span>
				</a>
			</li>

			<li class="menu__item" data-img="<?php bloginfo('template_directory'); ?>/assets/img/general/menu_works.jpg">
				<a href="works.html" class="inner_link">
					<span class="menu__item-text"><span class="menu__item-textinner">Works <sup>12</sup></span></span>
				</a>
			</li>

			<li class="menu__item" data-img="<?php bloginfo('template_directory'); ?>/assets/img/general/menu_journal.jpg">
				<a href="journal.html" class="inner_link">
					<span class="menu__item-text"><span class="menu__item-textinner">Journal <sup>33</sup></span></span>
				</a>
			</li>

			

			<li class="menu__item" data-img="<?php bloginfo('template_directory'); ?>/assets/img/general/menu_expertise.jpg">
				<a href="expertise.html" class="inner_link">
					<span class="menu__item-text"><span class="menu__item-textinner">Expertise <sup>06</sup></span></span>
				</a>
			</li>

			

			<li class="menu__item" data-img="<?php bloginfo('template_directory'); ?>/assets/img/general/menu_about.jpg">
				<a href="about.html" class="inner_link">
					<span class="menu__item-text"><span class="menu__item-textinner">About <sup></sup></span></span>
				</a>
			</li>

			

			<!-- ======= MOBILE ======= -->

			<li class="mobile_link first">
				<a href="awards.html" title="Careers" class="inner_link">Awards <sup>52</sup>
				</a>
			</li>
			<li class="mobile_link">
				<a href="brands.html" title="Brands" class="inner_link">Brands <sup>124</sup>
				</a>
			</li>
			<li class="mobile_link">
				<a href="careers.html" title="Careers" class="inner_link">Careers <sup>04</sup>
				</a>
			</li>

			<li class="mobile_link">
				<a href="inquiry.html" title="Inquire" class="inner_link">Inquiries</a>
			</li>
			<li class="mobile_link">
				<a href="mailto:hello@fleava.com" title="Contact Us" class="">Contact Us</a>
			</li>

		</ol>




		<div class="address">
			<div class="address__col">
				<a href="sg.html" title="Fleava — Singapore Digital Agency" class="inner_link">Singapore</a>
				<p><small>160 Robinson Road, #14-04 Singapore Business Federation Centre - 068914, Singapore</small></p>
			</div>
			<div class="address__col">
				<a href="id.html" title="Fleava — Indonesia Digital Agency" class="inner_link">Bali, Indonesia</a>
				<p><small>Jalan Merta Agung, No.25, <br/>Kerobokan Kelod, Badung, Bali - 80361, Indonesia</small></p>
			</div>

			<div class="address__col address__col_col">
				<div class="address__col1">
					<a href="awards.html" title="Awards" class="inner_link">Awards <sup>52</sup></a>
					<a href="brands.html" title="Brands" class="inner_link">Brands <sup>124</sup></a>
					<a href="careers.html" title="Careers" class="inner_link">Careers <sup>04</sup></a>
				</div>
				<div class="address__col2">
					<a href="inquiry.html" title="Inquire" class="inner_link">Inquiries</a>
					<a href="mailto:hello@fleava.com" title="Contact Us" class="">Contact Us</a>
					<a href="../external.html?link=https://transform.fleava.com/" target="_blank" rel="noopener noreferrer" title="Transform with Fleava" class="">Transform &nbsp; &#8594;</a>
				</div>
			</div>

			<div class="address__col">
				<p>
					<a class="social" href="../external.html?link=https://www.facebook.com/fleava/" target="_blank" rel="noopener noreferrer" title="Fleava on Facebook">Fb </a>
					<a class="social" href="../external.html?link=https://www.instagram.com/fleava/" target="_blank" rel="noopener noreferrer" title="Fleava on Instagram">Ig </a>
					<a class="social" href="../external.html?link=https://twitter.com/fleava" target="_blank" rel="noopener noreferrer" title="Fleava on Twitter">Tw </a>
					<a class="social" href="../external.html?link=https://www.linkedin.com/company/fleava/" target="_blank" rel="noopener noreferrer" title="Fleava on LinkedIn">In </a>
					<a class="social" href="../external.html?link=https://www.behance.net/fleava" target="_blank" rel="noopener noreferrer" title="Fleava on Behance">Bē </a>
					<a class="inner_link social" href="terms.html">Terms. </a>
					<a class="inner_link social" href="sitemap.html">Sitemap.</a>
				</p>
			</div>
		</div>
	</div>

</nav>

        <div id="load_overlay" class="load_overlay"></div>

        <div id="dynamicLoad" class="dynamic_load">
            <div class="progress">
                <div class="bar" id="dynamicBar"></div>
            </div>
        </div>