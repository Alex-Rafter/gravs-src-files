import '@fancyapps/fancybox'
import Cookies from 'js-cookie'

$(window).on("load", function () {
	// Bluesky Lightbox
	if ($("#blueskybox").length) {
		if (Cookies.get("blueskybox") !== "true") {
			var blueskybox = $('#blueskybox').html()
			$.fancybox.open(blueskybox, {
				parent: "form:first",
				afterClose: function () {
					Cookies.set("blueskybox", "true")
				}
			})
		}
	}
})
