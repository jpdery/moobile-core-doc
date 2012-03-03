Moobile.Alert
================================================================================

##### Extends [Moobile.Control](../Control/Control.md)

Provides a modal alert control.

Initialization {#initialization}
--------------------------------------------------------------------------------

Methods {#methods}
--------------------------------------------------------------------------------

### setTitle(title)

Set the title using either a string or an instance of a `Label`. When provided with a string, this methods creates a `Label` instance and assign the given string as its text.

#### Parameters:

Name    | Type  | Description
------- | ----- | -----------
`title` | Mixed | The title as a string or a `Label` instance.

#### Returns:

- [Moobile.Alert](../Control/Alert.md) This alert.

-----

### getTitle()

Returns the title.


#### Returns:

- [Moobile.Text](../Control/Text.md) The title.


-----

### setMessage(message)

Sets the message.

This method will set the message using either a string or an instance of
a `Text`. When provided with a string, this methods creates a `Text`
instance and assign the given string as its text.

#### Parameters:

Name      | Type  | Description
--------- | ----- | -----------
`message` | Mixed | The message as string or a `Text` instance.

#### Returns:

- [Moobile.Alert](../Control/Alert.md) This alert.

-----

### getMessage()

Returns the message.

#### Returns:

- [Moobile.Text](../Control/Text.md) The message.

-----

### addButton(button)

Adds the given button at the bottom of the element that contains buttons. The presentation of the buttons, either vertical or horizontal is defined by setting the proper style to this alert.

#### Parameters:

Name     | Type                        | Description
-------- | --------------------------- | -----------
`button` | [Moobile.Button](../Control/Button.md) | The button.

#### Returns:

- [Moobile.Alert](../Control/Alert.md) This alert.

-----

### showAnimated()

Shows the overlay with an animation by adding the `show-animated` CSS class to the element. Update the properties of this CSS class to customize the animation.

#### Returns:

- *[Moobile.Overlay](../Control/Moobile.Overlay.md)* This overlay.

-----

### hideAnimated()

Hides the overlay with an animation by adding the `hide-animated` CSS class to the element. Update the properties of this CSS class to customize the animation.

#### Returns:

- *[Moobile.Overlay](../Control/Moobile.Overlay.md)* This overlay.

-----

Members {#members}
--------------------------------------------------------------------------------

### [Moobile.Text](../Control/Text.md) title

The title.

-----

### [Moobile.Text](../Control/Text.md) message

The message.

-----

### *Array* buttons

The buttons.

-----

### *Element* dialog

The dialog element.

-----

### *Element* dialogHeader

The dialog header element.

-----

### *Element* dialogFooter

The dialog footer element.

-----

### *Element* dialogContent

The dialog content element.

-----

### *[Moobile.Overlay](../Control/Moobile.Overlay.md)* overlay

The alert overlay.

-----

Events {#events}
--------------------------------------------------------------------------------

### buttonclick