Moobile.NavigationBar
================================================================================

##### Extends [Moobile.Bar](../Control/Bar.md)

Provides a navigation bar control.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var navigationBar = new Moobile.NavigationBar([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The navigation bar's element, element id or html string.
`options` *Optional* | Object  | The navigation bar's options, see below.
`name`    *Optional* | String  | The navigation bar's name.

#### Options:

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The navigation bar's default CSS class name, defaults to `null`.
`styleName` | String | The navigation bar's default style, defaults to `null`.
`tagName`   | String | The navigation bar's element tag name, defaults to `div`.

#### Generates:

	<div class="bar navigation-bar">
		<div data-role="item" class="bar-item navigation-bar-item">
			<div class="bar-title">
				<div data-role="title" class="text title"></div>
			</div>
		</div>
	</div>

#### Defined roles:

Name             | Description
---------------- | -----------
`navigation-bar` | Defines the element that act as a button. Use the `data-navigation-bar` property to specify a subclass instead.

Methods {#methods}
--------------------------------------------------------------------------------

This class does not define additional methods.

Members {#members}
--------------------------------------------------------------------------------

This class does not define additional members.

Events {#events}
--------------------------------------------------------------------------------

This class does not define additional events.

Styles {#styles}
--------------------------------------------------------------------------------

This control does not define any styles beside the styles inherited from [Moobile.Bar](../Control/Bar.md).