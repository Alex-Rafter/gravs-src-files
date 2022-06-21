/**
 * @name getDirections
 */
export function getDirections() {
  const postcode = $("#postcode_postcode").val()
  window.location.href = window.location.pathname + "?" + $.param({ 'COGPostcode': postcode })
}