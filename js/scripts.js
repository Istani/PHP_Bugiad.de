$(document).ready(function() {
    /*Nav*/
    $('li').mouseover(function() {
	var $id = $(this).attr('id');
	$('#' + $id + ' ul').css('display', 'block');
    });
    $('li').mouseout(function() {
	var $id = $(this).attr('id');
	$('#' + $id + ' ul').css('display', 'none');
    });
    /* Nav Ende */
});