Moobile.BarItem
================================================================================

##### Extends [Moobile.Control](../Control/Control.md)

Provides a bar item control that will be used as the content of a [Moobile.Bar](../Control/Moobile.Bar.md) instance.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var barItem = new Moobile.BarItem([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The bar item's element, element id or html string.
`options` *Optional* | Object  | The bar item's options, see below.
`name`    *Optional* | String  | The bar item's name.

#### Options:

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The bar item's extended CSS class name, defaults to `null`.
`styleName` | String | The bar item's default style, defaults to `null`.
`tagName`   | String | The bar item's element tag name, defaults to `div`.

#### Generates:

	<div class="bar-item"></div>

#### Subclassing Notes:

Don't instantiate this class. Instead, extend it by creating subclasses for your own implementation. Look at [Moobile.NavigationBarItem](../Control/NavigationBarItem.md) for an extended `Moobile.BarItem` class.

This class overrides the following method:

- `willBuild`: Call the parent method at the `top` of your implementation if you override this method.



