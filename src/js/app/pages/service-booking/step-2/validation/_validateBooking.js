import { validateElements } from '../../../../validation'

const bookingForm = document.getElementById("up1")

const validationSchema = {
	preferredDate: {
		type: 'date',
		required: true,
		element: document.querySelector('[name="preferredDate"]')
	},
	preferredTime: {
		type: 'string',
		required: true,
		validator: (rule, value) => value != '0001-01-01 00:00',
		element: document.querySelector('[name="preferredDate"]')
	},
	preferredDate: {
		type: 'string',
		required: true,
		validator: (rule, value) => value != '0001-01-01 00:00',
		element: document.querySelector('[name="preferredDate"]')
	},
	serviceOption: {
		required: true,
		validator: () => {
			return (document.querySelectorAll('.service-size[selected="true"]')?.length > 0)
		},
		element: document.getElementById('service-options')
	},
}

export async function validateBooking(evt) {
	const bookingFormValid = await validateElements(validationSchema, () => {
		bookingForm.classList.add('was-validated')
	})

	if (!bookingFormValid) {
		evt.preventDefault()
	}
}