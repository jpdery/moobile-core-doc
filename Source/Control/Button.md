Moobile.Button
================================================================================

##### Extends *[Moobile.Control]()*

Provides a button control.

Initialization {#initialization}
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
`className` | String | The button's default CSS class name, defaults to `null`.
`styleName` | String | The button's default style, defaults to `null`.
`tagName`   | String | The button's element tag name, defaults to `div`.

#### Generates:

	<div class="button">
		<div data-role="label" class="text label"></div>
	</div>

#### Defined roles:

Name     | Description
-------- | -----------
`button` | Defines the element that act as a button. Use the `data-button` property to specify a subclass instead.
`label`  | Defines the element that act as a button label. If unspecified, the contents of the button's element will act as its label.

Methods {#methods}
--------------------------------------------------------------------------------

### setLabel(label) {#setLabel}

Sets the label using either a string or a `Moobile.Text` object. When provided with a string, this methods creates a `Moobile.Text` object and assign the given string as its text.

#### Parameters:

Name    | Type  | Description
------- | ----- | -----------
`label` | Mixed | The label as a string or a `Moobile.Text` object.

#### Returns:

- *[Moobile.Button]()* This Moobile.Button instance.

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

- [Moobile.Text]() The label.

#### Example:

	var button = new Moobile.Button();
	button.setLabel('Lorem');

	button.getLabel(); // Returns an instance of Moobile.Text
	button.getLabel().getText(); // Returns 'Lorem';

Members {#members}
--------------------------------------------------------------------------------

### *[Moobile.Text]()* label {#label}

This button's label.

Events {#events}
--------------------------------------------------------------------------------

Events inherited from [Moobile.Control]().

Styles {#styles}
--------------------------------------------------------------------------------

This component does not define styles.
