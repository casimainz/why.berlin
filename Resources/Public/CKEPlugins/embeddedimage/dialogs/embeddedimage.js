'use strict';

CKEDITOR.dialog.add( 'embeddedimage', function ( editor ) {
    var lang = editor.lang.embeddedimage,
        generalLabel = editor.lang.common.generalTab;

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
                        id: 'content-key',
                        type: 'text',
                        label: lang.contentKey,
                        validate: CKEDITOR.dialog.validate.notEmpty( lang.contentKeyNotEmpty ),
                        'default': '',
                        setup: function ( widget ) {
                            this.setValue( widget.data.contentKey );
                        },
                        commit: function ( widget ) {
                            widget.setData( 'contentKey', this.getValue() );
                        }
                    },
                    {
                        id: 'max-width',
                        type: 'text',
                        label: lang.maxWidth,
                        validate: CKEDITOR.dialog.validate.integer( lang.maxWidthInteger ),
                        'default': '',
                        setup: function ( widget ) {
                            this.setValue( widget.data.maxWidth );
                        },
                        commit: function ( widget ) {
                            widget.setData( 'maxWidth', this.getValue() );
                        }
                    },
                    {
                        id: 'border-box',
                        type: 'checkbox',
                        label: lang.borderBox,
                        'default': '',
                        setup: function ( widget ) {
                            this.setValue( widget.data.borderBox );
                        },
                        commit: function ( widget ) {
                            widget.setData( 'borderBox', this.getValue() );
                        }
                    }
                ]
            }
        ]
    };
} );