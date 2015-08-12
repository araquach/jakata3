/**
 * Ajax to load form	
 */

// $('#price_links').css({display:'block'});
// $('#price_link').css({display:'none'});
$('a').click(function() {
	var url = $(this).attr('href');
	$('#prospect-entry').load(url + ' #prospect-entry');
	return false;	
}); //end click