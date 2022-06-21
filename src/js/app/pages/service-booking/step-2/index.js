import { getPageType } from '../../../utils/_getPageType';
import { onUpdatePanel } from '../../../utils';
import { validateRegPlate, validateBooking } from './validation';
import flatpickr from 'flatpickr'

if (getPageType() === "Service Booking - Step 2") {
	// Validation
	document.getElementById('regLookup')?.addEventListener('click', validateRegPlate)
	document.getElementById('book')?.addEventListener('click', validateBooking)

	// Initate flatpickr - for date input
	flatpickr('#preferredDate', {})
	onUpdatePanel(() => flatpickr('#preferredDate', {}))
}
