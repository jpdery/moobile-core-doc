Moobile.BarButtonGroup
================================================================================

##### Extends [Moobile.ButtonGroup](../Control/ButtonGroup.md)

Provides a control that groups bar buttons together and make sure only one is selected at time.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var buttonGroup = new Moobile.ButtonGroup([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The button group's element, element id or html string.
`options` *Optional* | Object  | The button group's options, see below.
`name`    *Optional* | String  | The button group's name.

#### Options:

Name           | Type    | Description
-------------- | ------- | -----------
`className`    | String  | The button group's default CSS class name, defaults to `null`.
`styleName`    | String  | The button group's default style, defaults to `null`.
`tagName`      | String  | The button group's element tag name, defaults to `div`.
`deselectable` | Boolean | Whether a button can be deselected, defaults to `false`.

#### Generates:

	<div class="button-group bar-button-group"></div>

#### Defined roles:

Name               | Description
------------------ | -----------
`bar-button-group` | Defines the element that act as a bar button group. Use the `data-bar-button-group` property to specify a subclass instead.

Events {#events}
--------------------------------------------------------------------------------

This class does not define additional events.

Members {#members}
--------------------------------------------------------------------------------

This class does not define additional members.

Methods {#methods}
--------------------------------------------------------------------------------

This class does not define additional methods.
