Moobile.Bar
================================================================================

##### Extends [Moobile.Control](../Control/Control.md)

Provides a bar control that's usually positionned at the top of bottom of a view. The bar itself is not meant to contain components such as buttons or text, instead it has a [Moobile.BarItem](../Control/BarItem.md) control which may contain these components.

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
`className` | String | The bar's extended CSS class name, defaults to `null`.
`styleName` | String | The bar's default style, defaults to `null`.
`tagName`   | String | The bar's element tag name, defaults to `div`.

#### Generates:

	<div class="bar">
		<div data-role="item" class="bar-item"></div>
	</div>

#### Defined roles:

Name  | Description
----- | -----------
`bar` | Defines an element acting as a [Moobile.BarItem](../Control/BarItem.md) control. Use the `data-bar` property to specify a subclass instead.

#### Examples:

Creating a [Moobile.Bar](../Control/Bar.md) control using the `data-role` attribute of an element:

	<div data-role="bar"></div>

Creating a [Moobile.Bar](../Control/Bar.md) control using the `data-role` attribute of an element and specifying a subclass:

	<div data-role="bar" data-bar="MyBarClass"></div>

Creating a [Moobile.Bar](../Control/Bar.md) control specifying the element that will act as its [Moobile.BarItem](../Control/BarItem.md) control.

	<div data-role="bar">
		<div data-role="bar-item"></div>
	</div>

#### Notes:

Upon initialization, this control creates a [Moobile.BarItem](../Control/BarItem.md) control using the bar element's content. For instance, if you define a [Moobile.Bar](../Control/Bar.md) control like this:

	<div data-role="bar">
		<div class="element-1"></div>
		<div class="element-2"></div>
	</div>

It will become this:

	<div data-role="bar">
		<div data-role="item" class="bar-item">
			<div class="element-1"></div>
			<div class="element-2"></div>
		</div>
	</div>

If you wish to put elements before and/or after the [Moobile.Bar](../Control/Bar.md) control's element, you will have to specify which element acts as the [Moobile.BarItem](../Control/BarItem.md) control's element:

	<div data-role="bar">
		<div class="element-1"></div>
		<div data-role="item" class="bar-item"></div>
		<div class="element-2"></div>
	</div>

Events {#events}
--------------------------------------------------------------------------------

This class does not define additional events.

Members {#members}
--------------------------------------------------------------------------------

This class does not define additional members.

Methods {#methods}
--------------------------------------------------------------------------------

### setItem(item) {#setItem}

Sets this bar's [Moobile.BarItem](../Control/BarItem.md) control.

#### Parameters:

Name   | Type                                     | Description
------ | ---------------------------------------- | -----------
`item` | [Moobile.BarItem](../Control/BarItem.md) | The bar item.

#### Returns:

- [Moobile.Bar](../Control/Bar.md) This bar.

-----

### getItem() {#getItem}

Returns this bar's [Moobile.BarItem](../Control/BarItem.md) control.

#### Returns:

- [Moobile.BarItem](../Control/BarItem.md) The bar item.

Styles {#styles}
--------------------------------------------------------------------------------

### default style

[TODO: Image]

### dark

[TODO: Image]
