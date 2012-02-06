Moobile.WindowController
================================================================================

##### Extends [Moobile.ViewController](ViewController/ViewController.md)

Provides a view controller that manages a window.

Initialization {#initialization}
--------------------------------------------------------------------------------

Methods {#methods}
--------------------------------------------------------------------------------

### setRootViewController(rootViewController)

Sets the root view controller.

This method will set the view controller at the root of the view
controller hierarchy. There can be only one root view controller at
time meaning setting a new root view controller when there is an
existing one will destroy the existing one.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`rootViewController` *Optional* | [Moobile.ViewController](ViewController/ViewController.md) | The root view controller.

#### Returns:

- [Moobile.WindowController](Window/WindowController.md) This window controller.


-----

### getRootViewController()

Returns the root view controller.

This method will return the view controller at the root of the view
controller hierarchy. There can be only one root view controller at time
meaning setting a new root view controller when there is an existing one
will destroy the existing one.


#### Returns:

- [Moobile.ViewController](ViewController/ViewController.md) The root view controller.


-----


Members {#members}
--------------------------------------------------------------------------------

### [Moobile.ViewController](ViewController/ViewController.md) rootViewController

The root view controller.

-----


Events {#events}
--------------------------------------------------------------------------------