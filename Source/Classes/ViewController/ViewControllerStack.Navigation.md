Moobile.ViewControllerStack.Navigation
================================================================================

##### Extends [Moobile.ViewControllerStack](../ViewController/ViewControllerStack.md)

Provides a view controller stack which automatically creates a navigation bar for the view

Initialization {#initialization}
--------------------------------------------------------------------------------

#### Syntax:

	var navigationViewControllerStack = new Moobile.ViewControllerStack.Navigation([options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`options` *Optional* | Object  | The navigation view controller stack's options, see below.
`name`    *Optional* | String  | The navigation view controller stack's name.

#### Options:

Name              | Type    | Description
----------------- | ------- | -----------
`backButton`      | Boolean | Whether it needs to create a back button when necessary.
`backButtonLabel` | String  | The back button label, defaults to `Back`.
