import { style as buttonStyle } from './style';

export function getLinkClassNames(style, variant) {
  return buttonStyle.defaultStyles + ' ' + buttonStyle.stylesMap[style]?.[variant] || '';
}
