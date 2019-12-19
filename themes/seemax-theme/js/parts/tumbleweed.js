//USE THE BELOW AS TEMPLATE FOR FUNCTION FILES
//register the plugin (just once)
gsap.registerPlugin(MotionPathPlugin);
var tl = gsap.timeline();

tl.set(".tumbleweedSVGOne", {xPercent:-50, yPercent:-100, transformOrigin:"50% 50%", opacity:1});

tl.to(".tumbleweedSVGOne", {
  duration: 10,
  repeat: -1,
  repeatDelay: 5,
  ease: "power0.inOut",
  // strokeDashoffset:10,
  rotate:1120,
  motionPath:{
    path:"#tumbleweed-path-one",
    align:"#tumbleweed-path-one"
  }
});
