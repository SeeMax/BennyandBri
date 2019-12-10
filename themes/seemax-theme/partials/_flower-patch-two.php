<svg class="flower-patch flower-patch-two" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 374.7 374.7">
<style type="text/css">
	.flower-svg-two1{fill:#CE9A51;}
	.flower-svg-two3{fill:#C62B2A;}
	.flower-svg-two4{fill:#36442F;}
	.flower-svg-two5{fill:#F4EAE0;}
	.flower-svg-two6{fill:#87916D;}
</style>

  <filter id="patch-shadow-two" x="-50%" y="-50%" width="200%" height="200%">
		<!-- Flower Shadow -->
		<feOffset result="offOut" in="SourceAlpha" dx="-1" dy="1" />
		<feGaussianBlur result="flower-shadow-1" in="offOut" stdDeviation="1.5" />
		<feColorMatrix in="flower-shadow-1" result="flower-shadow-2" values="0 0 0 0 0
		0 0 0 0 0
		0 0 0 0 0
		0 0 0 0.5 0"/>
		<feBlend in="SourceGraphic" in2="flower-shadow-2" mode="normal" result="flower-shadow-3"/>
		<!-- Flower Shadow -->
  </filter>

	<filter id="patch-pieces-two">
		<!-- Flower White Back -->
		<feFlood flood-color="#FFFFFF" result="flower-back-1" />
		<feComposite in="flower-back-1" in2="SourceAlpha" operator="in" result="flower-back-2" />
    <!-- Flower White Back End -->
		<!-- Flower Fill -->
    <feTurbulence type="fractalNoise" baseFrequency='.251 1' result='flower-noise-1' numOctaves="1" />
		<feTurbulence type="fractalNoise" baseFrequency='1 .251' result='flower-noise-2' numOctaves="1" />
		<feTurbulence type="fractalNoise" baseFrequency='.5 .5' result='flower-noise-3' numOctaves="10" />
    <feDisplacementMap in="SourceGraphic" in2="flower-noise-1" scale="1" xChannelSelector="R" yChannelSelector="R" result="flower-1"></feDisplacementMap>
		<feDisplacementMap in="SourceGraphic" in2="flower-noise-2" scale="1" xChannelSelector="R" yChannelSelector="R" result="flower-2"></feDisplacementMap>
		<feDisplacementMap in="SourceGraphic" in2="flower-noise-3" scale="1" xChannelSelector="R" yChannelSelector="R" result="flower-3"></feDisplacementMap>
		<feComposite operator="out" in="SourceGraphic" in2="flower-noise-1" result="full-flower-1" />
		<feComposite operator="out" in="SourceGraphic" in2="flower-noise-2" result="full-flower-2" />
		<feComposite operator="out" in="SourceGraphic" in2="flower-noise-3" result="full-flower-3" />
    <!-- Flower Fill End -->
		<!-- Flower Border -->
    <feTurbulence baseFrequency="1 1" type="fractalNoise" numOctaves="1" seed="0" result="flower-border-texture-1" />
    <feMorphology color-interpolation-filters="sRGB" operator="dilate" radius="3" in="SourceGraphic" result="flower-border-1" />
    <feComposite operator="out" in="flower-border-1" in2 = "SourceAlpha" result="flower-border-2" />
		<feDisplacementMap scale="5" in="flower-border-2" in2="flower-border-texture-1" result="flower-border-3" />
    <!-- Flower Border End -->
		<!-- Flower Merge -->
		<feMerge>
			<feMergeNode in="flower-back-2" />
      <feMergeNode in="full-flower-1" />
			<feMergeNode in="full-flower-2" />
			<feMergeNode in="full-flower-3" />
			<feMergeNode in="flower-border-3" />
    </feMerge>
		<!-- Flower Merge End -->
  </filter>
	<g filter="url(#patch-shadow-two)" class="petals">
		<path filter="url(#patch-pieces-two)" class="flower-svg-two1" d="M257.9,150.6c-4.8-10-14.1-17.2-24.6-19.6c-9.9-2.2-21-0.2-30.3,8c-5.4,4.8-9.2,13.3-12.5,23.6
			c1.8-9.2,2.4-17.7,0.3-24.8c-2.2-7.2-6.3-12.7-11.6-16.5c-13.4-9.8-34.1-9-47.1,2.2c15.2-7.3,34.8-0.7,41.2,20.4
			c7.5,24.8-20,67.8-8.3,97.9c1.6,4,2.4,6.8,2.6,8.6c1.1-0.6,2.5-1.2,4.1-2c29.8-14.4,29.2-83.7,52-97.1
			C235.5,144.4,248,145.1,257.9,150.6z"/>
		<path filter="url(#patch-pieces-two)" class="flower-svg-two3" d="M233.1,131c-2.3-9.3-8.5-17-17.4-20.4c-0.3-0.1-0.5-0.2-0.8-0.3c-8.8,7.9-16.8,16.5-21,36.1
			c4.4-20.4,4.7-27.2,13.7-36.6c-12.5-1-19.5,1.5-28.5,11.4c5.3,3.9,9.4,9.4,11.6,16.5c2.2,7,1.5,15.5-0.3,24.8
			c3.2-10.3,7.1-18.8,12.5-23.6C212.2,130.7,223.3,128.7,233.1,131z"/>
		<path filter="url(#patch-pieces-two)" class="flower-svg-two3" d="M168,254.6c1.2,1,2.5,1.8,3.7,2.4c24.5,11.6,46.9-60.4,57.4-76.4c11.1-16.8,21.9-11.9,31.9-4.8
			c10,7.1,12.5,20.5,12.5,20.5c8.1-19.2-0.8-37.9-15.7-46c-9.9-5.4-22.3-6.1-34.1,0.8c-22.8,13.5-22.2,82.8-52,97.1
			c-1.6,0.8-3,1.5-4.1,2c-0.2-1.8-1-4.6-2.6-8.6c-11.7-30,15.9-73,8.3-97.9c-6.4-21.1-25.9-27.7-41.2-20.4c-8,3.8-14.8,11.5-18,22.8
			c0,0,9.3-8.6,20.1-7.6c10.7,1,20.8,4.3,18.5,24.2c-2.1,18.4-17.2,80.2,3.8,89.9c1.2,0.5,2.5,0.9,3.9,1.1l0,0
			c0.7,0.1,1.4,0.2,2.1,0.2c1.4,0,2.7,0.3,3.7,0C166.8,254.1,167.4,254.5,168,254.6z"/>
	</g>
	<g filter="url(#patch-shadow-two)" class="right-leaf">
		<path filter="url(#patch-pieces-two)" class="flower-svg-two4" d="M158.2,55c0,21.8,10.6,44.7,18.5,44.7l0,0c-0.1,0-0.3-0.1-0.5-0.2c-4.8-1.9-10.6-17.3-10.6-32.1
			c0-12.3,5.5-20,10.6-24.1c0.1-0.3,0.3-0.6,0.5-0.8c0,0,0.1,0.1,0.1,0.2c0.1,0,0.2-0.1,0.3-0.2c5.7,5.4,9.7,13.3,9.7,24.9
			c0,14.3-3.9,29.2-8.3,31.9c7.2-3.1,13.6-24.2,13.6-44.3c0-16-6.3-27-15.4-34.4C168.2,25.9,158.1,36.8,158.2,55z"/>
		<path filter="url(#patch-pieces-two)" class="flower-svg-two5" d="M176.8,99.7c0.1,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2,0c0.5,0,0.9-0.1,1.4-0.4c4.5-2.7,8.3-17.6,8.3-31.9
			c0-11.6-4-19.6-9.7-24.9c-0.1,0-0.2,0.1-0.3,0.2c3.1,5.3,5.2,13.2,5.2,24.6C182,82.8,179.5,99.1,176.8,99.7z"/>
		<path filter="url(#patch-pieces-two)" class="flower-svg-two5" d="M170.2,67.4c0-12.3,3.1-20,5.9-24.1c-5,4.1-10.6,11.8-10.6,24.1c0,14.7,5.8,30.2,10.6,32.1
			C173.5,97.5,170.3,82.1,170.2,67.4z"/>
		<path filter="url(#patch-pieces-two)" class="flower-svg-two6" d="M176.2,99.3c0.1,0.1,0.3,0.2,0.5,0.2l0,0l0,0h0.1c2.7-0.6,5.2-16.8,5.2-32.3c0-11.4-2.1-19.3-5.2-24.6
			c0,0-0.1-0.1-0.1-0.2c-0.1,0.3-0.3,0.5-0.5,0.8c-2.8,4.1-5.9,11.8-5.9,24.1C170.3,82.1,173.5,97.5,176.2,99.3z"/>
	</g>
	<g filter="url(#patch-shadow-two)" class="left-leaf">
		<path filter="url(#patch-pieces-two)" class="flower-svg-two4" d="M243.5,117.7c0,0,0.1,0.1,0.1,0.2C242,112.7,255,99.7,270,93.4c12.7-5.2,23-2.1,29,1.7
			c-2.7,7.8-8.7,15.1-19.9,19.7c-13.9,5.7-29.9,7.9-34.4,4.5c6.1,6,29.1,3.9,48.6-4.2c15.4-6.5,23.4-17.3,26.6-29.4
			c-8.8-6.4-23.6-12.1-41.1-4.8C257.6,89.7,240.1,109.6,243.5,117.7z"/>
		<path filter="url(#patch-pieces-two)" class="flower-svg-two5" d="M297.8,94.4c-6.1-3.5-15.9-6-27.8-1c-14.2,5.9-26.6,17.9-26.5,23.5c0.5-4.3,13.6-14.5,27.8-20.4
			C283.2,91.5,292.3,92.4,297.8,94.4z"/>
		<path filter="url(#patch-pieces-two)" class="flower-svg-two5" d="M243.5,117.8c0.1,0.1,0.1,0.1,0.1,0.2c0.2,0.4,0.5,0.9,1,1.2c4.5,3.4,20.6,1.3,34.4-4.5
			c11.2-4.7,17.2-11.9,19.9-19.7c-0.1,0-0.1-0.1-0.2-0.1c-3.5,6.1-9.9,12.1-21,16.7C262.6,117.8,245.4,121.2,243.5,117.8z"/>
		<path filter="url(#patch-pieces-two)" class="flower-svg-two6" d="M243.4,117.8l0.1,0.1c1.8,3.3,19,0,34.1-6.3c11.1-4.6,17.6-10.6,21-16.7c0-0.1,0.1-0.1,0.1-0.2
			c-0.3-0.1-0.6-0.3-1-0.4c-5.5-1.9-14.6-2.8-26.5,2.2c-14.2,5.9-27.2,16.2-27.8,20.4C243.4,117.2,243.4,117.5,243.4,117.8z"/>
	</g>
	<g filter="url(#patch-shadow-two)" class="bottom-leaf">
		<path filter="url(#patch-pieces-two)" class="flower-svg-two4" d="M163.3,308.3v0.1c-0.1-0.3-0.1-0.6,0-0.9c0.8-6.9,17.8-19,35.8-23.3c15-3.5,26.2,1.5,32.8,7
			c0.4,0.2,0.7,0.5,1.1,0.7c0,0.1-0.1,0.1-0.1,0.2s0.1,0.1,0.2,0.2c-4.7,9-13.2,16.5-27.3,19.9c-17.5,4.1-36.9,3.4-41.6-1.6
			c6.1,8.5,33.8,10.8,58.4,4.9c19.6-4.7,31-16.2,37.1-30.3c-9.2-9.6-25.8-19.7-47.9-14.4C185.1,277.2,160.5,297.8,163.3,308.3z"/>
		<path filter="url(#patch-pieces-two)" class="flower-svg-two5" d="M163.1,308.6c0,0,0,0.1,0,0.2c0.2,0.6,0.5,1.2,1,1.7c4.7,5.1,24.1,5.8,41.6,1.6c14.2-3.3,22.6-10.9,27.3-19.9
			c0-0.1-0.1-0.1-0.2-0.2c-5.2,6.7-14,12.7-28,16C185.7,312.5,164.7,313,163.1,308.6z"/>
		<path filter="url(#patch-pieces-two)" class="flower-svg-two5" d="M231.8,291.2c-6.6-5.5-17.8-10.6-32.8-7c-18,4.3-35,16.4-35.8,23.3c1.2-5,18.8-14.9,36.8-19.2
			C215,284.7,225.7,287.6,231.8,291.2z"/>
		<path filter="url(#patch-pieces-two)" class="flower-svg-two6" d="M163,308.3v0.1c0.1,0.1,0.1,0.1,0.1,0.2c1.5,4.5,22.5,3.9,41.6-0.6c14-3.3,22.8-9.3,28-16
			c0-0.1,0.1-0.1,0.1-0.2c-0.3-0.2-0.7-0.5-1.1-0.7c-6.1-3.5-16.8-6.4-31.8-2.8c-18,4.3-35.5,14.2-36.8,19.2
			C163.1,307.8,163.1,308.1,163,308.3z"/>
	</g>
	<g filter="url(#patch-shadow-two)" class="flower-stems">
		<path filter="url(#patch-pieces-two)" class="flower-svg-two4" d="M55,347.7c-0.1,0.7,0,1.3,0.1,1.9c0.7,2.9,3.3,4.8,6.1,4.8c0.5,0,0.9-0.1,1.4-0.2c1.6-0.4,40.1-9.5,72.1-41.8
			c13.2-13.4,23.2-26,29.7-37.4c5-8.7,6-13.6,6.2-14.5c0.1-0.4,0.1-0.7,0.1-1.1c-1.2-0.6-2.5-1.4-3.7-2.4c-0.6-0.5-1.2-0.8-1.8-1
			c-1,0.2-2.3,0-3.7,0c-0.7,0-1.4-0.1-2.1-0.2c-0.2,0.4-0.4,0.7-0.6,1.1l0,0c-0.1,0.1-0.1,0.3-0.2,0.5v0.1c-0.1,0.2-0.2,0.4-0.2,0.6
			c-0.1,0.1-3.8,16.4-32.6,45.5c-29.3,29.6-65.6,38.3-66,38.4C57.1,342.6,55.2,344.9,55,347.7z"/>
		<path filter="url(#patch-pieces-two)" class="flower-svg-two6" d="M55.1,347.3c0.2-2.6,2.1-4.9,4.8-5.5c0.3-0.1,36.7-8.8,66-38.4c28.8-29,32.6-45.3,32.6-45.5
			c0.1-0.2,0.1-0.4,0.2-0.6v-0.1c0.1-0.1,0.1-0.3,0.2-0.5l0,0c0.2-0.4,0.4-0.8,0.6-1.1c-1.5-0.2-2.7-0.6-3.9-1.1
			c-1.6,4.9-8.8,22.3-33.6,47.4c-19.3,19.5-39.3,27-52.6,32c-1.4,0.5-2.7,1-3.9,1.5c-4.4,1.7-10.3,4.5-10.7,9.8
			C54.7,346,54.8,346.8,55.1,347.3z"/>
	</g>
</svg>
