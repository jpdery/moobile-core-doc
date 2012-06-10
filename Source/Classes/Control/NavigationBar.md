Moobile.NavigationBar
================================================================================

##### Extends [Moobile.Bar](../Control/Bar.md)

Provides an extended [Moobile.Bar](../Control/Bar.md) control that handles a [Moobile.NavigationBarItem](../Control/NavigationBarItem.md).

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
`className` | String | The navigation bar's extended CSS class name, defaults to `null`.
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

#### Notes:

Upon initialization, this control creates its item with a [Moobile.NavigationBarItem](../Control/NavigationBarItem.md) instance using the navigation bar element's content. For instance, if you create a navigation bar like this:

	<div data-role="navigation-bar">
		<div class="element-one"></div>
		<div class="element-two"></div>
	</div>

The result will be:

	<div data-role="navigation-bar" class="bar navigation-bar">
		<div data-role="item" class="bar-item navigation-bar-item">
			<div class="element-one"></div>
			<div class="element-two"></div>
		</div>
	</div>

If you wish to put elements outside of the navigation bar item, you will have to specify which element has the `item` role:

	<div data-role="navigation-bar">
		<div class="element-one"></div>
		<div data-role="item"></div>
		<div class="element-two"></div>
	</div>

#### Subclassing Notes:

This class overrides the following method:

- `willBuild`: Call the parent method at the `top` of your implementation if you override this method.

#### Defined roles:

Name             | Description                                                    | Applies to     | Note
---------------- | -------------------------------------------------------------- | -------------- | ----
`navigation-bar` | Defines an element acting as a `Moobile.NavigationBar` control | All components | Use the `data-navigation-bar` attribute to specify a subclass instead

#### Examples:

##### Specifying an element that acts a navigation bar control using the `data-role` attribute:

	<div data-role="navigation-bar"></li>

##### Specifying an element that acts a navigation bar control subclass using the `data-role` attribute:

	<div data-role="navigation-bar" data-navigation-bar="MyNavigationBar" />
