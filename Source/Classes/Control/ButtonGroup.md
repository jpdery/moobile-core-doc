Moobile.ButtonGroup
================================================================================

##### Extends *[Moobile.Control](../Control/Control.md)*

Provides a control that group buttons and handle the selection of these buttons.

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
`className`    | String  | The button group's extended CSS class name, defaults to `null`.
`styleName`    | String  | The button group's default style, defaults to `null`.
`tagName`      | String  | The button group's element tag name, defaults to `div`.
`deselectable` | Boolean | Whether a button can be deselected, defaults to `false`.

#### Generates:

	<div class="button-group"></div>

#### Note:

Buttons can be added to the button group by adding elements with the `button` `data-role` attribute:

	<div data-role="button-group">
		<div data-role="button">Button 1</div>
		<div data-role="button">Button 2</div>
		<div data-role="button">Button 3</div>
		<div data-role="button">Button 4</div>
	</div>

#### Subclassing Notes:

This class overrides the following method:

- `willBuild`: Call the parent method at the `top` of your implementation if you override this method.
- `destroy`  : Call the parent method at the `bottom` of your implementation if you override this method.

#### Defined roles:

Name           | Description
-------------- | -----------
`button-group` | Defines an element acting as a button group. Use the `data-button-group` property to specify a subclass instead.

#### Examples:

##### Creating a button group using the `data-role` attribute of an element:

	<div data-role="button-group"></div>

##### Creating a button group using the `data-role` attribute of an element and specifying a subclass:

	<div data-role="button-group" data-button="MyButtonGroupClass"></div>

##### Creating a button group and adding buttons:

	<div data-role="button">
		<div data-role="button">Button 1</div>
		<div data-role="button">Button 2</div>
	</div>

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

#### Example:

	var buttonGroup = new Moobile.ButtonGroup();
	var button1 = new Moobile.Button();
	var button2 = new Moobile.Button();
	buttonGroup.addButton(button1);
	buttonGroup.addButton(button2);
	buttonGroup.setSelectedButton(button1); // selects the first button

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

#### Example:

	var buttonGroup = new Moobile.ButtonGroup();
	var button1 = new Moobile.Button();
	var button2 = new Moobile.Button();
	buttonGroup.addButton(button1);
	buttonGroup.addButton(button2);
	buttonGroup.setSelectedButtonIndex(0); // selects the first button

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

#### Example:

	var buttonGroup = new Moobile.ButtonGroup();
	var button = new Moobile.Button();
	buttonGroup.addButton(button);

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

#### Example:

	var buttonGroup = new Moobile.ButtonGroup();
	var button1 = new Moobile.Button();
	var button2 = new Moobile.Button();
	var button3 = new Moobile.Button();
	buttonGroup.addButton(button1);
	buttonGroup.addButton(button2);
	buttonGroup.addButtonAfter(button3, button1); // button3 is between button1 and button2

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

#### Example:

	var buttonGroup = new Moobile.ButtonGroup();
	var button1 = new Moobile.Button();
	var button2 = new Moobile.Button();
	var button3 = new Moobile.Button();
	buttonGroup.addButton(button1);
	buttonGroup.addButton(button2);
	buttonGroup.addButtonBefore(button3, button2); // button3 is between button1 and button2

-----

### getButton(name) {#getButton}

Returns a button that matching the specified name.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The name of the button to search for.

#### Returns:

- [Moobile.Button](../Control/Button.md) The button or `null` if no buttons were found with the name.

-----

### getButtonAt(index) {#getButtonAt}

Return a button at a specified index.

#### Parameters:

Name    | Type   | Description
------- | ------ | -----------
`index` | Number | The index location of the button.

#### Returns:

- [Moobile.Button](../Control/Button.md) The button or `null` if no buttons were found at the index.

-----

### removeButton(button, [destroy]) {#removeButton}

Removes a button.

#### Parameters:

Name      | Type                                   | Description
--------- | -------------------------------------- | -----------
`button`  | [Moobile.Button](../Control/Button.md) | The button to remove.
`destroy` | Boolean                                | Whether or not to destroy the button upon removal.

#### Returns:

- [Moobile.ButtonGroup](../Control/ButtonGroup.md) This Moobile.ButtonGroup instance.

-----

### removeAllButtons() {#removeAllButtons}

Removes all buttons.

#### Parameters:

Name      | Type     | Description
--------- | -------- | -----------
`destroy` | Boolean  | Whether or not to destroy the button upon removal.

#### Returns:

- [Moobile.ButtonGroup](../Control/ButtonGroup.md) This Moobile.ButtonGroup instance.
