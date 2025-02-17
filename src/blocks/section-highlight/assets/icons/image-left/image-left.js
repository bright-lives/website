import { SVG, G, Path, Rect } from '@wordpress/primitives';

const imageLeft = (
  <SVG viewBox="0 0 24 24">
    <Rect x="0" fill="none" width="24" height="24" />
    <G>
      <Path d="M3 5h18v2H3V5zm0 14h18v-2H3v2zm0-4h8V9H3v6zm10 0h8v-2h-8v2zm0-4h8V9h-8v2z" />
    </G>
  </SVG>
);

export default imageLeft;