Moobile.List
================================================================================
##### Extends *[Moobile.Control](Docs/Control/Control.md)*, Implements `Events`, `Options`, `Class.Binds`

Provides a list control.

Initialization
--------------------------------------------------------------------------------

Methods
--------------------------------------------------------------------------------

### setSelectedItem(selectedItem)

Sets the selected item.

This method will select the given item and deselect the current selected
item if any. You can also clear the selected item by passing `null` as
parameter.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`selectedItem` *Optional* | [ListItem](Docs/Control/ListItem.md) | The selected item or `null` to clear the
                               selection.

#### Returns:

- [List](Docs/Control/List.md) This list.


-----

### getSelectedItem()

Returns the selected item.


#### Returns:

- [ListItem](Docs/Control/ListItem.md) The selected item or `null` if no items were
                   selected.


-----

### setSelectedItemIndex(index)

Sets the selected item index.

This method will select an item using its index, 0 being the first item
in the list. Passing an index that matches no items will clear the
selection.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`index` *Optional* | Number | The selected item index.

#### Returns:

- [List](Docs/Control/List.md) This list.


-----

### getSelectedItemIndex()

Returns the selected item index.


#### Returns:

- Number The selected item index or `-1` if no items were
                 selected.


-----

### clearSelectedItem()

Clear the selected button.


#### Returns:

- [List](Docs/Control/List.md) This list.


-----

### addItem(item, where, context)

Adds an item.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`item` *Optional* |  |
`where` *Optional* |  |
`context` *Optional* |  |


-----

### getItem(name)

Returns an item.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`name` *Optional* |  |


-----

### removeItem(item)

Removes an item.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`item` *Optional* |  |


-----

### removeAllItems()

Removes all buttons.



-----


Members
--------------------------------------------------------------------------------

### [ListItem](Docs/Control/ListItem.md) selectedItem

The selected item.

-----

### Number selectedItemIndex

The selected item index.

-----

### Object options

The class options.

-----


Events
--------------------------------------------------------------------------------