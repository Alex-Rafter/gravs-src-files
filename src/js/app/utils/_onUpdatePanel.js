/**
 * @name
 * @param {function} callback 
 */
export function onUpdatePanel(callback) {
	const instance = Sys.WebForms.PageRequestManager.getInstance()

	instance.add_endRequest(function (sender, e) {
		if (sender._postBackSettings.panelsToUpdate != null) {
			callback()
		}
	});
}
