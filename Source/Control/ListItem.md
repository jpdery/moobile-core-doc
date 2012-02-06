Moobile.ListItem
================================================================================
##### Extends *[Moobile.Control](Docs/Control/Control.md)*, Implements `Events`, `Options`, `Class.Binds`

Provides a list item control.

Initialization {#initialiation}
--------------------------------------------------------------------------------

Methods {#methods}
--------------------------------------------------------------------------------

### setImage(image)

Sets the image using either a string or a `Moobile.Image` object. When provided with a string, this methods creates a `Moobile.Image` object and assign the string as it source.

#### Parameters:

Name    | Type  | Description
------- | ----- | -----------
`image` | Mixed | The string or a `Moobile.Image` object.

#### Returns:

- *[ListItem](Docs/Control/ListItem.md)* This list item.

-----

### getImage()

Returns the image.

#### Returns:

- *[Moobile.Image](Control/Image.md)* The image.

-----

### setLabel(label)

Sets the label using either a string or a `Moobile.Text` object. When provided with a string, this methods creates a `Moobile.Text` object and assign the string as its text.

#### Parameters:

Name    | Type  | Description
------- | ----- | -----------
`label` | Mixed | The label text or a `Moobile.Text` object.

#### Returns:

- *[ListItem](Docs/Control/ListItem.md)* This list item.

-----

### getLabel()

Returns the label.

#### Returns:

- *[Moobile.Text](Control/Text.md)* The label.

-----

### setDetail(label)

Sets the detail label using either a string or a `Moobile.Text` object. When provided with a string, this methods creates a `Moobile.Text` object and assign the string as its text.

#### Parameters:

Name    | Type  | Description
------- | ----- | -----------
`label` | Mixed | The label as a string or a `Moobile.Text` object.

#### Returns:

- *[ListItem](Docs/Control/ListItem.md)* This list item.

-----

### getDetail()

Returns the detail label.

#### Returns:

- *[Moobile.Text](Control/Text.md)* The detail label.

-----

Members {#members}
--------------------------------------------------------------------------------

### *[Moobile.Image](Control/Image.md)* image

The image.

-----

### *[Moobile.Text](Control/Text.md)* label

The label.

-----

### *[Moobile.Text](Control/Text.md)* detail

The detail label.

Events {#events}
--------------------------------------------------------------------------------