import Cookies from 'js-cookie'

if (Cookies.get('cookie') !== 'true') {
  $('.cookie-notice').show()
  $(".cookie-notice__close, .cookie-modal__close").on("click", function (evt) {
    evt.preventDefault()
    $('.cookie-notice').hide()
    Cookies.set('cookie', "true", {
      expires: CookiePreferencesExpiryDays,
      path: '/'
    })
  })
} else {
  $('.cookie-notice').hide()
}

// Non-essential Cookies
$(".non-essential-cookies-checkbox").on("change", function () {
  Cookies.set('NonEssentialCookies', $(this).prop("checked"), {
    expires: CookiePreferencesExpiryDays,
    path: '/'
  })
})
