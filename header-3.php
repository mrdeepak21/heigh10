<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Heigh10
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php bloginfo('name'); ?> |
		<?php bloginfo('description'); ?>
	</title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" media="all" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/swiper-bundle.min.css" media="all"/>
	<style>
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}

		body {
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
			--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
			--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
			--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
			--wp--preset--duotone--midnight: url('#wp-duotone-midnight');
			--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
			--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
			--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}

		.recentcomments a {
			display: inline !important;
			padding: 0 !important;
			margin: 0 !important;
		}

		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	</style>
	<?php wp_head(); ?>
</head>
<body <?php body_class("page-template page-template-page-templates page-template-we-are-heigh10
	page-template-page-templateswe-are-heigh10-php page page-id-41 light elementor-default elementor-kit-63332
	customize-support body"); ?>>
	<?php wp_body_open(); ?>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-dark-grayscale">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 0.49803921568627" />
					<feFuncG type="table" tableValues="0 0.49803921568627" />
					<feFuncB type="table" tableValues="0 0.49803921568627" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-grayscale">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 1" />
					<feFuncG type="table" tableValues="0 1" />
					<feFuncB type="table" tableValues="0 1" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-purple-yellow">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
					<feFuncG type="table" tableValues="0 1" />
					<feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-blue-red">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 1" />
					<feFuncG type="table" tableValues="0 0.27843137254902" />
					<feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-midnight">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 0" />
					<feFuncG type="table" tableValues="0 0.64705882352941" />
					<feFuncB type="table" tableValues="0 1" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-magenta-yellow">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.78039215686275 1" />
					<feFuncG type="table" tableValues="0 0.94901960784314" />
					<feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-purple-green">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
					<feFuncG type="table" tableValues="0 1" />
					<feFuncB type="table" tableValues="0.44705882352941 0.4" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-blue-orange">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.098039215686275 1" />
					<feFuncG type="table" tableValues="0 0.66274509803922" />
					<feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg>
	<div class="pageloader">
		<svg class="gegga">
			<defs>
				<filter id="gegga">
					<feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
					<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 20 -10"
						result="inreGegga" />
					<feComposite in="SourceGraphic" in2="inreGegga" operator="atop" />
				</filter>
			</defs>
		</svg>
		<svg class="snurra" width="200" height="200" viewBox="0 0 200 200">
			<defs>
				<linearGradient id="linjärGradient">
					<stop class="stopp1" offset="0" />
					<stop class="stopp2" offset="1" />
				</linearGradient>
				<linearGradient y2="160" x2="160" y1="40" x1="40" gradientUnits="userSpaceOnUse" id="gradient"
					xlink:href="#linjärGradient" />
			</defs>
			<path class="halvan"
				d="m 164,100 c 0,-35.346224 -28.65378,-64 -64,-64 -35.346224,0 -64,28.653776 -64,64 0,35.34622 28.653776,64 64,64 35.34622,0 64,-26.21502 64,-64 0,-37.784981 -26.92058,-64 -64,-64 -37.079421,0 -65.267479,26.922736 -64,64 1.267479,37.07726 26.703171,65.05317 64,64 37.29683,-1.05317 64,-64 64,-64" />
			<circle class="strecken" cx="100" cy="100" r="64" />
		</svg>
		<svg class="skugga" width="200" height="200" viewBox="0 0 200 200">
			<path class="halvan"
				d="m 164,100 c 0,-35.346224 -28.65378,-64 -64,-64 -35.346224,0 -64,28.653776 -64,64 0,35.34622 28.653776,64 64,64 35.34622,0 64,-26.21502 64,-64 0,-37.784981 -26.92058,-64 -64,-64 -37.079421,0 -65.267479,26.922736 -64,64 1.267479,37.07726 26.703171,65.05317 64,64 37.29683,-1.05317 64,-64 64,-64" />
			<circle class="strecken" cx="100" cy="100" r="64" />
		</svg>
	</div>

	<div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>


	<div class="container-fluid home-header pt-lg-1">
		<nav class="navbar navbar-expand-lg d-flex align-items-center">
			<!-- Brand/logo -->
			<a class="navbar-brand" href="<?php echo site_url(); ?>">
				<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
					alt="heigh10 Logo" class="white-logo"
					data-lazy-src="<?php echo esc_url( wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' ) ); ?>"><noscript><img
						src="<?php echo esc_url( wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ), 'full' ) ); ?>" alt="heigh10 Logo" class="white-logo"></noscript>
			</a>
			<!-- Links -->
			<div class="navbar-nav align-items-center ml-auto">
				<div class="nav-item menu-contact extra-nav order-md-1 order-2 text-right text-md-left mt-md-0">


					<a class="nav-link" href="tel:<?php echo get_theme_mod('call_us'); ?>"><i
							class="fa fa-caret-right extra-nav" aria-hidden="true"></i>Call Us
						<?php echo get_theme_mod('call_us'); ?>
					</a>
				</div>
				<div class="d-flex order-md-2 order-1">
					<div class="nav-item mx-4 extra-nav">


						<a class="nav-link menu-work-with-us" href="<?php echo site_url(); ?>/contact-us">
							<div class="">Work With Us</div>
						</a>
					</div>
					<div class="nav-item menu-btn nav-button">
						<div class="nav-but-wrap nav-button__wrapper">
							<div class="menu-icon-sticky hover-target sidemenu">
								<span class="menu-icon__line menu-icon__line-left"></span>
								<span class="menu-icon__line"></span>
								<span class="menu-icon__line menu-icon__line-right"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<nav class="navbar navbar-expand-lg align-items-center addsticky">
			<!-- Brand/logo -->
			<a class="navbar-brand" href="<?php echo site_url(); ?>">
				<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
					alt="heigh10 Logo" class="whites-logo"
					data-lazy-src="<?php echo get_theme_mod( 'dark_logo' ); ?>"><noscript><img
						src="<?php echo get_theme_mod( 'dark_logo' ); ?>" alt="heigh10 Logo"
						class="whites-logo"></noscript>
			</a>
			<!-- Links -->
			<div class="navbar-nav align-items-center ml-auto">

				<?php wp_nav_menu([
						'container'     => '',
						'theme_location'=>'primary-menu',
						'menu_class'=>'nav__list sticky_navlist d-none d-xl-block',
						'fallback_cb'   => false,
    					'add_li_class'  => 'nav__list-item',
						'add_a_class'     => 'hover-target menu-item-',
						'add_a_attr'     => 'nav-bg-',
						'add_a_color'     => '#FFA826',
					] ); ?>
			</div>

			<div
				class="nav-item menu-contact extra-nav order-md-1 order-2 text-right text-md-left mt-md-0  d-xl-none d-md-block">
				<a class="nav-link" href="tel:<?php echo get_theme_mod('call_us'); ?>"><i class="fa fa-caret-right "
						aria-hidden="true"></i>
					<?php echo get_theme_mod('call_us'); ?>
				</a>
			</div>
			<div class="d-flex order-md-2 order-1 ">
				<div class="nav-item mx-4 extra-nav d-xl-none  d-md-block">


					<a class="nav-link menu-work-with-us" href="<?php echo site_url(); ?>/contact-us">
						<div class="">Work With Us</div>
					</a>

				</div>
				<div class="nav-item menu-btn nav-button">
					<div class="nav-but-wrap nav-button__wrapper">
						<div class="menu-icon-sticky hover-target sidemenu">
							<span class="menu-icon__line menu-icon__line-left"></span>
							<span class="menu-icon__line"></span>
							<span class="menu-icon__line menu-icon__line-right"></span>
						</div>
					</div>
				</div>
			</div>
	</div>
	</nav>
	</div>

	<nav class="c-menu navigation" style="display: none;">
		<div class="c-menu--wrapper new">
			<div class="w-layout-grid c-menu--grid new">
				<div id="w-node-_7d0200cc-4c86-f377-2431-ce8f396a4d09-396a4d06" class="c-menu-items new">
				<?php wp_nav_menu( array( 
            'container'=> false, 
            'menu_class'=> 'c-menu_wrapper',
            'theme_location' => 'primary-menu',
            'menu_id'=> 'main_menu',
            'add_li_class'=>'underline-animation__wrap is--menu', 
            'add_a_class'=>'underline-animation is--large',
            'add_a_attr' => '7d0200cc-4c86-f377-2431-ce8f396a4d13'
            ));
          ?>
				</div>
				<div id="w-node-_7d0200cc-4c86-f377-2431-ce8f396a4d1e-396a4d06" class="c-footer__grid-cards menu"
					style="opacity: 0;">
					<div class="w-layout-grid c-hero__grid menu"><a href="#"
							class="c-footer__gird-item-2 upper open-intercom w-inline-block"
							style="background-color: rgba(0, 0, 0, 0);">
							<div class="c-footer__icon menu w-embed"
								style="color: rgb(15, 15, 15); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 1;">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M21 11.5C21.0034 12.8199 20.6951 14.1219 20.1 15.3C19.3944 16.7118 18.3098 17.8992 16.9674 18.7293C15.6251 19.5594 14.0782 19.9994 12.5 20C11.1801 20.0035 9.87812 19.6951 8.7 19.1L3 21L4.9 15.3C4.30493 14.1219 3.99656 12.8199 4 11.5C4.00061 9.92179 4.44061 8.37488 5.27072 7.03258C6.10083 5.69028 7.28825 4.6056 8.7 3.90003C9.87812 3.30496 11.1801 2.99659 12.5 3.00003H13C15.0843 3.11502 17.053 3.99479 18.5291 5.47089C20.0052 6.94699 20.885 8.91568 21 11V11.5Z"
										stroke="currentColor" stroke-width="2" stroke-linecap="round"
										stroke-linejoin="round"></path>
								</svg>
							</div>
							<div class="c-footer__service-link">
								<h4 data-w-id="7d0200cc-4c86-f377-2431-ce8f396a4d22" class="c-footer__grid-title"
									style="color: rgb(15, 15, 15); transform: translate3d(0px, 100%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
									Chat to<br>us now</h4>
							</div>
						</a><a href="tel:+447967799918" class="c-footer__gird-item-2 upper right w-inline-block"
							style="background-color: rgba(0, 0, 0, 0);">
							<div class="c-footer__icon menu w-embed"
								style="color: rgb(15, 15, 15); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 1;">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M22.0014 16.9201V19.9201C22.0025 20.1986 21.9455 20.4743 21.8339 20.7294C21.7223 20.9846 21.5587 21.2137 21.3535 21.402C21.1483 21.5902 20.906 21.7336 20.6421 21.8228C20.3783 21.912 20.0988 21.9452 19.8214 21.9201C16.7442 21.5857 13.7884 20.5342 11.1914 18.8501C8.77523 17.3148 6.72673 15.2663 5.1914 12.8501C3.50138 10.2413 2.44964 7.27109 2.1214 4.1801C2.09641 3.90356 2.12927 3.62486 2.2179 3.36172C2.30652 3.09859 2.44897 2.85679 2.63616 2.65172C2.82336 2.44665 3.0512 2.28281 3.30519 2.17062C3.55917 2.05843 3.83374 2.00036 4.1114 2.0001H7.1114C7.5967 1.99532 8.06719 2.16718 8.43516 2.48363C8.80313 2.80008 9.04348 3.23954 9.1114 3.7201C9.23802 4.68016 9.47285 5.62282 9.8114 6.5301C9.94594 6.88802 9.97506 7.27701 9.8953 7.65098C9.81555 8.02494 9.63026 8.36821 9.3614 8.6401L8.0914 9.9101C9.51495 12.4136 11.5879 14.4865 14.0914 15.9101L15.3614 14.6401C15.6333 14.3712 15.9766 14.1859 16.3505 14.1062C16.7245 14.0264 17.1135 14.0556 17.4714 14.1901C18.3787 14.5286 19.3213 14.7635 20.2814 14.8901C20.7672 14.9586 21.2108 15.2033 21.5279 15.5776C21.8451 15.9519 22.0136 16.4297 22.0014 16.9201Z"
										stroke="currentColor" stroke-width="2" stroke-linecap="round"
										stroke-linejoin="round"></path>
								</svg>
							</div>
							<div class="c-footer__service-link">
								<h4 data-w-id="7d0200cc-4c86-f377-2431-ce8f396a4d29" class="c-footer__grid-title"
									style="color: rgb(15, 15, 15); transform: translate3d(0px, 100%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
									Speak on<br>the phone</h4>
							</div>
						</a><a href="https://usemotion.com/meet/alex-rook/30min" target="_blank"
							class="c-footer__gird-item-2 w-inline-block" style="background-color: rgba(0, 0, 0, 0);">
							<div class="c-footer__icon menu w-embed"
								style="color: rgb(15, 15, 15); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 1;">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
										stroke="currentColor" stroke-width="2" stroke-linecap="round"
										stroke-linejoin="round"></path>
									<path d="M16 2V6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
										stroke-linejoin="round"></path>
									<path d="M8 2V6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
										stroke-linejoin="round"></path>
									<path d="M3 10H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"
										stroke-linejoin="round"></path>
								</svg>
							</div>
							<div class="c-footer__service-link">
								<h4 data-w-id="7d0200cc-4c86-f377-2431-ce8f396a4d30" class="c-footer__grid-title"
									style="color: rgb(15, 15, 15); transform: translate3d(0px, 100%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
									Book a<br>consultation</h4>
							</div>
						</a><a href="mailto:hello@vovi.studio?subject=Hi%20Vovi!"
							class="c-footer__gird-item-2 right w-inline-block"
							style="background-color: rgba(0, 0, 0, 0);">
							<div class="c-footer__icon menu w-embed"
								style="color: rgb(15, 15, 15); transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 1;">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path d="M22 2L11 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
										stroke-linejoin="round"></path>
									<path d="M22 2L15 22L11 13L2 9L22 2Z" stroke="currentColor" stroke-width="2"
										stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
							</div>
							<div class="c-footer__service-link">
								<h4 data-w-id="7d0200cc-4c86-f377-2431-ce8f396a4d37" class="c-footer__grid-title"
									style="color: rgb(15, 15, 15); transform: translate3d(0px, 100%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
									Send us<br> an email</h4>
							</div>
						</a></div>
				</div>
			</div>
			<div class="menu__background"
				style="transform: translate3d(0px, 0px, 0px) scale3d(1, 0, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
			</div>
		</div>
	</nav>