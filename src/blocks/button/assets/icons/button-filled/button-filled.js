import { SVG, G, Path } from '@wordpress/primitives';

const buttonFilled = (
  <SVG>
    <defs>
      <style>{`
        .outer {
          fill: currentColor;
        }
        .inner {
          fill: none;
          stroke: currentColor;
          filter: invert(100%);
        }
      `}</style>
    </defs>
    <G>
      <Path class="outer" d="M2 8a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8z" />
      <Path class="inner" d="M8 11.5h8M10 11.5h4" strokeWidth="2" />
    </G>
  </SVG>

);

export default buttonFilled;