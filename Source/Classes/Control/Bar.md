Moobile.Bar
================================================================================

##### Extends [Moobile.Control](../Control/Control.md)

Provides a bar control that's usually positionned at the top of bottom of a view. The bar itself is not meant to contain components such as buttons or text; instead it has a [Moobile.BarItem](../Control/BarItem.md) control which may contain these components.

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

#### Notes:

Upon initialization, this control creates its item with a [Moobile.BarItem](../Control/BarItem.md) instance using the bar element's content. For instance, if you create a bar like this:

	<div data-role="bar">
		<div class="element-one"></div>
		<div class="element-two"></div>
	</div>

The result will be:

	<div data-role="bar" class="bar">
		<div data-role="item" class="bar-item">
			<div class="element-one"></div>
			<div class="element-two"></div>
		</div>
	</div>

If you wish to put elements outside of the bar item, you will have to specify which element has the `item` role:

	<div data-role="bar">
		<div class="element-one"></div>
		<div data-role="item"></div>
		<div class="element-two"></div>
	</div>

#### Subclassing Notes:

This class overrides the following method:

- `willBuild`: Call the parent method at the `top` of your implementation if you override this method.
- `destroy`  : Call the parent method at the `bottom` of your implementation if you override this method.

#### Defined roles:

Name  | Description                                          | Applies to      | Note
----- | ---------------------------------------------------- | --------------- | ----
`bar` | Defines an element acting as a `Moobile.Bar` control |  All components | Use the `data-bar` attribute to specify a subclass instead

#### Examples:

##### Specifying an element that acts a bar control using the `data-role` attribute:

	<div data-role="bar"></div>

##### Specifying an element that acts a bar control subclass using the `data-role` attribute:

	<div data-role="bar" data-bar="MyBar"></div>

##### Specifying an element that acts a bar control and the element that acts as its item:

	<div data-role="bar">
		<div data-role="item"></div>
	</div>

Methods {#methods}
--------------------------------------------------------------------------------

### setItem(item) {#setItem}

Sets this bar's [Moobile.BarItem](../Control/BarItem.md) control.

#### Parameters:

Name   | Type                                     | Description
------ | ---------------------------------------- | -----------
`item` | [Moobile.BarItem](../Control/BarItem.md) | The bar item.

#### Returns:

- `Moobile.Bar` This bar.

#### Example:

	var bar = new Moobile.Bar();
	var item = new Moobile.BarItem();
	bar.setItem(item);

-----

### getItem() {#getItem}

Returns this bar's [Moobile.BarItem](../Control/BarItem.md) control.

#### Returns:

- [Moobile.BarItem](../Control/BarItem.md) The bar item.

#### Example:

	var bar = new Moobile.Bar();
	bar.getItem(); // returns a Moobile.BarItem instance created automatically.

Styles {#styles}
--------------------------------------------------------------------------------

### default style

[TODO: Image]

### dark

[TODO: Image]
