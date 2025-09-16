'use strict';

CKEDITOR.dialog.add( 'embeddedtwitter', function( editor ) {
    var lang = editor.lang.embeddedtwitter,
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
                        id: 'content',
                        type: 'textarea',
                        label: lang.content,
                        validate: CKEDITOR.dialog.validate.notEmpty( lang.contentNotEmpty ),
                        'default' : '',
                        setup: function( widget ) {
                            this.setValue( widget.data.content );
                        },
                        commit: function( widget ) {
                            widget.setData( 'content', this.getValue() );
                        }
                    },
                    {
                        id: 'link',
                        type: 'text',
                        label: lang.link,
                        'default' : 'Share on twitter',
                        setup: function( widget ) {
                            if ( widget.data.link ) {
                                this.setValue( widget.data.link );
                            }
                        },
                        commit: function( widget ) {
                            widget.setData( 'link', this.getValue() );
                        }
                    },
                    {
                        id: 'explosion-color',
                        type: 'select',
                        label: lang.explosionColor,
                        items: [
                            [lang.explosionColorRed, 'explosion-red'],
                            [lang.explosionColorGreen, 'explosion-green'],
                            [lang.explosionColorGray, 'explosion-gray']
                        ],
                        'default' : 'explosion-gray',
                        setup: function( widget ) {
                            if ( widget.data.explosionColor ) {
                                this.setValue( widget.data.explosionColor );
                            }
                        },
                        commit: function( widget ) {
                            widget.setData( 'explosionColor', this.getValue() );
                        }
                    },
                ]
            }
        ]
    };
} );