<svg class="lady-flower-full" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1000 500">
  <style type="text/css">
  	.lady-flower-0{fill:#B9B1DD;}
  	.lady-flower-1{fill:#C62B2A;}
  	.lady-flower-2{fill:#21582E;}
  	.lady-flower-3{fill:#48405F;}
    .lady-flower-4{fill:#CE9A51;}
    .lady-flower-3{fill:#758A41;}
  </style>

  <filter id="lady-flower-shadow" x="-50%" y="-50%" width="200%" height="200%">
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

  <filter id="lady-flower-pieces" x="-50%" y="-50%" width="200%" height="200%">
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

  <g filter="url(#lady-flower-shadow)" >
    <path filter="url(#lady-flower-pieces)" class="lady-flower-1" d="M435.1,262.5c-8.4-52.5,33.5-92.8,56.7-89.8C508.4,189.2,481.7,246.6,435.1,262.5z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-1" d="M546.3,329c11.3-48.9,50.7-79.6,72.2-83.2C631.1,267.6,607.1,330.9,546.3,329z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-1" d="M581.9,232.4c-43.5,7.4-65.4-51.8-57-70.8C557.3,162.4,583.8,184.9,581.9,232.4z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-1" d="M459,276.4c31.6-27.7,73.5-18.1,90.9-2.2C529.5,299.5,477.3,303.6,459,276.4z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-2" d="M752,202.3c-0.3-40.3,35.4-69.5,57.7-72.2C809.7,162,782.3,198.7,752,202.3z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-2" d="M622.9,305.5c41.6-16.1,97.8,59.1,98.8,92.8C676.9,408.2,608.9,342.9,622.9,305.5z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-2" d="M640,254c41-29.5,124.9,26.3,135.9,59.2C729.7,337.6,635.7,295.5,640,254z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-2" d="M782.1,229.8c28.3-20.6,77.1,3.8,85.1,18.6C847.2,263.8,783.5,249.9,782.1,229.8z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-2" d="M872.3,225c26.7-24.8,83.8,17.7,89.2,33.6C939.1,270.4,870.2,245,872.3,225z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-2" d="M643.5,226.1c-9-38,39.5-79.3,64.4-82.4C707.9,180.2,673.6,233,643.5,226.1z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-1" d="M433.8,289.5c19.4,41.5,48.6,50.1,96,28.4C466.2,414.2,404.2,337.6,433.8,289.5z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-1" d="M841.7,135.9c-2.9,34.1,6,51.8,43.8,48.1C850.4,235.2,787.7,184,841.7,135.9z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-1" d="M526,136.8c-19.3-10.2-48-15.5-57,21.1c-34.9-9.9-47.1,8.8-51.4,34.1C379.4,126.6,489.1,61,526,136.8z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-1" d="M413.9,208.8c-21.7,33.1-19.6,52.1,8.1,73.3C345,299.4,356.7,193.8,413.9,208.8z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-1" d="M608.2,226.5c1.9-47-16.4-69.9-62.6-90.8C611.8,107.5,663.5,192.4,608.2,226.5z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-1" d="M498.1,228.6c2.4-14,24.9-13.7,24.7,0.8C521.2,244,497.2,241.7,498.1,228.6z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-1" d="M865.5,146.4c-7.6-24.6,24.9-40,36.4-16.7C911.4,154.5,874.9,168.1,865.5,146.4z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-2" d="M736.9,239.3c-5.3-17.1,17.3-27.9,25.3-11.6C768.8,244.9,743.4,254.4,736.9,239.3z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-3" d="M959.5,166c-7.8,7.8-52.3,35.1-57.6,37.4c-3.2,1.4-8.7-3.3-5.9-4.9c7-4,38.4-22.8,60.9-38.4
    	C959.7,158.2,964.9,160.6,959.5,166z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-2" d="M236.5,180.5c0.3-40.3-35.4-69.5-57.7-72.2C178.8,140.3,206.3,177,236.5,180.5z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-2" d="M365.7,283.8c-41.6-16.1-97.8,59.1-98.8,92.8C311.6,386.5,379.7,321.2,365.7,283.8z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-2" d="M348.5,232.2c-41-29.5-124.9,26.3-135.9,59.2C258.9,315.9,352.9,273.8,348.5,232.2z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-2" d="M206.5,208.1c-28.3-20.6-77.1,3.8-85.1,18.6C141.3,242.1,205,228.2,206.5,208.1z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-2" d="M116.3,203.3c-26.7-24.8-83.8,17.7-89.2,33.6C49.4,248.7,118.3,223.3,116.3,203.3z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-2" d="M345,204.4c9-38-39.5-79.3-64.4-82.4C280.6,158.5,315,211.2,345,204.4z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-1" d="M146.8,114.2c2.9,34.1-6,51.8-43.8,48.1C138.1,213.5,200.8,162.2,146.8,114.2z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-1" d="M123,124.7c7.6-24.6-24.9-40-36.4-16.7C77.2,132.8,113.6,146.4,123,124.7z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-2" d="M251.6,217.5c5.3-17.1-17.3-27.9-25.3-11.6C219.7,223.2,245.1,232.6,251.6,217.5z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-3" d="M25.2,155.9c9.1,6.3,57.6,25.4,63.3,26.8c3.4,0.8,8-4.7,5-5.8c-7.6-2.7-41.8-15.8-66.6-27.1
    	C23.7,148.3,19,151.6,25.2,155.9z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-3" d="M25.2,155.9c9.1,6.3,57.6,25.4,63.3,26.8c3.4,0.8,8-4.7,5-5.8c-7.6-2.7-41.8-15.8-66.6-27.1
    	C23.7,148.3,19,151.6,25.2,155.9z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-3" d="M829.9,359.9c-2.1,0-4.2-0.1-6.4-0.4c-23.2-2.8-29.4-27.2-29.6-28.3c-0.4-1.6,0.6-3.3,2.2-3.6
    	c1.6-0.4,3.3,0.6,3.6,2.2c0.2,0.9,5.4,21.4,24.5,23.7c20.1,2.4,36.7-8.2,38.7-24.7c1-8.2-1.3-20.7-10.8-31.2
    	c-12.7-14-35.2-21.2-65.2-20.8c-1.7,0-3-1.3-3.1-3c0-1.7,1.3-3,3-3.1c32.2-0.5,55.7,7.2,69.8,22.8c10.8,12,13.4,26.4,12.3,35.9
    	C866.8,347.6,850.5,359.9,829.9,359.9z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-3" d="M728.7,178.8c-0.9,0-1.9-0.4-2.6-1.1c-1.3-1.4-1.2-3.6,0.2-4.9c52.1-48.1,36.4-77.3,30.4-85.1
    	c-5-6.4-12.3-10.2-20.6-10.7c-8.4-0.5-17.2,2.5-24.8,8.3c-6.1,4.7-9.3,11.5-9.5,20.2c-0.2,6.8,1.5,12.3,1.6,12.4
    	c0.6,1.8-0.4,3.8-2.2,4.4c-1.8,0.6-3.8-0.4-4.4-2.2c-0.1-0.3-2.1-6.5-1.9-14.5c0.3-10.9,4.5-19.8,12.2-25.8
    	c8.9-6.9,19.3-10.3,29.4-9.8c10.4,0.6,19.6,5.3,25.8,13.4c7,9,25.3,42.4-31.2,94.5C730.4,178.5,729.5,178.8,728.7,178.8z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-3" d="M165.4,340.4c-20.6,0-36.9-12.3-39-30.4c-1.1-9.5,1.5-23.9,12.3-35.9c14.1-15.6,37.5-23.3,69.8-22.8
    	c1.7,0,3,1.4,3,3.1c0,1.7-1.4,3-3.1,3c-30-0.4-52.5,6.7-65.2,20.8c-9.4,10.5-11.8,23-10.8,31.2c2,16.5,18.6,27.1,38.7,24.7
    	c19-2.3,24.3-22.8,24.5-23.7c0.4-1.6,2-2.6,3.6-2.2c1.6,0.4,2.6,2,2.2,3.6c-0.2,1-6.4,25.5-29.6,28.3
    	C169.6,340.3,167.5,340.4,165.4,340.4z"/>
    <path filter="url(#lady-flower-pieces)" class="lady-flower-3" d="M266.7,159.3c-0.8,0-1.7-0.3-2.4-0.9c-56.5-52.1-38.1-85.5-31.2-94.5c12.8-16.5,36.5-18.1,55.2-3.6
    	c7.7,6,12,14.9,12.2,25.8c0.2,8-1.8,14.3-1.9,14.5c-0.6,1.8-2.6,2.8-4.4,2.2c-1.8-0.6-2.8-2.6-2.2-4.4c0,0,1.8-5.5,1.6-12.4
    	c-0.3-8.7-3.5-15.5-9.5-20.2c-15.5-12-35.1-11-45.4,2.3c-6,7.8-21.7,37,30.4,85.1c1.4,1.3,1.5,3.5,0.2,4.9
    	C268.5,159,267.6,159.3,266.7,159.3z"/>
  </g>
</svg>
