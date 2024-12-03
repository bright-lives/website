
const DEFAULT_COLOR = 'bg-primary-500';

export const style = {
  title: 'break-words hyphens-auto font-heading text-white',
  titleContainer: 'h-7rem',
  contentContainer: 'mb-4',
  getUpdatedColumnBackgroundIntensity: (index) => {
    const colorIntensity = 500 + (100 * index);
    return DEFAULT_COLOR.replace(/bg-primary-\d+/, `bg-primary-${colorIntensity}`);
  },
  /**
   * Returns a tailwind class for background color of the column based on the amount of columns
   */
  getColumnBackgroundColor: (amountOfColumns, index) => {
    if (amountOfColumns === 3 || amountOfColumns === 5) {
      return index % 2 === 0 ? DEFAULT_COLOR : DEFAULT_COLOR.replace(/bg-primary-\d+/, `bg-primary-600`);
    } else if (amountOfColumns === 4) {
      return style.getUpdatedColumnBackgroundIntensity(index);
    }
    return '';
  }
}
