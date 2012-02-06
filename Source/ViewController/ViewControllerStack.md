Moobile.ViewControllerStack
================================================================================

##### Extends [Moobile.ViewController](ViewController/ViewController.md)

Provides a controller that manages a view stack.

Initialization {#initialiation}
--------------------------------------------------------------------------------

Methods {#methods}
--------------------------------------------------------------------------------

### pushViewController(viewController, viewTransition)

Pushes a view controller into the stack.

This method will add a new view controller at the end of the stack and
present it using a given view transition. The given transition will be
stored into the view controller so the same will be used when the
view controller will be popped.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewController` *Optional* | [Moobile.ViewController](ViewController/ViewController.md) | The view controller.
`viewTransition` *Optional* | viewTransition | The view transition.

#### Returns:

- [Moobile.ViewController](ViewController/ViewController.md) This view controller.


-----

### popViewController()

Pops the top view controller.

This method will pop the top view controller using the same view
transition that was used to push it and destroys the popped view
controller once the transition finishes.


#### Returns:

- [Moobile.ViewController](ViewController/ViewController.md) This view controller.


-----

### popViewControllerUntil(viewController)

Pops view controllers until a given view controller is reached.

This method will pop view controllers until the given view controller is
reached and destroy popped view controllers when the transition
finishes.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewController` *Optional* | [Moobile.ViewController](ViewController/ViewController.md) | The view controller to pop to.

#### Returns:

- [Moobile.ViewController](ViewController/ViewController.md) This view controller.


-----

### getTopViewController()

Returns the top view controller.


#### Returns:

- [Moobile.ViewController](ViewController/ViewController.md) The top view controller.


-----

### isInTransition()

Indicates whether this view controller is currently pusing or popping
a child view controller using a transition.


#### Returns:

- Boolean Whether this view controller is currently pushing or
                  popping a child view controller using a transition.


-----

### willPushViewController(viewController)

Tells this view controller it's about to push a view controller.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewController` *Optional* | [Moobile.ViewController](ViewController/ViewController.md) | The view controller.


-----

### didPushViewController(viewController)

Tells the view controller it pushed a view controller.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewController` *Optional* | [Moobile.ViewController](ViewController/ViewController.md) | The view controller.


-----

### willPopViewController(viewController)

Tells the view controller it's about to pop a view controller.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewController` *Optional* | [Moobile.ViewController](ViewController/ViewController.md) | The view controller.


-----

### didPopViewController(viewController)

Tells the view controller it popped a view controller.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewController` *Optional* | [Moobile.ViewController](ViewController/ViewController.md) | The view controller.


-----


Members {#members}
--------------------------------------------------------------------------------

### Boolean inTransition

Whether a child view is in a transition.

-----

### [Moobile.ViewController](ViewController/ViewController.md) topViewController

The top view controller.

-----


Events {#events}
--------------------------------------------------------------------------------