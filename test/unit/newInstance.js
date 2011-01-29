module("newInstance", { teardown: moduleTeardown });

test( "Sandboxing", function() {

	expect(4);

	var extend = jQuery.extend;

	jQuery.extend = jQuery.noop;

	var otherInstance = jQuery.newInstance();

	ok( jQuery.extend !== otherInstance.extend, "Methods are not copies" );

	var object = {};

	otherInstance.extend( object, { test: "test" } );

	strictEqual( object.test, "test", "Methods are redefined" );

	jQuery.extend = extend;

	var div = jQuery( "<div/>" ).data( "test", "test" )[ 0 ];

	otherInstance( div ).removeData();

	strictEqual( jQuery( div ).data( "test" ) , "test" , "data still defined" );
	strictEqual( otherInstance( div ).data( "test" ) , undefined , "data are separated" );

	jQuery( div ).removeData();
} );

test( "Target other window", function() {

	expect(1);

	stop();

	jQuery(function() {
		var iframe = jQuery( "<iframe/>" ).appendTo( "body" ),
			otherInstance = jQuery.newInstance( iframe[ 0 ].contentWindow );

		otherInstance( "body" ).addClass( "test" );

		strictEqual( jQuery( "body", iframe.contents() ).attr( "class" ), "test", "New instance is in the context of the new window" );

		iframe.remove();

		start();
	});
} );