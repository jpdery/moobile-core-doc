Moobile.ButtonGroup
================================================================================

##### Extends *[Moobile.Control](Control/Control.md)*

Provides a button group control.

Initialization {#initialiation}
--------------------------------------------------------------------------------

Methods {#methods}
--------------------------------------------------------------------------------

### setSelectedButton(selectedButton)

Sets the selected button.

This method will select the given button and deselect the current
selected button if any. You can also clear the selected button by
passing `null` as parameter.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`selectedButton` *Optional* | [Moobile.Button](Control/Button.md) | The selected button or `null` to clear
                               the selection.

#### Returns:

- [ButtonGroup](Control/ButtonGroup.md) This button group.


-----

### getSelectedButton()

Returns the selected button.


#### Returns:

- [Moobile.Button](Control/Button.md) The selected button or `null` if no buttons were
                 selected.


-----

### setSelectedButtonIndex(index)

Sets the selected button index.

This method will select a button using its index, 0 being the first
button in the list. Passing an index that matches no buttons will
clear the selection.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`index` *Optional* | Number | The selected button index.

#### Returns:

- [ButtonGroup](Control/ButtonGroup.md) This button group.


-----

### getSelectedButtonIndex()

Returns the selected button index.


#### Returns:

- Number The selected button index or `-1` if no buttons were
                 selected.


-----

### clearSelectedButton()

Clear the selected button.


#### Returns:

- [ButtonGroup](Control/ButtonGroup.md) This button group.


-----

### addButton(button, where, context)

Adds a button.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`button` *Optional* |  |
`where` *Optional* |  |
`context` *Optional* |  |


-----

### getButton(name)

Returns a button.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`name` *Optional* |  |


-----

### removeButton(button)

Removes a button.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`button` *Optional* |  |


-----

### removeAllButtons()

Removes all buttons.



-----


Members {#members}
--------------------------------------------------------------------------------

### [Moobile.Button](Control/Button.md) selectedButton

The selected button.

-----

### Number selectedButtonIndex

The selected button index.

-----

### Object options

The class options.

-----


Events {#events}
--------------------------------------------------------------------------------