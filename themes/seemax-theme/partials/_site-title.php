<svg class="site-title" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1000 400">

  <filter id="patch-fill-filter" x="-50%" y="-50%" width="200%" height="200%">
    <!-- Patch White Back -->
    <feFlood flood-color="#FFFFFF" result="patch-back-1" />
    <feComposite in="patch-back-1" in2="SourceAlpha" operator="in" result="patch-back-2" />
    <!-- Patch Fill -->
    <feTurbulence type="fractalNoise" baseFrequency='.251 1' result='patch-noise-1' numOctaves="1" />
    <feTurbulence type="fractalNoise" baseFrequency='1 .251' result='patch-noise-2' numOctaves="1" />
    <feTurbulence type="fractalNoise" baseFrequency='.5 .5' result='patch-noise-3' numOctaves="10" />
    <feDisplacementMap in="SourceGraphic" in2="patch-noise-1" scale="1" xChannelSelector="R" yChannelSelector="R" result="patch-1"></feDisplacementMap>
    <feDisplacementMap in="SourceGraphic" in2="patch-noise-2" scale="1" xChannelSelector="R" yChannelSelector="R" result="patch-2"></feDisplacementMap>
    <feDisplacementMap in="SourceGraphic" in2="patch-noise-3" scale="1" xChannelSelector="R" yChannelSelector="R" result="patch-3"></feDisplacementMap>
    <feComposite operator="out" in="SourceGraphic" in2="patch-noise-1" result="full-patch-1" />
    <feComposite operator="out" in="SourceGraphic" in2="patch-noise-2" result="full-patch-2" />
    <feComposite operator="out" in="SourceGraphic" in2="patch-noise-3" result="full-patch-3" />
    <!-- Patch Shadow -->
    <feOffset result="fill-shadow-off" in="SourceAlpha" dx="-1" dy="1" />
    <feGaussianBlur result="fill-shadow-1" in="fill-shadow-off" stdDeviation="1.5" />
    <feColorMatrix in="fill-shadow-1" result="fill-shadow-2" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 .75 0"/>
    <feBlend mode="normal" in="SourceGraphic" in2="fill-shadow-2" result="fill-shadow-3"/>
    <!-- Patch Merge -->
    <feMerge>
      <!-- <feMergeNode in="fill-shadow-3" /> -->
      <feMergeNode in="patch-back-2" />
        <feMergeNode in="full-patch-1" />
        <feMergeNode in="full-patch-2" />
        <feMergeNode in="full-patch-3" />
    </feMerge>
  </filter>

  <g class="patch-color-fills">
    <path class="g1" d="M773.7,158.8c-4.8-37.5,25.1-68.6,45.6-73.6C822.9,114.9,801.4,152.1,773.7,158.8z"/>
    <path class="g1" d="M665.2,269.3c36.9-19.6,97.6,44,102.3,75.2C726.9,358.7,656.3,305.7,665.2,269.3z"/>
    <path class="g1" d="M675.3,219.4c34.8-32.1,119.1,10.4,133,39.8C768.1,287.2,675.9,258.5,675.3,219.4z"/>
    <path class="g1" d="M804.7,181c24-22.4,72.1-5.1,81.2,7.7C869.1,205.4,808.3,199.5,804.7,181z"/>
    <path class="g1" d="M888.1,166.4c22-26.1,79.9,7.1,86.7,21.3C955.4,201.2,888.4,185.3,888.1,166.4z"/>
    <path class="g1" d="M675.4,193.1c-12.6-34.3,27.8-78.2,50.7-83.9C730.2,143.2,704.2,196.1,675.4,193.1z"/>
    <path class="r1" d="M849.6,87c1.1,32,11.4,47.5,46.1,39.9C868.9,178.4,804.9,137.8,849.6,87z"/>
    <path class="r1" d="M873,94.1c-9.9-22,18.6-40,32-19.6C916.5,96.5,884.2,113.2,873,94.1z"/>
    <path class="g1" d="M763.8,194.9c-6.9-15.3,13-27.8,22.3-13.7C794.1,196.6,771.6,208.2,763.8,194.9z"/>
    <path class="g2" d="M962.6,101.8c-6.4,8.2-44.7,38.5-49.4,41.3c-2.8,1.7-8.5-2.1-6-3.8c6.1-4.5,33.1-25.6,52.3-42.5
      C961.9,94.5,967,96.2,962.6,101.8z"/>
    <path class="g1" d="M227.2,154.9c5.9-37.3-23.1-69.3-43.4-74.9C179.3,109.7,199.7,147.5,227.2,154.9z"/>
    <path class="g1" d="M332.4,268.6c-36.3-20.7-98.9,41.2-104.4,72.2C268.1,356.2,340.2,305.2,332.4,268.6z"/>
    <path class="g1" d="M323.7,218.4c-33.9-33-119.4,7-134.1,36C229,283.4,322,257.5,323.7,218.4z"/>
    <path class="g1" d="M195.5,176.3c-23.3-23.1-71.9-7.2-81.4,5.3C130.4,198.7,191.4,194.7,195.5,176.3z"/>
    <path class="g1" d="M112.6,159.3C91.3,132.6,32.5,164,25.3,178C44.3,192.1,111.7,178.1,112.6,159.3z"/>
    <path class="g1" d="M324.4,192.1c13.6-33.9-25.5-79-48.2-85.3C271.1,140.6,295.6,194.3,324.4,192.1z"/>
    <path class="r1" d="M153.3,81c-2,32-12.8,47.2-47.2,38.5C131.4,171.8,196.6,133,153.3,81z"/>
    <path class="r1" d="M129.8,87.4c10.5-21.7-17.5-40.5-31.4-20.5C86.2,88.5,118.1,106.2,129.8,87.4z"/>
    <path class="g1" d="M236,191.3c7.3-15.1-12.2-28.2-21.9-14.3C205.7,192.1,227.9,204.4,236,191.3z"/>
    <path class="g2" d="M34.8,102.7c7.5,7.1,49.8,31.5,54.9,33.6c3,1.2,8.1-3.3,5.4-4.7c-6.7-3.6-36.5-20.4-58-34.4
      C34.5,95.4,29.7,97.8,34.8,102.7z"/>
    <path class="g2" d="M863.8,296.6c-1.9,0.2-4,0.4-6,0.4c-21.9,0-30.4-22-30.7-23c-0.5-1.5,0.2-3.1,1.7-3.6c1.5-0.5,3.1,0.2,3.6,1.7
      c0.3,0.8,7.5,19.3,25.4,19.3c19,0,33.2-11.7,33.2-27.3c0-7.7-3.6-19.1-13.5-27.8c-13.3-11.6-35.1-15.8-63-12c-1.6,0.2-3-0.9-3.2-2.4
      c-0.2-1.5,0.9-3,2.4-3.2c29.9-4.1,52.6,0.4,67.5,13.3c11.4,9.9,15.5,23.1,15.5,32C896.7,281.1,882.9,294.3,863.8,296.6z"/>
    <path class="g2" d="M749.3,139.6c-0.9,0.1-1.8-0.1-2.5-0.8c-1.4-1.2-1.5-3.2-0.4-4.6c43.1-50.5,25.2-76,18.7-82.5
      c-5.3-5.4-12.6-8.1-20.4-7.6c-7.9,0.5-15.8,4.3-22.1,10.5c-5.1,5-7.3,11.7-6.6,19.9c0.6,6.4,2.8,11.3,2.8,11.3
      c0.8,1.6,0,3.6-1.6,4.4c-1.6,0.8-3.6,0.1-4.4-1.6c-0.1-0.2-2.7-5.8-3.4-13.3c-1-10.2,2-18.9,8.5-25.4c7.5-7.4,16.8-11.8,26.3-12.4
      c9.7-0.6,18.8,2.7,25.5,9.5c7.5,7.6,28.3,36.6-18.4,91.4C750.9,139.1,750.1,139.5,749.3,139.6z"/>
    <path class="g2" d="M139,293.1c-19.1-2.9-32.4-16.5-31.9-33.6c0.3-9,4.7-22,16.4-31.6c15.2-12.5,38-16.3,67.8-11.4
      c1.5,0.3,2.6,1.7,2.3,3.3c-0.3,1.5-1.7,2.6-3.3,2.3c-27.8-4.6-49.6-1.1-63.3,10.2c-10.2,8.4-14.1,19.6-14.3,27.4
      c-0.5,15.6,13.5,27.7,32.4,28.3c18,0.5,25.7-17.8,26-18.5c0.6-1.4,2.2-2.1,3.7-1.5c1.4,0.6,2.1,2.2,1.6,3.7
      c-0.4,0.9-9.5,22.7-31.4,22.1C143,293.6,140.9,293.4,139,293.1z"/>
    <path class="g2" d="M258,139.5c-0.8-0.1-1.5-0.5-2.1-1.2c-45.1-56.1-23.4-84.5-15.7-91.9c14.1-13.5,36.4-11.7,51.7,4.4
      c6.3,6.6,9,15.5,7.7,25.6c-0.9,7.4-3.7,13-3.8,13.2c-0.8,1.6-2.8,2.3-4.4,1.5c-1.6-0.8-2.3-2.8-1.5-4.4c0,0,2.4-4.9,3.2-11.2
      c1-8.1-1-14.9-6-20.1c-12.7-13.3-30.9-15.1-42.4-4.1c-6.7,6.4-25.3,31.3,16.3,83.1c1.1,1.4,0.9,3.5-0.5,4.6
      C259.8,139.4,258.9,139.6,258,139.5z"/>
    <path class="r1" d="M337.6,236.1c-1.4,25.4,10.2,36.1,62.8,36.1h70.4c0,0,3.9-0.1,3.9-5.4c0-5.3-3.9-5.3-3.9-5.3h-13.9
      c-6.6,0-10.7-3.7-10.7-10.7v-93.3c0-6.8,2.7-10.7,9.5-10.7h15.2c0,0,3.9,0.8,3.9-4.9s-3.9-5.7-3.9-5.7h-81.6
      c-26.2,0-44.7,10.1-46.6,33.4c-1.5,19.9,16,28.2,33.4,31v0.4C355,203.7,339.6,213,337.6,236.1z M426.2,196.1c-5.7,0-27.1,0-27.1,0
      c-22.8,0-36.7-7.4-36.7-23.4c0-15.6,9.1-23.1,36.7-25.8c0,0,21.9-1.7,27.1,0.9C428.6,151.8,429,190.6,426.2,196.1z M359.5,234.2
      c2.9-22.8,25.5-26.7,37.3-27.5s25.1-1.3,28.4,0c2.6,4.7,2.4,51.4,0,54.7c-3.8,0-7.6,0.1-28.4,0C375.9,261.3,357.5,256,359.5,234.2z"
      />
    <path class="r1" d="M623,201v-0.4c17.4-2.8,35-11.1,33.4-31c-1.8-23.3-20.3-33.4-46.6-33.4h-81.6c0,0-3.9,0-3.9,5.7
      s3.9,4.9,3.9,4.9h15.2c6.8,0,9.5,3.9,9.5,10.7v93.3c0,7-4.1,10.7-10.7,10.7h-13.9c0,0-3.9-0.1-3.9,5.3c0,5.3,3.9,5.4,3.9,5.4h70.4
      c52.6,0,64.2-10.7,62.8-36.1C659.3,213,643.9,203.7,623,201z M572.7,147.8c5.1-2.6,27.1-0.9,27.1-0.9c27.6,2.6,36.7,10.2,36.7,25.8
      c0,16-13.9,23.4-36.7,23.4c0,0-21.3,0-27.1,0C569.9,190.6,570.3,151.8,572.7,147.8z M602.1,261.5c-20.8,0.1-24.6,0-28.4,0
      c-2.4-3.4-2.6-50,0-54.7c3.2-1.3,16.5-0.8,28.4,0s34.4,4.7,37.3,27.5C641.4,256,622.9,261.3,602.1,261.5z"/>
    <path class="r1" d="M524.8,235.2c-4.8-1.4-7.7-2.8-12.3-5.9l15.4-21c3.2-4.5,4.7-5.6,9.3-5.6c0,0,0.8,0,3.3,0.4
      c0.6-2.5-0.1-6-0.1-6s-28.6-0.5-31.5,0c-1,2.7,0,5.6,0,5.6h3.7c3.9,0,7.2,0.8,7.2,5.5c0,3.2-4.5,8.8-6.5,11.3l-3.8,4.7
      c-6.9-7-12-15.7-17.2-24c7.7-4.6,15.6-10.9,15.6-19.3c0-8.6-6.7-14.6-15.2-14.6c-10.3,0-17.4,6.9-17.4,17.2c0,5.1,1.8,10.3,4.7,14.4
      c-8.8,5.3-19.4,9.4-19.4,22.2c0,14.9,11,21.9,24.8,21.9c7.3,0,15.1-1.7,20.9-6.3c4.3,3.8,9.7,6.3,15.5,6.3
      c14.8,0,18.5-10.5,18.5-23.3h-5.6C534.8,225.6,532.7,237.4,524.8,235.2z M492.6,172.1c4.4,0,7.3,3.8,7.3,8.2c0,6.8-4.6,9.6-9.9,12.8
      c-2-3-5.5-7-5.5-10.7C484.5,177,487.2,172.1,492.6,172.1z M488,235.2c-9.9,0-15.8-4-15.8-14.2c0-7.5,6.6-13.5,12.7-16.8
      c7.4,9.5,12.6,16.1,18.4,25.6C499.5,232.3,492.4,235.2,488,235.2z"/>
  </g>
  <g class="patch-color-strokes">
    <path class="g1" d="M773.7,158.8c-4.8-37.5,25.1-68.6,45.6-73.6C822.9,114.9,801.4,152.1,773.7,158.8z"/>
    <path class="g1" d="M665.2,269.3c36.9-19.6,97.6,44,102.3,75.2C726.9,358.7,656.3,305.7,665.2,269.3z"/>
    <path class="g1" d="M675.3,219.4c34.8-32.1,119.1,10.4,133,39.8C768.1,287.2,675.9,258.5,675.3,219.4z"/>
    <path class="g1" d="M804.7,181c24-22.4,72.1-5.1,81.2,7.7C869.1,205.4,808.3,199.5,804.7,181z"/>
    <path class="g1" d="M888.1,166.4c22-26.1,79.9,7.1,86.7,21.3C955.4,201.2,888.4,185.3,888.1,166.4z"/>
    <path class="g1" d="M675.4,193.1c-12.6-34.3,27.8-78.2,50.7-83.9C730.2,143.2,704.2,196.1,675.4,193.1z"/>
    <path class="r1" d="M849.6,87c1.1,32,11.4,47.5,46.1,39.9C868.9,178.4,804.9,137.8,849.6,87z"/>
    <path class="r1" d="M873,94.1c-9.9-22,18.6-40,32-19.6C916.5,96.5,884.2,113.2,873,94.1z"/>
    <path class="g1" d="M763.8,194.9c-6.9-15.3,13-27.8,22.3-13.7C794.1,196.6,771.6,208.2,763.8,194.9z"/>
    <path class="g2" d="M962.6,101.8c-6.4,8.2-44.7,38.5-49.4,41.3c-2.8,1.7-8.5-2.1-6-3.8c6.1-4.5,33.1-25.6,52.3-42.5
      C961.9,94.5,967,96.2,962.6,101.8z"/>
    <path class="g1" d="M227.2,154.9c5.9-37.3-23.1-69.3-43.4-74.9C179.3,109.7,199.7,147.5,227.2,154.9z"/>
    <path class="g1" d="M332.4,268.6c-36.3-20.7-98.9,41.2-104.4,72.2C268.1,356.2,340.2,305.2,332.4,268.6z"/>
    <path class="g1" d="M323.7,218.4c-33.9-33-119.4,7-134.1,36C229,283.4,322,257.5,323.7,218.4z"/>
    <path class="g1" d="M195.5,176.3c-23.3-23.1-71.9-7.2-81.4,5.3C130.4,198.7,191.4,194.7,195.5,176.3z"/>
    <path class="g1" d="M112.6,159.3C91.3,132.6,32.5,164,25.3,178C44.3,192.1,111.7,178.1,112.6,159.3z"/>
    <path class="g1" d="M324.4,192.1c13.6-33.9-25.5-79-48.2-85.3C271.1,140.6,295.6,194.3,324.4,192.1z"/>
    <path class="r1" d="M153.3,81c-2,32-12.8,47.2-47.2,38.5C131.4,171.8,196.6,133,153.3,81z"/>
    <path class="r1" d="M129.8,87.4c10.5-21.7-17.5-40.5-31.4-20.5C86.2,88.5,118.1,106.2,129.8,87.4z"/>
    <path class="g1" d="M236,191.3c7.3-15.1-12.2-28.2-21.9-14.3C205.7,192.1,227.9,204.4,236,191.3z"/>
    <path class="g2" d="M34.8,102.7c7.5,7.1,49.8,31.5,54.9,33.6c3,1.2,8.1-3.3,5.4-4.7c-6.7-3.6-36.5-20.4-58-34.4
      C34.5,95.4,29.7,97.8,34.8,102.7z"/>
    <path class="g2" d="M863.8,296.6c-1.9,0.2-4,0.4-6,0.4c-21.9,0-30.4-22-30.7-23c-0.5-1.5,0.2-3.1,1.7-3.6c1.5-0.5,3.1,0.2,3.6,1.7
      c0.3,0.8,7.5,19.3,25.4,19.3c19,0,33.2-11.7,33.2-27.3c0-7.7-3.6-19.1-13.5-27.8c-13.3-11.6-35.1-15.8-63-12c-1.6,0.2-3-0.9-3.2-2.4
      c-0.2-1.5,0.9-3,2.4-3.2c29.9-4.1,52.6,0.4,67.5,13.3c11.4,9.9,15.5,23.1,15.5,32C896.7,281.1,882.9,294.3,863.8,296.6z"/>
    <path class="g2" d="M749.3,139.6c-0.9,0.1-1.8-0.1-2.5-0.8c-1.4-1.2-1.5-3.2-0.4-4.6c43.1-50.5,25.2-76,18.7-82.5
      c-5.3-5.4-12.6-8.1-20.4-7.6c-7.9,0.5-15.8,4.3-22.1,10.5c-5.1,5-7.3,11.7-6.6,19.9c0.6,6.4,2.8,11.3,2.8,11.3
      c0.8,1.6,0,3.6-1.6,4.4c-1.6,0.8-3.6,0.1-4.4-1.6c-0.1-0.2-2.7-5.8-3.4-13.3c-1-10.2,2-18.9,8.5-25.4c7.5-7.4,16.8-11.8,26.3-12.4
      c9.7-0.6,18.8,2.7,25.5,9.5c7.5,7.6,28.3,36.6-18.4,91.4C750.9,139.1,750.1,139.5,749.3,139.6z"/>
    <path class="g2" d="M139,293.1c-19.1-2.9-32.4-16.5-31.9-33.6c0.3-9,4.7-22,16.4-31.6c15.2-12.5,38-16.3,67.8-11.4
      c1.5,0.3,2.6,1.7,2.3,3.3c-0.3,1.5-1.7,2.6-3.3,2.3c-27.8-4.6-49.6-1.1-63.3,10.2c-10.2,8.4-14.1,19.6-14.3,27.4
      c-0.5,15.6,13.5,27.7,32.4,28.3c18,0.5,25.7-17.8,26-18.5c0.6-1.4,2.2-2.1,3.7-1.5c1.4,0.6,2.1,2.2,1.6,3.7
      c-0.4,0.9-9.5,22.7-31.4,22.1C143,293.6,140.9,293.4,139,293.1z"/>
    <path class="g2" d="M258,139.5c-0.8-0.1-1.5-0.5-2.1-1.2c-45.1-56.1-23.4-84.5-15.7-91.9c14.1-13.5,36.4-11.7,51.7,4.4
      c6.3,6.6,9,15.5,7.7,25.6c-0.9,7.4-3.7,13-3.8,13.2c-0.8,1.6-2.8,2.3-4.4,1.5c-1.6-0.8-2.3-2.8-1.5-4.4c0,0,2.4-4.9,3.2-11.2
      c1-8.1-1-14.9-6-20.1c-12.7-13.3-30.9-15.1-42.4-4.1c-6.7,6.4-25.3,31.3,16.3,83.1c1.1,1.4,0.9,3.5-0.5,4.6
      C259.8,139.4,258.9,139.6,258,139.5z"/>
    <path class="r1" d="M337.6,236.1c-1.4,25.4,10.2,36.1,62.8,36.1h70.4c0,0,3.9-0.1,3.9-5.4c0-5.3-3.9-5.3-3.9-5.3h-13.9
      c-6.6,0-10.7-3.7-10.7-10.7v-93.3c0-6.8,2.7-10.7,9.5-10.7h15.2c0,0,3.9,0.8,3.9-4.9s-3.9-5.7-3.9-5.7h-81.6
      c-26.2,0-44.7,10.1-46.6,33.4c-1.5,19.9,16,28.2,33.4,31v0.4C355,203.7,339.6,213,337.6,236.1z M426.2,196.1c-5.7,0-27.1,0-27.1,0
      c-22.8,0-36.7-7.4-36.7-23.4c0-15.6,9.1-23.1,36.7-25.8c0,0,21.9-1.7,27.1,0.9C428.6,151.8,429,190.6,426.2,196.1z M359.5,234.2
      c2.9-22.8,25.5-26.7,37.3-27.5s25.1-1.3,28.4,0c2.6,4.7,2.4,51.4,0,54.7c-3.8,0-7.6,0.1-28.4,0C375.9,261.3,357.5,256,359.5,234.2z"
      />
    <path class="r1" d="M623,201v-0.4c17.4-2.8,35-11.1,33.4-31c-1.8-23.3-20.3-33.4-46.6-33.4h-81.6c0,0-3.9,0-3.9,5.7
      s3.9,4.9,3.9,4.9h15.2c6.8,0,9.5,3.9,9.5,10.7v93.3c0,7-4.1,10.7-10.7,10.7h-13.9c0,0-3.9-0.1-3.9,5.3c0,5.3,3.9,5.4,3.9,5.4h70.4
      c52.6,0,64.2-10.7,62.8-36.1C659.3,213,643.9,203.7,623,201z M572.7,147.8c5.1-2.6,27.1-0.9,27.1-0.9c27.6,2.6,36.7,10.2,36.7,25.8
      c0,16-13.9,23.4-36.7,23.4c0,0-21.3,0-27.1,0C569.9,190.6,570.3,151.8,572.7,147.8z M602.1,261.5c-20.8,0.1-24.6,0-28.4,0
      c-2.4-3.4-2.6-50,0-54.7c3.2-1.3,16.5-0.8,28.4,0s34.4,4.7,37.3,27.5C641.4,256,622.9,261.3,602.1,261.5z"/>
    <path class="r1" d="M524.8,235.2c-4.8-1.4-7.7-2.8-12.3-5.9l15.4-21c3.2-4.5,4.7-5.6,9.3-5.6c0,0,0.8,0,3.3,0.4
      c0.6-2.5-0.1-6-0.1-6s-28.6-0.5-31.5,0c-1,2.7,0,5.6,0,5.6h3.7c3.9,0,7.2,0.8,7.2,5.5c0,3.2-4.5,8.8-6.5,11.3l-3.8,4.7
      c-6.9-7-12-15.7-17.2-24c7.7-4.6,15.6-10.9,15.6-19.3c0-8.6-6.7-14.6-15.2-14.6c-10.3,0-17.4,6.9-17.4,17.2c0,5.1,1.8,10.3,4.7,14.4
      c-8.8,5.3-19.4,9.4-19.4,22.2c0,14.9,11,21.9,24.8,21.9c7.3,0,15.1-1.7,20.9-6.3c4.3,3.8,9.7,6.3,15.5,6.3
      c14.8,0,18.5-10.5,18.5-23.3h-5.6C534.8,225.6,532.7,237.4,524.8,235.2z M492.6,172.1c4.4,0,7.3,3.8,7.3,8.2c0,6.8-4.6,9.6-9.9,12.8
      c-2-3-5.5-7-5.5-10.7C484.5,177,487.2,172.1,492.6,172.1z M488,235.2c-9.9,0-15.8-4-15.8-14.2c0-7.5,6.6-13.5,12.7-16.8
      c7.4,9.5,12.6,16.1,18.4,25.6C499.5,232.3,492.4,235.2,488,235.2z"/>
  </g>
</svg>
