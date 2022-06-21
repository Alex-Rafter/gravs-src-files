import { keyCodes } from '../../../enums'
import { isValidPostcode } from '../../../validation'
import { currentPageUrl } from '../../../utils'

/**
 * @name initPostcodeSearch
 * @description Setup the postcode search
 */
export function initPostcodeSearch() {
  // Get elements that are commonly used
  const postCodeField = document.getElementById('find-us-search__postcode-input')
  const postCodeSubmit = document.getElementById('find-us-search__postcode-submit')

  postCodeField.addEventListener('keyup', (function (evt) {
    evt.preventDefault()

    const code = evt.key || evt.keyCode // Left in keycode for safari support
    if (code === 'Enter' || code === keyCodes.ENTER) { searchDealersByPostcode(postCodeField.value) }
  }))

  postCodeSubmit.addEventListener('click', function (evt) {
    evt.preventDefault()
    searchDealersByPostcode(postCodeField.value)
  })

  function searchDealersByPostcode(postcode) {
    const url = currentPageUrl + '?COGPostCode=' + postcode;

    if (!isValidPostcode(postcode)) {
      postCodeField.setAttribute('aria-invalid', true);
    } else {
      $.cookie('COGSearchPostCode', $('.postcode-field').val());

      window.location.href = url;
    }
  }
}
