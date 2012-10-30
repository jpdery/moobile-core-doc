Moobile.ListItem
================================================================================

##### Extends [Moobile.Control](../Control/Control.md)

Provides a list item control used inside a [Moobile.List](../Control/List.md) control.

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

	<li class="list-item">
		<img data-role="image" class="list-item-image" />
		<div data-role="label" class="list-item-label"></div>
		<div data-role="detail" class="list-item-detail"></div>
	</li>

#### Notes:

Upon initialization, this control creates its label with a [Moobile.Text](../Control/BarItem.md) instance using the list item element's content. For instance, if you create a list item like this:

	<li class="list-item">
		<div class="element-one"></div>
		<div class="element-two"></div>
	</li>

The result will be:

	<li class="list-item">
		<img data-role="image" class="list-item-image" />
		<div data-role="label" class="list-item-label">
			<div class="element-one"></div>
			<div class="element-two"></div>
		</div>
		<div data-role="detail" class="list-item-detail"></div>
	</li>

If you wish to put elements outside of the list item's label, you will have to specify which element has the `label` role:

	<li class="list-item">
		<div class="element-one"></div>
		<div data-role="label"></div>
		<div class="element-two"></div>
	</div>

#### Subclassing Notes:

This class overrides the following method:

- `willBuild`: Call the parent method at the `top` of your implementation if you override this method.
- `destroy`  : Call the parent method at the `bottom` of your implementation if you override this method.

#### Defined roles:

Name        | Description                                                                    | Applies to                                          | Note
----------- | ------------------------------------------------------------------------------ | --------------------------------------------------- | ----
`list-item` | Defines an element acting a `Moobile.ListItem` control                         | Moobile.List control                                | Use the `data-list-item` attribute to specify a subclass instead.
`header`    | Defines an element acting a `Moobile.ListItem` control with the `header` style | Moobile.List control                                | Use the `data-list-item` attribute to specify a subclass instead.
`label`     | Defines the element acting as the list item label                              | [Moobile.ListItem](../Control/ListItem.md) controls | If omitted, the contents of the list item's element will act as its label.
`image`     | Defines the element acting as the list item image                              | [Moobile.ListItem](../Control/ListItem.md) controls |
`detail`    | Defines the element acting as the list item detail text                        | [Moobile.ListItem](../Control/ListItem.md) controls |

#### Examples:

##### Specifying an element that acts a list item control using the `data-role` attribute:

	<ul data-role="list">
		<li data-role="item"></li>
	</ul>

##### Specifying an element that acts a list item control subclass using the `data-role` attribute:

	<ul data-role="list">
		<li data-role="item" data-list-item="MyListItem" />
	</ul>

Methods {#methods}
--------------------------------------------------------------------------------

### setLabel(label) {#setLabel}

Sets the label using either a string or a `Moobile.Text` instance. When provided with a string, this method creates a `Moobile.Text` object and assign the given string as its text.

#### Parameters:

Name    | Type  | Description
------- | ----- | -----------
`label` | Mixed | The label as a string or a [Moobile.Text](../Control/Text.md) instance.

#### Returns:

- `Moobile.ListItem` This Moobile.ListItem instance

#### Examples:

##### Setting the label using a string:

	var listItem = new Moobile.ListItem();
	listItem.setLabel('Moo');

##### Setting the label using a [Moobile.Text](../Control/Text.md) instance

	var listItem = new Moobile.ListItem();
	listItem.setLabel(new Moobile.Text().setText('Moo'));

#### Note:

The CSS class `list-item-label-empty` is added to the root element when the label is empty.

-----

### getLabel() {#getLabel}

Returns the label.

#### Returns:

- [Moobile.Text](../Control/Text.md) The label.

#### Example:

	var listItem = new Moobile.ListItem();
	listItem.setLabel('Moo');
	listItem.getLabel(); // returns a Moobile.Text instance

-----

### setImage(image) {#setImage}

Sets the image using either a string or a `Moobile.Image` instance. When provided with a string, this method creates a `Moobile.Image` object and assign the given string as its source.

#### Parameters:

Name    | Type  | Description
------- | ----- | -----------
`image` | Mixed | The image as a string or a [Moobile.Image](../Control/Image.md) instance.

#### Returns:

- `Moobile.ListItem` This Moobile.ListItem instance

#### Examples:

##### Setting the image using a string:

	var listItem = new Moobile.ListItem();
	listItem.setImage('path/to/an-image.png');

##### Setting the image using a [Moobile.Image](../Control/Image.md) instance

	var listItem = new Moobile.ListItem();
	listItem.setImage(new Moobile.Image().setSource('path/to/an-image.png'));

#### Note:

The CSS class `list-item-image-empty` is added to the root element when the image is empty.

-----

### getImage() {#getImage}

Returns the image.

#### Returns:

- [Moobile.Image](../Control/Image.md) The image.

#### Example:

	var listItem = new Moobile.ListItem();
	listItem.setImage('path/to/an-image.png');
	listItem.getImage(); // returns a Moobile.Image instance

-----

### setDetail(detail) {#setDetail}

Sets the detail text using either a string or a `Moobile.Text` instance. When provided with a string, this method creates a `Moobile.Text` object and assign the given string as its text.

#### Parameters:

Name     | Type  | Description
-------- | ----- | -----------
`detail` | Mixed | The detail text as a string or a `Moobile.Text` instance.

#### Returns:

- `Moobile.ListItem` This Moobile.ListItem instance

#### Examples:

##### Setting the detail text using a string:

	var listItem = new Moobile.ListItem();
	listItem.setLabel('Moo');

##### Setting the detail text using a [Moobile.Text](../Control/Text.md) instance

	var listItem = new Moobile.ListItem();
	listItem.setLabel(new Moobile.Text().setText('Moo'));

#### Note:

The CSS class `list-item-detail-empty` is added to the root element when the detail text is empty.

-----

### getDetail() {#getDetail}

Returns the detail label.

#### Returns:

- [Moobile.Text](../Control/Text.md) The detail label.

#### Example:

	var listItem = new Moobile.ListItem();
	listItem.setDetail('Moo');
	listItem.getDetail(); // returns a Moobile.Text instance

Styles {#styles}
--------------------------------------------------------------------------------

### header {#header-style}

<img src="../../assets/classes/Control/list-item-style-header.png" class="component-style" />

### checked {#checked-style}

<img src="../../assets/classes/Control/list-item-style-checked.png" class="component-style" />

### disclosed {#disclosed-style}

<img src="../../assets/classes/Control/list-item-style-disclosed.png" class="component-style" />

### detailed {#detailed-style}

<img src="../../assets/classes/Control/list-item-style-detailed.png" class="component-style" />
