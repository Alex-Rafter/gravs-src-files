import { validateElements, isValidUkRegPlate } from '../../../../validation'

const validationSchema = {
	regNumber: {
		type: 'string',
		required: true,
		validator: (rule, value) => isValidUkRegPlate(value),
		element: document.querySelector('[name="regNumber"]')
	}
}

const regLookupForm = document.getElementById("regLookupForm")

export async function validateRegPlate(evt) {
	const regValid = await validateElements(validationSchema, () => {
		regLookupForm.classList.add('was-validated')
	})
	
	if (!regValid) {
		evt.preventDefault()
	}
}