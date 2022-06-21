/**
 * 
 * @param {import('../getDealershipInfo').DealershipType} dealership
 * @returns {String} formattedDealership HTML
 */
export function generateDealershipContentWindow(dealership) {
  return `
    <strong class="map-heading">${dealership.name}</strong>
    <br>
    ${dealership.address.line1}
    <br>
    ${dealership.address.line2}
    <br>
    ${dealership.address.town}
    <br>
    ${dealership.address.postCode}
    <br>
    <strong>Tel: ${dealership.contact.phone}</strong>
    `
}
