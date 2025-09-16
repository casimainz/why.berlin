'use strict';

( function() {
    CKEDITOR.plugins.add( 'embeddedtwitter', {
        requires: 'widget,dialog',
        lang: 'en',
        icons: 'twitter',
        hidpi: true,

        onLoad: function() {
            // Register styles for placeholder widget frame.
            CKEDITOR.addCss( '.cke_embeddedtwitter{background-color:#ff0}' );
        },

        init: function( editor ) {
            var lang = editor.lang.embeddedtwitter;

            // Register dialog.
            CKEDITOR.dialog.add( 'embeddedtwitter', this.path + 'dialogs/embeddedtwitter.js' );

            // Put ur init code here.
            editor.widgets.add( 'embeddedtwitter', {
                // Widget code.
                dialog: 'embeddedtwitter',
                pathName: lang.pathName,
                template: '<div class="cke_embeddedtwitter">[[]]</div>',

                allowedContent: 'div[!data-embeddedcontent-type,data-embeddedcontent-twitter-*]',
                requiredContent: 'div[data-embeddedcontent-type,data-embeddedcontent-twitter-*]',

                upcast: function( el, data ) {
                    if (el.attributes && el.attributes['data-embeddedcontent-type'] === 'twitter') {
                        el.addClass('cke_embeddedtwitter');
                        data.content = el.attributes['data-embeddedcontent-twitter-content'] || '';
                        data.link = el.attributes['data-embeddedcontent-twitter-link'] || '';
                        data.explosionColor = el.attributes['data-embeddedcontent-twitter-explosion-color'] || '';
                        return true;
                    }
                },

                downcast: function() {
                    var ret = new CKEDITOR.htmlParser.element( 'div' );
                    ret.attributes['data-embeddedcontent-type'] = 'twitter';
                    ret.attributes['data-embeddedcontent-twitter-content'] = this.data.content || '';
                    ret.attributes['data-embeddedcontent-twitter-link'] = this.data.link || '';
                    ret.attributes['data-embeddedcontent-twitter-explosion-color'] = this.data.explosionColor || '';

                    return ret;
                },

                data: function() {
                    this.element.setText( '[[ Twitter:' + this.data.content + ' ]]' );
                },

                getLabel: function() {
                    return this.editor.lang.widget.label.replace( /%1/, 'Twitter' + this.pathName );
                }
            } );

            editor.ui.addButton && editor.ui.addButton( 'CreateTwitterContent', {
                label: lang.toolbar,
                command: 'embeddedtwitter',
                toolbar: 'insert,100',
                icon: 'twitter'
            } );
        }
    } );

} )();