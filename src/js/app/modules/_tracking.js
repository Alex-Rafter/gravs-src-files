if (window.bskTrackAnon || false) {	
	$.post("/cog/trackanonymous?url=" + window.location.href + '&referrer=' + document.referrer);
}
