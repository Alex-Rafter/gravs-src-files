import Cookies from 'js-cookie'

// If scroll AND location cookie is set, and the location is the same
//scroll to the position saved in the scroll cookie
if (
  Cookies.get("scroll") !== null
  && Cookies.get("location") !== null
  && Cookies.get("location") == $(location).attr("href")
) {
  $(document).scrollTop(Cookies.get("scroll"));
}

// Remember window scroll position for cog forms dropdowns on postback
$("#Enquiry_Type_Enquiry_Type, #Dealership_Dealership").on("click", function () {
  // Set a cookie that holds the scroll position.
  Cookies.set("scroll", $(document).scrollTop());
  // set a cookie that holds the current location.
  Cookies.set("location", $(location).attr("href"));
})

// Remember state of cash/monthly price toggle
$("#payment-type li a").on("click", function () {
  $("#payment-type select:hidden").val("-1");
  const paymentTypeTab = $("#payment-type").tabs("option", "active");
  Cookies.set("paymentTypeTab", paymentTypeTab, { path: "/" });
});
if (Cookies.get("paymentTypeTab")) {
  $("#payment-type").tabs("option", "active", Cookies.get("paymentTypeTab"));
}

// Remember window scroll position when finance is updated
$("#COGWebzationSubmit_V1_WZButton, #COGCodeWeaverSubmit_V1_CWButton").on("click", function () {
  Cookies.set("window", $(window).scrollTop(), { path: "/" });
});
if (Cookies.get("window") && Cookies.get("window") > 0) {
  $("html,body").scrollTop(Cookies.get("window"));
  $.removeCookie("window", { path: '/' });
}

// Reload page on dropdown change
$(".js-dd-reload-on-change").on("change", function () {
  window.location.href = $(this).val();
})
