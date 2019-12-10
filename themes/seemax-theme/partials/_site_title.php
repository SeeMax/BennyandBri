<svg class="site-title" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
viewBox="0 0 820.9 315.4">
  <style type="text/css">
    .site-title-letters{fill:#CE9A51;}
    .site-title-letters{fill:#C62B2A;}
    .site-title-letters{fill:#36442F;}
    /* .site-title-letters{fill:#F4EAE0;} */
    /* .site-title-letter-2{fill:#87916D;} */
  </style>
  <filter id="title-shadow" x="-50%" y="-50%" width="200%" height="200%">
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

	<filter id="title-pieces" x="-50%" y="-50%" width="200%" height="200%">
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
    <feMorphology color-interpolation-filters="sRGB" operator="dilate" radius="4" in="SourceGraphic" result="flower-border-1" />
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
  <g filter="url(#title-shadow)" class="site-title-letters">
    <path filter="url(#title-pieces)" d="M193.7,152.2v-0.7c30-4.9,57.6-19.1,57.6-53.4c0-38.9-35-57.6-80.2-57.6H30.5v18.4h26.1c11.7,0,16.3,6.7,16.3,18.4v160.8
  		c0,12-7.1,18.4-18.4,18.4h-24v18.4h121.2c77,0,108.1-23,108.1-62.2C259.8,172,229.7,156.8,193.7,152.2z M107.1,58.9h46.6
  		c48.4,0,63.2,15.9,63.2,42.8c0,27.6-24,42-63.2,42h-46.6V58.9z M157.7,256.5h-50.5v-94.3h50.5c36,0,64.3,8.8,64.3,47.3
  		S193.7,256.5,157.7,256.5z"/>
  	<path filter="url(#title-pieces)" d="M493.3,259.3c-18,0-27.9-9.5-37.1-22.6l47.3-65.7c10.6-14.8,15.5-18.4,30.4-18.4h10.2v-18.4H441.1v18.4h12
  		c12.7,0,23.7,2.5,23.7,18c0,10.6-14.8,29-21.2,37.1l-12.4,15.5c-22.6-23-39.2-51.6-56.5-78.8c25.1-15.2,51.2-35.7,51.2-63.2
  		c0-28.3-21.9-47.7-49.8-47.7c-33.6,0-56.9,22.6-56.9,56.5c0,16.6,6,33.6,15.5,47.3c-29,17.3-63.6,30.7-63.6,72.8
  		c0,48.8,36,71.7,81.3,71.7c24,0,49.5-5.7,68.5-20.8c14.1,12.4,31.8,20.8,50.9,20.8c48.4,0,60.8-34.3,60.8-76.3h-18.4
  		C526.2,227.8,520.2,259.3,493.3,259.3z M387.7,52.6c14.5,0,24,12.4,24,26.9c0,22.3-18.4,34.6-35.7,45.2
  		c-6.7-9.9-14.8-26.1-14.8-38.2C361.2,68.5,370,52.6,387.7,52.6z M372.5,259.3c-32.5,0-55.1-19.8-55.1-53
  		c0-24.7,18.4-37.8,38.2-48.4c18,30.7,37.8,60.8,61.8,87.3C405.4,253.3,387,259.3,372.5,259.3z"/>
  	<path filter="url(#title-pieces)" d="M724.3,152.2v-0.7c30-4.9,57.6-19.1,57.6-53.4c0-38.9-35-57.6-80.2-57.6H561.1v18.4h26.1c11.7,0,16.3,6.7,16.3,18.4v160.8
  		c0,12-7.1,18.4-18.4,18.4h-24v18.4h121.2c77,0,108.1-23,108.1-62.2C790.4,172,760.4,156.8,724.3,152.2z M637.8,58.9h46.6
  		c48.4,0,63.2,15.9,63.2,42.8c0,27.6-24,42-63.2,42h-46.6V58.9z M688.3,256.5h-50.5v-94.3h50.5c36,0,64.3,8.8,64.3,47.3
  		S724.3,256.5,688.3,256.5z"/>
  </g>
</svg>
