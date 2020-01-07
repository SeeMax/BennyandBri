function mobileMenuOpen() {

	// gsap.registerPlugin(MotionPathPlugin, TextPlugin);

	var tl = new TimelineMax(),
			fullMenu = $(".main-nav"),
			links = $("nav li"),
			ham1 = $(".hamTop"),
			ham2 = $(".hamMid"),
			ham3 = $(".hamBot"),
			uniTime2 = 0.15,
			uniEase = Back.easeIn.config(1),
			uniEase2 = Back.easeOut.config(1);

	$('.menuToggle').addClass("navOpen");
	tl.set($(".wrapper"), {height:"100%"})
		.set(links,{opacity:0, x:"50%"})
		.to(fullMenu, {duration:0.3,left:"0%"}, "menuOpen")
		.to(links,{duration:0.2, opacity:1, x:"0%", ease: uniEase2, stagger: {amount:1}}, "menuOpen+=0.05")
		.to(ham1,{duration:uniTime2, rotation:227, y:5, width:"80%"}, "menuOpen")
		.to(ham2,{duration:uniTime2, width:"70%", x:3, opacity:0}, "menuOpen")
		.to(ham3,{duration:uniTime2, rotation:-227, y:-3, width:"80%"}, "menuOpen");
}

function mobileMenuClose() {

	var tl = new TimelineMax(),
			fullMenu = $(".main-nav"),
			links = $("nav li"),
			ham1 = $(".hamTop"),
			ham2 = $(".hamMid"),
			ham3 = $(".hamBot"),
			uniTime2 = 0.15,
			uniEase = Back.easeIn.config(1),
			uniEase2 = Back.easeOut.config(1);

	$('.menuToggle').removeClass("navOpen");
	tl.set($(".wrapper"), {height:"auto"})
		.to(links,{duration:0.3, opacity:1, x:"50%", ease: uniEase2, stagger: {amount:0.7}}, "menuOpen")
		.to(fullMenu, {duration:0.3,left:"101%"}, "menuOpen+=0.2")
		.to(ham1,{duration:uniTime2, rotation:0, y:0, width:"100%"}, "menuOpen")
		.to(ham2,{duration:uniTime2, opacity:1, x:0, width:"100%"}, "menuOpen")
		.to(ham3,{duration:uniTime2, rotation:0, y:0, width:"100%"}, "menuOpen");
	// .staggerTo(links, 0.3, {opacity:0, x:"50%", ease: uniEase2}, 0.03, "menuClose")
	// 	.to(fullMenu, 0.3, {left:"101%"}, "menuClose+=0.2")
	// 	.to(ham1, uniTime2, {width:"100%", rotation:0, y:0}, "menuClose")
	// 	.to(ham2, uniTime2, {width:"100%", x:0, opacity:1}, "menuClose")
	// 	.to(ham3, uniTime2, {width:"100%", rotation:0, y:0}, "menuClose");
}


// IF IT"S MOBILE / IPAD OR SMALLER
if (screen.width <= 1025){
	$('body').on('click',".mainNav li",function() {
		setTimeout(mobileMenuClose, 100);
	});
}

$(".menuToggle").on('click', function() {
	if($('.menuToggle').hasClass('navOpen')) {
		mobileMenuClose();
	} else {
		mobileMenuOpen();
	}
});
