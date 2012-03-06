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
`options` *Optional* | Object  | The view controller stack's options, see below.
`name`    *Optional* | String  | The view controller stack's name.

#### Options:

This class does not defines options at the moment.

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

-----

### popViewController() {#popViewController}

Removes the top view controller using the same view transition that was used to push it and destroy it.

#### Returns:

- *[Moobile.ViewControllerStack](../ViewController/ViewControllerStack.md)* This Moobile.ViewControllerStack instance.

-----

### popViewControllerUntil(viewController) {#popViewControllerUntil}

Pops view controllers until a specified view controller is reached.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The view controller to pop to.

#### Returns:

- *[Moobile.ViewControllerStack](../ViewController/ViewControllerStack.md)* This Moobile.ViewControllerStack instance.

-----

### getTopViewController() {#getTopViewController}

Returns the current view controller.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* This Moobile.ViewControllerStack instance.

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

Events {#events}
--------------------------------------------------------------------------------

This class does not fire events at the moment.