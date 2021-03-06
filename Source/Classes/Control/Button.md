Moobile.Button
================================================================================

##### Extends [Moobile.Control](../Control/Control.md)

Provides a simple button control. The presentation of button is specific to its container. For instance, a button within a [Moobile.Bar](../Control/Bar.md) will look different from a button within an usual component.

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
`className` | String | The button's extended CSS class name, defaults to `null`.
`styleName` | String | The button's default style, defaults to `null`.
`tagName`   | String | The button's element tag name, defaults to `div`.

#### Generates:

	<div class="button">
		<span data-role="label" class="text button-label"></span>
	</div>

#### Notes:

Upon initialization, this control creates its label with a [Moobile.Text](../Control/Text.md) instance using this button element's content. For instance, if you create a button like this:

	<div data-role="button">
		<div class="element-one"></div>
		<div class="element-two"></div>
	</div>

The result will be:

	<div data-role="button" class="button">
		<div data-role="label" class="button-label">
			<div class="element-one"></div>
			<div class="element-two"></div>
		</div>
	</div>

If you wish to put elements outside of the button's label, you will have to specify which element has the `label` role:

	<div data-role="button">
		<div class="element-one"></div>
		<div data-role="label"></div>
		<div class="element-two"></div>
	</div>

#### Subclassing Notes:

This class overrides the following method:

- `willBuild`: Call the parent method at the `top` of your implementation if you override this method.
- `destroy`  : Call the parent method at the `bottom` of your implementation if you override this method.

#### Defined roles:

Name     | Description                                             | Applies to              | Note
-------- | ------------------------------------------------------- | ----------------------- | ----
`button` | Defines an element acting as a `Moobile.Button` control | All components          | Use the `data-button` attribute to specify a subclass instead
`label`  | Defines the element acting as the button's label        | Moobile.Button controls | If omitted, the contents of this button's element will become its label.

#### Examples:

##### Specifying an element that acts a button control using the `data-role` attribute:

	<div data-role="button"></div>

##### Specifying an element that acts a button control subclass using the `data-role` attribute:

	<div data-role="button" data-button="MyButton"></div>

##### Specifying an element that acts a button control and the element that acts as its label:

	<div data-role="button">
		<div data-role="label"></div>
	</div>

Methods {#methods}
--------------------------------------------------------------------------------

### setLabel(label) {#setLabel}

Sets the label using either a string or a [Moobile.Text](../Control/Text.md) instance. When provided with a string, this method creates a `Moobile.Text` object and assign the given string as its text.

#### Parameters:

Name    | Type  | Description
------- | ----- | -----------
`label` | Mixed | The label as a string or a [Moobile.Text](../Control/Text.md) instance.

#### Returns:

- `Moobile.Button` This Moobile.Button instance.

#### Examples:

##### Setting the label using a string:

	var button = new Moobile.Button();
	button.setLabel('Moo');

##### Setting the label using a [Moobile.Text](../Control/Text.md) instance

	var button = new Moobile.Button();
	button.setLabel(new Moobile.Text().setText('Moo'));

#### Note:

The CSS class `button-label-empty` is added to the root element when the label is empty.

-----

### getLabel() {#getLabel}

Returns the label.

#### Returns:

- [Moobile.Text](../Control/Text.md) The label.

#### Example:

	var button = new Moobile.Button();
	button.setLabel('Moo');
	button.getLabel(); // returns a Moobile.Text instance

Styles {#styles}
--------------------------------------------------------------------------------

### active {#active-style}

<img src="../../assets/classes/Control/button-style-active.png" class="component-style" />

This style will only be applied for a button within a [Moobile.Bar](../Control/Bar.md) control.

### warning {#warning-style}

<img src="../../assets/classes/Control/button-style-warning.png" class="component-style" />

This style will only be applied for a button within a [Moobile.Bar](../Control/Bar.md) control.

### back {#back-style}

<img src="../../assets/classes/Control/button-style-back.png" class="component-style" />

This style will only be applied for a button within a [Moobile.Bar](../Control/Bar.md) control.

### forward {#forward-style}

<img src="../../assets/classes/Control/button-style-forward.png" class="component-style" />

This style will only be applied for a button within a [Moobile.Bar](../Control/Bar.md) control.
