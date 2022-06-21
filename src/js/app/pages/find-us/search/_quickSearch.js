import { getUnorderedRegex } from '../../../utils'

/**
 * @name initQuickSearch
 * @description Sets up quick serach on find-us-page
 */
export function initQuickSearch() {
  // Fuzzy Search
  const rows = $('.find-us__location')

  document.getElementById('find-us-search__quick-search-input')
    .addEventListener('keyup', (evt) => filterRows(evt.target.value, rows))
}

/**
 * 
 * @param {String} searchTerm term to search for in the string (order-agnostic)
 * @param {jQuery} rows Rows to run through (filter out if innerText contains searchTerm)
 * @returns {jQuery} filtered rows
 */
function filterRows(searchTerm, rows) {
  const searchRegex = getUnorderedRegex(searchTerm)

  let newRows

  return rows
    .show()
    .filter(function () {
      newRows = $(this)
        .text()
        .replace(/\s+/g, ' ')
      return !searchRegex.test(newRows)
    })
    .hide()
}