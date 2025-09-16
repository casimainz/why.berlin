'use strict';

( function() {
    CKEDITOR.plugins.add( 'embeddedyoutube', {
        requires: 'widget,dialog',
        lang: 'en',
        icons: 'youtube',
        hidpi: true,

        onLoad: function() {
            // Register styles for placeholder widget frame.
            CKEDITOR.addCss( '.cke_embeddedyoutube{background-color:#ff0}' );
            CKEDITOR.addCss( '.cke_embeddedyoutube_border{border-style:dotted}' );
        },

        init: function( editor ) {
            var lang = editor.lang.embeddedyoutube;

            // Register dialog.
            CKEDITOR.dialog.add( 'embeddedyoutube', this.path + 'dialogs/embeddedyoutube.js' );

            // Put ur init code here.
            editor.widgets.add( 'embeddedyoutube', {
                // Widget code.
                dialog: 'embeddedyoutube',
                pathName: lang.pathName,
                template: '<div class="cke_embeddedyoutube">[[]]</div>',

                allowedContent: 'div[!data-embeddedcontent-type,data-embeddedcontent-youtube-*]',
                requiredContent: 'div[data-embeddedcontent-type,data-embeddedcontent-youtube-*]',

                upcast: function( el, data ) {
                    if (el.attributes && el.attributes['data-embeddedcontent-type'] === 'youtube') {
                        el.addClass('cke_embeddedyoutube');
                        data.youtubeUrl = el.attributes['data-embeddedcontent-youtube-url'] || '';
                        data.alternativeText = el.attributes['data-embeddedcontent-youtube-alternative-text'] || '';
                        data.borderBox = el.attributes['data-embeddedcontent-youtube-border-box'] || false;
                        if (data.borderBox) {
                            el.addClass('cke_embeddedyoutube_border');
                        }
                        return true;
                    }
                },

                downcast: function() {
                    var ret = new CKEDITOR.htmlParser.element( 'div' );
                    ret.attributes['data-embeddedcontent-type'] = 'youtube';
                    ret.attributes['data-embeddedcontent-youtube-url'] = this.data.youtubeUrl || '';
                    ret.attributes['data-embeddedcontent-youtube-border-box'] = this.data.borderBox || '';
                    ret.attributes['data-embeddedcontent-youtube-alternative-text'] = this.data.alternativeText || '';

                    return ret;
                },

                data: function() {
                    this.element.setText( '[[ Youtube: ' + this.data.youtubeUrl + ' ]]' );
                    if (this.data.borderBox) {
                        this.element.addClass('cke_embeddedyoutube_border');
                    } else {
                        this.element.removeClass('cke_embeddedyoutube_border');
                    }
                },

                getLabel: function() {
                    return this.editor.lang.widget.label.replace( /%1/, 'Youtube' + this.pathName );
                }
            } );

            editor.ui.addButton && editor.ui.addButton( 'CreateYoutubeContent', {
                label: lang.toolbar,
                command: 'embeddedyoutube',
                toolbar: 'insert,105',
                icon: 'youtube'
            } );
        }
    } );

} )();