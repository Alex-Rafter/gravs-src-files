import { getPageType } from '../../utils'
import { validateElements } from '../../validation'

if (getPageType() === "Service Booking - Step 1") {
	const validationSchema = {
		dealerid: {
			type: 'string',
			required: true,
			validator: (rule, value) => value != -1,
			element: document.querySelector('[name="dealerid"]')
		},
		firstname: {
			type: 'string',
			required: true,
			element: document.querySelector('[name="firstname"]')
		},
		lastname: {
			type: 'string',
			required: true,
			element: document.querySelector('[name="lastname"]')
		},
		email: {
			type: 'email',
			required: true,
			element: document.querySelector('[name="email"]')
		},
		tel: {
			type: 'string',
			required: true,
			element: document.querySelector('[name="tel"]')
		}
	}

	const nextButton = document.getElementById('next')
	const callbackButton = document.getElementById('callback')
	const form = document.getElementById('service-booking-form-1')
	const topLevelForm = document.getElementById('form1')

	async function validateForm(evt) {
		const formValid = await validateElements(validationSchema, () => {
			form.classList.add('was-validated')
		})

		!formValid && evt.preventDefault()
	}

	nextButton.addEventListener('click', validateForm)
	callbackButton.addEventListener('click', validateForm)
}
