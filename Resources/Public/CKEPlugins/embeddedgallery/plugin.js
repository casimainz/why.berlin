'use strict';

( function() {
    CKEDITOR.plugins.add( 'embeddedgallery', {
        requires: 'widget,dialog',
        lang: 'en',
        icons: 'gallery',
        hidpi: true,

        onLoad: function() {
            // Register styles for placeholder widget frame.
            CKEDITOR.addCss( '.cke_embeddedgallery{background-color:#ff0}' );
        },

        init: function( editor ) {
            var lang = editor.lang.embeddedgallery;

            // Register dialog.
            CKEDITOR.dialog.add( 'embeddedgallery', this.path + 'dialogs/embeddedgallery.js' );

            // Put ur init code here.
            editor.widgets.add( 'embeddedgallery', {
                // Widget code.
                dialog: 'embeddedgallery',
                pathName: lang.pathName,
                template: '<div class="cke_embeddedgallery">[[]]</div>',

                allowedContent: 'div[!data-embeddedcontent-type,data-embeddedcontent-gallery-*]',
                requiredContent: 'div[data-embeddedcontent-type,data-embeddedcontent-gallery-*]',

                upcast: function( el, data ) {
                    if (el.attributes && el.attributes['data-embeddedcontent-type'] === 'gallery') {
                        el.addClass('cke_embeddedgallery');
                        data.contentKey = el.attributes['data-embeddedcontent-gallery-content-key'] || '';
                        data.maxWidth = el.attributes['data-embeddedcontent-gallery-max-width'] || '';
                        return true;
                    }
                },

                downcast: function() {
                    var ret = new CKEDITOR.htmlParser.element( 'div' );
                    ret.attributes['data-embeddedcontent-type'] = 'gallery';
                    ret.attributes['data-embeddedcontent-gallery-content-key'] = this.data.contentKey || '';
                    ret.attributes['data-embeddedcontent-gallery-max-width'] = this.data.maxWidth || '';

                    return ret;
                },

                data: function() {
                    this.element.setText( '[[ Gallery:' + this.data.contentKey + ' ]]' );
                },

                getLabel: function() {
                    return this.editor.lang.widget.label.replace( /%1/, 'Gallery' + this.pathName );
                }
            } );

            editor.ui.addButton && editor.ui.addButton( 'CreateGalleryContent', {
                label: lang.toolbar,
                command: 'embeddedgallery',
                toolbar: 'insert,101',
                icon: 'gallery'
            } );
        }
    } );

} )();