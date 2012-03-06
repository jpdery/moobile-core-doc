Moobile.NavigationBarItem
================================================================================

##### Extends [Moobile.BarItem](../Control/BarItem.md)

Provides a navigation bar item control with a title and side buttons.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var navigationBarItem = new Moobile.NavigationBarItem([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The navigation bar item's element, element id or html string.
`options` *Optional* | Object  | The navigation bar item's options, see below.
`name`    *Optional* | String  | The navigation bar item's name.

#### Options:

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The navigation bar item's default CSS class name, defaults to `null`.
`styleName` | String | The navigation bar item's default style, defaults to `null`.
`tagName`   | String | The navigation bar item's element tag name, defaults to `div`.

#### Generates:

	<div data-role="item" class="bar-item navigation-bar-item">
		<div class="bar-title">
			<div data-role="title" class="text"></div>
		</div>
	</div>

#### Defined roles:

Name    | Description
------- | -----------
`item`  | Defines the element that act as a navigation bar item. Use the `data-item` property to specify a subclass instead.
`title` | Defines the element that act as a navigation bar item title. If unspecified, the contents of the navigation bar item's element will act as its label.

Events {#events}
--------------------------------------------------------------------------------

This class does not define additional events.

Members {#members}
--------------------------------------------------------------------------------

This class does not define additional members.

Methods {#methods}
--------------------------------------------------------------------------------

### setTitle(title) {#setTitle}

Sets the title using either a string or `Moobile.Text` instance. When provided with a string, this methods creates a `Moobile.Text` instance and assign the given string as its text.

#### Parameters:

Name    | Type  | Description
------- | ----- | -----------
`title` | Mixed | The title as a string or a `Moobile.Text` instance.

#### Returns:

- [Moobile.NavigationBarItem](../Control/NavigationBarItem.md) This Moobile.NavigationBarItem instance.

-----

### getTitle() {#getTitle}

Returns the title.

#### Returns:

- [Moobile.Text](../Control/Text.js) The title.

-----

### addLeftBarButton(button) {#addLeftBarButton}

Adds a bar button at the left of the title.

#### Parameters:

Name     | Type                                      | Description
-------- | ----------------------------------------- | -----------
`button` | [Moobile.BarButton](../Control/BarButton.md) | The button.

#### Returns:

- [Moobile.NavigationBarItem](../Control/NavigationBarItem.md) This Moobile.NavigationBarItem instance.

-----

### addRightBarButton(button) {#addRightBarButton}

Adds a bar button at the right of the title.

#### Parameters:

Name     | Type                                      | Description
-------- | ----------------------------------------- | -----------
`button` | [Moobile.BarButton](../Control/BarButton.md) | The button.

#### Returns:

- [Moobile.NavigationBarItem](../Control/NavigationBarItem.md) This Moobile.NavigationBarItem instance.

-----

### getBarButton(name) {#getBarButton}

Return a bar button that matching the specified name.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The bar button's name.

#### Returns:

- [Moobile.BarButton](../Control/BarButton.md) The bar button or `null` if no bar buttons were found with the name.

-----

### removeBarButton(button, [destroy]) {#removeBarButton}

Removes a bar button.

#### Parameters:

Name      | Type                                         | Description
--------- | -------------------------------------------- | -----------
`button`  | [Moobile.BarButton](../Control/BarButton.md) | The bar button to remove.
`destroy` | Boolean                                      | Whether to destroy the bar button upon removal.

#### Returns:

- [Moobile.NavigationBarItem](../Control/NavigationBarItem.md) This Moobile.NavigationBarItem instance.

-----

### removeAllBarButtons([destroy]) {#removeAllBarButtons}

Removes all bar buttons.

#### Parameters:

Name      | Type    | Description
--------- | ------- | -----------
`destroy` | Boolean | Whether to destroy the bar button upon removal.

#### Returns:

- [Moobile.NavigationBarItem](../Control/NavigationBarItem.md) This Moobile.NavigationBarItem instance.

Styles {#styles}
--------------------------------------------------------------------------------

This control does not define any styles.
