import { jQuery } from "./core.js";
import { toType } from "./core/toType.js";
import { rnothtmlwhite } from "./var/rnothtmlwhite.js";

// Convert String-formatted options into Object-formatted ones
function createOptions( options ) {
	var object = {};
	jQuery.each( options.match( rnothtmlwhite ) || [], function( _, flag ) {
		object[ flag ] = true;
	} );
	return object;
}

/*
 * Create a callback list using the following parameters:
 *
 *	options: an optional list of space-separated options that will change how
 *			the callback list behaves or a more traditional option object
 *
 * By default a callback list will act like an event callback list and can be
 * "fired" multiple times.
 *
 * Possible options:
 *
 *	once:			will ensure the callback list can only be fired once (like a Deferred)
 *
 *	memory:			will keep track of previous values and will call any callback added
 *					after the list has been fired right away with the latest "memorized"
 *					values (like a Deferred)
 *
 *	unique:			will ensure a callback can only be added once (no duplicate in the list)
 *
 *	stopOnFalse:	interrupt callings when a callback returns false
 *
 */
jQuery.Callbacks = function( options ) {

	// Convert options from String-formatted to Object-formatted if needed
	// (we check in cache first)
	options = typeof options === "string" ?
		createOptions( options ) :
		jQuery.extend( {}, options );

	var // Flag to know if list is currently firing
		firing,

		// Last fire value for non-forgettable lists
		memory,

		// Flag to know if list was already fired
		fired,

		// Flag to prevent firing
		locked,

		// Actual callback list
		list = [],

		// Queue of execution data for repeatable lists
		queue = [],

		// Index of currently firing callback (modified by add/remove as needed)
		firingIndex = -1,

		// Fire callbacks
		fire = function( ) {
			if ( locked ) {
				return;
			}

			// Prevent firing if locked

			// Enforce single-firing
			locked = locked || options.once;

			// Execute callbacks
			fired = firing = true;

			for ( ; queue.length; firingIndex = -1 ) {
				memory = queue.shift();
				while ( ++firingIndex < list.length ) {

					if ( list[ firingIndex ].apply( memory[ 0 ], memory[ 1 ] ) ===
						false && options.stopOnFalse ) {

						// Jump to end and forget the data
						firingIndex = list.length;
						memory = false;
					}
				}
			}

			// Forget data if done
			if ( !options.memory ) {
				memory = false;
			}

			firing = false;

			// Clean up if done
			if ( locked ) {
				if ( memory ) {
					list = [];
				} else {
					list = "";
				}
			}
		};

	// Actual Callbacks object
	const self = {

		// Add a callback or a collection of callbacks to the list
		add: function( ) {
			if ( list ) {
				if ( memory && !firing ) {
					firingIndex = list.length - 1;
					queue.push( memory );
				}

				( function add( args ) {
					jQuery.each( args, function( _, arg ) {
						if ( typeof arg === "function" ) {
							if ( !options.unique || !self.has( arg ) ) {
								list.push( arg );
							}
						} else if ( arg && arg.length && toType( arg ) !== "string" ) {

							// Inspect recursively
							add( arg );
						}
					} );
				} )( arguments );

				// Check if we need to fire after adding
				if ( memory && !firing ) {
					fire();
				}
			}
			return this;
		},


		// Remove a callback from the list
		remove: function() {
			jQuery.each( arguments, function( _, arg ) {
				var index;
				while ( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {
					list.splice( index, 1 );

					// Handle firing indexes
					if ( index <= firingIndex ) {
						firingIndex--;
					}
				}
			} );
			return this;
		},

		// Check if a given callback is in the list.
		// If no argument is given, return whether or not list has callbacks attached.
		has: function( fn ) {
			return fn ?
				jQuery.inArray( fn, list ) > -1 :
				list.length > 0;
		},

		// Remove all callbacks from the list
		empty: function() {
			if ( list ) {
				list = [];
			}
			return this;
		},

		// Disable .fire and .add
		// Abort any current/pending executions
		// Clear all callbacks and values
		disable: function() {
			locked = queue = [];
			list = memory = "";
			return this;
		},
		disabled: function() {
			return !list;
		},

		// Disable .fire
		// Also disable .add unless we have memory (since it would have no effect)
		// Abort any pending executions
		lock: function() {
			locked = queue = [];
			if ( !memory && !firing ) {
				list = memory = "";
			}
			return this;
		},
		locked: function() {
			return !!locked;
		},

		// Call all callbacks with the given context and arguments
		fireWith: function( context, args ) {
			if ( !locked ) {
				args = args || [];
				args = [ context, args.slice ? args.slice() : args ];
				queue.push( args );
				if ( !firing ) {
					fire();
				}
			}
			return this;
		},

		// Call all the callbacks with the given arguments
		fire: function() {
			self.fireWith( this, arguments );
			return this;
		},

		// To know if the callbacks have already been called at least once
		fired: function() {
			return !!fired;
		}
	};

	return self;
};

export { jQuery, jQuery as $ };
