$(function () {
	// Get all goUp Elements
	const goUps = document.getElementsByClassName('go-up')
	const goDowns = document.getElementsByClassName('go-down')

	// If there are goUp elements
	if (goUps.length > 0) {
		// Add an event listener to each
		Array.from(goUps).forEach(el => {
			el.addEventListener('click', () => {
				// On click, scroll to the top of the specified scroll container
				if (el.dataset.scrollContainer) {	
					document.querySelector(el.dataset.scrollContainer).scrollTo({
						top: 0,
						behavior: "smooth"
					})
				} else {
					window.scrollTo({
						top: 0,
						behavior: "smooth"
					})
				}
			})
		})
	}

	if (goDowns.length > 0) {
		// Add an event listener to each
		Array.from(goDowns).forEach(el => {
			el.addEventListener('click', () => {
				const nextPosition = document.querySelector(el.dataset.scrollTo).offsetTop;
				// On click, scroll to the top of the specified scroll container
				document.querySelector(el.dataset.scrollContainer).scrollTo({
					top: nextPosition,
					behavior: "smooth"
				})
			})
		})
	}
})