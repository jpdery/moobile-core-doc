
window.addEvent('domready', function() {

	prettyPrint()

	document.getElements('[data-example]').each(function(el) {
		el.addClass('simulated-example');
		Moobile.Simulator.create('iPhone', el.get('data-example'), { container: el });
	});

});