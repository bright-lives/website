export const style = {
  columnsContainer: 'grid-flow-row auto-rows-2fr',
  /**
   * Returns either 3, 4, or 5, defaulting to 4
   */
  getAmountOfColumns(innerBlockCountLength) {
    if (innerBlockCountLength <= 3) {
      return 3;
    } else if (innerBlockCountLength === 4) {
      return 4;
    } else if (innerBlockCountLength >= 5) {
      return 5;
    } else {
      return 4;
    }
  }
}