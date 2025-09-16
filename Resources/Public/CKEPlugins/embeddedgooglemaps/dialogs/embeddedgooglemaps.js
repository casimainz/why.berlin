'use strict';

CKEDITOR.dialog.add( 'embeddedgooglemaps', function( editor ) {
    var lang = editor.lang.embeddedgooglemaps,
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
                        id: 'latitude',
                        type: 'text',
                        label: lang.latitude,
                        'default' : '',
                        setup: function( widget ) {
                            this.setValue( widget.data.latitude );
                            $(this.getInputElement()).attr('placeholder', lang.inputPlaceholder);
                        },
                        commit: function( widget ) {
                            widget.setData( 'latitude', this.getValue() );
                        }
                    },
                    {
                        id: 'longitude',
                        type: 'text',
                        label: lang.longitude,
                        'default' : '',
                        setup: function( widget ) {
                            this.setValue( widget.data.longitude );
                            $(this.getInputElement()).attr('placeholder', lang.inputPlaceholder);
                        },
                        commit: function( widget ) {
                            widget.setData( 'longitude', this.getValue() );
                        }
                    },
                    {
                        id: 'alt-text',
                        type: 'textarea',
                        label: lang.altText,
                        'default' : '',
                        setup: function( widget ) {
                            this.setValue( widget.data.altText );
                            $(this.getInputElement()).attr('placeholder', lang.inputPlaceholderAltText);
                        },
                        commit: function( widget ) {
                            widget.setData( 'altText', this.getValue() );
                        }
                    }
                ]
            }
        ]
    };
} );