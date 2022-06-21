import { generateDealershipContentWindow } from './_generateContentWindow'

/**
 * @returns {GoogleMap} Google Map object
 */
export function initMap(dealership) {
  const markerImage = 'https://bluesky.sirv.com/Global/Assets/Images/find-us/marker.png'
  const LatLngList = []
  const myLatlng = new google.maps.LatLng(dealership.location.lat, dealership.location.long)
  const myOptions = {
    zoom: 13,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }

  const map = new google.maps.Map(document.getElementById("map-canvas"), myOptions)

  const latLng = new google.maps.LatLng(dealership.location.lat, dealership.location.long)
  LatLngList.push(new google.maps.LatLng(dealership.location.lat, dealership.location.long))

  const contentString = generateDealershipContentWindow(dealership);

  const infowindow = new google.maps.InfoWindow({
    content: contentString
  })

  const marker = new google.maps.Marker({
    position: latLng,
    map: map,
    icon: markerImage,
    title: dealership.name
  })

  google.maps.event.addListener(marker, 'click', function () {
    infowindow.open(map, marker)
  })

  return map
}
