import { relativeTime } from '../utils'

// Get Latest Tweets
$.each($(".latest-tweets"), function () {

  const tweetContainer = $(this)
  const cogTwitterUrl = "/COG/COGTwitter/getTweets.ashx?"
  const twitterScreenName = $(this).attr("data-twitter-screenname")
  const tweetCount = $(this).attr("data-twitter-count")
  const showImages = $(this).attr("data-twitter-show-images")

  if (twitterScreenName) {
    cogTwitterUrl += "ScreenName=" + twitterScreenName + "&"
  }
  if (tweetCount) {
    cogTwitterUrl += "TweetCount=" + tweetCount
  }

  $.ajax({
    url: cogTwitterUrl,
    dataType: "json", type: "GET", cache: false, contentType: 'application/json charset=utf-8',
    error: function (data) { },
    complete: function (data) { },
    beforeSend: function () { },
    success: function (data) {
      let list = ''

      if (data !== null) {
        $.each(data, function () {
          const username = this.user.screen_name
          const status = this.text.replace(/((https?|s?ftp|ssh)\:\/\/[^"\s\<\>]*[^.,'">\:\s\<\>\)\]\!])/g, function (url) {
            return '<a href="' + url + '" target="_blank">' + url + '</a>'
          }).replace(/\B@([_a-z0-9]+)/ig, function (reply) {
            return reply.charAt(0) + '<a target="_blank" href="http://twitter.com/' + reply.substring(1) + '">' + reply.substring(1) + '</a>'
          })

          if (showImages == "true") {
            list += `<li>${status} <span><a href="http://twitter.com/${username}/statuses/${this.id_str}" target="_blank"">${relativeTime(this.created_at)}</a></span>`
            if (this.entities.media) {
              $.each(this.entities.media, function () {
                if (this.type == "photo") {
                  list += `
                      <a href=${this.expanded_url}>
                        <img src="${this.media_url}" />
                      </a>`
                }
              })
            }
            list += '</li>'
          } else {
            list += `<li>${status}<span><a href="http://twitter.com/${username}/statuses/${this.id_str}" target="blank">${relativeTime(this.created_at)}</a></span></li>`
          }
        })
      }
      tweetContainer.html(list)
      tweetContainer.cycle('reinit')
    }
  })
})
