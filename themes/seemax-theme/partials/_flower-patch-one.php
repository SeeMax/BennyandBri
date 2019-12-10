<svg class="flower-patch" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 374.7 374.7">
<style type="text/css">
	.flower-svg1{fill:#CE9A51;}
	.flower-svg3{fill:#C62B2A;}
	.flower-svg4{fill:#36442F;}
	.flower-svg5{fill:#F4EAE0;}
	.flower-svg6{fill:#87916D;}
</style>

  <filter id="patch-shadow" x="-50%" y="-50%" width="200%" height="200%">
		<!-- Flower Shadow -->
		<feOffset result="offOut" in="SourceAlpha" dx="-1" dy="1" />
		<feGaussianBlur result="flower-shadow-1" in="offOut" stdDeviation="2" />
		<feColorMatrix in="flower-shadow-1" result="flower-shadow-2" values="0 0 0 0 0
		0 0 0 0 0
		0 0 0 0 0
		0 0 0 0.5 0"/>
		<feBlend in="SourceGraphic" in2="flower-shadow-2" mode="normal" result="flower-shadow-3"/>
		<!-- Flower Shadow -->
  </filter>

	<filter id="patch-pieces" x="-50%" y="-50%" width="200%" height="200%">
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
	<g filter="url(#patch-shadow)" class="petals">
		<path filter="url(#patch-pieces)" class="flower-svg1" d="M151,151.3c22.8,13.4,22.2,82.7,52,97.1c1.6,0.8,3,1.4,4.1,2c0.2-1.8,1-4.6,2.6-8.6
			c11.7-30.1-15.8-73.1-8.3-97.9c6.4-21.1,26-27.7,41.2-20.4c-13-11.2-33.7-12-47.1-2.2c-5.3,3.8-9.4,9.3-11.6,16.5
			c-2.1,7.1-1.5,15.6,0.3,24.8c-3.3-10.3-7.1-18.8-12.5-23.6c-9.3-8.2-20.4-10.2-30.3-8c-10.5,2.4-19.8,9.6-24.6,19.6
			C126.7,145.1,139.2,144.4,151,151.3z"/>
		<path filter="url(#patch-pieces)" class="flower-svg3 petal-inside" d="M171.8,138.9c5.4,4.8,9.3,13.3,12.5,23.6c-1.8-9.3-2.5-17.8-0.3-24.8c2.2-7.1,6.3-12.6,11.6-16.5
			c-9-9.9-16-12.4-28.5-11.4c9,9.4,9.3,16.2,13.7,36.6c-4.2-19.6-12.2-28.2-21-36.1c-0.3,0.1-0.5,0.2-0.8,0.3
			c-8.9,3.4-15.1,11.1-17.4,20.4C151.4,128.7,162.5,130.7,171.8,138.9z"/>
		<path filter="url(#patch-pieces)" class="flower-svg3" d="M208.5,253.9c1,0.3,2.3,0,3.7,0c0.7,0,1.4-0.1,2.1-0.2l0,0c1.4-0.2,2.7-0.6,3.9-1.1c21-9.7,5.9-71.5,3.8-89.9
			c-2.3-19.9,7.8-23.2,18.5-24.2c10.8-1,20.1,7.6,20.1,7.6c-3.2-11.3-10-19-18-22.8c-15.3-7.3-34.8-0.7-41.2,20.4
			c-7.6,24.9,20,67.9,8.3,97.9c-1.6,4-2.4,6.8-2.6,8.6c-1.1-0.5-2.5-1.2-4.1-2c-29.8-14.3-29.2-83.6-52-97.1
			c-11.8-6.9-24.2-6.2-34.1-0.8c-14.9,8.1-23.8,26.8-15.7,46c0,0,2.5-13.4,12.5-20.5c10-7.1,20.8-12,31.9,4.8
			c10.5,16,32.9,88,57.4,76.4c1.2-0.6,2.5-1.4,3.7-2.4C207.3,254.5,207.9,254.1,208.5,253.9z"/>
	</g>
	<g filter="url(#patch-shadow)" class="right-leaf">
		<path filter="url(#patch-pieces)" class="flower-svg4" d="M198,20.6c-9.1,7.4-15.4,18.4-15.4,34.4c0,20.1,6.4,41.2,13.6,44.3c-4.4-2.7-8.3-17.6-8.3-31.9
			c0-11.6,4-19.5,9.7-24.9c0.1,0.1,0.2,0.2,0.3,0.2c0-0.1,0.1-0.2,0.1-0.2c0.2,0.2,0.4,0.5,0.5,0.8c5.1,4.1,10.6,11.8,10.6,24.1
			c0,14.8-5.8,30.2-10.6,32.1c-0.2,0.1-0.4,0.2-0.5,0.2c0,0,0,0,0,0c7.9,0,18.5-22.9,18.5-44.7C216.6,36.8,206.5,25.9,198,20.6z"/>
		<path filter="url(#patch-pieces)" class="flower-svg5" d="M192.7,67.3c0-11.4,2.1-19.3,5.2-24.6c-0.1-0.1-0.2-0.2-0.3-0.2c-5.7,5.3-9.7,13.3-9.7,24.9
			c0,14.3,3.8,29.2,8.3,31.9c0.5,0.3,0.9,0.4,1.4,0.4c0.1,0,0.1,0,0.2,0c0,0,0,0,0.1,0C195.2,99.1,192.7,82.8,192.7,67.3z"/>
		<path filter="url(#patch-pieces)" class="flower-svg5" d="M198.6,99.5c4.8-1.9,10.6-17.4,10.6-32.1c0-12.3-5.6-20-10.6-24.1c2.8,4.1,5.9,11.8,5.9,24.1
			C204.4,82.1,201.2,97.5,198.6,99.5z"/>
		<path filter="url(#patch-pieces)" class="flower-svg6" d="M204.4,67.3c0-12.3-3.1-20-5.9-24.1c-0.2-0.3-0.4-0.5-0.5-0.8c0,0.1-0.1,0.2-0.1,0.2
			c-3.1,5.3-5.2,13.2-5.2,24.6c0,15.5,2.5,31.7,5.2,32.3c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c0.2,0,0.4-0.1,0.5-0.2
			C201.2,97.5,204.4,82.1,204.4,67.3z"/>
	</g>
	<g filter="url(#patch-shadow)" class="left-leaf">
		<path filter="url(#patch-pieces)" class="flower-svg4" d="M95.9,80.9c-17.5-7.3-32.3-1.6-41.1,4.8C58,97.8,66,108.6,81.4,115.1c19.5,8.1,42.5,10.2,48.6,4.2
			c-4.5,3.4-20.5,1.2-34.4-4.5c-11.2-4.6-17.2-11.9-19.9-19.7c6-3.8,16.3-6.9,29-1.7c15,6.3,28,19.3,26.4,24.5c0-0.1,0.1-0.2,0.1-0.2
			C134.6,109.6,117.1,89.7,95.9,80.9z"/>
		<path filter="url(#patch-pieces)" class="flower-svg5" d="M103.4,96.5c14.2,5.9,27.3,16.1,27.8,20.4c0.1-5.6-12.3-17.6-26.5-23.5c-11.9-5-21.7-2.5-27.8,1
			C82.4,92.4,91.5,91.5,103.4,96.5z"/>
		<path filter="url(#patch-pieces)" class="flower-svg5" d="M97,111.6C85.9,107,79.5,101,76,94.9c-0.1,0-0.1,0.1-0.2,0.1c2.7,7.8,8.7,15,19.9,19.7
			c13.8,5.8,29.9,7.9,34.4,4.5c0.5-0.3,0.8-0.8,1-1.2c0-0.1,0-0.1,0.1-0.2C129.3,121.2,112.1,117.8,97,111.6z"/>
		<path filter="url(#patch-pieces)" class="flower-svg6" d="M131.3,116.9c-0.6-4.2-13.6-14.5-27.8-20.4c-11.9-5-21-4.1-26.5-2.2c-0.4,0.1-0.7,0.3-1,0.4
			c0,0.1,0.1,0.1,0.1,0.2c3.4,6.1,9.9,12.1,21,16.7c15.1,6.3,32.3,9.6,34.1,6.3c0,0,0.1-0.1,0.1-0.1
			C131.3,117.5,131.3,117.2,131.3,116.9z"/>
	</g>
	<g filter="url(#patch-shadow)" class="bottom-leaf">
		<path filter="url(#patch-pieces)" class="flower-svg4" d="M162.9,270.8c-22.1-5.3-38.7,4.8-47.9,14.4c6.1,14.1,17.5,25.6,37.1,30.3c24.6,5.9,52.3,3.6,58.4-4.9
		c-4.7,5-24.1,5.7-41.6,1.6c-14.1-3.4-22.6-10.9-27.3-19.9c0.1-0.1,0.2-0.1,0.2-0.2c0-0.1-0.1-0.1-0.1-0.2c0.4-0.2,0.7-0.5,1.1-0.7
		c6.6-5.5,17.8-10.5,32.8-7c18,4.3,35,16.4,35.8,23.3c0.1,0.3,0.1,0.6,0,0.9c0,0,0-0.1,0-0.1C214.2,297.8,189.6,277.2,162.9,270.8z"
		/>
		<path filter="url(#patch-pieces)" class="flower-svg5" d="M169.9,308c-14-3.3-22.8-9.3-28-16c-0.1,0.1-0.2,0.1-0.2,0.2c4.7,9,13.1,16.6,27.3,19.9
		c17.5,4.2,36.9,3.5,41.6-1.6c0.5-0.5,0.8-1.1,1-1.7c0-0.1,0-0.2,0-0.2C210,313,189,312.5,169.9,308z"/>
		<path filter="url(#patch-pieces)" class="flower-svg5" d="M174.7,288.3c18,4.3,35.6,14.2,36.8,19.2c-0.8-6.9-17.8-19-35.8-23.3c-15-3.6-26.2,1.5-32.8,7
		C149,287.6,159.7,284.7,174.7,288.3z"/>
		<path filter="url(#patch-pieces)" class="flower-svg6" d="M211.6,307.5c-1.3-5-18.8-14.9-36.8-19.2c-15-3.6-25.7-0.7-31.8,2.8c-0.4,0.2-0.8,0.5-1.1,0.7
		c0,0.1,0.1,0.1,0.1,0.2c5.2,6.7,14,12.7,28,16c19.1,4.5,40.1,5.1,41.6,0.6c0-0.1,0-0.1,0.1-0.2c0,0,0-0.1,0-0.1
		C211.6,308.1,211.6,307.8,211.6,307.5z"/>
	</g>
	<g filter="url(#patch-shadow)" class="flower-stems">
		<path filter="url(#patch-pieces)" class="flower-svg4" d="M314.9,342c-0.4-0.1-36.7-8.8-66-38.4c-28.8-29.1-32.5-45.4-32.6-45.5c0-0.2-0.1-0.4-0.2-0.6c0,0,0-0.1,0-0.1
			c-0.1-0.2-0.1-0.4-0.2-0.5c0,0,0,0,0,0c-0.2-0.4-0.4-0.7-0.6-1.1c-0.7,0.1-1.4,0.2-2.1,0.2c-1.4,0-2.7,0.2-3.7,0
			c-0.6,0.2-1.2,0.5-1.8,1c-1.2,1-2.5,1.8-3.7,2.4c0,0.4,0,0.7,0.1,1.1c0.2,0.9,1.2,5.8,6.2,14.5c6.5,11.4,16.5,24,29.7,37.4
			c32,32.3,70.5,41.4,72.1,41.8c0.5,0.1,0.9,0.2,1.4,0.2c2.8,0,5.4-1.9,6.1-4.8c0.1-0.6,0.2-1.2,0.1-1.9
			C319.5,344.9,317.6,342.6,314.9,342z"/>
		<path filter="url(#patch-pieces)" class="flower-svg6" d="M319.9,345.2c-0.4-5.3-6.3-8.1-10.7-9.8c-1.2-0.5-2.5-1-3.9-1.5c-13.3-5-33.3-12.5-52.6-32
			c-24.8-25.1-32-42.5-33.6-47.4c-1.2,0.5-2.4,0.9-3.9,1.1c0.2,0.3,0.4,0.7,0.6,1.1c0,0,0,0,0,0c0.1,0.2,0.1,0.4,0.2,0.5
			c0,0,0,0.1,0,0.1c0.1,0.2,0.1,0.4,0.2,0.6c0,0.2,3.8,16.5,32.6,45.5c29.3,29.6,65.7,38.3,66,38.4c2.7,0.6,4.6,2.9,4.8,5.5
			C319.9,346.8,320,346,319.9,345.2z"/>
	</g>
</svg>