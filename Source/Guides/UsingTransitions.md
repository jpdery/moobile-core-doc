Using Transitions
================================================================================

This guide will walk you through the steps needed to create an app that moves from one view to another using a transition.

### Requirements

This guide requires to:

- Download and extract the [Moobile Boiler Plate](https://github.com/jpdery/moobile-boiler-plate/zipball/master) package.

### Note

If you are using Google Chrome, make sure you start it using the `--allow-file-access-from-files` command line option [as explained here](http://code.google.com/p/chromium/issues/detail?id=40787) or it might not work properly.

## Introduction

Transitioning between a view to another requires the `Moobile.ViewControllerStack` object. This object manages an array of view controllers that were pushed into the view controller stack. The view controller stack uses a transition when pushing a view controller and use the same transition (but on reverse) when the view controller is popped.

## Create the view controllers

We will need to create two view controllers. Open `www/js/app.js` and add the following code:

	var ViewControllerOne = new Class({

		Extends: Moobile.ViewController,

		nextButton: null,

		viewDidLoad: function() {
			this.view.addClass('view-one');
			this.nextButton = new Moobile.Button();
			this.nextButton.setLabel('Next view');
			this.nextButton.addEvent('tap', this.bound('onNextButtonTap'));
			this.view.addChild(this.nextButton);
		},

		destroy: function() {
			this.nextButton.removeEvent('tap', this.bound('onNextButtonTap'));
			this.nextButton = null;
			this.parent();
		},

		onNextButtonTap: function() {
			this.getViewControllerStack().pushViewController(new ViewControllerTwo, new Moobile.ViewTransition.Slide);
		}

	});

	var ViewControllerTwo = new Class({

		Extends: Moobile.ViewController,

		prevButton: null,

		viewDidLoad: function() {
			this.view.addClass('view-two');
			this.prevButton = new Moobile.Button();
			this.prevButton.setLabel('Previous view');
			this.prevButton.addEvent('tap', this.bound('onPrevButtonTap'));
			this.view.addChild(this.prevButton);
		},

		destroy: function() {
			this.prevButton.removeEvent('tap', this.bound('onPrevButtonTap'));
			this.prevButton = null;
			this.parent();
		},

		onPrevButtonTap: function() {
			this.getViewControllerStack().popViewController();
		}
	});


Also, open `www/css/styles.css` and add the following code:

	.view.view-one > .view-content,
	.view.view-two > .view-content {
		-webkit-box-pack: center;
		padding: 12px;
	}

## Loading the view controller stack

The next step is to set an instance of a `Moobile.ViewControllerStack` as the root view controller. Open `www/index.html` and locate this piece of code:

	window.addEvent('ready', function() {
		var rootViewController = new ViewController.Home(); // replace this with your own root view controller
		new Moobile.WindowController().setRootViewController(rootViewController);
	});

Replace it with :

	window.addEvent('ready', function() {
		var rootViewController = new Moobile.ViewControllerStack();
		new Moobile.WindowController().setRootViewController(rootViewController);
		rootViewController.pushViewController(new ViewControllerOne);
	});

This creates a view controller stack and push an instance of `ViewControllerOne` *without* a transition.

## Adding a transition

The next step is to add a `tap` event on the buttons to show the next view controller and come back to the first one.

	var ViewControllerOne = new Class({

		Extends: Moobile.ViewController,

		nextButton: null,

		viewDidLoad: function() {
			this.view.addClass('view-one');
			this.nextButton = new Moobile.Button();
			this.nextButton.setLabel('Next view');
			this.nextButton.addEvent('tap', this.bound('onNextButtonTap'));
			this.view.addChild(this.nextButton);
		},

		destroy: function() {
			this.nextButton.removeEvent('tap', this.bound('onNextButtonTap'));
			this.nextButton = null;
			this.parent();
		},

		onNextButtonTap: function() {
			this.getViewControllerStack().pushViewController(new ViewControllerTwo, new Moobile.ViewTransition.Slide);
		}

	});

	var ViewControllerTwo = new Class({

		Extends: Moobile.ViewController,

		prevButton: null,

		viewDidLoad: function() {
			this.view.addClass('view-two');
			this.prevButton = new Moobile.Button();
			this.prevButton.setLabel('Previous view');
			this.prevButton.addEvent('tap', this.bound('onPrevButtonTap'));
			this.view.addChild(this.prevButton);
		},

		destroy: function() {
			this.prevButton.removeEvent('tap', this.bound('onPrevButtonTap'));
			this.prevButton = null;
			this.parent();
		},

		onPrevButtonTap: function() {
			this.getViewControllerStack().popViewController();
		}
	});

The `onNextButtonTap` pushes a new view controller to the stack using a `Moobile.ViewTransition.Slide` transition. The `onPrevButtonTap` method remove the current view controller (itself) from the view controller stack using the same transition but on reverse.

Open the simulator localted at `moobile-simulator/index.html` in you web browser and enjoy!
