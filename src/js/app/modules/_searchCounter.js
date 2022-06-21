export function updateCount() {
	$.post("/inc/modules/search/search-counter.aspx?"
		+ "&COGManufacturer=" + checkControl($("#MakeField_DD option:selected"))
		+ "&COGModel=" + checkControl($("#ModelField_DD option:selected"))
		+ "&COGPriceFrom=" + checkControl($("#MinPrice_DD option:selected"))
		+ "&COGPriceTo=" + checkControl($("#MaxPrice_DD option:selected"))
		+ "&COGFinancePriceFrom=" + checkControl($("#FinanceMinRegularPayment_DD option:selected"))
		+ "&COGFinancePriceTo=" + checkControl($("#FinanceMaxRegularPayment_DD option:selected"))
		+ "&COGEnabled=1",
		function (data) {
			var content = $($.parseHTML(data)).find("#count").text().replace(/(\r\n|\n|\r)/gm, '');
			$('#counter').html(content);
			$('#SearchButton_COGCustomSearchButton').val('Search ' + content + ' Cars');
		});
}

function checkControl(Control) {
	if (Control.val() !== undefined) {
		return Control.val();
	} else {
		return "-1";
	}
}