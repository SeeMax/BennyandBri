<svg class="svg-filter-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100">
  <defs>
    <filter id="patch-fill-filter" x="0" y="0" width="100%" height="100%">
      <!-- Patch White Back -->
      <feFlood flood-color="#FFFFFF" result="patch-back-1"></feFlood>
      <feComposite in="patch-back-1" in2="SourceAlpha" operator="in" result="patch-back-2"></feComposite>
      <!-- Patch Fill -->
      <feTurbulence type="fractalNoise" baseFrequency='.251 1' result='patch-noise-1' numOctaves="1"></feTurbulence>
      <feTurbulence type="fractalNoise" baseFrequency='1 .251' result='patch-noise-2' numOctaves="1"></feTurbulence>
      <feTurbulence type="fractalNoise" baseFrequency='.5 .5' result='patch-noise-3' numOctaves="10"></feTurbulence>
      <feComposite operator="out" in="SourceGraphic" in2="patch-noise-1" result="full-patch-1"></feComposite>
      <feComposite operator="out" in="SourceGraphic" in2="patch-noise-2" result="full-patch-2"></feComposite>
      <feComposite operator="out" in="SourceGraphic" in2="patch-noise-3" result="full-patch-3"></feComposite>
      <!-- Patch Shadow -->
      <feOffset result="fill-shadow-off" in="SourceAlpha" dx="-1" dy="1"></feOffset>
      <feGaussianBlur result="fill-shadow-1" in="fill-shadow-off" stdDeviation="1.5"></feGaussianBlur>
      <feColorMatrix in="fill-shadow-1" result="fill-shadow-2" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 .75 0"></feColorMatrix>
      <feBlend mode="normal" in="SourceGraphic" in2="fill-shadow-2" result="fill-shadow-3"></feBlend>
      <!-- Patch Merge -->
      <feMerge>
        <feMergeNode in="fill-shadow-3"></feMergeNode>
        <feMergeNode in="patch-back-2"></feMergeNode>
        <feMergeNode in="full-patch-1"></feMergeNode>
        <feMergeNode in="full-patch-2"></feMergeNode>
        <feMergeNode in="full-patch-3"></feMergeNode>
      </feMerge>
    </filter>
  </defs>
</svg>
