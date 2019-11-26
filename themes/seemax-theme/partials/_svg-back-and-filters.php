<svg <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" x="0" y="0" class="c-block-fill">

  <!-- Filter For The Frame -->
  <filter id='printonpaper' x='0%' y='0%' width='100%' height="100%">
    <feTurbulence type="fractalNoise" baseFrequency='0.05 0.05' result='age1' numOctaves="6" />
    <feDisplacementMap in="SourceGraphic" in2="age1" scale="3" xChannelSelector="R" yChannelSelector="R" result='age2'></feDisplacementMap>
    <feColorMatrix in="age2" result="age3" type="matrix"
        values="1 0 0 0 0
                0 1 0 0 0
                0 0 1 0 0
                0 0 0 .9 0" />
    <feBlend in="BackgroundImage" in2="age2" mode="multiply" result="age3"></feBlend>
  </filter>

  <!-- Stitching For Lines -->
  <filter id="page-border">
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

    <feOffset result="offOut" in="SourceAlpha" dx="2.3" dy="1.6" />
    <feGaussianBlur result="blurOut" in="offOut" stdDeviation="1" />
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


  <filter id="background-pattern">
    <feColorMatrix in="SourceGraphic" result="opacityOut" values="
    1 0 0 0 0
    0 1 0 0 0
    0 0 1 0 0
    0 0 0 .20 0"/>


		<!-- OUTLINE -->
    <feTurbulence baseFrequency="1 1" type="fractalNoise" numOctaves="1" seed="0" result="Texture_10" />
    <feMorphology operator="dilate" radius="3" in="SourceGraphic" result="OUTLINE_10" />
    <feComposite operator="out" in="OUTLINE_10" in2 = "SourceAlpha" result="OUTLINE_20" />
		<feDisplacementMap scale="2" in="OUTLINE_20" in2="Texture_10" result="OUTLINE_30" />
    <feColorMatrix in="OUTLINE_30" result="OUTLINE_40" values="
    1 0 0 0 0
    0 1 0 0 0
    0 0 1 0 0
    0 0 0 .40 0"/>
    <!-- OUTLINE END-->

		<feMerge result="BEVEL_50">
			<feMergeNode in="opacityOut" />
			<feMergeNode in="OUTLINE_40" />
    </feMerge>
  </filter>


  <!-- Stitching For Headlines -->
  <filter id="headline-stitch">
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

    <!-- Stitch Shadow -->
		<feOffset result="offOut" in="SourceAlpha" dx="2" dy="2" />
    <feGaussianBlur result="blurOut" in="offOut" stdDeviation="2" />
    <feColorMatrix in="blurOut" result="opacityOut" values="
    0 0 0 0 0
    0 0 0 0 0
    0 0 0 0 0
    0 0 0 0.75 0"/>
    <feBlend in="SourceGraphic" in2="opacityOut" mode="normal" result="shadowOut"/>
		<!-- Stitch Shadow End -->

		<!-- FILL PATTERN -->
		<feFlood flood-color="#FFFFFF" result="COLOR-WHITE" />
		<feComposite in="COLOR-WHITE" in2="SourceAlpha" operator="in" result="flower-white" />
    <!-- FILL PATTERN END -->

		<!-- OUTLINE -->
    <feTurbulence baseFrequency="1 1" type="fractalNoise" numOctaves="1" seed="0" result="Texture_10" />
    <feTurbulence baseFrequency=".0000005 1" type="fractalNoise" numOctaves="10" seed="0" result="Texture_1010" />
    <feMorphology operator="dilate" radius="2" in="SourceGraphic" result="OUTLINE_10" />
    <feComposite operator="out" in="OUTLINE_10" in2 = "SourceAlpha" result="OUTLINE_20" />
		<feDisplacementMap scale="3" in="OUTLINE_20" in2="Texture_10" result="OUTLINE_25" />
    <feDisplacementMap scale="3" in="OUTLINE_25" in2="Texture_1010" result="OUTLINE_25" />
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


  <filter id="headline-text">
    <feTurbulence type="fractalNoise" baseFrequency='0.0225 0.0225' result='age1' numOctaves="6" />
    <feDisplacementMap in="SourceGraphic" in2="age1" scale="2" xChannelSelector="R" yChannelSelector="R" result="rough-edges-final"></feDisplacementMap>
  </filter>

  <filter id="readable-text">
    <feTurbulence type="fractalNoise" baseFrequency='0.0025 0.00025' result='age1' numOctaves="6" />
    <feDisplacementMap in="SourceGraphic" in2="age1" scale="5" xChannelSelector="R" yChannelSelector="R" result="rough-edges-final"></feDisplacementMap>
  </filter>

  <rect class="page-border"/>
</svg>
