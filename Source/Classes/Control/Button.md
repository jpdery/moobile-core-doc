Moobile.Button
================================================================================

##### Extends [Moobile.Control](../Control/Control.md)

Provides a button control.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var button = new Moobile.Button([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The button's element, element id or html string.
`options` *Optional* | Object  | The button's options, see below.
`name`    *Optional* | String  | The button's name.

#### Options:

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The button's second CSS class name, defaults to `null`.
`styleName` | String | The button's default style, defaults to `null`.
`tagName`   | String | The button's element tag name, defaults to `div`.

#### Generates:

	<div class="button">
		<span data-role="label" class="text label"></span>
	</div>

#### Defined roles:

Name     | Description
-------- | -----------
`button` | Defines an element acting as a button. Use the `data-button` property to specify a subclass instead.
`label`  | Defines an element acting as a button label. If unspecified, the contents of the button's element will act as its label.

Events {#events}
--------------------------------------------------------------------------------

This class does not define additional events.

Members {#members}
--------------------------------------------------------------------------------

This class does not define additional members.

Methods {#methods}
--------------------------------------------------------------------------------

### setLabel(label) {#setLabel}

Sets the label using either a string or a `Moobile.Text` instance. When provided with a string, this methods creates a `Moobile.Text` object and assign the given string as its text.

#### Parameters:

Name    | Type  | Description
------- | ----- | -----------
`label` | Mixed | The label as a string or a `Moobile.Text` instance.

#### Returns:

- [Moobile.Button](../Control/Button.md) This Moobile.Button instance.

#### Example 1: *Setting the label using a string*

	var button = new Moobile.Button();
	button.setLabel('Lorem');

#### Example 2: *Setting the label using a Moobile.Text object*

	var label = new Moobile.Text();
	label.setText('Lorem');

	var button = new Moobile.Button();
	button.setLabel(label);

-----

### getLabel() {#getLabel}

Returns the label.

#### Returns:

- [Moobile.Text](../Control/Text.md) The label.

#### Example:

	var button = new Moobile.Button();
	button.setLabel('Lorem');

	button.getLabel(); // Returns an instance of Moobile.Text
	button.getLabel().getText(); // Returns 'Lorem';

Styles {#styles}
--------------------------------------------------------------------------------

This control does not define any styles.
