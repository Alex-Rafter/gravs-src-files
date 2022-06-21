/**
 * 
 * @param {GoogleMap} map 
 * @param {String} startDestination Postcode
 * @param {import('../getDealershipInfo').DealershipType} dealership 
 * @returns 
 */
export function initDirections(map, startDestination, dealership) {
  const directionsService = new google.maps.DirectionsService()
  const directionsDisplay = new google.maps.DirectionsRenderer({ suppressInfoWindows: true })

  directionsDisplay.setMap(map)
  directionsDisplay.setPanel(document.getElementById('directions-panel'))

  // const start = window.dataLayer[1].myLocation.postCode
  const endDestination = `${dealership.location.lat}, ${dealership.location.long}`
  const request = {
    origin: startDestination,
    destination: endDestination,
    travelMode: google.maps.DirectionsTravelMode.DRIVING
  }

  directionsService.route(request, function (response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response)
    }
  })

  return directionsService
}