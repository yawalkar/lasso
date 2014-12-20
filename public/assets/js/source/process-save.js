jQuery(document).ready(function($){

	var ajaxurl =  aesop_editor.ajaxurl,
		editor 	=  aesop_editor.editor,
		confirm = aesop_editor.confirm;

	$('#aesop-editor--save').live('click',function(e) {
		e.preventDefault();

		var $this = $(this);

		var html = $(editor).html();

		var data      = {
			action:    'process_save_content',
			author:  	aesop_editor.author,
			content: 	html,
			post_id:   	$this.data('post-id'),
			nonce:     	aesop_editor.nonce
		};

		$.post( ajaxurl, data, function(response) {

			if ( 'success' == response ) {
				$(confirm).text('success');
				$(confirm).fadeIn();
				$(confirm).delay(2000).fadeOut();
				$('#aesop-editor--save').addClass('saved');
			} else {
				$(confirm).text('error');

			}

		});

	});
});