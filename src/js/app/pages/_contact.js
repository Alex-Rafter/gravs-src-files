import { getPageType } from '../utils'
import { preventMultipleSubmissions } from '../utils'

if (getPageType() === 'Contact Us') {

  // prevent user from being able to send multiple form submissions
  document.getElementById("form1").addEventListener('submit', (event) => {
    preventMultipleSubmissions('COGFormSubmit_Submit', 'Sending, please wait...');
  });

}