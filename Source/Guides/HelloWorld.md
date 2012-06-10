Hello World
================================================================================

This guide will walk you through the steps needed create an app with a single button displaying an alert upon being tapped. Through this tutorial, you will learn how to create a view controller, load its view and customize it using CSS styles.

### Requirements

To use this guide you must download and extract the [Moobile Boiler Plate](https://moobilejs.com/donwload/moobile-boiler-plate-0.1.1.zip).

### Note

If you are using Google Chrome, make sure you start it using the `--allow-file-access-from-files` command line option [as explained here](http://code.google.com/p/chromium/issues/detail?id=40787) or it might not work properly.

## Creating a view template

In the `www/templates/views/` directory, create a `hello-world-view.html` file and add the following code:

	<div class="hello-world-view">
		<div data-role="button" data-name="hello-world-button">Hello World</div>
	</div>

This defines our view element. Adding an element with the `data-role="button"` attribute creates a button. In this case it's named `hello-world-button`.

## Creating a view controller and load the view

The next step is to create a view controller and load its view. Open `www/app.js` and add the following code:

	var HelloWorldViewController = new Class({

		Extends: Moobile.ViewController,

		loadView: function() {
			this.view = Moobile.View.at('templates/views/hello-world-view.html');
		}

	});

This creates a new view controller and loads its view using the template at `templates/views/hello-world-view.html`.

## Adding events

At this point we need to add a `tap` event on the button. Update the previous code to look like this:

	var HelloWorldViewController = new Class({

		Extends: Moobile.ViewController,

		helloWorldButton: null,

		loadView: function() {
			this.view = Moobile.View.at('templates/views/hello-world-view.html');
		},

		viewDidLoad: function() {
			this.helloWorldButton = this.view.getChildComponent('hello-world-button');
			this.helloWorldButton.addEvent('tap', this.bound('onHelloButtonTap'));
		},

		destroy: function() {
			this.helloWorldButton.removeEvent('tap', this.bound('onHelloButtonTap'));
			this.helloWorldButton = null;
			this.parent();
		},

		onHelloButtonTap: function() {
			var alert = new Moobile.Alert();
			this.view.addChildComponent(alert);
			alert.setTitle('Hello');
			alert.showAnimated();
		}

	});

The `loadView` method is called once the view is totally loaded and its components can be accessed. In this case we retrieve the button from the view and add a `tap` event. Upon begin tapped this controller creates an alert and displays it.

## Loading the view controller

Finally we need to load our view controller. Open the file `www/index.html` and locate this code:

	window.addEvent('ready', function() {
		var rootViewController = new ViewController.Home(); // replace this with your own root view controller
		new Moobile.WindowController().setRootViewController(rootViewController);
	});

Replace with this code:

	window.addEvent('ready', function() {
		var rootViewController = new HelloWorldViewController();
		new Moobile.WindowController().setRootViewController(rootViewController);
	});

Open the simulator located at `moobile-simulator/index.html` in you web browser and enjoy!

## Making it pretty

The presentation of the entire view is less than optimal. The button would certainly look better centered with more padding. Open `www/css/styles.css` and add the following lines:

	.view.hello-world-view .hello-world-view-content {
		-webkit-box-pack: center;
		padding: 12px;
	}

Reload and you're done!

[Download the demo](http://moobilejs.com/downloads/demo-helloworld.zip)