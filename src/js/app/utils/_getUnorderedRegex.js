/**
 * @name getUnorderedRegex
 * @description Craetes a regex search object which ignores word order
 * @param {String} string Search string, generally split with spaces
 * @returns {RegExp} searchRegex
 */
export function getUnorderedRegex(string) {
  // Regex search (Allows for searching in different orders)
  const searchString =
    '^(?=.*\\b'
    + $.trim(string)
      .split(/\s+/) // Split words into an array
      .join('\\b)(?=.*\\b') // Adds back in regex expression to ignore word order
    + ').*$'

  // Create the regex test
  const searchRegex = RegExp(searchString, 'i')

  return searchRegex
}
