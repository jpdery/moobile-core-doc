Moobile.ViewControllerPanel
================================================================================

##### Extends [Moobile.ViewController](../ViewController/ViewController.md)

Provides a controller for managing two side-by-sides view controllers.

Initialization {#initialization}
--------------------------------------------------------------------------------

#### Syntax:

	var viewControllerStack = new Moobile.ViewControllerStack([options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`options` *Optional* | Object  | The view controller panel's options, see below.
`name`    *Optional* | String  | The view controller panel's name.

#### Options:

This class does not defines options at the moment.

Methods {#methods}
--------------------------------------------------------------------------------

### setMainViewController(mainViewController) {#setMainViewController}

Sets the main view controller and add its view to this view's side panel. There can be only one main view controller at a given time, meaning setting a new one will destroy the current.

#### Parameters:

Name                 | Type                                                          | Description
-------------------- | ------------------------------------------------------------- | -----------
`mainViewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The main view controller.

#### Returns:

- *[Moobile.ViewControllerPanel](../ViewController/ViewControllerPanel.md)* This Moobile.ViewControllerPanel instance.

-----

### getMainViewController() {#getMainViewController}

Returns the main view controller.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* The main view controller.

-----

### setSideViewController(sideViewController) {#setSideViewController}

Sets the side view controller and add its view to this view's side panel. There can be only one main view controller at a given time, meaning setting a new one will destroy the current.

#### Parameters:

Name                 | Type                                                          | Description
-------------------- | ------------------------------------------------------------- | -----------
`sideViewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The side view controller.

#### Returns:

- *[Moobile.ViewControllerPanel](../ViewController/ViewControllerPanel.md)* This Moobile.ViewControllerPanel instance.

-----

### getSideViewController() {#getSideViewController}

Returns the side view controller.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* The side view controller.

Events {#events}
--------------------------------------------------------------------------------

This class does not fire events at the moment.