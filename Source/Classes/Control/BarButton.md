Moobile.BarButton
================================================================================

##### Extends [Moobile.Button](../Control/Button.md)

Provides a button that goes into a [Moobile.Bar](../Control/Bar.md) control.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var barButton = new Moobile.BarButton([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The bar button's element, element id or html string.
`options` *Optional* | Object  | The bar button's options, see below.
`name`    *Optional* | String  | The bar button's name.

#### Options:

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The bar button's extended CSS class name, defaults to `null`.
`styleName` | String | The bar button's default style, defaults to `null`.
`tagName`   | String | The bar button's element tag name, defaults to `div`.

#### Generates:

	<div class="button bar-button">
		<div data-role="label" class="text label"></div>
	</div>

#### Defined roles:

Name         | Description
------------ | -----------
`bar-button` | Defines an element acting as a bar-button. Use the `data-bar-button` property to specify a subclass instead.

Events {#events}
--------------------------------------------------------------------------------

This class does not define additional events.

Members {#members}
--------------------------------------------------------------------------------

This class does not define additional members.

Methods {#methods}
--------------------------------------------------------------------------------

This class does not define additional methods.

Styles {#styles}
--------------------------------------------------------------------------------

#### active

[Todo:Image]

#### warning

[Todo:Image]

#### back

[Todo:Image]

#### forward

[Todo:Image]

#### dark

[Todo:Image]

#### dark-back

[Todo:Image]

#### dark-forward

[Todo:Image]
