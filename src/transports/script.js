// Install text to script executor
jQuery.ajaxSettings.dataConverters["text => script"] = jQuery.globalEval;

// Bind script tag hack transport
jQuery.ajax.bindTransport("script", function(s) {
	
	// Handle cache special case
	if ( s.cache === null ) {
		s.cache = true;
	}
	
	// This transport only deals with cross domain get requests
	if ( s.crossDomain && ( s.type == "GET" || ! s.data ) ) {
			
		s.async = true;
		s.global = false;
		
		var script;
		
		return {
			
			send: function(_, callback) {
				var head = document.getElementsByTagName("head")[0] || document.documentElement;
	
				script = document.createElement("script");
				script.src = s.url;
				
				if ( s.scriptCharset ) {
					script.charset = s.scriptCharset;
				}
				
				// Attach handlers for all browsers
				script.onload = script.onreadystatechange = function(statusText) {
					
					if ( (!script.readyState ||
							script.readyState === "loaded" || script.readyState === "complete") ) {
								
						// Handle memory leak in IE
						script.onload = script.onreadystatechange = null;
						
						// Remove the script
						if ( head && script.parentNode ) {
							head.removeChild( script );
						}
						
						// Cleanup
						s = head = script = undefined;
						
						// Callback & dereference
						callback(statusText ? 0 : 200, statusText || "success");
						callback = undefined;
					}
				};
				// Use insertBefore instead of appendChild  to circumvent an IE6 bug.
				// This arises when a base node is used (#2709 and #4378).
				head.insertBefore( script, head.firstChild );
			},
			
			abort: function(statusText) {
				if ( script ) {
					script.onload(statusText);
				}
			}
		};
	}
});
