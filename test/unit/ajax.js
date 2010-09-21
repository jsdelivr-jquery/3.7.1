module("ajax");

// Safari 3 randomly crashes when running these tests,
// but only in the full suite - you can run just the Ajax
// tests and they'll pass
//if ( !jQuery.browser.safari ) {

if ( !isLocal ) {

test("jQuery.ajax() - success callbacks", function() {
	expect( 8 );

	jQuery.ajaxSetup({ timeout: 0 });

	stop();

	jQuery('#foo').ajaxStart(function(){
		ok( true, "ajaxStart" );
	}).ajaxStop(function(){
		ok( true, "ajaxStop" );
		start();
	}).ajaxSend(function(){
		ok( true, "ajaxSend" );
	}).ajaxComplete(function(){
		ok( true, "ajaxComplete" );
	}).ajaxError(function(){
		ok( false, "ajaxError" );
	}).ajaxSuccess(function(){
		ok( true, "ajaxSuccess" );
	});

	jQuery.ajax({
		url: url("data/name.html"),
		beforeSend: function(){ ok(true, "beforeSend"); },
		success: function(){ ok(true, "success"); },
		error: function(){ ok(false, "error"); },
		complete: function(){ ok(true, "complete"); }
	});
});

test("jQuery.ajax() - error callbacks", function() {
	expect( 8 );
	stop();

	jQuery('#foo').ajaxStart(function(){
		ok( true, "ajaxStart" );
	}).ajaxStop(function(){
		ok( true, "ajaxStop" );
		start();
	}).ajaxSend(function(){
		ok( true, "ajaxSend" );
	}).ajaxComplete(function(){
		ok( true, "ajaxComplete" );
	}).ajaxError(function(){
		ok( true, "ajaxError" );
	}).ajaxSuccess(function(){
		ok( false, "ajaxSuccess" );
	});

	jQuery.ajaxSetup({ timeout: 500 });

	jQuery.ajax({
		url: url("data/name.php?wait=5"),
		beforeSend: function(){ ok(true, "beforeSend"); },
		success: function(){ ok(false, "success"); },
		error: function(){ ok(true, "error"); },
		complete: function(){ ok(true, "complete"); }
	});
});

test(".ajax() - 304", function() {
	expect( 1 );
	stop();

	jQuery.ajax({
		url: url("data/notmodified.php"),
		success: function(){ ok(true, "304 ok"); },
		error: function(){ ok(false, "304 not ok "); },
		complete: function(xhr){ start(); }
	});
});

test(".load()) - 404 error callbacks", function() {
	expect( 6 );
	stop();

	jQuery('#foo').ajaxStart(function(){
		ok( true, "ajaxStart" );
	}).ajaxStop(function(){
		ok( true, "ajaxStop" );
		start();
	}).ajaxSend(function(){
		ok( true, "ajaxSend" );
	}).ajaxComplete(function(){
		ok( true, "ajaxComplete" );
	}).ajaxError(function(){
		ok( true, "ajaxError" );
	}).ajaxSuccess(function(){
		ok( false, "ajaxSuccess" );
	});

	jQuery("<div/>").load("data/404.html", function(){
		ok(true, "complete");
	});
});

test("jQuery.ajax() - abort", function() {
	expect( 6 );
	stop();

	jQuery('#foo').ajaxStart(function(){
		ok( true, "ajaxStart" );
	}).ajaxStop(function(){
		ok( true, "ajaxStop" );
		start();
	}).ajaxSend(function(){
		ok( true, "ajaxSend" );
	}).ajaxComplete(function(){
		ok( true, "ajaxComplete" );
	});

	var xhr = jQuery.ajax({
		url: url("data/name.php?wait=5"),
		beforeSend: function(){ ok(true, "beforeSend"); },
		complete: function(){ ok(true, "complete"); }
	});

	xhr.abort();
});

test("Ajax events with context", function() {
	expect(14);
	
	stop();
	var context = document.createElement("div");
	
	function event(e){
		equals( this, context, e.type );
	}

	function callback(msg){
		return function(){
			equals( this, context, "context is preserved on callback " + msg );
		};
	}

	function nocallback(msg){
		return function(){
			equals( typeof this.url, "string", "context is settings on callback " + msg );
		};
	}
	
	jQuery('#foo').add(context)
			.ajaxSend(event)
			.ajaxComplete(event)
			.ajaxError(event)
			.ajaxSuccess(event);

	jQuery.ajax({
		url: url("data/name.html"),
		beforeSend: callback("beforeSend"),
		success: callback("success"),
		error: callback("error"),
		complete:function(){
			callback("complete").call(this);

			jQuery.ajax({
				url: url("data/404.html"),
				context: context,
				beforeSend: callback("beforeSend"),
				error: callback("error"),
				complete: function(){
					callback("complete").call(this);

					jQuery('#foo').add(context).unbind();

					jQuery.ajax({
						url: url("data/404.html"),
						beforeSend: nocallback("beforeSend"),
						error: nocallback("error"),
						complete: function(){
							nocallback("complete").call(this);
							start();
						}
					});
				}
			});
		},
		context:context
	});
});

test("jQuery.ajax context modification", function() {
	expect(1);

	stop();

	var obj = {}

	jQuery.ajax({
		url: url("data/name.html"),
		context: obj,
		beforeSend: function(){
			this.test = "foo";
		},
		complete: function() {
			start();
		}
	});

	equals( obj.test, "foo", "Make sure the original object is maintained." );
});

test("jQuery.ajax() - disabled globals", function() {
	expect( 3 );
	stop();

	jQuery('#foo').ajaxStart(function(){
		ok( false, "ajaxStart" );
	}).ajaxStop(function(){
		ok( false, "ajaxStop" );
	}).ajaxSend(function(){
		ok( false, "ajaxSend" );
	}).ajaxComplete(function(){
		ok( false, "ajaxComplete" );
	}).ajaxError(function(){
		ok( false, "ajaxError" );
	}).ajaxSuccess(function(){
		ok( false, "ajaxSuccess" );
	});

	jQuery.ajax({
		global: false,
		url: url("data/name.html"),
		beforeSend: function(){ ok(true, "beforeSend"); },
		success: function(){ ok(true, "success"); },
		error: function(){ ok(false, "error"); },
		complete: function(){
		  ok(true, "complete");
		  setTimeout(function(){ start(); }, 13);
		}
	});
});

test("jQuery.ajax - xml: non-namespace elements inside namespaced elements", function() {
	expect(3);
	stop();
	jQuery.ajax({
	  url: url("data/with_fries.xml"),
	  dataType: "xml",
	  success: function(resp) {
		equals( jQuery("properties", resp).length, 1, 'properties in responseXML' );
		equals( jQuery("jsconf", resp).length, 1, 'jsconf in responseXML' );
		equals( jQuery("thing", resp).length, 2, 'things in responseXML' );
		start();
	  }
	});
});

test("jQuery.ajax - beforeSend", function() {
	expect(1);
	stop();

	var check = false;

	jQuery.ajaxSetup({ timeout: 0 });

	jQuery.ajax({
		url: url("data/name.html"),
		beforeSend: function(xml) {
			check = true;
		},
		success: function(data) {
			ok( check, "check beforeSend was executed" );
			start();
		}
	});
});

test("jQuery.ajax - beforeSend, cancel request (#2688)", function() {
	expect(2);
	var request = jQuery.ajax({
		url: url("data/name.html"),
		beforeSend: function() {
			ok( true, "beforeSend got called, canceling" );
			return false;
		},
		success: function() {
			ok( false, "request didn't get canceled" );
		},
		complete: function() {
			ok( false, "request didn't get canceled" );
		},
		error: function() {
			ok( false, "request didn't get canceled" );
		}
	});
	ok( request === false, "canceled request must return false instead of XMLHttpRequest instance" );
});

window.foobar = null;
window.testFoo = undefined;

test("jQuery.ajax - dataType html", function() {
	expect(5);
	stop();

	var verifyEvaluation = function() {
		equals( testFoo, "foo", 'Check if script was evaluated for datatype html' );
		equals( foobar, "bar", 'Check if script src was evaluated for datatype html' );

		start();
	};

	jQuery.ajax({
	  dataType: "html",
	  url: url("data/test.html"),
	  success: function(data) {
		jQuery("#ap").html(data);
		ok( data.match(/^html text/), 'Check content for datatype html' );
		setTimeout(verifyEvaluation, 600);
	  }
	});
});

test("serialize()", function() {
	expect(5);

	// Add html5 elements only for serialize because selector can't yet find them on non-html5 browsers
	jQuery("#search").after(
		'<input type="email" id="html5email" name="email" value="dave@jquery.com" />'+
		'<input type="number" id="html5number" name="number" value="43" />'
	);

	equals( jQuery('#form').serialize(),
		"action=Test&radio2=on&check=on&hidden=&foo%5Bbar%5D=&name=name&search=search&email=dave%40jquery.com&number=43&select1=&select2=3&select3=1&select3=2",
		'Check form serialization as query string');

	equals( jQuery('#form :input').serialize(),
		"action=Test&radio2=on&check=on&hidden=&foo%5Bbar%5D=&name=name&search=search&email=dave%40jquery.com&number=43&select1=&select2=3&select3=1&select3=2",
		'Check input serialization as query string');

	equals( jQuery('#testForm').serialize(),
		'T3=%3F%0AZ&H1=x&H2=&PWD=&T1=&T2=YES&My+Name=me&S1=abc&S3=YES&S4=',
		'Check form serialization as query string');

	equals( jQuery('#testForm :input').serialize(),
		'T3=%3F%0AZ&H1=x&H2=&PWD=&T1=&T2=YES&My+Name=me&S1=abc&S3=YES&S4=',
		'Check input serialization as query string');

	equals( jQuery('#form, #testForm').serialize(),
		"action=Test&radio2=on&check=on&hidden=&foo%5Bbar%5D=&name=name&search=search&email=dave%40jquery.com&number=43&select1=&select2=3&select3=1&select3=2&T3=%3F%0AZ&H1=x&H2=&PWD=&T1=&T2=YES&My+Name=me&S1=abc&S3=YES&S4=",
		'Multiple form serialization as query string');

  /* Temporarily disabled. Opera 10 has problems with form serialization.
	equals( jQuery('#form, #testForm :input').serialize(),
		"action=Test&radio2=on&check=on&hidden=&foo%5Bbar%5D=&name=name&search=search&email=dave%40jquery.com&number=43&select1=&select2=3&select3=1&select3=2&T3=%3F%0AZ&H1=x&H2=&PWD=&T1=&T2=YES&My+Name=me&S1=abc&S3=YES&S4=",
		'Mixed form/input serialization as query string');
	*/
	jQuery("#html5email, #html5number").remove();
});

test("jQuery.param()", function() {
	expect(19);
	
	equals( !jQuery.ajaxSettings.traditional, true, "traditional flag, falsy by default" );
  
	var params = {foo:"bar", baz:42, quux:"All your base are belong to us"};
	equals( jQuery.param(params), "foo=bar&baz=42&quux=All+your+base+are+belong+to+us", "simple" );

	params = {someName: [1, 2, 3], regularThing: "blah" };
	equals( jQuery.param(params), "someName%5B%5D=1&someName%5B%5D=2&someName%5B%5D=3&regularThing=blah", "with array" );

	params = {foo: ['a', 'b', 'c']};
	equals( jQuery.param(params), "foo%5B%5D=a&foo%5B%5D=b&foo%5B%5D=c", "with array of strings" );

	params = {foo: ["baz", 42, "All your base are belong to us"] };
	equals( jQuery.param(params), "foo%5B%5D=baz&foo%5B%5D=42&foo%5B%5D=All+your+base+are+belong+to+us", "more array" );

	params = {foo: { bar: 'baz', beep: 42, quux: 'All your base are belong to us' } };
	equals( jQuery.param(params), "foo%5Bbar%5D=baz&foo%5Bbeep%5D=42&foo%5Bquux%5D=All+your+base+are+belong+to+us", "even more arrays" );
	
	params = { a:[1,2], b:{ c:3, d:[4,5], e:{ x:[6], y:7, z:[8,9] }, f:true, g:false, h:undefined }, i:[10,11], j:true, k:false, l:[undefined,0], m:"cowboy hat?" };
	equals( decodeURIComponent( jQuery.param(params) ), "a[]=1&a[]=2&b[c]=3&b[d][]=4&b[d][]=5&b[e][x][]=6&b[e][y]=7&b[e][z][]=8&b[e][z][]=9&b[f]=true&b[g]=false&b[h]=undefined&i[]=10&i[]=11&j=true&k=false&l[]=undefined&l[]=0&m=cowboy+hat?", "huge structure" );
	
	params = { a: [ 0, [ 1, 2 ], [ 3, [ 4, 5 ], [ 6 ] ], { b: [ 7, [ 8, 9 ], [ { c: 10, d: 11 } ], [ [ 12 ] ], [ [ [ 13 ] ] ], { e: { f: { g: [ 14, [ 15 ] ] } } }, 16 ] }, 17 ] };
	equals( decodeURIComponent( jQuery.param(params) ), "a[]=0&a[1][]=1&a[1][]=2&a[2][]=3&a[2][1][]=4&a[2][1][]=5&a[2][2][]=6&a[3][b][]=7&a[3][b][1][]=8&a[3][b][1][]=9&a[3][b][2][0][c]=10&a[3][b][2][0][d]=11&a[3][b][3][0][]=12&a[3][b][4][0][0][]=13&a[3][b][5][e][f][g][]=14&a[3][b][5][e][f][g][1][]=15&a[3][b][]=16&a[]=17", "nested arrays" );
	
	params = { a:[1,2], b:{ c:3, d:[4,5], e:{ x:[6], y:7, z:[8,9] }, f:true, g:false, h:undefined }, i:[10,11], j:true, k:false, l:[undefined,0], m:"cowboy hat?" };
	equals( jQuery.param(params,true), "a=1&a=2&b=%5Bobject+Object%5D&i=10&i=11&j=true&k=false&l=undefined&l=0&m=cowboy+hat%3F", "huge structure, forced traditional" );

	equals( decodeURIComponent( jQuery.param({ a: [1,2,3], 'b[]': [4,5,6], 'c[d]': [7,8,9], e: { f: [10], g: [11,12], h: 13 } }) ), "a[]=1&a[]=2&a[]=3&b[]=4&b[]=5&b[]=6&c[d][]=7&c[d][]=8&c[d][]=9&e[f][]=10&e[g][]=11&e[g][]=12&e[h]=13", "Make sure params are not double-encoded." );
	
	jQuery.ajaxSetup({ traditional: true });
	
	var params = {foo:"bar", baz:42, quux:"All your base are belong to us"};
	equals( jQuery.param(params), "foo=bar&baz=42&quux=All+your+base+are+belong+to+us", "simple" );

	params = {someName: [1, 2, 3], regularThing: "blah" };
	equals( jQuery.param(params), "someName=1&someName=2&someName=3&regularThing=blah", "with array" );

	params = {foo: ['a', 'b', 'c']};
	equals( jQuery.param(params), "foo=a&foo=b&foo=c", "with array of strings" );

	params = {"foo[]":["baz", 42, "All your base are belong to us"]};
	equals( jQuery.param(params), "foo%5B%5D=baz&foo%5B%5D=42&foo%5B%5D=All+your+base+are+belong+to+us", "more array" );

	params = {"foo[bar]":"baz", "foo[beep]":42, "foo[quux]":"All your base are belong to us"};
	equals( jQuery.param(params), "foo%5Bbar%5D=baz&foo%5Bbeep%5D=42&foo%5Bquux%5D=All+your+base+are+belong+to+us", "even more arrays" );
	
	params = { a:[1,2], b:{ c:3, d:[4,5], e:{ x:[6], y:7, z:[8,9] }, f:true, g:false, h:undefined }, i:[10,11], j:true, k:false, l:[undefined,0], m:"cowboy hat?" };
	equals( jQuery.param(params), "a=1&a=2&b=%5Bobject+Object%5D&i=10&i=11&j=true&k=false&l=undefined&l=0&m=cowboy+hat%3F", "huge structure" );
	
	params = { a: [ 0, [ 1, 2 ], [ 3, [ 4, 5 ], [ 6 ] ], { b: [ 7, [ 8, 9 ], [ { c: 10, d: 11 } ], [ [ 12 ] ], [ [ [ 13 ] ] ], { e: { f: { g: [ 14, [ 15 ] ] } } }, 16 ] }, 17 ] };
	equals( jQuery.param(params), "a=0&a=1%2C2&a=3%2C4%2C5%2C6&a=%5Bobject+Object%5D&a=17", "nested arrays (not possible when jQuery.param.traditional == true)" );
	
	params = { a:[1,2], b:{ c:3, d:[4,5], e:{ x:[6], y:7, z:[8,9] }, f:true, g:false, h:undefined }, i:[10,11], j:true, k:false, l:[undefined,0], m:"cowboy hat?" };
	equals( decodeURIComponent( jQuery.param(params,false) ), "a[]=1&a[]=2&b[c]=3&b[d][]=4&b[d][]=5&b[e][x][]=6&b[e][y]=7&b[e][z][]=8&b[e][z][]=9&b[f]=true&b[g]=false&b[h]=undefined&i[]=10&i[]=11&j=true&k=false&l[]=undefined&l[]=0&m=cowboy+hat?", "huge structure, forced not traditional" );
	
	params = { param1: null };
	equals( jQuery.param(params,false), "param1=null", "Make sure that null params aren't traversed." );
});

test("synchronous request", function() {
	expect(1);
	ok( /^{ "data"/.test( jQuery.ajax({url: url("data/json_obj.js"), dataType: "text", async: false}).responseText ), "check returned text" );
});

test("synchronous request with callbacks", function() {
	expect(2);
	var result;
	jQuery.ajax({url: url("data/json_obj.js"), async: false, dataType: "text", success: function(data) { ok(true, "sucess callback executed"); result = data; } });
	ok( /^{ "data"/.test( result ), "check returned text" );
});

test("pass-through request object", function() {
	expect(8);
	stop();

	var target = "data/name.html";
	var successCount = 0;
	var errorCount = 0;
	var errorEx = "";
	var success = function() {
		successCount++;
	};
	jQuery("#foo").ajaxError(function (e, xml, s, ex) {
		errorCount++;
		errorEx += ": " + xml.status;
	});
	jQuery("#foo").one('ajaxStop', function () {
		equals(successCount, 5, "Check all ajax calls successful");
		equals(errorCount, 0, "Check no ajax errors (status" + errorEx + ")");
		jQuery("#foo").unbind('ajaxError');

		start();
	});

	ok( jQuery.get(url(target), success), "get" );
	ok( jQuery.post(url(target), success), "post" );
	ok( jQuery.getScript(url("data/test.js"), success), "script" );
	ok( jQuery.getJSON(url("data/json_obj.js"), success), "json" );
	ok( jQuery.ajax({url: url(target), success: success}), "generic" );
});

test("ajax cache", function () {
	expect(18);
	
	stop();

	var count = 0;

	jQuery("#firstp").bind("ajaxSuccess", function (e, xml, s) {
		var re = /_=(.*?)(&|$)/g;
		var oldOne = null;
		for (var i = 0; i < 6; i++) {
			var ret = re.exec(s.url);
			if (!ret) {
				break;
			}
			oldOne = ret[1];
		}
		equals(i, 1, "Test to make sure only one 'no-cache' parameter is there");
		ok(oldOne != "tobereplaced555", "Test to be sure parameter (if it was there) was replaced");
		if(++count == 6)
			start();
	});

	ok( jQuery.ajax({url: "data/text.php", cache:false}), "test with no parameters" );
	ok( jQuery.ajax({url: "data/text.php?pizza=true", cache:false}), "test with 1 parameter" );
	ok( jQuery.ajax({url: "data/text.php?_=tobereplaced555", cache:false}), "test with _= parameter" );
	ok( jQuery.ajax({url: "data/text.php?pizza=true&_=tobereplaced555", cache:false}), "test with 1 parameter plus _= one" );
	ok( jQuery.ajax({url: "data/text.php?_=tobereplaced555&tv=false", cache:false}), "test with 1 parameter plus _= one before it" );
	ok( jQuery.ajax({url: "data/text.php?name=David&_=tobereplaced555&washere=true", cache:false}), "test with 2 parameters surrounding _= one" );
});

/*
 * Test disabled.
 * The assertions expect that the passed-in object will be modified,
 * which shouldn't be the case. Fixes #5439.
test("global ajaxSettings", function() {
	expect(2);

	var tmp = jQuery.extend({}, jQuery.ajaxSettings);
	var orig = { url: "data/with_fries.xml" };
	var t;

	jQuery.ajaxSetup({ data: {foo: 'bar', bar: 'BAR'} });

	t = jQuery.extend({}, orig);
	t.data = {};
	jQuery.ajax(t);
	ok( t.url.indexOf('foo') > -1 && t.url.indexOf('bar') > -1, "Check extending {}" );

	t = jQuery.extend({}, orig);
	t.data = { zoo: 'a', ping: 'b' };
	jQuery.ajax(t);
	ok( t.url.indexOf('ping') > -1 && t.url.indexOf('zoo') > -1 && t.url.indexOf('foo') > -1 && t.url.indexOf('bar') > -1, "Check extending { zoo: 'a', ping: 'b' }" );

	jQuery.ajaxSettings = tmp;
});
*/

test("load(String)", function() {
	expect(1);
	stop(); // check if load can be called with only url
	jQuery('#first').load("data/name.html", start);
});

test("load('url selector')", function() {
	expect(1);
	stop(); // check if load can be called with only url
	jQuery('#first').load("data/test3.html div.user", function(){
		equals( jQuery(this).children("div").length, 2, "Verify that specific elements were injected" );
		start();
	});
});

test("load(String, Function) with ajaxSetup on dataType json, see #2046", function() {
	expect(1);
	stop();
	jQuery.ajaxSetup({ dataType: "json" });
	jQuery("#first").ajaxComplete(function (e, xml, s) {
		equals( s.dataType, "html", "Verify the load() dataType was html" );
		jQuery("#first").unbind("ajaxComplete");
		jQuery.ajaxSetup({ dataType: "" });
		start();
	});
	jQuery('#first').load("data/test3.html");
});

test("load(String, Function) - simple: inject text into DOM", function() {
	expect(2);
	stop();
	jQuery('#first').load(url("data/name.html"), function() {
		ok( /^ERROR/.test(jQuery('#first').text()), 'Check if content was injected into the DOM' );
		start();
	});
});

test("load(String, Function) - check scripts", function() {
	expect(7);
	stop();

	var verifyEvaluation = function() {
		equals( foobar, "bar", 'Check if script src was evaluated after load' );
		equals( jQuery('#ap').html(), 'bar', 'Check if script evaluation has modified DOM');

		start();
	};
	jQuery('#first').load(url('data/test.html'), function() {
		ok( jQuery('#first').html().match(/^html text/), 'Check content after loading html' );
		equals( jQuery('#foo').html(), 'foo', 'Check if script evaluation has modified DOM');
		equals( testFoo, "foo", 'Check if script was evaluated after load' );
		setTimeout(verifyEvaluation, 600);
	});
});

test("load(String, Function) - check file with only a script tag", function() {
	expect(3);
	stop();

	jQuery('#first').load(url('data/test2.html'), function() {
		equals( jQuery('#foo').html(), 'foo', 'Check if script evaluation has modified DOM');
		equals( testFoo, "foo", 'Check if script was evaluated after load' );

		start();
	});
});

test("load(String, Object, Function)", function() {
	expect(2);
	stop();

	jQuery('<div />').load(url('data/params_html.php'), { foo:3, bar:'ok' }, function() {
		var $post = jQuery(this).find('#post');
		equals( $post.find('#foo').text(), '3', 'Check if a hash of data is passed correctly');
		equals( $post.find('#bar').text(), 'ok', 'Check if a hash of data is passed correctly');
		start();
	});
});

test("load(String, String, Function)", function() {
	expect(2);
	stop();

	jQuery('<div />').load(url('data/params_html.php'), 'foo=3&bar=ok', function() {
		var $get = jQuery(this).find('#get');
		equals( $get.find('#foo').text(), '3', 'Check if a string of data is passed correctly');
		equals( $get.find('#bar').text(), 'ok', 'Check if a	 of data is passed correctly');
		start();
	});
});

test("jQuery.get(String, Hash, Function) - parse xml and use text() on nodes", function() {
	expect(2);
	stop();
	jQuery.get(url('data/dashboard.xml'), function(xml) {
		var content = [];
		jQuery('tab', xml).each(function() {
			content.push(jQuery(this).text());
		});
		equals( content[0], 'blabla', 'Check first tab');
		equals( content[1], 'blublu', 'Check second tab');
		start();
	});
});

test("jQuery.getScript(String, Function) - with callback", function() {
	expect(2);
	stop();
	jQuery.getScript(url("data/test.js"), function() {
		equals( foobar, "bar", 'Check if script was evaluated' );
		setTimeout(start, 100);
	});
});

test("jQuery.getScript(String, Function) - no callback", function() {
	expect(1);
	stop();
	jQuery.getScript(url("data/test.js"), function(){
		start();
	});
});

test("jQuery.ajax() - JSONP, Local", function() {
	expect(8);

	var count = 0;
	function plus(){ if ( ++count == 8 ) start(); }

	stop();

	jQuery.ajax({
		url: "data/jsonp.php",
		dataType: "jsonp",
		success: function(data){
			ok( data.data, "JSON results returned (GET, no callback)" );
			plus();
		},
		error: function(data){
			ok( false, "Ajax error JSON (GET, no callback)" );
			plus();
		}
	});

	jQuery.ajax({
		url: "data/jsonp.php?callback=?",
		dataType: "jsonp",
		success: function(data){
			ok( data.data, "JSON results returned (GET, url callback)" );
			plus();
		},
		error: function(data){
			ok( false, "Ajax error JSON (GET, url callback)" );
			plus();
		}
	});

	jQuery.ajax({
		url: "data/jsonp.php",
		dataType: "jsonp",
		data: "callback=?",
		success: function(data){
			ok( data.data, "JSON results returned (GET, data callback)" );
			plus();
		},
		error: function(data){
			ok( false, "Ajax error JSON (GET, data callback)" );
			plus();
		}
	});

	jQuery.ajax({
		url: "data/jsonp.php",
		dataType: "jsonp",
		jsonp: "callback",
		success: function(data){
			ok( data.data, "JSON results returned (GET, data obj callback)" );
			plus();
		},
		error: function(data){
			ok( false, "Ajax error JSON (GET, data obj callback)" );
			plus();
		}
	});

	jQuery.ajax({
		url: "data/jsonp.php",
		dataType: "jsonp",
		jsonpCallback: "jsonpResults",
		success: function(data){
			ok( data.data, "JSON results returned (GET, custom callback name)" );
			plus();
		},
		error: function(data){
			ok( false, "Ajax error JSON (GET, custom callback name)" );
			plus();
		}
	});

	jQuery.ajax({
		type: "POST",
		url: "data/jsonp.php",
		dataType: "jsonp",
		success: function(data){
			ok( data.data, "JSON results returned (POST, no callback)" );
			plus();
		},
		error: function(data){
			ok( false, "Ajax error JSON (GET, data obj callback)" );
			plus();
		}
	});

	jQuery.ajax({
		type: "POST",
		url: "data/jsonp.php",
		data: "callback=?",
		dataType: "jsonp",
		success: function(data){
			ok( data.data, "JSON results returned (POST, data callback)" );
			plus();
		},
		error: function(data){
			ok( false, "Ajax error JSON (POST, data callback)" );
			plus();
		}
	});

	jQuery.ajax({
		type: "POST",
		url: "data/jsonp.php",
		jsonp: "callback",
		dataType: "jsonp",
		success: function(data){
			ok( data.data, "JSON results returned (POST, data obj callback)" );
			plus();
		},
		error: function(data){
			ok( false, "Ajax error JSON (POST, data obj callback)" );
			plus();
		}
	});
});

test("JSONP - Custom JSONP Callback", function() {
	expect(1);
	stop();

	window.jsonpResults = function(data) {
		ok( data.data, "JSON results returned (GET, custom callback function)" );
		start();
	};

	jQuery.ajax({
		url: "data/jsonp.php",
		dataType: "jsonp",
		jsonpCallback: "jsonpResults"
	});
});

test("jQuery.ajax() - JSONP, Remote", function() {
	expect(4);

	var count = 0;
	function plus(){ if ( ++count == 4 ) start(); }

	var base = window.location.href.replace(/[^\/]*$/, "");

	stop();

	jQuery.ajax({
		url: base + "data/jsonp.php",
		dataType: "jsonp",
		success: function(data){
			ok( data.data, "JSON results returned (GET, no callback)" );
			plus();
		},
		error: function(data){
			ok( false, "Ajax error JSON (GET, no callback)" );
			plus();
		}
	});

	jQuery.ajax({
		url: base + "data/jsonp.php?callback=?",
		dataType: "jsonp",
		success: function(data){
			ok( data.data, "JSON results returned (GET, url callback)" );
			plus();
		},
		error: function(data){
			ok( false, "Ajax error JSON (GET, url callback)" );
			plus();
		}
	});

	jQuery.ajax({
		url: base + "data/jsonp.php",
		dataType: "jsonp",
		data: "callback=?",
		success: function(data){
			ok( data.data, "JSON results returned (GET, data callback)" );
			plus();
		},
		error: function(data){
			ok( false, "Ajax error JSON (GET, data callback)" );
			plus();
		}
	});

	jQuery.ajax({
		url: base + "data/jsonp.php",
		dataType: "jsonp",
		jsonp: "callback",
		success: function(data){
			ok( data.data, "JSON results returned (GET, data obj callback)" );
			plus();
		},
		error: function(data){
			ok( false, "Ajax error JSON (GET, data obj callback)" );
			plus();
		}
	});
});

test("jQuery.ajax() - script, Remote", function() {
	expect(2);

	var base = window.location.href.replace(/[^\/]*$/, "");

	stop();

	jQuery.ajax({
		url: base + "data/test.js",
		dataType: "script",
		success: function(data){
			ok( foobar, "Script results returned (GET, no callback)" );
			start();
		}
	});
});

test("jQuery.ajax() - script, Remote with POST", function() {
	expect(3);

	var base = window.location.href.replace(/[^\/]*$/, "");

	stop();

	jQuery.ajax({
		url: base + "data/test.js",
		type: "POST",
		dataType: "script",
		success: function(data, status){
			ok( foobar, "Script results returned (POST, no callback)" );
			equals( status, "success", "Script results returned (POST, no callback)" );
			start();
		},
		error: function(xhr) {
			ok( false, "ajax error, status code: " + xhr.status );
			start();
		}
	});
});

test("jQuery.ajax() - script, Remote with scheme-less URL", function() {
	expect(2);

	var base = window.location.href.replace(/[^\/]*$/, "");
	base = base.replace(/^.*?\/\//, "//");

	stop();

	jQuery.ajax({
		url: base + "data/test.js",
		dataType: "script",
		success: function(data){
			ok( foobar, "Script results returned (GET, no callback)" );
			start();
		}
	});
});

test("jQuery.ajax() - malformed JSON", function() {
	expect(2);

	stop();

	jQuery.ajax({
		url: "data/badjson.js",
		dataType: "json",
		success: function(){
			ok( false, "Success." );
			start();
		},
		error: function(xhr, msg, detailedMsg) {
			equals( "parsererror", msg, "A parse error occurred." );
			ok( /^Invalid JSON/.test(detailedMsg), "Detailed parsererror message provided" );
	  		start();
		}
	});
});

test("jQuery.ajax() - script by content-type", function() {
	expect(1);

	stop();

	jQuery.ajax({
		url: "data/script.php",
		data: { header: "script" },
		success: function() {
	  		start();
		}
	});
});

test("jQuery.ajax() - json by content-type", function() {
	expect(5);

	stop();

	jQuery.ajax({
		url: "data/json.php",
		data: { header: "json", json: "array" },
		success: function( json ) {
	  		ok( json.length >= 2, "Check length");
	  		equals( json[0].name, 'John', 'Check JSON: first, name' );
	  		equals( json[0].age, 21, 'Check JSON: first, age' );
	  		equals( json[1].name, 'Peter', 'Check JSON: second, name' );
	  		equals( json[1].age, 25, 'Check JSON: second, age' );
	  		start();
		}
	});
});

test("jQuery.getJSON(String, Hash, Function) - JSON array", function() {
	expect(5);
	stop();
	jQuery.getJSON(url("data/json.php"), {json: "array"}, function(json) {
	  ok( json.length >= 2, "Check length");
	  equals( json[0].name, 'John', 'Check JSON: first, name' );
	  equals( json[0].age, 21, 'Check JSON: first, age' );
	  equals( json[1].name, 'Peter', 'Check JSON: second, name' );
	  equals( json[1].age, 25, 'Check JSON: second, age' );
	  start();
	});
});

test("jQuery.getJSON(String, Function) - JSON object", function() {
	expect(2);
	stop();
	jQuery.getJSON(url("data/json.php"), function(json) {
	  if (json && json.data) {
		  equals( json.data.lang, 'en', 'Check JSON: lang' );
		  equals( json.data.length, 25, 'Check JSON: length' );
	  }
	  start();
	});
});

test("jQuery.getJSON - Using Native JSON", function() {
	expect(2);
	
	var old = window.JSON;
	JSON = {
		parse: function(str){
			ok( true, "Verifying that parse method was run" );
			return true;
		}
	};

	stop();
	jQuery.getJSON(url("data/json.php"), function(json) {
		window.JSON = old;
		equals( json, true, "Verifying return value" );
		start();
	});
});

test("jQuery.getJSON(String, Function) - JSON object with absolute url to local content", function() {
	expect(2);

	var base = window.location.href.replace(/[^\/]*$/, "");

	stop();
	jQuery.getJSON(url(base + "data/json.php"), function(json) {
	  equals( json.data.lang, 'en', 'Check JSON: lang' );
	  equals( json.data.length, 25, 'Check JSON: length' );
	  start();
	});
});

test("jQuery.post - data", function() {
	expect(2);
	stop();

	jQuery.post(url("data/name.php"), {xml: "5-2", length: 3}, function(xml){
		jQuery('math', xml).each(function() {
			equals( jQuery('calculation', this).text(), '5-2', 'Check for XML' );
			equals( jQuery('result', this).text(), '3', 'Check for XML' );
		});
		start();
	});
});

test("jQuery.post(String, Hash, Function) - simple with xml", function() {
	expect(4);
	stop();
	var done = 0;

	jQuery.post(url("data/name.php"), {xml: "5-2"}, function(xml){
	  jQuery('math', xml).each(function() {
			equals( jQuery('calculation', this).text(), '5-2', 'Check for XML' );
			equals( jQuery('result', this).text(), '3', 'Check for XML' );
		 });
	  if ( ++done === 2 ) start();
	});

	jQuery.post(url("data/name.php?xml=5-2"), {}, function(xml){
	  jQuery('math', xml).each(function() {
			equals( jQuery('calculation', this).text(), '5-2', 'Check for XML' );
			equals( jQuery('result', this).text(), '3', 'Check for XML' );
		 });
	  if ( ++done === 2 ) start();
	});
});

test("jQuery.ajaxSetup({timeout: Number}) - with global timeout", function() {
	stop();

	var passed = 0;

	jQuery.ajaxSetup({timeout: 1000});

	var pass = function() {
		passed++;
		if ( passed == 2 ) {
			ok( true, 'Check local and global callbacks after timeout' );
			jQuery('#main').unbind("ajaxError");
			start();
		}
	};

	var fail = function(a,b,c) {
		ok( false, 'Check for timeout failed ' + a + ' ' + b );
		start();
	};

	jQuery('#main').ajaxError(pass);

	jQuery.ajax({
	  type: "GET",
	  url: url("data/name.php?wait=5"),
	  error: pass,
	  success: fail
	});

	// reset timeout
	jQuery.ajaxSetup({timeout: 0});
});

test("jQuery.ajaxSetup({timeout: Number}) with localtimeout", function() {
	stop();
	jQuery.ajaxSetup({timeout: 50});

	jQuery.ajax({
	  type: "GET",
	  timeout: 15000,
	  url: url("data/name.php?wait=1"),
	  error: function() {
		   ok( false, 'Check for local timeout failed' );
		   start();
	  },
	  success: function() {
		ok( true, 'Check for local timeout' );
		start();
	  }
	});

	// reset timeout
	jQuery.ajaxSetup({timeout: 0});
});

test("jQuery.ajax - simple get", function() {
	expect(1);
	stop();
	jQuery.ajax({
	  type: "GET",
	  url: url("data/name.php?name=foo"),
	  success: function(msg){
		equals( msg, 'bar', 'Check for GET' );
		start();
	  }
	});
});

test("jQuery.ajax - simple post", function() {
	expect(1);
	stop();
	jQuery.ajax({
	  type: "POST",
	  url: url("data/name.php"),
	  data: "name=peter",
	  success: function(msg){
		equals( msg, 'pan', 'Check for POST' );
		start();
	  }
	});
});

test("ajaxSetup()", function() {
	expect(1);
	stop();
	jQuery.ajaxSetup({
		url: url("data/name.php?name=foo"),
		success: function(msg){
			equals( msg, 'bar', 'Check for GET' );
			start();
		}
	});
	jQuery.ajax();
});

/*
test("custom timeout does not set error message when timeout occurs, see #970", function() {
	stop();
	jQuery.ajax({
		url: "data/name.php?wait=1",
		timeout: 500,
		error: function(request, status) {
			ok( status != null, "status shouldn't be null in error handler" );
			equals( "timeout", status );
			start();
		}
	});
});
*/

test("data option: evaluate function values (#2806)", function() {
	stop();
	jQuery.ajax({
		url: "data/echoQuery.php",
		data: {
			key: function() {
				return "value";
			}
		},
		success: function(result) {
			equals( result, "key=value" );
			start();
		}
	})
});

test("data option: empty bodies for non-GET requests", function() {
	stop();
	jQuery.ajax({
		url: "data/echoData.php",
		data: undefined,
		type: "post",
		success: function(result) {
			equals( result, "" );
			start();
		}
	})
});

test("jQuery.ajax - If-Modified-Since support", function() {
	expect( 3 );

	stop();

	var url = "data/if_modified_since.php?ts=" + new Date();

	jQuery.ajax({
		url: url,
		ifModified: true,
		success: function(data, status) { 
			equals(status, "success");
			
			jQuery.ajax({
				url: url,
				ifModified: true,
				success: function(data, status) { 
					if ( data === "FAIL" ) {
						ok(true, "Opera is incapable of doing .setRequestHeader('If-Modified-Since').");
						ok(true, "Opera is incapable of doing .setRequestHeader('If-Modified-Since').");
					} else {
						equals(status, "notmodified");
						ok(data == null, "response body should be empty")
					}
					start();
				}
			});
		}
	});
});

test("jQuery.ajax - Etag support", function() {
	expect( 3 );

	stop();

	var url = "data/etag.php?ts=" + new Date();

	jQuery.ajax({
		url: url,
		ifModified: true,
		success: function(data, status) { 
			equals(status, "success");
			
			jQuery.ajax({
				url: url,
				ifModified: true,
				success: function(data, status) { 
					if ( data === "FAIL" ) {
						ok(true, "Opera is incapable of doing .setRequestHeader('If-None-Match').");
						ok(true, "Opera is incapable of doing .setRequestHeader('If-None-Match').");
					} else {
						equals(status, "notmodified");
						ok(data == null, "response body should be empty")
					}
					start();
				}
			});
		}
	});
});


test("jQuery.ajax - active counter", function() {
    ok( jQuery.ajax.active == 0, "ajax active counter should be zero: " + jQuery.ajax.active );
});


}

//}
