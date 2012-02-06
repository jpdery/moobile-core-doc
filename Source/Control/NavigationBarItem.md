Moobile.NavigationBarItem
================================================================================

##### Extends *[Moobile.BarItem](Control/BarItem.md)*

Provides a navigation bar item control.

Initialization {#initialiation}
--------------------------------------------------------------------------------

**Creates the element**

	<div class="item">
		<div class="title"></div>
	</div>

Methods {#methods}
--------------------------------------------------------------------------------

### setTitle(title)

Sets the title.

This method will set the title using either a string or `Moobile.Text` object. When provided with a string, this methods creates a `Moobile.Text` object and assign the given string as its text.

#### Parameters:

Name    | Type  | Description
------- | ----- | -----------
`title` | Mixed | The title as a string or a `Moobile.Text` object.

#### Returns:

- *[Moobile.NavigationBarItem](Control/NavigationBarItem.md)* This navigation bar item.

-----

### getTitle()

Returns the title.

#### Returns:

- *[Moobile.Text](Control/Text.js)* The title.

-----

### addLeftBarButton(button)

Adds a button at the left of the title.

#### Parameters:

Name                 | Type                                      | Description
-------------------- | ----------------------------------------- | -----------
`button`             | [Moobile.BarButton](Control/BarButton.md) | The button.

-----

### addRightBarButton(button)

Adds a button at the right of the title.

#### Parameters:

Name                 | Type                                      | Description
-------------------- | ----------------------------------------- | -----------
`button`             | [Moobile.BarButton](Control/BarButton.md) | The button.

-----

### getBarButton(name)

Returns a bar button.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The button's name.

-----

### removeBarButton(item)

Removes a bar button.

#### Parameters:

Name   | Type                                      | Description
------ | ----------------------------------------- | -----------
`item` | [Moobile.BarButton](Control/BarButton.md) | The bar button to remove.

-----

### removeAllBarButtons()

Removes all bar buttons.

-----

Members {#members}
--------------------------------------------------------------------------------

### [Moobile.Text](Control/Text.md) title

The title.

-----


Events {#events}
--------------------------------------------------------------------------------