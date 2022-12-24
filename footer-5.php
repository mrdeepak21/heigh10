<div data-w-id="78b1404a-ffbe-fa92-9807-8ff36c095337" class="section-9 wf-section"
    style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 1;">
    <div class="container-14 w-container">
        <div class="div-block-8">
            <h1 class="heading-4">Lets</h1>
            <div class="div-block-36">
                <div class="div-block-39">
                    <h1 class="co">Co</h1>
                </div>
                <div class="div-block-41">
                    <div class="lottie-animation-2" data-w-id="78b1404a-ffbe-fa92-9807-8ff36c095341"
                        data-animation-type="lottie"
                        data-src="https://uploads-ssl.webflow.com/632898d0ba3a6ce15b7665f3/63389201ad6a6d499cfbadb0_ping-pong.json"
                        data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg"
                        data-default-duration="2.602602496596432" data-duration="0">
                    </div>
                </div>
                <div class="div-block-40">
                    <h1 class="co">aborate</h1>
                </div>
            </div><a data-w-id="78b1404a-ffbe-fa92-9807-8ff36c095345" href="#" class="button-3 w-button">Contact</a>
        </div>
        <ul role="list" class="list w-list-unstyled">
            <li>
                <div class="text-block">Work</div>
            </li>
            <li>
                <div class="text-block-2">About</div>
            </li>
            <li>
                <div class="text-block-3">Contact</div>
            </li>
        </ul>
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
<script>
    // When the user scrolls the page, execute myFunction
    window.onscroll = function () { myFunction() };

    function myFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        if (scrolled >= 99) {
            $('.progress-wrap::before').css('content', "'\2191'");
            $('.progress-wrap::after').css('content', "'\2191'");
        }
    }
</script>
<?php wp_footer( ); ?>
</body>

</html>