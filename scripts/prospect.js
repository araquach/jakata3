jQuery.noConflict();

(function($){
	$(document).ready(function(){
		$('.prospect-button').click(function(){
			$('#tohide').css('z-index','-1');
		});
		return false;
	});

})(jQuery);
