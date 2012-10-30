Moobile.Text
================================================================================

##### Extends [Moobile.Control](../Control/Control.md)

Provides a control that contains text and HTML.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var text = new Moobile.Text([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The text's element, element id or html string.
`options` *Optional* | Object  | The text's options, see below.
`name`    *Optional* | String  | The text's name.

#### Options:

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The text's extended CSS class name, defaults to `null`.
`styleName` | String | The text's default style, defaults to `null`.
`tagName`   | String | The text's element tag name, defaults to `span`.

#### Subclassing Notes:

This class overrides the following method:

- `willBuild`: Call the parent method at the `top` of your implementation if you override this method.

#### Generates:

	<span class="text"></span>

#### Defined roles:

Name   | Description                                           | Applies to     | Note
------ | ----------------------------------------------------- | -------------- | -----------------------------------------------------------
`text` | Defines an element acting as a `Moobile.Text` control | All components | Use the `data-text` attribute to specify a subclass instead

#### Examples:

##### Specifying an element that acts a text control using the `data-role` attribute:

	<span data-role="text"></span>

##### Specifying an element that acts a text control subclass using the `data-role` attribute:

	<span data-role="text" data-text="MyText"></span>

Methods {#methods}
--------------------------------------------------------------------------------

### setText(text)

Set the given text as the `html` property of this text's element.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`text` | String | The text content.

#### Returns:

- `Moobile.Text` This Moobile.Text instance.

#### Example:

	var text = new Moobile.Text();
	text.setText('Moo');

-----

### getText()

Return the text using this text element's `html` property.

#### Returns:

- `String` The text.

#### Example:

	var text = new Moobile.Text();
	text.setText('Moo');
	text.getText(); // returns 'Moo'

-----

### isEmpty() {#isEmpty}

Indicates whether the text value is empty.

#### Returns:

- `Boolean` whether the text value is empty.
