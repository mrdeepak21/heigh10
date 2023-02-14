<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Heigh10
 */
get_header('5');
?>
<main style="height: 100vh;display: flex;align-items: center;justify-content: center;background-color: #ccc;flex-direction: column;gap: .5em;" class="bg-dark">
	<lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_conoeouc.json"  background="transparent"  speed="1"  loop autoplay style="height: 20em;"></lottie-player>
	<h2>Oops! That page can't be found.</h2>
	<p>
	It looks like nothing was found at this location.
</p> 
				<a id="open-modal" data-w-id=
				"31ef9bc4-f230-41b1-8f0e-301057e815d7" href="<?php echo site_url(); ?>"
				class=
				"c-button no-outlined black open-intercom w-inline-block">
				<h6 class="button_h3"> Back to Homepage</h6></a>
			</main>
			<script defer src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
			<?php
get_footer();