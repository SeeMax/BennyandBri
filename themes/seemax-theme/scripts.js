(function ($, root, undefined) {$(function () {
'use strict';
//USE THE BELOW AS TEMPLATE FOR FUNCTION FILES

$(function mobileMenu() {

	$(".menuToggle").on('click', function() {
		console.log("click");

		var tl = new TimelineMax(),
				$this = $(this),
				fullMenu = $(".main-nav"),
				links = $("nav li"),
				ham1 = $(".hamTop"),
				ham2 = $(".hamMid"),
				ham3 = $(".hamBot"),
				uniTime2 = 0.15,
				uniEase = Back.easeIn.config(1),
				uniEase2 = Back.easeOut.config(1);

		if ($this.hasClass("navOpen")) {
			$this.removeClass("navOpen");
			tl.set($(".wrapper"), {height:"auto",overflow:"visible"})
				.staggerTo(links, 0.3, {opacity:0, x:"50%", ease: uniEase2}, 0.03, "menuClose")
				.to(fullMenu, 0.3, {left:"101%"}, "menuClose+=0.2")
				.to(ham1, uniTime2, {width:"100%", rotation:0, y:0}, "menuClose")
				.to(ham2, uniTime2, {width:"100%", x:0, opacity:1}, "menuClose")
				.to(ham3, uniTime2, {width:"100%", rotation:0, y:0}, "menuClose");


		} else {
			$this.addClass("navOpen");
			tl.set($(".wrapper"), {height:"100%", overflow:"hidden"})
				.set(links, {opacity:0, x:"50%"})
				.to(fullMenu, 0.3, {left:"0%"}, "menuOpen")
				.staggerTo(links, 0.2, {opacity:1, x:"0%", ease: uniEase2}, 0.05, "menuOpen+=0.05")
				.to(ham1, uniTime2, {rotation:227, y:5, width:"80%"}, "menuOpen")
				.to(ham2, uniTime2, {width:"70%", x:5, opacity:0}, "menuOpen")
				.to(ham3, uniTime2, {rotation:-227, y:-5, width:"80%"}, "menuOpen");
		}
	});

});

$(function preLoaderOn() {
	$(window).load(function(){
		$('#preloader').fadeOut('slow',function(){$(this).remove();});
	});
});

// //USE THE BELOW AS TEMPLATE FOR FUNCTION FILES
// //register the plugin (just once)
// gsap.registerPlugin(MotionPathPlugin);
//
// gsap.set(".tumbleweedOne", {xPercent:-50, yPercent:-100, transformOrigin:"50% 50%"});
// gsap.set(".tumbleweedOneShadow", {xPercent:-50, yPercent:-10, transformOrigin:"50% 50%"});
//
// var tl = gsap.timeline({defaults:{ease: "rough({ template: power0.none, strength: 1, points: 30, taper: 'none', randomize: true, clamp: false})", duration: 2}});
//
//
// tl.to(".tumbleweedOne", {
//   duration: 10,
//   repeat: -1,
//   repeatDelay: 3,
//   // ease: "power0.inOut",
//
//   rotate:1120,
//   motionPath:{
//     path:"#tumbleweed-path-one-path",
//     align:"#tumbleweed-path-one-path"
//   }
// }, "tumbleOne")
// .to(".tumbleweedOneShadow", {
//   duration: 10,
//   repeat: -1,
//   repeatDelay: 3,
//   rotate:0,
//   motionPath:{
//     path:"#tumbleweed-shadow-path-one-path",
//     align:"#tumbleweed-shadow-path-one-path"
//   },
// }, "tumbleOne")
// .to(".tumbleweedOneShadow", {
//   duration: 1.5,
//   repeat: -1,
//   yoyo:true,
//   repeatDelay: 0,
//   scale:0.8
// }, "tumbleOne");

});})(jQuery, this);
