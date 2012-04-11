Moobile.List
================================================================================

##### Extends [Moobile.Control](../Control/Control.md)

Provides a list control that handles list items.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var list = new Moobile.List([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The list's element, element id or html string.
`options` *Optional* | Object  | The list's options, see below.
`name`    *Optional* | String  | The list's name.

#### Options:

Name           | Type    | Description
-------------- | ------- | -----------
`className`    | String  | The list's extended CSS class name, defaults to `null`.
`styleName`    | String  | The list's default style, defaults to `null`.
`tagName`      | String  | The list's element tag name, defaults to `ul`.

#### Generates:

	<ul class="list"></div>

#### Note:

List item can be added to the list by adding elements with the `list-item` `data-role` attribute:

	<ul data-role="list"></div>
		<li data-role="list-item">Item 1</li>
		<li data-role="list-item">Item 2</li>
		<li data-role="list-item">Item 3</li>
		<li data-role="list-item">Item 4</li>
	</div>

#### Subclassing Notes:

This class overrides the following method:

- `willBuild`: Call the parent method at the `top` of your implementation if you override this method.
- `destroy`  : Call the parent method at the `bottom` of your implementation if you override this method.
- `didAddChildComponent`: Call the parent method at the `top` of your implementation if you override this method.
- `didRemoveChildComponent`: Call the parent method at the `top` of your implementation if you override this method.

#### Defined roles:

Name   | Description                                           | Applies to     | Note
------ | ----------------------------------------------------- | -------------- | ----
`list` | Defines an element acting as a `Moobile.List` control | All components | Use the `data-list` attribute to specify a subclass instead

#### Examples:

##### Specifying an element that acts a list control using the `data-role` attribute:

	<ul data-role="list"></ul>

##### Specifying an element that acts a list subclass using the `data-role` attribute:

	<ul data-role="list" data-list="MyList"></ul>

Events {#events}
--------------------------------------------------------------------------------

### select

Fired when a list item is selected.

#### Arguments

Name     | Type                                    | Description
-------- | --------------------------------------- | -----------
`item`   | [Moobile.Button](../Control/ListItem.md)  | The selected list item.

### deselect

Fired when a list-item is deselected.

#### Arguments

Name     | Type                                    | Description
-------- | --------------------------------------- | -----------
`item`   | [Moobile.Button](../Control/ListItem.md)  | The deselected list item.

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

#### Example:

	var list  = new Moobile.List();
	var itemOne = new Moobile.ListItem();
	var itemTwo = new Moobile.ListItem();
	list.addButton(itemOne);
	list.addButton(itemTwo);
	list.setSelectedItem(itemOne); // selects the first item

-----

### getSelectedItem() {#getSelectedItem}

Returns the selected item.

#### Returns:

- [Moobile.ListItem](../Control/ListItem.md) The selected item or `null` if no items are selected.

#### Example:

	var list  = new Moobile.List();
	var itemOne = new Moobile.ListItem();
	var itemTwo = new Moobile.ListItem();
	list.addButton(itemOne);
	list.addButton(itemTwo);
	list.setSelectedItem(itemOne);
	list.getSelectedItem(); // returns itemOne

-----

### setSelectedItemIndex(index) {#setSelectedItemIndex}

Selects an item using a specified index, `0` being the first item in the list. Specifying an index that matches no buttons will clear the selection.

#### Parameters:

Name    | Type   | Description
------- | ------ | -----------
`index` | Number | The selected item index.

#### Returns:

- [Moobile.List](../Control/List.md) This Moobile.List instance.

#### Example:

	var list  = new Moobile.List();
	var itemOne = new Moobile.ListItem();
	var itemTwo = new Moobile.ListItem();
	list.addButton(itemOne);
	list.addButton(itemTwo);
	list.setSelectedItemIndex(0);

-----

### getSelectedItemIndex() {#getSelectedItemIndex}

Returns the selected item index.

#### Returns:

- `Number` The selected item index or `-1` if no items are selected.

#### Example:

	var list  = new Moobile.List();
	var itemOne = new Moobile.ListItem();
	var itemTwo = new Moobile.ListItem();
	list.addButton(itemOne);
	list.addButton(itemTwo);
	list.setSelectedItemIndex(0);
	list.getSelectedItemInde(); // returns 0

-----

### clearSelectedItem() {#clearSelectedItem}

Unselects the selected item.

#### Returns:

- [Moobile.List](../Control/List.md) This Moobile.List instance.

#### Example:

	var list  = new Moobile.List();
	var itemOne = new Moobile.ListItem();
	var itemTwo = new Moobile.ListItem();
	list.addButton(itemOne);
	list.addButton(itemTwo);
	list.setSelectedItemIndex(0);
	list.clearSelectedItem();

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

#### Example:

	var list = new Moobile.List();
	var itemOne = new Moobile.ListItem();
	list.addItem(itemOne);

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

#### Example:

	var list = new Moobile.List();
	var itemOne = new Moobile.ListItem();
	var itemTwo = new Moobile.ListItem();
	list.addItem(itemOne);
	list.addItemAfter(itemTwo, itemOne); // itemTwo is after itemOne

-----

### addItemBefore(item, before) {#addItemBefore}

Adds the specified item before an item from this list.

#### Parameters:

Name     | Type                                       | Description
-------- | ------------------------------------------ | -----------
`item`   | [Moobile.ListItem](../Control/ListItem.md) | The item.
`before` | [Moobile.ListItem](../Control/ListItem.md) | The item will be placed before this item.

#### Returns:

- [Moobile.List](../Control/List.md) This Moobile.List instance.

#### Example:

	var list = new Moobile.List();
	var itemOne = new Moobile.ListItem();
	var itemTwo = new Moobile.ListItem();
	list.addItem(itemOne);
	list.addItemBefore(itemTwo, itemOne); // itemTwo is before itemOne

-----

### getItem(name) {#getItem}

Returns an item that matches the specified name.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The item's name to search for.

#### Returns:

- [Moobile.ListItem](../Control/ListItem.md) The item or `null` if no items were found with the name.

#### Example:

	var list = new Moobile.List();
	var itemOne = new Moobile.ListItem(null, null, 'me');
	list.addItem(itemOne);
	list.getItem('me'); // returns itemOne

-----

### getItemAt(index) {#getItemAt}

Return an item at a specified index.

#### Parameters:

Name    | Type   | Description
------- | ------ | -----------
`index` | Number | The item's index.

#### Returns:

- [Moobile.ListItem](../Control/ListItem.md) The item or `null` if no items were found at the index.

#### Example:

	var list = new Moobile.List();
	var itemOne = new Moobile.ListItem();
	var itemTwo = new Moobile.ListItem();
	list.addItem(itemOne);
	list.addItem(itemTwo);
	list.getItemAt(0); // returns itemOne

-----

### removeItem(item, destroy) {#removeItem}

Removes an item.

#### Parameters:

Name      | Type                                       | Description
--------- | ------------------------------------------ | -----------
`item`    | [Moobile.ListItem](../Control/ListItem.md) | The item to remove.
`destroy` | Boolean                                    | Whether or not to destroy the item upon removal.

#### Returns:

- [Moobile.List](../Control/List.md) This Moobile.List instance.

#### Example:

	var list = new Moobile.List();
	var itemOne = new Moobile.ListItem();
	var itemTwo = new Moobile.ListItem();
	list.addItem(itemOne);
	list.addItem(itemTwo);
	list.removeItem(itemOne); // the list contains only itemTwo

-----

### removeAllItems() {#removeAllItems}

Removes all items.

Name      | Type     | Description
--------- | -------- | -----------
`destroy` | Boolean  | Whether or not to destroy the item upon removal.

#### Returns:

- [Moobile.List](../Control/List.md) This Moobile.List instance.

#### Example:

	var list = new Moobile.List();
	var itemOne = new Moobile.ListItem();
	var itemTwo = new Moobile.ListItem();
	list.addItem(itemOne);
	list.addItem(itemTwo);
	list.removeAllItems(itemOne); // no items remains
