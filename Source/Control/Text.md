Moobile.Text
================================================================================

##### Extends *[Moobile.Control](Control/Control.md)*

Provides a text control.

Initialization {#initialization}
--------------------------------------------------------------------------------

#### Syntax

	var myText = new Moobile.Text([element], [options], [name]);

Methods {#methods}
--------------------------------------------------------------------------------

### setText(text)

Set the given text as the `html` property of this text's element. This text may contain HTML entities as well.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`text` | String | The text content.

#### Returns:

- *[Moobile.Text](Control/Text.md)* This text.

-----

### getText()

Return the text using this element's `html` property. The returned text may contain HTML elements.

#### Returns:

- *String* The text.
