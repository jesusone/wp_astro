jQuery(document).ready(function(){ 
    jQuery(".upload").click( function( event ) {
        var activeFileUploadContext = jQuery(this).parent();
        var relid = jQuery(this).attr('rel-id');
        var that = jQuery(this);
        var elementID = jQuery(this).attr('id');

        event.preventDefault();
        custom_file_frame = null;

        custom_file_frame = wp.media.frames.customHeader = wp.media({
            title: jQuery(this).data("choose"),
            library: {
                type: 'image'
            },
            button: {
                text: jQuery(this).data("update")
            }
        });
        custom_file_frame.on( "select", function() {
            // Grab the selected attachment.
            var attachment = custom_file_frame.state().get("selection").first();
            jQuery('.pro-upload-'+relid).val(attachment.attributes.url);
            jQuery('.init-image-'+relid).css('display','block');
            jQuery('.img-preview-'+relid).attr('src', attachment.attributes.url);
        });

        custom_file_frame.open();
    });
	jQuery(".video").live( 'click',function( event ) {
        var activeFileUploadContext = jQuery(this).parent();
        var relid = jQuery(this).attr('rel-id');
        var that = jQuery(this);
        var elementID = jQuery(this).attr('id');

        event.preventDefault();
        custom_file_frame = null;

        custom_file_frame = wp.media.frames.customHeader = wp.media({
            title: jQuery(this).data("choose"),
            library: {
            },
            button: {
                text: jQuery(this).data("update")
            }
        });
        custom_file_frame.on( "select", function() {
            // Grab the selected attachment.
            var attachment = custom_file_frame.state().get("selection").first();
            jQuery('.video').val(attachment.attributes.url);
            jQuery('.init-image-'+relid).css('display','block');
            jQuery('.img-preview-'+relid).attr('src', attachment.attributes.url);
        });

        custom_file_frame.open();
    });
    jQuery(".pr-upload-remove").click( function( event ) {
        var activeFileUploadContext = jQuery(this).parent();
        var relid = jQuery(this).attr('rel-id');
        event.preventDefault();
        jQuery('#' + relid).val('');
        jQuery('.init-image-' + relid).css('display','none');
        jQuery('.upload',activeFileUploadContext).show();
    });
});