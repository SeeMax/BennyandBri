<svg class="filter-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1000 1000">

  <!-- Stitching For Headlines -->
  <filter id="headline-stitch" x="-50%" y="-50%" width="200%" height="200%">
    <!-- Text Fill -->
    <feTurbulence type="fractalNoise" baseFrequency='.251 1' result='text-noise-1' numOctaves="1" />
    <feTurbulence type="fractalNoise" baseFrequency='1 .251' result='text-noise-2' numOctaves="1" />
    <feTurbulence type="fractalNoise" baseFrequency='.5 .5' result='text-noise-3' numOctaves="10" />
    <feDisplacementMap in="SourceGraphic" in2="text-noise-1" scale="1" xChannelSelector="R" yChannelSelector="R" result="text-1"></feDisplacementMap>
    <feDisplacementMap in="SourceGraphic" in2="text-noise-2" scale="1" xChannelSelector="R" yChannelSelector="R" result="text-2"></feDisplacementMap>
    <feDisplacementMap in="SourceGraphic" in2="text-noise-3" scale="1" xChannelSelector="R" yChannelSelector="R" result="text-3"></feDisplacementMap>
    <feComposite operator="out" in="SourceGraphic" in2="text-noise-1" result="full-text-1" />
    <feComposite operator="out" in="SourceGraphic" in2="text-noise-2" result="full-text-2" />
    <feComposite operator="out" in="SourceGraphic" in2="text-noise-3" result="full-text-3" />
    <!-- Text Fill End -->

		<!-- Text Backing -->
		<feFlood flood-color="#FFFFFF" result="text-white-back-1" />
		<feComposite in="text-white-back-1" in2="SourceAlpha" operator="in" result="text-white-back-1" />
    <!-- Text Backing End -->

		<!-- Text Outline -->
    <feTurbulence baseFrequency="1 1" type="fractalNoise" numOctaves="1" seed="0" result="text-texture-1" />
    <feMorphology color-interpolation-filters="sRGB" operator="dilate" radius="2" in="SourceGraphic" result="text-border-1" />
    <feComposite operator="out" in="text-border-1" in2 ="SourceAlpha" result="text-border-2" />
		<feDisplacementMap scale="1" in="text-border-2" in2="text-texture-1" result="text-border-3" />
    <feTurbulence baseFrequency="0.000003 1" type="fractalNoise" numOctaves="10" result="text-texture-2" />
    <feDisplacementMap scale="3" in="text-border-3" in2="text-texture-1" result="text-border-4" />
    <!-- Text Outline End -->

    <!-- Text Shadow -->
    <feOffset result="text-shadow-0" in="SourceGraphic" dx="2" dy="2" />
		<feGaussianBlur result="text-shadow-1" in="text-shadow-0" stdDeviation="1.7" />
		<feColorMatrix in="text-shadow-1" result="text-shadow-2" values="0 0 0 0 0
		0 0 0 0 0
		0 0 0 0 0
		0 0 0 0.95 0"/>
		<feBlend in="SourceGraphic" in2="text-shadow-2" mode="normal" result="text-shadow-3"/>
    <!-- Text Shadow End -->

		<feMerge>
      <feMergeNode in="text-shadow-3" />
			<feMergeNode in="text-white-back-1" />
      <feMergeNode in="full-text-1" />
			<feMergeNode in="full-text-2" />
			<feMergeNode in="full-text-3" />
      <feMergeNode in="text-border-4" />
    </feMerge>
  </filter>
</svg>
