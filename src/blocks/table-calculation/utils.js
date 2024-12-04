/**
 * Takes a number and converts it to a currency string using the Dutch locale.
 * Converts ,00 to ,- and adds a non-breaking space before the currency symbol.
 *
 * @param {number} amount
 * @returns {string}
 */
export const convertToLocalCurrency = (amount) => {
  return amount
    .toLocaleString('nl-NL', { style: 'currency', currency: 'EUR' })
    .replace(',00', ',-\u00A0')
}
