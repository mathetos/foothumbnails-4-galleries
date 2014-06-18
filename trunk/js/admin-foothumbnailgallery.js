// Disable Sorting of Metaboxes
// Currently disables ALL sorting
// This allows the metaboxes to stay in their correct order

(function() {
	if ( document.location.href.indexOf('post-new.php') > -1 ) {
		$('.meta-box-sortables').sortable({
			disabled: true });
		} else if ( document.location.href.indexOf('&action=edit') > -1 ) {
		$('.meta-box-sortables').sortable({
			disabled: true });
		} 

    $('.postbox .hndle').css('cursor', 'pointer');
});

//DISABLE METABOX CLOSING
 (function() {
       $('.postbox h3, .postbox .handlediv').unbind('click.postboxes');
    });

	
/*
 * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
 *
 * Uses the built in easing capabilities added In jQuery 1.1
 * to offer multiple easing options
 *
 * TERMS OF USE - jQuery Easing
 * 
 * Open source under the BSD License. 
 * 
 * Copyright © 2008 George McGinley Smith
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
*/
 
// t: current time, b: begInnIng value, c: change In value, d: duration
jQuery.easing['jswing'] = jQuery.easing['swing'];
 
jQuery.extend( jQuery.easing,
{
    def: 'easeOutQuad',
    swing: function (x, t, b, c, d) {
        //alert(jQuery.easing.default);
        return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
    },
    easeInQuad: function (x, t, b, c, d) {
        return c*(t/=d)*t + b;
    },
    easeOutQuad: function (x, t, b, c, d) {
        return -c *(t/=d)*(t-2) + b;
    },
    easeInOutQuad: function (x, t, b, c, d) {
        if ((t/=d/2) < 1) return c/2*t*t + b;
        return -c/2 * ((--t)*(t-2) - 1) + b;
    },
    easeInCubic: function (x, t, b, c, d) {
        return c*(t/=d)*t*t + b;
    },
    easeOutCubic: function (x, t, b, c, d) {
        return c*((t=t/d-1)*t*t + 1) + b;
    },
    easeInOutCubic: function (x, t, b, c, d) {
        if ((t/=d/2) < 1) return c/2*t*t*t + b;
        return c/2*((t-=2)*t*t + 2) + b;
    },
    easeInQuart: function (x, t, b, c, d) {
        return c*(t/=d)*t*t*t + b;
    },
    easeOutQuart: function (x, t, b, c, d) {
        return -c * ((t=t/d-1)*t*t*t - 1) + b;
    },
    easeInOutQuart: function (x, t, b, c, d) {
        if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
        return -c/2 * ((t-=2)*t*t*t - 2) + b;
    },
    easeInQuint: function (x, t, b, c, d) {
        return c*(t/=d)*t*t*t*t + b;
    },
    easeOutQuint: function (x, t, b, c, d) {
        return c*((t=t/d-1)*t*t*t*t + 1) + b;
    },
    easeInOutQuint: function (x, t, b, c, d) {
        if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
        return c/2*((t-=2)*t*t*t*t + 2) + b;
    },
    easeInSine: function (x, t, b, c, d) {
        return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
    },
    easeOutSine: function (x, t, b, c, d) {
        return c * Math.sin(t/d * (Math.PI/2)) + b;
    },
    easeInOutSine: function (x, t, b, c, d) {
        return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
    },
    easeInExpo: function (x, t, b, c, d) {
        return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
    },
    easeOutExpo: function (x, t, b, c, d) {
        return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
    },
    easeInOutExpo: function (x, t, b, c, d) {
        if (t==0) return b;
        if (t==d) return b+c;
        if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
        return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
    },
    easeInCirc: function (x, t, b, c, d) {
        return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
    },
    easeOutCirc: function (x, t, b, c, d) {
        return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
    },
    easeInOutCirc: function (x, t, b, c, d) {
        if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
        return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
    },
    easeInElastic: function (x, t, b, c, d) {
        var s=1.70158;var p=0;var a=c;
        if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
        if (a < Math.abs(c)) { a=c; var s=p/4; }
        else var s = p/(2*Math.PI) * Math.asin (c/a);
        return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
    },
    easeOutElastic: function (x, t, b, c, d) {
        var s=1.70158;var p=0;var a=c;
        if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
        if (a < Math.abs(c)) { a=c; var s=p/4; }
        else var s = p/(2*Math.PI) * Math.asin (c/a);
        return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
    },
    easeInOutElastic: function (x, t, b, c, d) {
        var s=1.70158;var p=0;var a=c;
        if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
        if (a < Math.abs(c)) { a=c; var s=p/4; }
        else var s = p/(2*Math.PI) * Math.asin (c/a);
        if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
        return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
    },
    easeInBack: function (x, t, b, c, d, s) {
        if (s == undefined) s = 1.70158;
        return c*(t/=d)*t*((s+1)*t - s) + b;
    },
    easeOutBack: function (x, t, b, c, d, s) {
        if (s == undefined) s = 1.70158;
        return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
    },
    easeInOutBack: function (x, t, b, c, d, s) {
        if (s == undefined) s = 1.70158; 
        if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
        return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
    },
    easeInBounce: function (x, t, b, c, d) {
        return c - jQuery.easing.easeOutBounce (x, d-t, 0, c, d) + b;
    },
    easeOutBounce: function (x, t, b, c, d) {
        if ((t/=d) < (1/2.75)) {
            return c*(7.5625*t*t) + b;
        } else if (t < (2/2.75)) {
            return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
        } else if (t < (2.5/2.75)) {
            return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
        } else {
            return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
        }
    },
    easeInOutBounce: function (x, t, b, c, d) {
        if (t < d/2) return jQuery.easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
        return jQuery.easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
    }
});
 
/*
 *
 * TERMS OF USE - EASING EQUATIONS
 * 
 * Open source under the BSD License. 
 * 
 * Copyright © 2001 Robert Penner
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without modification, 
 * are permitted provided that the following conditions are met:
 * 
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list 
 * of conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * 
 * Neither the name of the author nor the names of contributors may be used to endorse 
 * or promote products derived from this software without specific prior written permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
 *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
 *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE. 
 *
 */
 
 /**
 *  CMB Wizard JS
 *
 *  @description: This provides the functionality required to create the walkthrough
 */

(function ($) {
	"use strict";

	var metabox_wildcard_id = 'ftg_metabox_'; //@todo: update with your wildcard ID selector
	var animating; //flag to prevent quick multi-click glitches
	var current_fs, next_fs, previous_fs; //fieldsets/metaboxes
	var left, opacity, scale; //fieldset properties which we will animate

	$(function () {

		//loop through CMB Metaboxes
		//Since there are so many uses of the .postbox class we'll attach a wildcard ID selector
		var total = $("[id^=" + metabox_wildcard_id + "].postbox").length;

		$("[id^=" + metabox_wildcard_id + "].postbox").each(function (index) {

			//add CSS class to add postboxes for styles
			$(this).addClass('cmb-wizard-metabox');

			//hide all metabox containers except the first one
			if (index !== 0) {
				$(this).css('display', 'none');
				//Append prev/next buttons
				$(this).prepend('<input type="button" name="previous" value="&laquo; Previous " class="button button-primary button-large cmb-wizard-previous"/>');

				//No next button for last item
				if (index !== total - 1) {
					// this is NOT the last metabox
					$(this).prepend('<input type="button" name="next" value="Next &raquo;" class="button button-primary button-large cmb-wizard-next"/>');
				}

			}
			//First item
			else if (index === 0) {
				//Append only next button
				$(this).prepend('<input type="button" name="next" value="Next  &raquo;" class="button button-primary button-large cmb-wizard-next"/>');

			}

		});

		//Next button logic
		$('.cmb-wizard-next').on('click', function () {

			if (animating) return false;
			animating = true;
			current_fs = $(this).parent('.postbox');
			next_fs = $(this).parent('.postbox').next();


			//show the next metabox/fieldset
			next_fs.show();
			//hide the current fieldset with style
			current_fs.animate({opacity: 0}, {
				step    : function (now, mx) {
					//as the opacity of current_fs reduces to 0 - stored in "now"
					//1. scale current_fs down to 80%
					scale = 1 - (1 - now) * 0.2;
					//2. bring next_fs from the right(50%)
					left = (now * 50) + "%";
					//3. increase opacity of next_fs to 1 as it moves in
					opacity = 1 - now;
					current_fs.css({'transform': 'scale(' + scale + ')'});
					next_fs.css({'left': left, 'opacity': opacity});
				},
				duration: 800,
				complete: function () {
					current_fs.hide();
					animating = false;
				},
				//this comes from the custom easing plugin
				easing  : 'easeInOutCirc'
			});


		}); //end next button click


		$('.cmb-wizard-previous').on('click', function () {
			current_fs = $(this).parent('.postbox');
			previous_fs = $(this).parent('.postbox').prev();

			//show the previous fieldset
			previous_fs.show();
			//hide the current fieldset with style
			current_fs.animate({opacity: 0}, {
				step    : function (now, mx) {
					//as the opacity of current_fs reduces to 0 - stored in "now"
					//1. scale previous_fs from 80% to 100%
					scale = 0.8 + (1 - now) * 0.2;
					//2. take current_fs to the right(50%) - from 0%
					left = ((1 - now) * 50) + "%";
					//3. increase opacity of previous_fs to 1 as it moves in
					opacity = 1 - now;
					current_fs.css({'left': left});
					previous_fs.css({'transform': 'scale(' + scale + ')', 'opacity': opacity});
				},
				duration: 800,
				complete: function () {
					current_fs.hide();
				},
				//this comes from the custom easing plugin
				easing  : 'easeInOutCirc'
			});
		});


	}); //end of DOM ready

}(jQuery));


jQuery( document ).ready( function() {

	jQuery( document ).on( 'click', '.cmb-file-upload', function(e) {

		e.preventDefault();

		var link = jQuery( this );
		var container = jQuery( this ).parent();

		var frameArgs = {
			multiple: false,
			title: 'Select File',
		}

		library = container.attr( 'data-type' ).split(',');
		if ( library.length > 0 )
			frameArgs.library = { type: library }

		var CMB_Frame = wp.media( frameArgs );

		CMB_Frame.on( 'select', function() {

			var selection = CMB_Frame.state().get('selection'),
				model = selection.first(),
				fileHolder = container.find( '.cmb-file-holder' );

			jQuery( container ).find( '.cmb-file-upload-input' ).val( model.id );

			link.hide(); // Hide 'add media' button

			CMB_Frame.close();

			fileHolder.html( '' );
			fileHolder.show();
			fileHolder.siblings( '.cmb-remove-file' ).show();

			var fieldType = container.closest( '.field-item' ).attr( 'data-class' );

			if ( 'CMB_Image_Field' === fieldType ) {

				var data = {
					action: 'cmb_request_image',
					id:     model.attributes.id,
					width:  container.width(),
					height: container.height(),
					crop:   fileHolder.attr('data-crop'),
					nonce:  link.attr( 'data-nonce' )
				}

				fileHolder.addClass( 'cmb-loading' );

				jQuery.post( ajaxurl, data, function( src ) {
					// Insert image
					jQuery( '<img />', { src: src } ).prependTo( fileHolder );
					fileHolder.removeClass( 'cmb-loading' );
				}).fail( function() {
					// Fallback - insert full size image.
					jQuery( '<img />', { src: model.attributes.url } ).prependTo( fileHolder );
					fileHolder.removeClass( 'cmb-loading' );
				});

			} else {

				jQuery( '<img />', { src: model.attributes.icon } ).prependTo( fileHolder );
				fileHolder.append( jQuery('<div class="cmb-file-name" />').html( '<strong>' + model.attributes.filename + '</strong>' ) );

			}

		});

		CMB_Frame.open();

	} );

	jQuery( document ).on( 'click', '.cmb-remove-file', function(e) {

		e.preventDefault();

		var container = jQuery( this ).parent().parent();

		container.find( '.cmb-file-holder' ).html( '' ).hide();
		container.find( '.cmb-file-upload-input' ).val( '' );
		container.find( '.cmb-file-upload' ).show().css( 'display', 'inline-block' );
		container.find( '.cmb-remove-file' ).hide();

	} );

	/**
	 * Recalculate the dimensions of the file upload field.
	 * It should never be larger than the available width.
	 * It should maintain the aspect ratio of the original field.
	 * It should recalculate when resized.
	 * @return {[type]} [description]
	 */
	var recalculateFileFieldSize = function() {

		jQuery( '.cmb-file-wrap' ).each( function() {

			var el        = jQuery(this),
				container = el.closest( '.postbox' ),
				width     = container.width() - 12 - 10 - 10,
				ratio     =  el.height() / el.width();

			if ( el.attr( 'data-original-width' ) )
				el.width( el.attr( 'data-original-width' ) );
			else
				el.attr( 'data-original-width', el.width() );

			if ( el.attr( 'data-original-height' ) )
				el.height( el.attr( 'data-original-height' ) );
			else
				el.attr( 'data-original-height', el.height() );

			if ( el.width() > width ) {
				el.width( width );
				el.find( '.cmb-file-wrap-placeholder' ).width( width - 8 );
				el.height( width * ratio );
				el.css( 'line-height', ( width * ratio ) + 'px' );
				el.find( '.cmb-file-wrap-placeholder' ).height( ( width * ratio ) - 8 );
			}


		} );
			}

	recalculateFileFieldSize();
	jQuery(window).resize( recalculateFileFieldSize );

} );


var cmbSelectInit = function() {

	jQuery( '.cmb_select' ).each( function() {

		var el = jQuery(this);
 		var fieldID = el.attr( 'data-field-id'); // JS Friendly ID

 		// If fieldID is set
 		// If fieldID options exist
 		// If Element is not hidden template field.
 		// If elemnt has not already been initialized.
 		if ( fieldID && fieldID in window.cmb_select_fields && el.is( ':visible' ) && ! el.hasClass( 'select2-added' ) ) {

 			// Get options for this field.
 			options = window.cmb_select_fields[fieldID];

			el.addClass( 'select2-added' ).select2( options );

 		}

	})

};

// Hook this in for all the required fields.
// CMB.addCallbackForInit( cmbSelectInit );
// CMB.addCallbackForClonedField( 'CMB_Select', cmbSelectInit );
// CMB.addCallbackForClonedField( 'CMB_Post_Select', cmbSelectInit );
// CMB.addCallbackForClonedField( 'CMB_Taxonomy', cmbSelectInit );



/**
 * Custom jQuery for Custom Metaboxes and Fields
 */

/*jslint browser: true, devel: true, indent: 4, maxerr: 50, sub: true */
/*global jQuery, tb_show, tb_remove */

'use strict';

var CMB = {

	_initCallbacks: [],
	_clonedFieldCallbacks: [],
	_deletedFieldCallbacks: [],

	_sortStartCallbacks: [],
	_sortEndCallbacks: [],
	
	init : function() {

		jQuery( '.field.repeatable' ).each( function() {
			CMB.isMaxFields( jQuery(this) );
		} );

		// Unbind & Re-bind all CMB events to prevent duplicates.
		jQuery(document).unbind( 'click.CMB' );
		jQuery(document).on( 'click.CMB', '.cmb-delete-field', CMB.deleteField );
		jQuery(document).on( 'click.CMB', '.repeat-field', CMB.repeatField );

		// When toggling the display of the meta box container - reinitialize
		jQuery(document).on( 'click.CMB', '.handlediv', CMB.init )

		CMB.doneInit();

		jQuery('.field.cmb-sortable' ).each( function() { 
			CMB.sortableInit( jQuery(this) );
		} );


	},

	repeatField : function( e ) {

		var templateField, newT, field, index, attr;

		field = jQuery( this ).closest('.field' );					

		e.preventDefault();
		jQuery(this).blur();

		if ( CMB.isMaxFields( field, 1 ) )
			return;

		templateField = field.children( '.field-item.hidden' );

		newT = templateField.clone();
		newT.removeClass( 'hidden' );
		
		var excludeInputTypes = '[type=submit],[type=button],[type=checkbox],[type=radio],[readonly]';
		newT.find( 'input' ).not( excludeInputTypes ).val( '' );

		newT.find( '.cmb_upload_status' ).html('');

		newT.insertBefore( templateField );

		 // Recalculate group ids & update the name fields..
		index = 0;
		attr  = ['id','name','for','data-id','data-name'];

		field.children( '.field-item' ).not( templateField ).each( function() {

			var search  = field.hasClass( 'CMB_Group_Field' ) ? /cmb-group-(\d|x)*/g : /cmb-field-(\d|x)*/g;
			var replace = field.hasClass( 'CMB_Group_Field' ) ? 'cmb-group-' + index : 'cmb-field-' + index;

			jQuery(this).find( '[' + attr.join('],[') + ']' ).each( function() {

				for ( var i = 0; i < attr.length; i++ )
					if ( typeof( jQuery(this).attr( attr[i] ) ) !== 'undefined' )
						jQuery(this).attr( attr[i], jQuery(this).attr( attr[i] ).replace( search, replace ) );

			} );

			index += 1;

		} );

		CMB.clonedField( newT );

		if ( field.hasClass( 'cmb-sortable' ) )
			CMB.sortableInit( field );


	},

	deleteField : function( e ) {

		var fieldItem, field;

		e.preventDefault();
		jQuery(this).blur();

		fieldItem = jQuery( this ).closest('.field-item' );
		field     = fieldItem.closest( '.field' );

		CMB.isMaxFields( field, -1 );
		CMB.deletedField( fieldItem );

		fieldItem.remove();

	},

	/**
	 * Prevent having more than the maximum number of repeatable fields.
	 * When called, if there is the maximum, disable .repeat-field button.
	 * Note: Information Passed using data-max attribute on the .field element.
	 *
	 * @param jQuery .field
	 * @param int modifier - adjust count by this ammount. 1 If adding a field, 0 if checking, -1 if removing a field... etc
	 * @return null
	 */
	isMaxFields: function( field, modifier ) {

		var count, addBtn, min, max, count;

		modifier = (modifier) ? parseInt( modifier, 10 ) : 0;

		addBtn = field.children( '.repeat-field' );
		count  = field.children('.field-item').not('.hidden').length + modifier; // Count after anticipated action (modifier)
		max    = field.attr( 'data-rep-max' );

		// Show all the remove field buttons.
		field.find( '> .field-item > .cmb-delete-field, > .field-item > .group > .cmb-delete-field' ).show();

		if ( typeof( max ) === 'undefined' )
			return false;

		// Disable the add new field button?
		if ( count >= parseInt( max, 10 ) )
			addBtn.attr( 'disabled', 'disabled' );
		else 
			addBtn.removeAttr( 'disabled' );

		if ( count > parseInt( max, 10 ) )
			return true;

	},

	addCallbackForInit: function( callback ) {

		this._initCallbacks.push( callback )

	},

	/**
	 * Fire init callbacks.
	 * Called when CMB has been set up.
	 */
	doneInit: function() {

		var _this = this,
			callbacks = CMB._initCallbacks;

		if ( callbacks ) {
			for ( var a = 0; a < callbacks.length; a++) {
				callbacks[a]();
			}
		}

	},

	addCallbackForClonedField: function( fieldName, callback ) {

		if ( jQuery.isArray( fieldName ) )
			for ( var i = 0; i < fieldName.length; i++ )
				CMB.addCallbackForClonedField( fieldName[i], callback );

		this._clonedFieldCallbacks[fieldName] = this._clonedFieldCallbacks[fieldName] ? this._clonedFieldCallbacks[fieldName] : []
		this._clonedFieldCallbacks[fieldName].push( callback )

	},

	/**
	 * Fire clonedField callbacks.
	 * Called when a field has been cloned.
	 */
	clonedField: function( el ) {

		// also check child elements
		el.add( el.find( 'div[data-class]' ) ).each( function( i, el ) {

			el = jQuery( el )
			var callbacks = CMB._clonedFieldCallbacks[el.attr( 'data-class') ]

			if ( callbacks )
				for ( var a = 0; a < callbacks.length; a++ )
					callbacks[a]( el );

		})
	},

	addCallbackForDeletedField: function( fieldName, callback ) {

		if ( jQuery.isArray( fieldName ) )
			for ( var i = 0; i < fieldName.length; i++ )
				CMB._deletedFieldCallbacks( fieldName[i], callback );

		this._deletedFieldCallbacks[fieldName] = this._deletedFieldCallbacks[fieldName] ? this._deletedFieldCallbacks[fieldName] : []
		this._deletedFieldCallbacks[fieldName].push( callback )

	},

	/**
	 * Fire deletedField callbacks.
	 * Called when a field has been cloned.
	 */
	deletedField: function( el ) {

		// also check child elements
		el.add( el.find( 'div[data-class]' ) ).each( function(i, el) {

			el = jQuery( el )
			var callbacks = CMB._deletedFieldCallbacks[el.attr( 'data-class') ]

			if ( callbacks )
				for ( var a = 0; a < callbacks.length; a++ )
					callbacks[a]( el )

		})
	},
	
	sortableInit : function( field ) {

		var items = field.find(' > .field-item').not('.hidden');
		
		field.find( '> .field-item > .cmb-handle' ).remove();

		items.each( function() {
			jQuery(this).append( '<div class="cmb-handle"></div>' );
		} );
		
		field.sortable( { 
			handle: "> .cmb-handle" ,
			cursor: "move",
			items: " > .field-item",
			beforeStop: function( event, ui ) { CMB.sortStart( jQuery( ui.item[0] ) ); },
			deactivate: function( event, ui ) { CMB.sortEnd( jQuery( ui.item[0] ) ); },
		} );
		
	},

	sortStart : function ( el ) {
		
		// also check child elements
		el.add( el.find( 'div[data-class]' ) ).each( function(i, el) {
		
			el = jQuery( el )
			var callbacks = CMB._sortStartCallbacks[el.attr( 'data-class') ]
		
			if ( callbacks )
				for ( var a = 0; a < callbacks.length; a++ )
					callbacks[a]( el )
				
		})

	},

	addCallbackForSortStart: function( fieldName, callback ) {
		
		if ( jQuery.isArray( fieldName ) )
			for ( var i = 0; i < fieldName.length; i++ )
				CMB.addCallbackForSortStart( fieldName[i], callback );
	
		this._sortStartCallbacks[fieldName] = this._sortStartCallbacks[fieldName] ? this._sortStartCallbacks[fieldName] : []
		this._sortStartCallbacks[fieldName].push( callback )
	
	},

	sortEnd : function ( el ) {

		// also check child elements
		el.add( el.find( 'div[data-class]' ) ).each( function(i, el) {
		
			el = jQuery( el )
			var callbacks = CMB._sortEndCallbacks[el.attr( 'data-class') ]
		
			if ( callbacks )
				for ( var a = 0; a < callbacks.length; a++ )
					callbacks[a]( el )
				
		})

	},

	addCallbackForSortEnd: function( fieldName, callback ) {

		if ( jQuery.isArray( fieldName ) )
			for ( var i = 0; i < fieldName.length; i++ )
				CMB.addCallbackForSortEnd( fieldName[i], callback );
	
		this._sortEndCallbacks[fieldName] = this._sortEndCallbacks[fieldName] ? this._sortEndCallbacks[fieldName] : []
		this._sortEndCallbacks[fieldName].push( callback )
	
	}
	
}

jQuery(document).ready( function() {

	CMB.init();

});
