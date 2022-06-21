/**
  * @name isValidPostcode
  * @description Takes a string and checks if it's a valid postcode
  * @param {String} postcode Postcode to be checked
  * @returns {Boolean} isValid
*/
export function isValidPostcode(postcode) {
  const strippedPostcode = postcode.replace(/\s/g, "");
  const regex = /^[A-Z]{1,2}[0-9]{1,2} ?[0-9][A-Z]{2}$/i;

  return regex.test(strippedPostcode);
}