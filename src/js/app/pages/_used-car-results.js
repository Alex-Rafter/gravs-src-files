import { getPageType } from '../utils'

if (getPageType() === 'Used Car Results') {
	$(toggleListGrid);
} 

// Toggle list/grid view in used results
function toggleListGrid() {
	var gridListToggleVal = localStorage.getItem("view") || "grid"
	var gridListToggler = document.querySelector('[data-grid-toggle-for]')
	var gridListToggleButtons = gridListToggler.querySelectorAll('.nav-link')
	var gridListToggleContainer = document.querySelector(gridListToggler.dataset.gridToggleFor)

	// If gridListToggleVal is 'Grid' then add the list view class
	gridListToggleVal === 'List' && gridListToggleContainer.addClass('list-view')

	// For all toggle values
	gridListToggler.querySelectorAll('[data-grid-toggle-value]')
		.forEach((el) => {
			el.addEventListener("click", function (evt) {
				gridListToggleButtons.forEach((el) => {
					el.classList.remove('active')
				})

				evt.currentTarget.classList.toggle('active', true)
				// Set grid List toggle value
				gridListToggleVal = evt.currentTarget.dataset.gridToggleValue
				// If grid list toggle value is list, then set the list-view class
				gridListToggleContainer.classList.toggle('list-view', gridListToggleVal === 'list')

			})
		})
}