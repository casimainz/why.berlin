'use strict';

CKEDITOR.dialog.add( 'embeddedyoutube', function( editor ) {
    var lang = editor.lang.embeddedyoutube,
        generalLabel = editor.lang.common.generalTab,
        youtubeUrlRegExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;

    return {
        title: lang.title,
        minWidth: 300,
        minHeight: 80,
        contents: [
            {
                id: 'info',
                label: generalLabel,
                title: generalLabel,
                elements: [
                    {
                        id: 'youtube-url',
                        type: 'text',
                        label: lang.youtubeUrl,
                        validate: CKEDITOR.dialog.validate.regex(
                            youtubeUrlRegExp,
                            lang.youtubeUrlValid
                        ),
                        'default' : '',
                        setup: function( widget ) {
                            this.setValue( widget.data.youtubeUrl );
                        },
                        commit: function( widget ) {
                            widget.setData( 'youtubeUrl', this.getValue() );
                        }
                    },
                    {
                        id: 'border-box',
                        type: 'checkbox',
                        label: lang.borderBox,
                        'default' : '',
                        setup: function( widget ) {
                            this.setValue( widget.data.borderBox );
                        },
                        commit: function( widget ) {
                            widget.setData( 'borderBox', this.getValue() );
                        }
                    },
                    {
                        id: 'alternative-text',
                        type: 'text',
                        label: lang.alternativeText,
                        'default': '',
                        setup: function ( widget ) {
                            this.setValue( widget.data.alternativeText );
                        },
                        commit: function ( widget ) {
                            widget.setData( 'alternativeText', this.getValue() );
                        }
                    }
                ]
            }
        ]
    };
} );