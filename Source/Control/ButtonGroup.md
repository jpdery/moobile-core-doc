Moobile.ButtonGroup
================================================================================

##### Extends *[Moobile.Control](../Control/Control.md)*

Provides a control that groups buttons together and make sure only one is selected at time.

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

	<div class="button-group"></div>

#### Note:

Buttons can be added to the button group by adding elements with the `button` data-role attribute:

	<div data-role="button-group">
		<div data-role="button">Button 1</div>
		<div data-role="button">Button 2</div>
		<div data-role="button">Button 3</div>
		<div data-role="button">Button 4</div>
	</div>

#### Defined roles:

Name           | Description
-------------- | -----------
`button-group` | Defines the element that act as a button group. Use the `data-button-group` property to specify a subclass instead.

Events {#events}
--------------------------------------------------------------------------------

### select

Fired when a button is selected.

#### Arguments

Name     | Type                                    | Description
-------- | --------------------------------------- | -----------
`button` | [Moobile.Button](../Control/Button.md)  | The button that was selected.

### deselect

Fired when a button is deselected.

#### Arguments

Name     | Type                                    | Description
-------- | --------------------------------------- | -----------
`button` | [Moobile.Button](../Control/Button.md)  | The button that was deselected.

Members {#members}
--------------------------------------------------------------------------------

This class does not define additional members.

Methods {#methods}
--------------------------------------------------------------------------------

### setSelectedButton(selectedButton) {#setSelectedButton}

Selects the specified button and deselect the currently selected button if any. You can also clear the selected button by specifying `null` instead of a button.

This methods fires the `deselect` and `select` events.

#### Parameters:

Name             | Type                                   | Description
---------------- | -------------------------------------- | -----------
`selectedButton` | [Moobile.Button](../Control/Button.md) | The selected button or `null` to clear the selection.

#### Returns:

- [Moobile.ButtonGroup](../Control/ButtonGroup.md) This Moobile.ButtonGroup instance.

-----

### getSelectedButton() {#getSelectedButton}

Returns the selected button.

#### Returns:

- [Moobile.Button](../Control/Button.md) The selected button or `null` if no buttons are selected.

-----

### setSelectedButtonIndex(index) {#setSelectedButtonIndex}

Selects a button using a specified index, `0` being the first button in the list. Specifying an index that matches no buttons will clear the selection.

#### Parameters:

Name    | Type   | Description
------- | ------ | -----------
`index` | Number | The selected button index.

#### Returns:

- [Moobile.ButtonGroup](../Control/ButtonGroup.md) This Moobile.ButtonGroup instance.

-----

### getSelectedButtonIndex() {#getSelectedButtonIndex}

Returns the index of the selected button or `-1` if no buttons are selected.

#### Returns:

- `Number` The selected button index or `-1` if no buttons are selected.

-----

### clearSelectedButton() {#clearSelectedButton}

Unselects the selected button.

#### Returns:

- [Moobile.ButtonGroup](../Control/ButtonGroup.md) This Moobile.ButtonGroup instance.

-----

### addButton(button, [where]) {#addButton}

Adds the specified button at the `top` or `bottom` of this button group. If `where` is unspecified, the button will be added at the bottom of this button group.

#### Parameters:

Name               | Type                                   | Description
------------------ | -------------------------------------- | -----------
`button`           | [Moobile.Button](../Control/Button.md) | The button.
`where` *Optional* | String                                 | The button's location, either `top` or `bottom`, defaults to `bottom`.

#### Returns:

- [Moobile.ButtonGroup](../Control/ButtonGroup.md) This Moobile.ButtonGroup instance.

-----

### addButtonAfter(button, after) {#addButtonAfter}

Adds the specified button after a button from this button group.

#### Parameters:

Name     | Type                                   | Description
-------- | -------------------------------------- | -----------
`button` | [Moobile.Button](../Control/Button.md) | The button.
`after`  | [Moobile.Button](../Control/Button.md) | The button will be placed after this button.

#### Returns:

- [Moobile.ButtonGroup](../Control/ButtonGroup.md) This Moobile.ButtonGroup instance.

-----

### addButtonBefore(button, before) {#addButtonBefore}

Adds the specified button before a button from this button group.

#### Parameters:

Name     | Type                                   | Description
-------- | -------------------------------------- | -----------
`button` | [Moobile.Button](../Control/Button.md) | The button.
`after`  | [Moobile.Button](../Control/Button.md) | The button will be placed before this button.

#### Returns:

- [Moobile.ButtonGroup](../Control/ButtonGroup.md) This Moobile.ButtonGroup instance.

-----

### getButton(name) {#getButton}

Returns a button that matching the specified name.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The button's name to search for.

#### Returns:

- [Moobile.Button](../Control/Button.md) The button or `null` if no buttons were found with the name.

-----

### getButtonAt(index) {#getButtonAt}

Return a button at a specified index.

#### Parameters:

Name    | Type   | Description
------- | ------ | -----------
`index` | Number | The button's index.

#### Returns:

- [Moobile.Button](../Control/Button.md) The button or `null` if no buttons were found at the index.

-----

### removeButton(button, [destroy]) {#removeButton}

Removes a button.

#### Parameters:

Name      | Type                                   | Description
--------- | -------------------------------------- | -----------
`button`  | [Moobile.Button](../Control/Button.md) | The button to remove.
`destroy` | Boolean                                | Whether to destroy the button upon removal.

#### Returns:

- [Moobile.ButtonGroup](../Control/ButtonGroup.md) This Moobile.ButtonGroup instance.

-----

### removeAllButtons() {#removeAllButtons}

Removes all buttons.

#### Parameters:

Name      | Type     | Description
--------- | -------- | -----------
`destroy` | Boolean  | Whether to destroy the button upon removal.

#### Returns:

- [Moobile.ButtonGroup](../Control/ButtonGroup.md) This Moobile.ButtonGroup instance.
