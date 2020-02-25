(function($) {

	mapiChats = function() {
		if(Drupal.settings.mapibar) {
			var cbwChat = Drupal.settings.mapibar.chat;
			var cbWidth = Drupal.settings.mapibar.width;
			// Contact bar position hack
			var ww = $(window).width();
			var cb = parseInt((ww-cbWidth)/2)-0;
			$('#contact-bar').css('width', cbWidth);
			$('#contact-bar').css('left', cb);
			
			$('#cb-chat').popup(paramsChat, cbwChat);			
			$('#cb-whatsapp').click(function(){console.log("Comunicandose por wpp");})
						
			
		}
	}
    
	$(document).ready(function() { 
		mapiChats();
	});
	
	$(window).resize(function() {
	   mapiChats();
	});
})(jQuery); 
