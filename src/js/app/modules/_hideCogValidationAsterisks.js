// Hide COG validation asterisks when forms are submitted and apply a class to the element insted
$("form").on("submit", function () {
  $("input.invalid, textarea.invalid, select.invalid").removeClass("invalid")
  $('span[id$="_Validation"]:visible').html('<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="visually-hidden">Error:</span> This field is required</div>').prev("input, textarea, select").addClass("invalid")
  if ($(".invalid").length) {
    $("html, body").animate({
      scrollTop: $(".invalid:first").offset().top
    }, 1500)
  }
})