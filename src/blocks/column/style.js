export const style = {
  column: 'p-10 bg-primary-500',
  getUpdatedColumnStyle: (index) => {
    const colorIntensity = 500 + (100 * index);
    return style.column.replace(/bg-primary-\d+/, `bg-primary-${colorIntensity}`);
  }
}