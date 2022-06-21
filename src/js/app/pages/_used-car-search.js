import { getPageType } from "../utils"
import { updateCount } from '../modules'
import noUiSlider from 'nouislider'

if (getPageType() === 'Advanced Search') {
	generateProxyLists()
	searchFilterPostback()
	
	// Search dropdowns to lists	
	$(".proxy-list").on("click", "li", function () {
		var proxyValue = $(this).data('value')
		var originalElement = $('#' + $(this).parent('ul').data('original-element'))
		var hasMultiple = false
		if (originalElement.filter("select[multiple]").length) {
			hasMultiple = true
		}
		
		if ($(this).hasClass('selected')) {
			originalElement.children('option[value="' + proxyValue + '"]').removeAttr('selected').change()
		} else {
			if (!hasMultiple) {
				$(this).siblings().removeClass('selected')
				originalElement.children('option').removeAttr('selected')
			}
			originalElement.children('option[value="' + proxyValue + '"]').attr('selected', 'selected').change()
		}
		$(this).toggleClass('selected');
	});
}



/* Groups the helper functions to be run on search postback
========================= */
function searchFilterPostback() {
	populateProxyLists()
	buildPriceSlider()
	buildPaymentSlider()
	updateCount()
}


/* Helper function to create empty lists for the search dropdown proxy elements
========================= */
function generateProxyLists() {
	$( ".generate-proxy-list" ).each(function() {
		var originalElementID = $(this).attr('id');
		var proxyID = originalElementID + "_ProxyList"
		$(this).parent().after('<ul id="' + proxyID + '" data-original-element="' + originalElementID + '" class="proxy-list">');	
	})
}


/* Populate the proxy lists with elements to match the dropdowns
========================= */
function populateProxyLists() {
	$( ".generate-proxy-list" ).each(function() {
		var originalElementID = $(this).attr('id')
		var proxyID = originalElementID + "_ProxyList"			
		var proxyElement = $( '#' + proxyID );
		
		proxyElement.empty()
		
		$(this).children('option').each(function() {			
			var proxyName = $(this).text()
			var proxyValue = $(this).attr('value')
			if (proxyValue != "-1"){
				if ( $(this).is(":selected") ){
					proxyElement.append('<li data-value="' + proxyValue + '" class="' + "proxy-" + makeSafeForCSS(proxyValue) + ' selected"><span>' + proxyName + '</span></li>')
				} else {
					proxyElement.append('<li data-value="' + proxyValue + '" class="' + "proxy-" + makeSafeForCSS(proxyValue) + '"><span>' + proxyName + '</span></li>')
				}
			}
		})
	})
}

/* Helper function to build the price slider
========================= */
function buildPriceSlider() {
	var minSelect = $('#FilterMinPrice_DD')
	var maxSelect = $('#FilterMaxPrice_DD')
	var rangeMax = document.getElementById("FilterMaxPrice_DD").options.length

	var slider = document.getElementById('price-slider')

	// create slider if not already present
	if (!$(slider).hasClass("noUi-target")) {
		noUiSlider.create(slider, {
			start: [minSelect[0].selectedIndex, maxSelect[0].selectedIndex],
			connect: true,
			step: 1,
			range: {
        'min': 1,
				'max': rangeMax
			}
		})
  }
    
	// Update options to change rangeMax
	// Force 'max' to be different to 'min'
	// and disable if only 1 option is available
	if (rangeMax == 1) {
		slider.noUiSlider.updateOptions({
			start: [minSelect[0].selectedIndex, maxSelect[0].selectedIndex],
			range: {
        'min': 1,
        'max': 2
			}
		})
		slider.setAttribute('disabled', true); // disable slider
		slider.setAttribute('title', "Price range set"); // title for hint
  }
	else {
    // 'min' and 'max' are different
		slider.noUiSlider.updateOptions({
			start: [minSelect[0].selectedIndex, maxSelect[0].selectedIndex],
			range: {
				'min': 1,
				'max': rangeMax
			}
		})
    slider.removeAttribute('disabled') // enable slider
    slider.setAttribute('title', "Select price range") // title hint
	}

  slider.noUiSlider.on('update', function (values, handle) {

		document.getElementById("FilterMinPrice_DD").selectedIndex = Math.round(values[0] - 1)
		// minSelect.change();
		document.getElementById("FilterMaxPrice_DD").selectedIndex = Math.round(values[1] - 1)
		// maxSelect.change();

		$('.price-value').text($('#FilterMinPrice_DD option:selected').text() + '-' + $('#FilterMaxPrice_DD option:selected').text())

		// use updateCount(); function here to 
		// update while using the price slider
		// updateCount();
	});

	slider.noUiSlider.on('change', function (values, handle) {
		// use updateCount(); function here to 
		// update when releasing click from price slider
		updateCount()
	});

}

/* Helper function to build the payment slider
========================= */
function buildPaymentSlider() {
	var minSelect = $('#FilterMinPayment_DD')
	var maxSelect = $('#FilterMaxPayment_DD')
	var rangeMax = document.getElementById("FilterMaxPayment_DD").options.length;

	var slider = document.getElementById('payment-slider')

	// create slider if not already present
	if (!$(slider).hasClass("noUi-target")) {
		noUiSlider.create(slider, {
			start: [minSelect[0].selectedIndex, maxSelect[0].selectedIndex],
			connect: true,
			step: 1,
			range: {
        'min': 1,
				'max': rangeMax
			}
		})
  }
    
	// Update options to change rangeMax
	// Force 'max' to be different to 'min'
	// and disable if only 1 option is available
	if (rangeMax == 1) {
		slider.noUiSlider.updateOptions({
			start: [minSelect[0].selectedIndex, maxSelect[0].selectedIndex],
			range: {
        'min': 1,
        'max': 2
			}
		})
		slider.setAttribute('disabled', true) // disable slider
		slider.setAttribute('title', "Payment range set") // title for hint
  }
	else {
    // 'min' and 'max' are different
		slider.noUiSlider.updateOptions({
			start: [minSelect[0].selectedIndex, maxSelect[0].selectedIndex],
			range: {
				'min': 1,
				'max': rangeMax
			}
		})
    slider.removeAttribute('disabled') // enable slider
    slider.setAttribute('title', "Select price range") // title hint
	}

  slider.noUiSlider.on('update', function (values, handle) {

		document.getElementById("FilterMinPayment_DD").selectedIndex = Math.round(values[0] - 1)
		// minSelect.change();
		document.getElementById("FilterMaxPayment_DD").selectedIndex = Math.round(values[1] - 1)
		// maxSelect.change();

		$('.payment-value').text($('#FilterMinPayment_DD option:selected').text() + '-' + $('#FilterMaxPayment_DD option:selected').text())

		// use updateCount(); function here to 
		// update while using the price slider
		// updateCount();
	});

	slider.noUiSlider.on('change', function (values, handle) {
		// use updateCount(); function here to 
		// update when releasing click from price slider
		updateCount()
	});
}


/* Helper function to convert string to CSS class name
========================= */
function makeSafeForCSS(name) {
    return name.replace(/[^a-z0-9]/g, function(s) {
        var c = s.charCodeAt(0)
        if (c == 32) return '-'
        if (c >= 65 && c <= 90) return '' + s.toLowerCase()
        return '' + ('000' + c.toString(16)).slice(-4)
    })
}