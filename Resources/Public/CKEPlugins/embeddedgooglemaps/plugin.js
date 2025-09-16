'use strict';

( function() {
    CKEDITOR.plugins.add( 'embeddedgooglemaps', {
        requires: 'widget,dialog',
        lang: 'en',
        icons: 'googlemaps-marker',
        hidpi: true,

        onLoad: function() {
            // Register styles for placeholder widget frame.
            CKEDITOR.addCss( '.cke_embeddedgooglemaps{background-color:#ff0}' );
        },

        init: function( editor ) {
            var lang = editor.lang.embeddedgooglemaps;

            // Register dialog.
            CKEDITOR.dialog.add( 'embeddedgooglemaps', this.path + 'dialogs/embeddedgooglemaps.js' );

            // Put ur init code here.
            editor.widgets.add( 'embeddedgooglemaps', {
                // Widget code.
                dialog: 'embeddedgooglemaps',
                pathName: lang.pathName,
                template: '<div class="cke_embeddedgooglemaps">[[]]</div>',

                allowedContent: 'div[!data-embeddedcontent-type,data-embeddedcontent-googlemaps-*]',
                requiredContent: 'div[data-embeddedcontent-type,data-embeddedcontent-googlemaps-*]',

                upcast: function( el, data ) {
                    if (el.attributes && el.attributes['data-embeddedcontent-type'] === 'googlemaps') {
                        el.addClass('cke_embeddedgooglemaps');
                        data.latitude = el.attributes['data-embeddedcontent-googlemaps-latitude'] || '';
                        data.longitude = el.attributes['data-embeddedcontent-googlemaps-longitude'] || '';
                        data.altText = el.attributes['data-embeddedcontent-googlemaps-alt-text'] || '';
                        return true;
                    }
                },

                downcast: function() {
                    var ret = new CKEDITOR.htmlParser.element( 'div' );
                    ret.attributes['data-embeddedcontent-type'] = 'googlemaps';
                    ret.attributes['data-embeddedcontent-googlemaps-latitude'] = this.data.latitude || '';
                    ret.attributes['data-embeddedcontent-googlemaps-longitude'] = this.data.longitude || '';
                    ret.attributes['data-embeddedcontent-googlemaps-alt-text'] = this.data.altText || '';

                    return ret;
                },

                data: function() {
                    this.element.setText(
                        '[[ Googlemaps: Latitude=' + (this.data.latitude || 'record') + ',' +
                        'Longitude=' + (this.data.longitude || 'record') +
                        'Alt text=' + (this.data.altText || 'record') + ' ]]'
                    );
                },

                getLabel: function() {
                    return this.editor.lang.widget.label.replace( /%1/, 'Googlemaps' + this.pathName );
                }
            } );

            editor.ui.addButton && editor.ui.addButton( 'CreateGooglemapsContent', {
                label: lang.toolbar,
                command: 'embeddedgooglemaps',
                toolbar: 'insert,104',
                icon: 'googlemaps-marker'
            } );
        }
    } );

} )();