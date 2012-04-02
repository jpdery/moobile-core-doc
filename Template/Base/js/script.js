/* Author:

*/


window.addEvent('domready', function() {

	window.addEvent('scroll', function(e) {
		var header = document.getElement('.main-header-back');
		var scroll = window.getScroll().y;
		if (scroll > 75) {
			header.addClass('emphasize');
		} else {
			header.removeClass('emphasize');
		}
	});

});
