define([
	"../core",
	"../var/rnotwhite",
	"../var/strundefined",
	"../data/var/data_priv",
	"../core/init"
], function( jQuery, rnotwhite, strundefined, data_priv ) {

var rclass = /[\t\r\n\f]/g;

jQuery.fn.extend({
	addClass: function( value ) {
		var classes, elem, cur, clazz, j, finalValue, classList,
			i = 0,
			len = this.length,
			proceed = typeof value === "string" && value;

		if ( jQuery.isFunction( value ) ) {
			return this.each(function( j ) {
				jQuery( this ).addClass( value.call( this, j, this.className ) );
			});
		}

		if ( proceed ) {
			// The disjunction here is for better compressibility (see removeClass)
			classes = ( value || "" ).match( rnotwhite ) || [];

      for (; i < len; i++) {
        elem = this[ i ];
        if (elem.nodeType === 1) {
          //use element.classList if available for improved performance
          classList = elem.classList;
          if (classList) {
            j = 0;
            while ((clazz = classes[j++])) {
              classList.add(clazz);
            }
            finalValue = jQuery.trim(elem.className);
          } else {
            cur = ( elem.className ?
              ( " " + elem.className + " " ).replace(rclass, " ") :
              " "
              );
            if (cur) {
              j = 0;
              while ((clazz = classes[j++])) {
                if (cur.indexOf(" " + clazz + " ") < 0) {
                  cur += clazz + " ";
                }
              }
              finalValue = jQuery.trim(cur);
            }
          }
          // only assign if different to avoid unneeded rendering.
          if (elem.className !== finalValue) {
            elem.className = finalValue;
          }
        }
      }
    }

		return this;
	},

	removeClass: function( value ) {
		var classes, elem, cur, clazz, j, finalValue, classList,
			i = 0,
			len = this.length,
			proceed = arguments.length === 0 || typeof value === "string" && value;

		if ( jQuery.isFunction( value ) ) {
			return this.each(function( j ) {
				jQuery( this ).removeClass( value.call( this, j, this.className ) );
			});
		}
		if ( proceed ) {
			classes = ( value || "" ).match( rnotwhite ) || [];

      for (; i < len; i++) {
        elem = this[ i ];
        if (elem.nodeType === 1) {
          //use element.classList if available for improved performance
          classList = elem.classList;
          if (classList) {
            if (!value) {
              elem.className = "";
              break;
            }
            j = 0;
            while ((clazz = classes[j++])) {
              classList.remove(clazz);
            }
            finalValue = jQuery.trim(elem.className);
          } else {
            // This expression is here for better compressibility (see addClass)
            cur = ( elem.className ?
              ( " " + elem.className + " " ).replace(rclass, " ") :
              ""
              );
            if (cur) {
              j = 0;
              while ((clazz = classes[j++])) {
                // Remove *all* instances
                while (cur.indexOf(" " + clazz + " ") >= 0) {
                  cur = cur.replace(" " + clazz + " ", " ");
                }
              }
              finalValue = value ? jQuery.trim(cur) : "";
            }
          }
          // only assign if different to avoid unneeded rendering.
          if (elem.className !== finalValue) {
            elem.className = finalValue;
          }
        }
      }
		}

		return this;
	},

	toggleClass: function( value, stateVal ) {
		var type = typeof value;

		if ( typeof stateVal === "boolean" && type === "string" ) {
			return stateVal ? this.addClass( value ) : this.removeClass( value );
		}

		if ( jQuery.isFunction( value ) ) {
			return this.each(function( i ) {
				jQuery( this ).toggleClass( value.call(this, i, this.className, stateVal), stateVal );
			});
		}

		return this.each(function() {
			if ( type === "string" ) {
				// toggle individual class names
				var className,
					i = 0,
					self = jQuery( this ),
					classNames = value.match( rnotwhite ) || [];

				while ( (className = classNames[ i++ ]) ) {
					// check each className given, space separated list
					if ( self.hasClass( className ) ) {
						self.removeClass( className );
					} else {
						self.addClass( className );
					}
				}

			// Toggle whole class name
			} else if ( type === strundefined || type === "boolean" ) {
				if ( this.className ) {
					// store className if set
					data_priv.set( this, "__className__", this.className );
				}

				// If the element has a class name or if we're passed "false",
				// then remove the whole classname (if there was one, the above saved it).
				// Otherwise bring back whatever was previously saved (if anything),
				// falling back to the empty string if nothing was stored.
				this.className = this.className || value === false ? "" : data_priv.get( this, "__className__" ) || "";
			}
		});
	},

	hasClass: function( selector ) {
		var className = " " + selector + " ",
			i = 0,
			l = this.length;
    for (; i < l; i++) {
      if (this[i].nodeType === 1 && this[i].classList) { return this[i].classList.contains(selector); }
      if (this[i].nodeType === 1 && (" " + this[i].className + " ").replace(rclass, " ").indexOf(className) >= 0) {
        return true;
      }
    }

		return false;
	}
});

});
