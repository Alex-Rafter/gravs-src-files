// @name: relativeTime
// @description: Get a relative time string
// @params:
//    string: String - Human readable 
// @returns searchRegex: RegExp
export function relativeTime(time_value) {
  const values = time_value.split(" ")
  time_value = values[1] + " " + values[2] + ", " + values[5] + " " + values[3]
  var parsed_date = Date.parse(time_value)
  var relative_to = (arguments.length > 1) ? arguments[1] : new Date()
  var delta = parseInt((relative_to.getTime() - parsed_date) / 1000)
  delta = delta + (relative_to.getTimezoneOffset() * 60)
  if (delta < 60) {
    return 'less than a minute ago'
  } else if (delta < 120) {
    return 'about a minute ago'
  } else if (delta < (60 * 60)) {
    return (parseInt(delta / 60)).toString() + ' minutes ago'
  } else if (delta < (120 * 60)) {
    return 'about an hour ago'
  } else if (delta < (24 * 60 * 60)) {
    return 'about ' + (parseInt(delta / 3600)).toString() + ' hours ago'
  } else if (delta < (48 * 60 * 60)) {
    return '1 day ago'
  }
  return (parseInt(delta / 86400)).toString() + ' days ago'
}
