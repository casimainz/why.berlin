'use strict';

( function() {
    CKEDITOR.plugins.add( 'embeddedimage', {
        requires: 'widget,dialog',
        lang: 'en',
        icons: 'image',
        hidpi: true,

        onLoad: function() {
            // Register styles for placeholder widget frame.
            CKEDITOR.addCss( '.cke_embeddedimage{background-color:#ff0}' );
            CKEDITOR.addCss( '.cke_embeddedimage_border{border-style:dotted}' );
        },

        init: function( editor ) {
            var lang = editor.lang.embeddedimage;

            // Register dialog.
            CKEDITOR.dialog.add( 'embeddedimage', this.path + 'dialogs/embeddedimage.js' );

            // Put ur init code here.
            editor.widgets.add( 'embeddedimage', {
                // Widget code.
                dialog: 'embeddedimage',
                pathName: lang.pathName,
                template: '<div class="cke_embeddedimage">[[]]</div>',

                allowedContent: 'div[!data-embeddedcontent-type,data-embeddedcontent-image-*]',
                requiredContent: 'div[data-embeddedcontent-type,data-embeddedcontent-image-*]',

                upcast: function( el, data ) {
                    if (el.attributes && el.attributes['data-embeddedcontent-type'] === 'image') {
                        el.addClass('cke_embeddedimage');
                        data.contentKey = el.attributes['data-embeddedcontent-image-content-key'] || '';
                        data.maxWidth = el.attributes['data-embeddedcontent-image-max-width'] || '';
                        data.borderBox = el.attributes['data-embeddedcontent-image-border-box'] || false;
                        if (data.borderBox) {
                            el.addClass('cke_embeddedimage_border');
                        }
                        return true;
                    }
                },

                downcast: function() {
                    var ret = new CKEDITOR.htmlParser.element( 'div' );
                    ret.attributes['data-embeddedcontent-type'] = 'image';
                    ret.attributes['data-embeddedcontent-image-content-key'] = this.data.contentKey || '';
                    ret.attributes['data-embeddedcontent-image-max-width'] = this.data.maxWidth || '';
                    ret.attributes['data-embeddedcontent-image-border-box'] = this.data.borderBox || '';

                    return ret;
                },

                data: function() {
                    this.element.setText( '[[ Image: ' + this.data.contentKey + ' ]]' );
                    if (this.data.borderBox) {
                        this.element.addClass('cke_embeddedimage_border');
                    } else {
                        this.element.removeClass('cke_embeddedimage_border');
                    }
                },

                getLabel: function() {
                    return this.editor.lang.widget.label.replace( /%1/, 'Image' + this.pathName );
                }
            } );

            editor.ui.addButton && editor.ui.addButton( 'CreateImageContent', {
                label: lang.toolbar,
                command: 'embeddedimage',
                toolbar: 'insert,102',
                icon: 'image'
            } );
        }
    } );

} )();