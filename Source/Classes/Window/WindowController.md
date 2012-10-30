Moobile.WindowController
================================================================================

##### Extends [Moobile.ViewController](../ViewController/ViewController.md)

Provides a view controller that manages a window.

Initialization {#initialization}
--------------------------------------------------------------------------------

#### Syntax:

	var windowController = new Moobile.WindowController([options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`options` *Optional* | Object  | The window controller's options.
`name`    *Optional* | String  | The window controller's name.

#### Example

File at /templates/say-hello-view.html:

	<div class="say-hello-view">
		<h2>Tap the button</h2>
		<div data-role="button" data-name="tap-me-button">Tap me!</div>
	</div>

The view controller:

	var SayHelloViewController = new Class({

		Extends: Moobile.ViewController,

		tapMeButton: null,

		loadView: function() {
			this.view = Moobile.View.at('/templates/say-hello-view.html');
		},

		viewDidLoad: function() {
			this.tapMeButton = this.view.getChildComponent('tap-me-button');
			this.tapMeButton.addEvent('tap', this.bound('onTapMeButtonTap'));
		},

		destroy: function() {
			this.tapMeButton.removeEvent('tap', this.bound('onTapMeButtonTap'));
			this.tapMeButton = null;
			this.parent();
		},

		onTapMeButtonTap: function(e, sender) {
			alert('Mooooooooo!');
		}
	});

Methods {#methods}
--------------------------------------------------------------------------------

### setRootViewController(rootViewController) {#setRootViewController}

Sets the root view controller.

This method will set the view controller at the root of the view
controller hierarchy. There can be only one root view controller at
time meaning setting a new root view controller when there is an
existing one will destroy the existing one.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`rootViewController` *Optional* | [Moobile.ViewController](../ViewController/ViewController.md) | The root view controller.

#### Returns:

- `Moobile.WindowController` This window controller.

-----

### getRootViewController() {#getRootViewController}

Returns the root view controller.

This method will return the view controller at the root of the view
controller hierarchy. There can be only one root view controller at time
meaning setting a new root view controller when there is an existing one
will destroy the existing one.

#### Returns:

- [Moobile.ViewController](../ViewController/ViewController.md) The root view controller.

-----

Members {#members}
--------------------------------------------------------------------------------

### [Moobile.ViewController](../ViewController/ViewController.md) rootViewController

The root view controller.

-----


Events {#events}
--------------------------------------------------------------------------------