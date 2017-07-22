define( [
	"../core",
	"../core/stripAndCollapse",
	"../var/rnothtmlwhite",
	"../data/var/dataPriv",
	"../core/init"
], function( jQuery, stripAndCollapse, rnothtmlwhite, dataPriv ) {

"use strict";

function getClass( elem ) {
	return elem.getAttribute && elem.getAttribute( "class" ) || "";
}

jQuery.fn.extend( {
	addClass: function( value ) {
		var classes = [];
		if ( typeof value === "string" && value ) {
			classes = value.match( rnothtmlwhite ) || [];
<<<<<<< HEAD
		} else if ( Array.isArray( value ) ) {
			classes = value;
=======
			proceed = true;
		} else if ( Array.isArray( value ) ) {
			classes = value;
			proceed = true;
>>>>>>> 7293a99fe41ea570684d1820447fbacae1a33846
		}

		var elem, cur, curValue, clazz, j, finalValue,
			i = 0;

		if ( jQuery.isFunction( value ) ) {
			return this.each( function( j ) {
				jQuery( this ).addClass( value.call( this, j, getClass( this ) ) );
			} );
		}

		while ( ( elem = this[ i++ ] ) ) {
			curValue = getClass( elem );
			cur = elem.nodeType === 1 && ( " " + stripAndCollapse( curValue ) + " " );

			if ( cur ) {
				j = 0;
				while ( ( clazz = classes[ j++ ] ) ) {
					if ( cur.indexOf( " " + clazz + " " ) < 0 ) {
						cur += clazz + " ";
					}
				}

				// Only assign if different to avoid unneeded rendering.
				finalValue = stripAndCollapse( cur );
				if ( curValue !== finalValue ) {
					elem.setAttribute( "class", finalValue );
				}
			}
		}

		return this;
	},

	removeClass: function( value ) {
<<<<<<< HEAD
		var classes = [];
		if ( typeof value === "string" && value ) {
			classes = value.match( rnothtmlwhite ) || [];
		} else if ( Array.isArray( value ) ) {
			classes = value;
		}

		var elem, cur, curValue, clazz, j, finalValue,
			i = 0;

		if ( jQuery.isFunction( value )  ) {
			return this.each( function( j ) {
				jQuery( this ).removeClass( value.call( this, j, getClass( this ) ) );
			} );
		}

		if ( !arguments.length ) {
			return this.attr( "class", "" );
		}

		while ( ( elem = this[ i++ ] ) ) {
			curValue = getClass( elem );

			// This expression is here for better compressibility (see addClass)
			cur = elem.nodeType === 1 && ( " " + stripAndCollapse( curValue ) + " " );
			if ( cur ) {
				j = 0;
				while ( ( clazz = classes[ j++ ] ) ) {

					// Remove *all* instances
					while ( cur.indexOf( " " + clazz + " " ) > -1 ) {
						cur = cur.replace( " " + clazz + " ", " " );
=======
			var classes = [];
			var proceed = false;
			if ( typeof value === "string" && value ) {
				classes = value.match( rnothtmlwhite ) || [];
				proceed = true;
			} else if ( Array.isArray( value ) ) {
				classes = value;
				proceed = true;
			}

			var elem, cur, curValue, clazz, j, finalValue,
				i = 0;

			if ( jQuery.isFunction( value )  ) {
				return this.each( function( j ) {
					jQuery( this ).removeClass( value.call( this, j, getClass( this ) ) );
				} );
			}

			if ( !arguments.length ) {
				return this.attr( "class", "" );
			}

			if ( proceed ) {
				while ( ( elem = this[ i++ ] ) ) {
					curValue = getClass( elem );

					// This expression is here for better compressibility (see addClass)
					cur = elem.nodeType === 1 && ( " " + stripAndCollapse( curValue ) + " " );

					if ( cur ) {
						j = 0;
						while ( ( clazz = classes[ j++ ] ) ) {

							// Remove *all* instances
							while ( cur.indexOf( " " + clazz + " " ) > -1 ) {
								cur = cur.replace( " " + clazz + " ", " " );
							}
						}

						// Only assign if different to avoid unneeded rendering.
						finalValue = stripAndCollapse( cur );
						if ( curValue !== finalValue ) {
							elem.setAttribute( "class", finalValue );
						}
>>>>>>> 7293a99fe41ea570684d1820447fbacae1a33846
					}
				}

				// Only assign if different to avoid unneeded rendering.
				finalValue = stripAndCollapse( cur );
				if ( curValue !== finalValue ) {
					elem.setAttribute( "class", finalValue );
				}
			}
		}

		return this;
	},

<<<<<<< HEAD
	toggleClass: function( value, stateVal ) {
		var type = typeof value;
		if ( typeof stateVal === "boolean" && ( type === "string" ||
			Array.isArray( value ) ) ) {
			return stateVal ? this.addClass( value ) : this.removeClass( value );
		}

		if ( jQuery.isFunction( value ) ) {
			return this.each( function( i ) {
				jQuery( this ).toggleClass(
					value.call( this, i, getClass( this ), stateVal ),
					stateVal
				);
			} );
		}

		return this.each( function() {
			var className, i, self;
			var classNames = [];
			if ( Array.isArray( value ) ) {
				classNames = value;
			} else if ( type === "string" ) {
				classNames = value.match( rnothtmlwhite ) || [];
			}

			// Toggle individual class names
			i = 0;
			self = jQuery( this );

			while ( ( className = classNames[ i++ ] ) ) {

				// Check each className given, space separated list
				if ( self.hasClass( className ) ) {
					self.removeClass( className );
				} else {
					self.addClass( className );
				}
			}
			if ( value === undefined || type === "boolean" ) {
				className = getClass( this );
				if ( className ) {

					// Store className if set
					dataPriv.set( this, "__className__", className );
				}

				// If the element has a class name or if we're passed `false`,
				// then remove the whole classname (if there was one, the above saved it).
				// Otherwise bring back whatever was previously saved (if anything),
				// falling back to the empty string if nothing was stored.
				if ( this.setAttribute ) {
					this.setAttribute( "class",
						className || value === false ?
							"" :
							dataPriv.get( this, "__className__" ) || ""
					);
				}
			}
		} );
	},
=======
		toggleClass: function( value, stateVal ) {
			var type = typeof value;

			if ( typeof stateVal === "boolean" && ( type === "string" ||
				Array.isArray( value ) ) ) {
				return stateVal ? this.addClass( value ) : this.removeClass( value );
			}

			if ( jQuery.isFunction( value ) ) {
				return this.each( function( i ) {
					jQuery( this ).toggleClass(
						value.call( this, i, getClass( this ), stateVal ),
						stateVal
					);
				} );
			}

			return this.each( function() {
				var className, i, self;
				var classNames = [];
				var proceed = false;
				if ( Array.isArray( value ) ) {
					classNames = value;
					proceed = true;
				} else if ( type === "string" ) {
					classNames = value.match( rnothtmlwhite ) || [];
					proceed = true;
				}
				if ( proceed ) {

					// Toggle individual class names
					i = 0;
					self = jQuery( this );

					while ( ( className = classNames[ i++ ] ) ) {

						// Check each className given, space separated list
						if ( self.hasClass( className ) ) {
							self.removeClass( className );
						} else {
							self.addClass( className );
						}
					}
				} else if ( value === undefined || type === "boolean" ) {
					className = getClass( this );
					if ( className ) {

						// Store className if set
						dataPriv.set( this, "__className__", className );
					}

					// If the element has a class name or if we're passed `false`,
					// then remove the whole classname (if there was one, the above saved it).
					// Otherwise bring back whatever was previously saved (if anything),
					// falling back to the empty string if nothing was stored.
					if ( this.setAttribute ) {
						this.setAttribute( "class",
							className || value === false ?
								"" :
								dataPriv.get( this, "__className__" ) || ""
						);
					}
				}
			} );
		},
>>>>>>> 7293a99fe41ea570684d1820447fbacae1a33846

	hasClass: function( selector ) {
		var className, elem,
			i = 0;

		className = " " + selector + " ";
		while ( ( elem = this[ i++ ] ) ) {
			if ( elem.nodeType === 1 &&
				( " " + stripAndCollapse( getClass( elem ) ) + " " ).indexOf( className ) > -1 ) {
					return true;
			}
		}

		return false;
	}
} );

} );
