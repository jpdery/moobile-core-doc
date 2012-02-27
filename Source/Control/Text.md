Moobile.Text
================================================================================

##### Extends [Moobile.Control](../Control/Control.md)

Provides a control that contains text and / or text with HTML.

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
`className` | String | The text's default CSS class name, defaults to `null`.
`styleName` | String | The text's default style, defaults to `null`.
`tagName`   | String | The text's element tag name, defaults to `span`.

#### Generates:

	<div class="text"></div>

#### Defined roles:

Name     | Description
-------- | -----------
`text` | Defines the element that act as a text. Use the `data-text` property to specify a subclass instead.

Events {#events}
--------------------------------------------------------------------------------

This class does not define additional events.

Members {#members}
--------------------------------------------------------------------------------

This class does not define additional members.

Methods {#methods}
--------------------------------------------------------------------------------

### setText(text)

Set the given text as the `html` property of this text's element.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`text` | String | The text content.

#### Returns:

- [Moobile.Text](../Control/Text.md) This Moobile.Text instance.

-----

### getText()

Return the text using this element's `html` property. The returned text may contain HTML elements.

#### Returns:

- `String` The text.
