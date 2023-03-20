// $('.sub-menu').attr('style','position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 0px, 0px);');
// $('.sub-menu').attr('x-placement','left-start');
// $('.sub-menu li').removeClass('nav__list-item');
// $('li.menu-item-has-children').addClass('dropdown main-dropdown dropleft');
// $('li.menu-item-has-children > a').addClass('hover-target dropdown-toggle');
// $('li.menu-item-has-children > a').attr('data-toggle',"dropdown");


// Back to top button animate at end of the page
    $(document).ready(function(){
      $('.progress-wrap').fadeIn();
      $('.progress-wrap').addClass('btt-down')
      //Check to see if the window is top if not then display button
      $(window).scroll(function(){
       if ($(this).scrollTop() >= $(document).height() - $(window).height() - 300) { 
    $('.progress-wrap').removeClass('btt-down').addClass('btt-up');
       } else {
    $('.progress-wrap').removeClass('btt-up').addClass('btt-down');
       }
      });
     });
     


// Footer



// Safari assets load 
$(window).bind("pageshow", function(event) {
  if (event.originalEvent.persisted) {
      window.location.reload() 
  }
});

//Disable scroll on open menu
$(document).ready(function () {
$('.nav-button').click(function () {
  $('body').toggleClass('overflow-hidden');
});

});


//SPLIT
!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):(t="undefined"!=typeof globalThis?globalThis:t||self).SplitType=e()}(this,(function(){"use strict";function t(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}function e(e,n,i){return n&&t(e.prototype,n),i&&t(e,i),e}function n(t,e){return Object.getOwnPropertyNames(Object(t)).reduce((function(n,i){var o=Object.getOwnPropertyDescriptor(Object(t),i),r=Object.getOwnPropertyDescriptor(Object(e),i);return Object.defineProperty(n,i,r||o)}),{})}function i(t){var e=n(t);return(e.types||e.split)&&(e.types=e.types||e.split),(e.absolute||e.position)&&(e.absolute=e.absolute||/absolute/.test(t.position)),e}function o(t){return null!==t&&"object"==typeof t}function r(t){return Array.isArray(t)?t:null==t?[]:function(t){return o(t)&&function(t){return"number"==typeof t&&t>-1&&t%1==0}(t.length)}(t)?Array.prototype.slice.call(t):[t]}function s(t){return o(t)&&/^(1|3|11)$/.test(t.nodeType)}function c(t){return"string"==typeof t}function l(t){var e,n=t;return c(t)&&(n=/^(#[a-z]\w+)$/.test(t.trim())?document.getElementById(t.trim().slice(1)):document.querySelectorAll(t)),(e=n,r(e).reduce((function(t,e){return t.concat(r(e))}),[])).filter(s)}function a(t,e,n){var i={},r=null;return o(t)&&(r=t[a.expando]||(t[a.expando]=++a.uid),i=a.cache[r]||(a.cache[r]={})),void 0===n?void 0===e?i:i[e]:void 0!==e?(i[e]=n,n):void 0}function u(t){var e=t&&t[a.expando];e&&(delete t[e],delete a.cache[e])}function f(t,e){for(var n=r(t),i=n.length,o=0;o<i;o++)e(n[o],o,n)}a.expando="splitType".concat(1*new Date),a.cache={},a.uid=0;var d="\\ud800-\\udfff",h="\\u0300-\\u036f\\ufe20-\\ufe23",p="\\u20d0-\\u20f0",y="\\ufe0e\\ufe0f",g="[".concat(d,"]"),m="[".concat(h).concat(p,"]"),v="\\ud83c[\\udffb-\\udfff]",w="(?:".concat(m,"|").concat(v,")"),b="[^".concat(d,"]"),C="(?:\\ud83c[\\udde6-\\uddff]){2}",x="[\\ud800-\\udbff][\\udc00-\\udfff]",T="\\u200d",E="".concat(w,"?"),j="[".concat(y,"]?"),O=j+E+("(?:\\u200d(?:"+[b,C,x].join("|")+")"+j+E+")*"),S="(?:".concat(["".concat(b).concat(m,"?"),m,C,x,g].join("|"),"\n)"),H=RegExp("".concat(v,"(?=").concat(v,")|").concat(S).concat(O),"g"),k=RegExp("[".concat([T,d,h,p,y].join(""),"]"));function A(t){return k.test(t)}function L(t){return A(t)?function(t){return t.match(H)||[]}(t):function(t){return t.split("")}(t)}function M(t){return null==t?"":String(t)}function D(t,e){var n=document.createElement(t);return e?(Object.keys(e).forEach((function(t){var i=e[t];null!==i&&("textContent"===t||"innerHTML"===t?n[t]=i:"children"===t?f(i,(function(t){s(t)&&n.appendChild(t)})):n.setAttribute(t,String(i).trim()))})),n):n}var N={splitClass:"",lineClass:"line",wordClass:"word",charClass:"char",types:"lines, words, chars",absolute:!1,tagName:"div"},P=function(){return document.createDocumentFragment()},W=function(t){return document.createTextNode(t)};function B(t,e){var i,o,r=function(t){var e=c(t)||Array.isArray(t)?String(t):"";return{lines:/line/i.test(e),words:/word/i.test(e),chars:/(char)|(character)/i.test(e)}}((e=n(N,e)).types),s=e.tagName,l="B".concat(1*new Date,"R"),u="absolute"===e.position||e.absolute,d=[],h=[];if(o=r.lines?D("div"):P(),i=function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:" ";return(t=t?String(t):"").split(e)}(function(t,e){var n=t.textContent;if(e){var i=t.innerHTML,o=document.createElement("div");o.innerHTML=i.replace(/<br\s*\/?>/g," ".concat(e," ")),n=o.textContent}return n.replace(/\s+/g," ").trim()}(t,l)).reduce((function(t,n,i,a){var u,d;return n===l?(o.appendChild(D("br")),t):(r.chars&&(d=function(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"";return(t=M(t))&&c(t)&&!e&&A(t)?L(t):t.split(e)}(n).map((function(t){return D(s,{class:"".concat(e.splitClass," ").concat(e.charClass),style:"display: inline-block;",textContent:t})})),h=h.concat(d)),r.words||r.lines?(u=D(s,{class:"".concat(e.wordClass," ").concat(e.splitClass),style:"display: inline-block; position: ".concat(r.words?"relative":"static"),children:r.chars?d:null,textContent:r.chars?null:n}),o.appendChild(u)):f(d,(function(t){o.appendChild(t)})),i!==a.length-1&&o.appendChild(W(" ")),r.words?t.concat(u):t)}),[]),t.innerHTML="",t.appendChild(o),!u&&!r.lines)return{chars:h,words:i,lines:[]};var p,y,g,m,v,w=[],b=[],C=a(t,"nodes",t.getElementsByTagName(s)),x=t.parentElement,T=t.nextElementSibling,E=window.getComputedStyle(t).textAlign;return u&&(m={left:o.offsetLeft,top:o.offsetTop,width:o.offsetWidth},g=t.offsetWidth,y=t.offsetHeight,a(t).cssWidth=t.style.width,a(t).cssHeight=t.style.height),f(C,(function(t){if(t!==o){var e,n=t.parentElement===o;r.lines&&n&&((e=a(t,"top",t.offsetTop))!==v&&(v=e,w.push(b=[])),b.push(t)),u&&(a(t).top=e||t.offsetTop,a(t).left=t.offsetLeft,a(t).width=t.offsetWidth,a(t).height=p||(p=t.offsetHeight))}})),x&&x.removeChild(t),r.lines&&(o=P(),d=w.map((function(t){var n=D(s,{class:"".concat(e.splitClass," ").concat(e.lineClass),style:"display: block; text-align: ".concat(E,"; width: 100%;")});return o.appendChild(n),u&&(a(n).type="line",a(n).top=a(t[0]).top,a(n).height=p),f(t,(function(t,e,i){r.words?n.appendChild(t):r.chars?f(t.children,(function(t){n.appendChild(t)})):n.appendChild(W(t.textContent)),e!==i.length-1&&n.appendChild(W(" "))})),n})),t.replaceChild(o,t.firstChild)),u&&(t.style.width="".concat(t.style.width||g,"px"),t.style.height="".concat(y,"px"),f(C,(function(t){var e="line"===a(t).type,n=!e&&"line"===a(t.parentElement).type;t.style.top="".concat(n?0:a(t).top,"px"),t.style.left="".concat(e?m.left:a(t).left-(n?m.left:0),"px"),t.style.height="".concat(a(t).height,"px"),t.style.width="".concat(e?m.width:a(t).width,"px"),t.style.position="absolute"}))),x&&(T?x.insertBefore(t,T):x.appendChild(t)),{lines:d,words:r.words?i:[],chars:h}}var R=n(N,{});return function(){function t(e,o){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),this.isSplit=!1,this.settings=n(R,i(o)),this.elements=l(e)||[],this.elements.length&&(this.originals=this.elements.map((function(t){return a(t,"html",a(t).html||t.innerHTML)})),this.settings.types&&this.split())}return e(t,null,[{key:"defaults",get:function(){return R},set:function(t){R=n(R,i(t))}}]),e(t,[{key:"split",value:function(t){var e=this;this.revert(),this.lines=[],this.words=[],this.chars=[];var o=[window.pageXOffset,window.pageYOffset];void 0!==t&&(this.settings=n(this.settings,i(t))),this.elements.forEach((function(t){var n=B(t,e.settings),i=n.lines,o=n.words,r=n.chars;e.lines=e.lines.concat(i),e.words=e.words.concat(o),e.chars=e.chars.concat(r),a(t).isSplit=!0})),this.isSplit=!0,window.scrollTo(o[0],o[1]),this.elements.forEach((function(t){r(a(t).nodes||[]).forEach(u)}))}},{key:"revert",value:function(){var t=this;this.isSplit&&(this.lines=null,this.words=null,this.chars=null),this.elements.forEach((function(e){a(e).isSplit&&a(e).html&&(e.innerHTML=a(e).html,e.style.height=a(e).cssHeight||"",e.style.width=a(e).cssWidth||"",t.isSplit=!1)}))}}]),t}()}));

//SPLIT INIT
$(window).on("load",function(){let t=$(window).width();function e(){document.querySelectorAll("[data-split]").forEach(function(t){let e=new SplitType(t,{types:t.getAttribute("data-split-type")}),n=t.getAttribute("data-split"),i=n>1?Number(n):100,d=i;t.getAttribute("data-split-type").split(",").forEach(function(t){t=t.trim(),e[t].forEach(function(n,a){("lines"==t&&!e.words.length&&!e.chars.length||"words"==t&&!e.chars.length||"chars"==t)&&0!=a&&(n.style.transitionDelay=d+"ms",d=i+d);const o=document.createElement("div");o.classList.add(t+"wrap"),n.parentNode.appendChild(o),o.appendChild(n)})})})}e(),window.addEventListener("resize",function(){$(window).width()!=t&&e(),t=$(window).width()})});




$(function() {
$("a").click(function(evt) {
  if ($(this).hasClass("w-tab-link")) return;
  evt.preventDefault();
  var link = $(this).attr("href");
  if (link == "#") return;
  var opensInNewTab = $(this).attr("target");
  var itsMail = link.includes("mailto:");
  setTimeout(function() {
    if (opensInNewTab || itsMail) {
      window.open(link, "_blank");
      return;
    } else {
      window.location.href = link;
    }
  }, 750);
});
});



if (window.location.pathname === '/' || '/new-home') {

(function(e){e.fn.imageRotator=function(t){function a(e){if(s>=0){var t=r[s];t.fadeOut(e)}var n=s+1;if(s>=r.length-1){n=0}var i=r[n];i.fadeIn(e,function(){s=n})}if(this.getImages){return this}var n=e.extend({},e.fn.imageRotator.defaults,t);if(n.imageTime<100){n.imageTime=100}var r=null;var i=null;var s=0;var o=null;var u=null;this.css("position","relative");this.getOptions=function(){return n};this.getImages=function(){return r};this.getCurrentIndex=function(){return s};this.setCurrentIndex=function(e){i.hide();if(e>=r.length){e=r.length-1}if(e>=0){r[e].show()}s=e};this.start=function(){if(o){}else if(r.length>1){o=setInterval(function(){var e=n.imageTime-n.fadeTime;if(e<0){a(n.imageTime-90)}else{u=setTimeout(function(){u=null;a(n.fadeTime)},e)}},n.imageTime)}};this.stop=function(){if(o){if(u){clearTimeout(u);u=null}clearInterval(o);o=null;if(s>=0){r[s].show()}}};this.refresh=function(){r=[];i=this.children("img");i.each(function(t){r.push(e(this))});this.setCurrentIndex(s)};this.refresh();return this};e.fn.imageRotator.defaults={imageTime:1e3,fadeTime:500}})(jQuery)

}
  
 

//OPEN VIDEO MODAL
// $('#open-modal-2').click(function() {
// $('#video-modal-holder').css({'display': 'flex', 'background': 'black'}); 
// $('#hero-text').css({'display': 'none'});
// $('.c-hero__grid-cards').css({'display': 'none'});
// $('.d_fixed_position_wrapper').css({'width': '100%', 'height': '100%'});      
// })


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


// -- New Showreel -->
// const bgVideo = $("#bg-video");
// const videosWrapper = $("#videos-wrapper");
// const fixedPositionWrappere = $(".d_fixed_position_wrapper");

// const vimeoPlayingClass = "cc-reel-playing";

// const animationsTiming = 0;

// var iframe = document.querySelector("#videos-wrapper iframe");
// var player = document.getElementById("reel-video");

// // Functions to enable/disable body scroll
// function lockScroll() {
//   $("html, body").css("overflow", "hidden");
// }
// function unlockScroll() {
//   $("html, body").css("overflow", "auto");
// }

// Takes care of the sticky positioning
// function updateOffsetOfReel() {
//   if ($(window).width() <= 767) {
//     $(fixedPositionWrappere).css("transform", `translateY(0px)`);
//     return;
//   }

//   var scrollTop = $(window).scrollTop(),
//       elementOffset = $("#videos-wrapper").offset().top,
//       distance = elementOffset - scrollTop;
//   $(fixedPositionWrappere).css("transform", `translateY(${-distance}px)`);
//   requestAnimationFrame(updateOffsetOfReel);
// }
// requestAnimationFrame(updateOffsetOfReel);
      
// $('#open-modal-2').click(function () {
//       player.play();
//   lockScroll();
// });

// Takes care of the functionality with clicks and etc
// $('#video-modal-holder').click(function () {
//   const reelIsPlaying = !player.paused;

//   if (reelIsPlaying) {
//     unlockScroll();
//     $('#video-modal-holder').fadeOut(animationsTiming);
//     //$(bgVideo).fadeIn(animationsTiming);
//     $('.d_fixed_position_wrapper').css({'width': '0%', 'height': '0%'});
//     $('#hero-text').css({'display': 'flex'});
//     $('.c-hero__grid-cards').css({'display': 'flex'});
    
//     //$('#video-modal-holder').css({'display': 'none', 'z-index': '0'});
//     player.pause();
    
//   } else {
//       $(bgVideo).fadeOut(animationsTiming);
//       $('#video-modal-holder').fadeIn(animationsTiming);
//     $('.d_fixed_position_wrapper').css({'width': '100%', 'height': '100%'});
//     $('#hero-text').css({'display': 'none'});
//     $('.c-hero__grid-cards').css({'display': 'none'});
    
//     //$('#video-modal-holder').css({'display': 'flex', 'z-index': '10000'});
//     lockScroll();
//     $("html, body").animate(
//       { scrollTop: $(videosWrapper).offset().top },
//       animationsTiming
//     );
//     player.play();
//   }
// });


// Cancels buble of event if click on video
// $(player).click((event) => {
//   event.stopPropagation();
// });

// Move the window to top position if it's not there already
// window.addEventListener("resize", handleResize);
// function handleResize() {
//   const reelIsPlaying = !player.paused;

//   if (reelIsPlaying) {
//     unlockScroll();
//     $("html, body").scrollTop($(videosWrapper).offset().top);
//     lockScroll();
//   }
// }

// player.addEventListener(
//   "webkitendfullscreen",
//   function () {
//     videoExitedFullscreen(player);
//   },
//   false
// );

// function videoExitedFullscreen(videoElement) {
//   //check if an element is currently full screen
//   if (
//     document.fullScreenElement ||
//     document.webkitIsFullScreen == true ||
//     document.mozFullScreen ||
//     document.msFullscreenElement
//   ) {
//     //do whatever here if the video is now (just became) full screen
//   } else {
//     unlockScroll();
//     $('#video-modal-holder').fadeOut(animationsTiming);
//     $('.d_fixed_position_wrapper').css({'width': '0%', 'height': '0%'});
//     $('#hero-text').css({'display': 'flex'});
//     $('.c-hero__grid-cards').css({'display': 'flex'});
//     player.pause();
//     console.log("fullscreen was closed");
//     //do whatever you want on fullscreen close, like pause or mute
//   }
// }

 


// Hides loader after the first animation
var Webflow = Webflow || [];
Webflow.push(function () {
  setTimeout(()=>{
    $(".w_loader").css("display","none")
  },8000)
});


// Cookie --start

$(document).ready(()=>{
  setTimeout(()=>{
  if(!getCookie('cookie-accepted')){
  $('body').append('<div id="cookie-bar" style="display:none"><span class="close-cookie cb-enable"> &#215;</span><div class="cookie-img"></div><p class="px-2">We use cookies to ensure that we give you the best experience on our website. By using our website, you agree to our <a style="color:#fff;text-decoration:underline" href="/privacy-policy/" target="_blank">privacy policy</a>.</p><button class="cb-enable">Accept</button></div>');
  $('#cookie-bar').fadeIn();
  }
  $('#cookie-bar .cb-enable').click(()=>{
    $('#cookie-bar').fadeOut('slow');
    setCookie('cookie-accepted',true,365);
  });
},5000);
}); 

if(getCookie('loaderShown')){
  $('.w_loader').hide();
} else {
  setTimeout(()=>{setCookie('loaderShown',true,1)},3000);
}

function setCookie(name,value,days) {
  var expires = "";
  if (days) {
      var date = new Date();
      date.setTime(date.getTime() + (days*24*60*60*1000));
      expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1,c.length);
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return false;
}
// function eraseCookie(name) {   
//   document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
// }

// Cookie --end

//Smooth Scroll    --start
// $(document).ready(function(){
	
// 	$(window).on('scroll', function(){
// 		var wHeight = $(window).height() - 100;
// 		var scrollTop = $(window).scrollTop() - 100;
// 		$('section').css('transform','translate3d(0px, -'+ (scrollTop-wHeight)  +'px , 0px)');
		
// 	});
	
// });

//Smooth Scroll    --end


/*Slider REV- -Start */
		var tpj = jQuery;
		if (window.RS_MODULES === undefined) window.RS_MODULES = {};
		if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
		RS_MODULES.modules["revslider11"] = {
			once: RS_MODULES.modules["revslider11"] !== undefined ? RS_MODULES.modules["revslider11"].once : undefined, init: function () {
				window.revapi1 = window.revapi1 === undefined || window.revapi1 === null || window.revapi1.length === 0 ? document.getElementById("rev_slider_1_1") : window.revapi1;
				if (window.revapi1 === null || window.revapi1 === undefined || window.revapi1.length == 0) { window.revapi1initTry = window.revapi1initTry === undefined ? 0 : window.revapi1initTry + 1; if (window.revapi1initTry < 20) requestAnimationFrame(function () { RS_MODULES.modules["revslider11"].init() }); return; }
				window.revapi1 = jQuery(window.revapi1);
				if (window.revapi1.revolution == undefined) { revslider_showDoubleJqueryError("rev_slider_1_1"); return; }
				revapi1.revolutionInit({
					revapi: "revapi1",
					DPR: "dpr",
					sliderLayout: "fullwidth",
					visibilityLevels: "1240,1024,778,480",
					gridwidth: 1240,
					gridheight: 900,
					spinner: "spinner5",
					perspective: 600,
					perspectiveType: "global",
					editorheight: "900,768,960,720",
					responsiveLevels: "1240,1024,778,480",
					progressBar: { disableProgressBar: true },
					navigation: {
						onHoverStop: false
					},
					viewPort: {
						global: false,
						globalDist: "-200px",
						enable: false
					},
					fallbacks: {
						allowHTML5AutoPlayOnAndroid: true
					},
				});

				if (typeof RsParticlesAddOn !== "undefined") RsParticlesAddOn(revapi1);

			}
		} // End of RevInitScript
		if (window.RS_MODULES.checkMinimal !== undefined) { window.RS_MODULES.checkMinimal(); };

/*Slider REV- -end */