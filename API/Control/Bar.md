Moobile.Bar
================================================================================

##### Extends [Moobile.Control](../Control/Control.md)

Provides a bar control used to manage a [Moobile.BarItem](../Control/BarItem.md) control.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var bar = new Moobile.Bar([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The bar's element, element id or html string.
`options` *Optional* | Object  | The bar's options, see below.
`name`    *Optional* | String  | The bar's name.

#### Options:

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The bar's default CSS class name, defaults to `null`.
`styleName` | String | The bar's default style, defaults to `null`.
`tagName`   | String | The bar's element tag name, defaults to `div`.

#### Generates:

	<div class="bar">
		<div data-role="item" class="bar-item"></div>
	</div>

#### Defined roles:

Name  | Description
----- | -----------
`bar` | Defines the element that act as a ar. Use the `data-bar` property to specify a subclass instead.

Events {#events}
--------------------------------------------------------------------------------

This class does not define additional events.

Members {#members}
--------------------------------------------------------------------------------

This class does not define additional members.

Methods {#methods}
--------------------------------------------------------------------------------

### setItem(item) {#setItem}

Sets the bar item.

#### Parameters:

Name   | Type                                     | Description
------ | ---------------------------------------- | -----------
`item` | [Moobile.BarItem](../Control/BarItem.md) | The bar item.

#### Returns:

- [Moobile.Bar](../Control/Bar.md) This bar.

-----

### getItem() {#getItem}

Returns the bar item.

#### Returns:

- [Moobile.BarItem](../Control/BarItem.md) The bar item.

Styles {#styles}
--------------------------------------------------------------------------------

### dark

[TODO: Image]
