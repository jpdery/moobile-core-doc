Moobile.ListItem
================================================================================

##### Extends *[Moobile.Control](../Control/Control.md)*

Provides a list item control.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var item = new Moobile.ListItem([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The list item's element, element id or html string.
`options` *Optional* | Object  | The list item's options, see below.
`name`    *Optional* | String  | The list item's name.

#### Options:

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The list item's extended CSS class name, defaults to `null`.
`styleName` | String | The list item's default style, defaults to `null`.
`tagName`   | String | The list item's element tag name, defaults to `li`.

#### Generates:

	<li class="list-item">Lorem</li>

#### Defined roles:

Name        | Description
----------- | -----------
`list-item` | Defines an element acting as a list item. Use the `data-list-item` property to specify a subclass instead.
`label`     | Defines an element acting as a list item label. If unspecified, the contents of the button's element will act as its label.
`image`     | Defines an element acting as a list item image.
`detail`    | Defines an element acting as a list item detail text.

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

- [Moobile.ListItem](../Control/ListItem.md) This Moobile.ListItem instance

-----

### getLabel() {#getLabel}

Returns the label.

#### Returns:

- [Moobile.Text](../Control/Text.md) The label.

-----

### setImage(image) {#setImage}

Sets the image using either a string or a `Moobile.Image` instance. When provided with a string, this methods creates a `Moobile.Image` object and assign the given string as its source.

#### Parameters:

Name    | Type  | Description
------- | ----- | -----------
`image` | Mixed | The image as a string or a `Moobile.Image` instance.

#### Returns:

- [Moobile.ListItem](../Control/ListItem.md) This Moobile.ListItem instance

-----

### getImage() {#getImage}

Returns the image.

#### Returns:

- [Moobile.Image](../Control/Image.md) The image.

-----

### setDetail(detail) {#setDetail}

Sets the detail text using either a string or a `Moobile.Text` instance. When provided with a string, this methods creates a `Moobile.Text` object and assign the given string as its text.

#### Parameters:

Name     | Type  | Description
-------- | ----- | -----------
`detail` | Mixed | The detail text as a string or a `Moobile.Text` instance.

#### Returns:

- [Moobile.ListItem](../Control/ListItem.md) This Moobile.ListItem instance

-----

### getDetail() {#getDetail}

Returns the detail label.

#### Returns:

- [Moobile.Text](../Control/Text.md) The detail label.

Styles {#styles}
--------------------------------------------------------------------------------

#### checked

[Todo:Image]

#### disclosed

[Todo:Image]

#### detailed

[Todo:Image]
