Moobile.ViewControllerPanel
================================================================================

##### Extends [ViewController](ViewController/ViewController.md)

Provides an object used to manage a view panel.

Initialization {#initialiation}
--------------------------------------------------------------------------------

Methods {#methods}
--------------------------------------------------------------------------------

### setMainViewController(mainViewController)

Sets the main view controller.

This method will set the main view controller and add its view to the
view's main panel. There can be only one main view controller at time
meaning setting a new main view controller when there is an existing one
will destroy the existing one.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`mainViewController` *Optional* | [ViewController](ViewController/ViewController.md) | The main view controller.

#### Returns:

- [ViewControllerPanel](ViewController/ViewControllerPanel.md) This view controller panel.


-----

### getMainViewController()

Returns the main view controller.


#### Returns:

- [ViewController](ViewController/ViewController.md) The main view controller.


-----

### setSideViewController(sideViewController)

Sets the side view controller.

This method will set the side view controller and add its view to the
view's side panel. There can be only one main view controller at time
meaning setting a new side view controller when there is an existing one
will destroy the existing one.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`sideViewController` *Optional* | [ViewController](ViewController/ViewController.md) | The side view controller.

#### Returns:

- [ViewControllerPanel](ViewController/ViewControllerPanel.md) This view controller panel.


-----

### getSideViewController()

Returns the side view controller.


#### Returns:

- [ViewController](ViewController/ViewController.md) The side view controller.


-----


Members {#members}
--------------------------------------------------------------------------------

### [ViewController](ViewController/ViewController.md) mainViewController

The main view controller.

-----

### [ViewController](ViewController/ViewController.md) sideViewController

The side view controller.

-----


Events {#events}
--------------------------------------------------------------------------------