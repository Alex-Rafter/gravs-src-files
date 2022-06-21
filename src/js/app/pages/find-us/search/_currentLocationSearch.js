import { currentPageUrl } from '../../../utils'

// @name: initLocationSearch
// @description: Adds all event listeners to the location search on the find-us page
// @returns :Void
export function initLocationSearch() {
  document.getElementById('find-us-search__current-location')
    .addEventListener('click', function (evt) {
      evt.preventDefault()

      if (navigator.geolocation) {
        const location = navigator.geolocation.getCurrentPosition(searchDealersByLatLong)
      }
      return false;
    });
  }
  
// @name: searchDealersByLatLong
// @description: Setes the url to the desired lat and lng and refreshes the page
// @params:
//   position: Object {... coords: {latitude, longitude}} - desired position containing lat and long coordinates
// @returns :Void
function searchDealersByLatLong(position) {
  const url = currentPageUrl + '?COGLat=' + position.coords.latitude + '&COGLon=' + position.coords.longitude
  window.location.href = url
}