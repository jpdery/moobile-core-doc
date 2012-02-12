Moobile.Button
================================================================================

##### Extends *[Moobile.Control](Control/Control.md)*

Provides a button control.

Initialization {#initialization}
--------------------------------------------------------------------------------

#### Syntax:

	var button = new Moobile.Button([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The Element, element id or string.
`options` *Optional* | Object  | The options.
`name`    *Optional* | String  | The name.

#### Element:

	<div class="button">
		<div class="text label"></div>
	</div>

#### Roles:

Name    | Type  | Description
------- | ----- | -----------
`label` | Mixed | The label as a string or a `Moobile.Text` object.

Methods {#methods}
--------------------------------------------------------------------------------

### setLabel(label) {#setLabel}

Sets the label using either a string or a `Moobile.Text` object. When provided with a string, this methods creates a `Moobile.Text` object and assign the given string as its text.

#### Parameters:

Name    | Type  | Description
------- | ----- | -----------
`label` | Mixed | The label as a string or a `Moobile.Text` object.

#### Returns:

- [Moobile.Button](Control/Button.md) This button.

-----

### getLabel() {#getLabel}

Returns the label.

#### Returns:

- [Moobile.Text](Control/Text.md) The label.

-----

Members {#members}
--------------------------------------------------------------------------------

### [Moobile.Text](Control/Text.md) label {#label}

This button's label.

Events {#events}
--------------------------------------------------------------------------------