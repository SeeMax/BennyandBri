<svg class="c-block-fill" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" x="0" y="0" class="c-block-fill">

  <!-- Stitching For Lines -->
  <filter id="div-border">
		<!-- FILL PATTERN -->
    <feTurbulence type="fractalNoise" baseFrequency='.251 1' result='flower-noise-1' numOctaves="1" />
		<feTurbulence type="fractalNoise" baseFrequency='1 .251' result='flower-noise-2' numOctaves="1" />
		<feTurbulence type="fractalNoise" baseFrequency='.5 .5' result='flower-noise-3' numOctaves="10" />
    <feDisplacementMap in="SourceGraphic" in2="flower-noise-1" scale="1" xChannelSelector="R" yChannelSelector="R" result="flower-1"></feDisplacementMap>
		<feDisplacementMap in="SourceGraphic" in2="flower-noise-2" scale="1" xChannelSelector="R" yChannelSelector="R" result="flower-2"></feDisplacementMap>
		<feDisplacementMap in="SourceGraphic" in2="flower-noise-3" scale="1" xChannelSelector="R" yChannelSelector="R" result="flower-3"></feDisplacementMap>
		<feComposite operator="out" in="SourceGraphic" in2="flower-noise-1" result="full-flower-1" />
		<feComposite operator="out" in="SourceGraphic" in2="flower-noise-2" result="full-flower-2" />
		<feComposite operator="out" in="SourceGraphic" in2="flower-noise-3" result="full-flower-3" />
    <!-- FILL PATTERN END -->

    <feOffset result="offOut" in="SourceAlpha" dx="0" dy="0" />
    <feGaussianBlur result="blurOut" in="offOut" stdDeviation="6" />
    <feColorMatrix in="blurOut" result="opacityOut" values="
    0 0 0 0 0
    0 0 0 0 0
    0 0 0 0 0
    0 0 0 1 0"/>
    <feBlend in="SourceGraphic" in2="opacityOut" mode="normal" result="shadowOut"/>

		<!-- FILL PATTERN -->
		<feFlood flood-color="#FFFFFF" result="COLOR-WHITE" />
		<feComposite in="COLOR-WHITE" in2="SourceAlpha" operator="in" result="flower-white" />
    <!-- FILL PATTERN END -->

		<!-- OUTLINE -->
    <feTurbulence baseFrequency="1 1" type="fractalNoise" numOctaves="1" seed="0" result="Texture_10" />
    <feMorphology operator="dilate" radius="2" in="SourceGraphic" result="OUTLINE_10" />
    <feComposite operator="out" in="OUTLINE_10" in2 = "SourceAlpha" result="OUTLINE_20" />
		<feDisplacementMap scale="3" in="OUTLINE_20" in2="Texture_10" result="OUTLINE_30" />
    <!-- OUTLINE END-->

		<feMerge result="BEVEL_50">
      <feMergeNode in="shadowOut" />
			<feMergeNode in="flower-white" />
      <feMergeNode in="full-flower-1" />
			<feMergeNode in="full-flower-2" />
			<feMergeNode in="full-flower-3" />
			<feMergeNode in="OUTLINE_30" />
    </feMerge>
  </filter>

  <rect class="div-border"/>
</svg>
