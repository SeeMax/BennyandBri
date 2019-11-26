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
