/**
	* @name isValidUkRegPlate
	* @description Takes a string and checks if it's a valid Uk reg plate
	* @param {String} registration Reg plate to be checked
	* @returns {Boolean} isValid
*/
export function isValidUkRegPlate(registration) {
	const strippedRegistration = registration.replace(/\s/g, "").toUpperCase();
	const regex = /(^[A-Z]{2}[0-9]{2}\s?[A-Z]{3}$)|(^[A-Z][0-9]{1,3}[A-Z]{3}$)|(^[A-Z]{3}[0-9]{1,3}[A-Z]$)|(^[0-9]{1,4}[A-Z]{1,2}$)|(^[0-9]{1,3}[A-Z]{1,3}$)|(^[A-Z]{1,2}[0-9]{1,4}$)|(^[A-Z]{1,3}[0-9]{1,3}$)|(^[A-Z]{1,3}[0-9]{1,4}$)|(^[0-9]{3}[DX]{1}[0-9]{3}$)/
	return regex.test(strippedRegistration);
}

// Regex Adapted from : https://gist.github.com/danielrbradley/7567269
