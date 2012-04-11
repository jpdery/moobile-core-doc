Moobile.ViewControllerStack
================================================================================

##### Extends [Moobile.ViewController](../ViewController/ViewController.md)

Provides a controller for managing a stack of controllers with methods to move from one view controller to another using a transition.

Initialization {#initialization}
--------------------------------------------------------------------------------

#### Syntax:

	var viewControllerStack = new Moobile.ViewControllerStack([options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`options` *Optional* | Object  | The view controller stack's options.
`name`    *Optional* | String  | The view controller stack's name.

#### Example:

File at /templates/home-view.html:

	<div class="home-view">
		<h2>Tap the button</h2>
		<div data-role="button" data-name="moo-button">Moo</div>
	</div>

File at /templates/moo-view.html:

	<div class="moo-view">
		<div data-role="button" data-name="back-button">Back</div>
	</div>

The view controller:

	var HomeViewController = new Class({

		Extends: Moobile.ViewController,

		mooButton: null,

		loadView: function() {
			this.view = Moobile.View.at('/templates/home-view.html');
		},

		viewDidLoad: function() {
			this.mooButton = this.view.getChildComponent('moo-button');
			this.mooButton.addEvent('tap', this.bound('onMooButtonTap'));
		},

		destroy: function() {
			this.mooButton.removeEvent('tap', this.bound('onMooButtonTap'));
			this.mooButton = null;
			this.parent();
		},

		onTapMeButtonTap: function(e, sender) {
			this.getViewControllerStack().pushViewController(new MooViewController(), new Moobile.ViewTransition.Slide); // shows MooViewController using a sliding transition
		}
	});

	var MooViewController = new Class({

		Extends: Moobile.ViewController,

		backButton: null,

		loadView: function() {
			this.view = Moobile.View.at('/templates/moo-view.html');
		},

		viewDidLoad: function() {
			this.backButton = this.view.getChildComponent('back-button');
			this.backButton.addEvent('tap', this.bound('onBackButtonTap'));
		},

		destroy: function() {
			this.backButton.removeEvent('tap', this.bound('onBackButtonTap'));
			this.backButton = null;
			this.parent();
		},

		onTapMeButtonTap: function(e, sender) {
			this.getParentViewController().popViewController(); // removes this view controller using the same slide transition
		}

	});

	var viewControllerStack = new Moobile.ViewControllerStack();
	viewControllerStack.pushViewController(new HomeViewController); // shows HomeViewController without transitions

Methods {#methods}
--------------------------------------------------------------------------------

### pushViewController(viewController, viewTransition) {#pushViewController}

Pushes a view controller at the end of the stack and present it using a specified view transition. The specified transition will be used automatically when the view controller will pop.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The view controller.
`viewTransition` | [Moobile.ViewTransition](../ViewTransition/ViewTransition.md) | The view transition.

#### Returns:

- *[Moobile.ViewControllerStack](../ViewController/ViewControllerStack.md)* This Moobile.ViewControllerStack instance.

#### Example:

	var viewControllerStack = new Moobile.ViewControllerStack();
	viewControllerStack.pushViewController(new Moobile.ViewController, new Moobile.ViewTransition.Cubic); // shows a new view controller using a cubic transition

-----

### popViewController() {#popViewController}

Removes the top view controller using the same view transition that was used to push it and destroy it.

#### Returns:

- *[Moobile.ViewControllerStack](../ViewController/ViewControllerStack.md)* This Moobile.ViewControllerStack instance.

#### Example:

	var viewControllerStack = new Moobile.ViewControllerStack();
	viewControllerStack.pushViewController(new Moobile.ViewController, new Moobile.ViewTransition.Cubic);
	viewControllerStack.popViewController(); // removes MoobileViewController using the cubic transition

-----

### popViewControllerUntil(viewController) {#popViewControllerUntil}

Pops view controllers until a specified view controller is reached.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The view controller to pop to.

#### Returns:

- *[Moobile.ViewControllerStack](../ViewController/ViewControllerStack.md)* This Moobile.ViewControllerStack instance.

#### Example:

	var viewControllerStack = new Moobile.ViewControllerStack();
	var viewControllerOne = new Moobile.ViewController();
	var viewControllerTwo = new Moobile.ViewController();
	var viewControllerThree = new Moobile.ViewController();
	viewControllerStack.pushViewController(viewControllerOne);
	viewControllerStack.pushViewController(viewControllerTwo);
	viewControllerStack.pushViewController(viewControllerThree);
	viewControllerStack.popViewControllerUntil(viewControllerOne); // removes viewControllerThree and viewControllerThree


-----

### getTopViewController() {#getTopViewController}

Returns the current view controller.

#### Returns:

- [Moobile.ViewController](../ViewController/ViewController.md) This Moobile.ViewControllerStack instance.

#### Example:

	var viewControllerStack = new Moobile.ViewControllerStack();
	var viewControllerOne = new Moobile.ViewController();
	var viewControllerTwo = new Moobile.ViewController();
	viewControllerStack.pushViewController(viewControllerOne);
	viewControllerStack.pushViewController(viewControllerTwo);
	viewControllerStack.getTopViewController(); // returns viewControllerTwo

-----

### willPushViewController(viewController) {#willPushViewController}

Tells this view controller it's about to push a view controller.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The view controller to be pushed.

-----

### didPushViewController(viewController) {#didPushViewController}

Tells the view controller it pushed a view controller.

Override this method to provide your own implementation.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The pushed view controller.

-----

### willPopViewController(viewController) {#willPopViewController}

Tells the view controller it's about to pop a view controller.

Override this method to provide your own implementation.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The view controller to be popped.

-----

### didPopViewController(viewController) {#didPopViewController}

Tells the view controller it popped a view controller.

Override this method to provide your own implementation.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The popped view controller.
