/**
 * Prevents multiple form submissions if page is valid.
 * To use, add the below line to the page specific script referencing the ID
 * of the submit button as the function's argument.
 * document.getElementById("form1").addEventListener('submit', (event) => {preventMultipleSubmissions('COGFormSubmit_Submit', 'Sending, please wait...')});
 * @param {*} cogFormSubmitButtonId 
 */
export function preventMultipleSubmissions(cogFormSubmitButtonId, cogFormSubmitButtonHoldingText) {

  if(Page_IsValid) {

    window.onbeforeunload = event => {

      // variables
      var cogFormSubmitButton = document.getElementById(cogFormSubmitButtonId);
      var cogFormSubmitButtonText = cogFormSubmitButton.value;

      // holding text to tell user the form is sending
      cogFormSubmitButton.value = cogFormSubmitButtonHoldingText ? cogFormSubmitButtonHoldingText : "Sending, please wait...";

      // disable the submit button to prevent multiple submissions
      cogFormSubmitButton.setAttribute('disabled', true);

      // enable the form submit button after 10 seconds, 
      // allowing for any scenarios where the form does not send
      // even though it passes Page_IsValid validation.
      // for example, when cancelling the event by pressing the 
      // 'Esc' key after submitting.
      setTimeout(() => {
        cogFormSubmitButton.removeAttribute('disabled', true);
        cogFormSubmitButton.value = cogFormSubmitButtonText;
      }, 10000);

    }

  }

}