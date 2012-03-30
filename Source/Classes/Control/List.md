Moobile.List
================================================================================

##### Extends [Moobile.Control](../Control/Control.md)

Provides a list control.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var list = new Moobile.List([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The list group's element, element id or html string.
`options` *Optional* | Object  | The list group's options, see below.
`name`    *Optional* | String  | The list group's name.

#### Options:

Name           | Type    | Description
-------------- | ------- | -----------
`className`    | String  | The list group's extended CSS class name, defaults to `null`.
`styleName`    | String  | The list group's default style, defaults to `null`.
`tagName`      | String  | The list group's element tag name, defaults to `ul`.

#### Generates:

	<ul class="list"></div>

#### Note:

List items can be added to the list by adding elements with the `list-item` data-role attribute:

	<ul data-role="list"></div>
		<li data-role="list-item">Item 1</li>
		<li data-role="list-item">Item 2</li>
		<li data-role="list-item">Item 3</li>
		<li data-role="list-item">Item 4</li>
	</div>

#### Defined roles:

Name   | Description
------ | -----------
`list` | Defines an element acting as a list. Use the `data-list` property to specify a subclass instead.

Events {#events}
--------------------------------------------------------------------------------

### select

Fired when a button is selected.

#### Arguments

Name     | Type                                    | Description
-------- | --------------------------------------- | -----------
`button` | [Moobile.Button](../Control/Button.md)  | The button that was selected.

### deselect

Fired when a button is deselected.

#### Arguments

Name     | Type                                    | Description
-------- | --------------------------------------- | -----------
`button` | [Moobile.Button](../Control/Button.md)  | The button that was deselected.

Members {#members}
--------------------------------------------------------------------------------

This class does not define additional members.

Methods {#methods}
--------------------------------------------------------------------------------

### setSelectedItem(selectedItem) {#setSelectedItem}

Selects the specified item and deselect the currently selected item if any. You can also clear the selected item by specifying `null` instead of an item.

This methods fires the `deselect` and `select` events.

#### Parameters:

Name           | Type                                       | Description
-------------- | ------------------------------------------ | -----------
`selectedItem` | [Moobile.ListItem](../Control/ListItem.md) | The selected item or `null` to clear the selection.

#### Returns:

- [Moobile.List](../Control/List.md) This Moobile.List instance.

-----

### getSelectedItem() {#getSelectedItem}

Returns the selected item.

#### Returns:

- [Moobile.ListItem](../Control/ListItem.md) The selected item or `null` if no items are selected.

-----

### setSelectedItemIndex(index) {#setSelectedItemIndex}

Selects an item using a specified index, `0` being the first item in the list. Specifying an index that matches no buttons will clear the selection.

#### Parameters:

Name    | Type   | Description
------- | ------ | -----------
`index` | Number | The selected item index.

#### Returns:

- [Moobile.List](../Control/List.md) This Moobile.List instance.

-----

### getSelectedItemIndex() {#getSelectedItemIndex}

Returns the selected item index.

#### Returns:

- `Number` The selected item index or `-1` if no items are selected.

-----

### clearSelectedItem() {#clearSelectedItem}

Unselects the selected item.

#### Returns:

- [Moobile.List](../Control/List.md) This Moobile.List instance.

-----

### addItem(item, where) {#addItem}

Adds the specified item at the `top` or `bottom` of this list. If `where` is unspecified, the item will be added at the bottom of this list.

#### Parameters:

Name               | Type                                       | Description
------------------ | ------------------------------------------ | -----------
`item`             | [Moobile.ListItem](../Control/ListItem.md) | The item.
`where` *Optional* | String                                     | The item's location, either `top` or `bottom`, defaults to `bottom`.

#### Returns:

- [Moobile.List](../Control/List.md) This Moobile.List instance.

-----

### addItemAfter(item, after) {#addItemAfter}

Adds the specified item after an item from this list.

#### Parameters:

Name     | Type                                       | Description
-------- | ------------------------------------------ | -----------
`button` | [Moobile.ListItem](../Control/ListItem.md) | The item.
`after`  | [Moobile.ListItem](../Control/ListItem.md) | The item will be placed after this item.

#### Returns:

- [Moobile.List](../Control/List.md) This Moobile.List instance.

-----

### addItemBefore(item, before) {#addItemBefore}

Adds the specified item before an item from this list.

#### Parameters:

Name     | Type                                       | Description
-------- | ------------------------------------------ | -----------
`button` | [Moobile.ListItem](../Control/ListItem.md) | The item.
`before` | [Moobile.ListItem](../Control/ListItem.md) | The item will be placed before this item.

#### Returns:

- [Moobile.List](../Control/List.md) This Moobile.List instance.

-----

### getItem(name) {#getItem}

Returns an item that matching the specified name.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The item's name to search for.

#### Returns:

- [Moobile.ListItem](../Control/ListItem.md) The item or `null` if no items were found with the name.

-----

### getItemAt(index) {#getItemAt}

Return an item at a specified index.

#### Parameters:

Name    | Type   | Description
------- | ------ | -----------
`index` | Number | The item's index.

#### Returns:

- [Moobile.ListItem](../Control/ListItem.md) The item or `null` if no items were found at the index.

-----

### removeItem(item, destroy) {#removeItem}

Removes an item.

#### Parameters:

Name      | Type                                       | Description
--------- | ------------------------------------------ | -----------
`item`    | [Moobile.ListItem](../Control/ListItem.md) | The item to remove.
`destroy` | Boolean                                    | Whether to destroy the item upon removal.

#### Returns:

- [Moobile.List](../Control/List.md) This Moobile.List instance.

-----

### removeAllItems() {#removeAllItems}

Removes all items.

Name      | Type     | Description
--------- | -------- | -----------
`destroy` | Boolean  | Whether to destroy the item upon removal.

#### Returns:

- [Moobile.List](../Control/List.md) This Moobile.List instance.
