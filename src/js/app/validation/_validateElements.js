import Schema from 'async-validator'

export async function validateElements(schema, postValidation) {
	const validator = new Schema(schema)

	let values = {}
	Object.keys(schema).map((val, index) => {
		values[val] = schema[val].element.value
	})

	let isValid = true

	await validator
		.validate(values)
		.then(() => {
			Object.keys(schema).forEach(key => {
				schema[key].element.setCustomValidity("")
			})
		})
		.catch(({ errors, fields }) => {
			isValid = false;

			const errorFields = errors.map(field => field.field)

			// For all of the fields
			Object.keys(schema).forEach(key => {
				// Check if the field is included in the invalid elements
				// If so, set their invalid state
				// Otherwise set the valid state
				schema[key].element.setCustomValidity(
					errorFields.includes(key) ? "Invalid" : ""
				)
			})
		})
	
	postValidation()
	
	return isValid
}
