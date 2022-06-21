import { initMap, initDirections } from './map'
import { getDealership } from './getDealershipInfo'
import { getDirections } from './getDirections'
import { getPageType } from '../../utils'
import { keyCodes } from '../../enums/_key-codes'

if (getPageType() === 'Dealership Details') {
  $(document).ready(function () {
    // Set map marker image
    $('#postcode_postcode').prop('disabled', false)

    let code
    $('#postcode_postcode').keypress(function (e) {
      code = (e.keyCode ? e.keyCode : e.which)
      if (code == keyCodes.ENTER) {
        getDirections()
        e.preventDefault()
      }
    })
    $('#get-directions').click(function () {
      getDirections()
    })

    const dealership = getDealership()
    const map = initMap(dealership)
    let directions
    
    if (myLocation.postCode) {
      directions = initDirections(map, myLocation.postcode, dealership)
    }
  })
}
