Moobile.Alert
================================================================================

##### Extends [Moobile.Component](../Component/Component.md)

Provides a modal alert dialog.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var alert = new Moobile.Alert([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The alert's element, element id or html string.
`options` *Optional* | Object  | The alert's options, see below.
`name`    *Optional* | String  | The alert's name.

#### Options:

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The alert's extended CSS class name, defaults to `null`.
`styleName` | String | The alert's default style, defaults to `null`.
`tagName`   | String | The alert's element tag name, defaults to `div`.
`layout`    | String | The alert's button layout, either `vertical` or `horizontal`, defaults to `horizontal`.

#### Generates:

	<div class="alert">
		<div class="overlay"></div>
		<div class="alert-box">
			<div class="alert-header">
				<span class="text alert-title">Lorem</span>
			</div>
			<div class="alert-content">
				<span class="text alert-message">Lorem ipsum dolor sit amet</span>
			</div>
			<div class="alert-footer">
				<div class="button is-default">
					<span class="text button-label">OK</span>
				</div>
			</div>
		</div>
	</div>

#### Subclassing Notes:

This class overrides the following method:

- `willBuild`: Call the parent method at the `top` of your implementation if you override this method.
- `destroy` : Call the parent method at the `bottom` of your implementation if you override this method.
- `didAddChildComponent`: Call the parent method at the `top` of your implementation if you override this method.
- `didRemoveChildComponent`: Call the parent method at the `top` of your implementation if you override this method.
- `willShow`: Call the parent method at the `top` of your implementation if you override this method.
- `didHide`: Call the parent method at the `top` of your implementation if you override this method.

#### Examples:

##### Creating an alert inside a `Moobile.ViewController`

	var alert = new Moobile.Alert();
	alert.setTitle('Title');
	alert.setMessage('Message');
	alert.showAnimated();

#### Note:

You don't need to manually add this component to another component to show it. It will be automatically added to the window if it has no parent.

-----

Members {#members}
--------------------------------------------------------------------------------

### boxElement {#boxElement}

The element that wraps this alert's header, content and footer elements.

#### Type:

- `Element`

-----

### contentElement {#contentElement}

The element that contains this alert's message.

#### Type:

- `Element`

-----

### headerElement {#headerElement}

The element that contains this alert's title.

#### Type:

- `Element`

-----

### footerElement {#footerElement}

The element that contains this alert's buttons.

#### Type:

- `Element`

-----

### overlay {#overlay}

The component that covers the current view.

#### Type:

- `Moobile.Overlay`

Methods {#methods}
--------------------------------------------------------------------------------

### setTitle(title) {#setTitle}

Sets the title using either a string or a [Moobile.Text](../Control/Text.md) instance. When provided with a string, this method creates a `Moobile.Text` object and assign the given string as its text.

#### Parameters:

Name    | Type  | Description
------- | ----- | -----------
`title` | Mixed | The title as a string or a `Moobile.Text` instance.

#### Returns:

- `Moobile.Alert` This Moobile.Alert instance.

#### Examples:

##### Setting the label using a string:

	var alert = new Moobile.Alert();
	alert.setTitle('Moo');

##### Setting the label using a [Moobile.Text](../Control/Text.md) instance

	var alert = new Moobile.Alert();
	alert.setTitle(new Moobile.Text().setText('Moo'));

#### Note:

The CSS class `alert-title-empty` is added to the root element when the title is empty.

-----

### getTitle() {#getTitle}

Returns the title.

#### Returns:

- [Moobile.Text](../Control/Text.md) The title.

#### Example:

	var alert = new Moobile.Alert();
	alert.setTitle('Moo');
	alert.getTitle(); // returns a Moobile.Text instance

-----

### setMessage(message) {#setMessage}

Sets the message using either a string or a [Moobile.Text](../Control/Text.md) instance. When provided with a string, this method creates a `Moobile.Text` object and assign the given string as its text.

#### Parameters:

Name      | Type  | Description
--------- | ----- | -----------
`message` | Mixed | The message as string or a `Moobile.Text` instance.

#### Returns:

- `Moobile.Alert` This Moobile.Alert instance.

#### Examples:

##### Setting the message using a string:

	var alert = new Moobile.Alert();
	alert.setMessage('Moo');

##### Setting the message using a [Moobile.Text](../Control/Text.md) instance

	var alert = new Moobile.Alert();
	alert.setMessage(new Moobile.Text().setText('Moo'));

#### Note:

The CSS class `alert-message-empty` is added to the root element when the message is empty.

-----

### getMessage() {#getMessage}

Returns the message.

#### Returns:

- [Moobile.Text](../Control/Text.md) The message.

#### Examples:

	var alert = new Moobile.Alert();
	alert.setMessage('Moo');
	alert.getMessage(); // returns a Moobile.Text instance

-----

### addButton(button, [where]) {#addButton}

Adds the specified button at the `top` or `bottom` of this alert's footer. The button may be a string. In this case, this method will create a [Moobile.Button](../Control/Button.md) instance and set the specified string as its label.

#### Parameters:

Name               | Type   | Description
------------------ | ------ | -----------
`button`           | Mixed  | The button as a string or a [Moobile.Button](../Control/Button.md) instance.
`where` *Optional* | String | The button's location, either `top` or `bottom`, defaults to `bottom`.

#### Returns:

- `Moobile.Alert` This Moobile.Alert instance.

#### Examples:

	var alert = new Moobile.Alert();
	alert.addButton(new Moobile.Button().setLabel('OK'));

-----

### addButtonAfter(button, after) {#addButtonAfter}

Adds the specified button after a button from this alert. The button may be a string. In this case, this method will create a [Moobile.Button](../Control/Button.md) instance and set the specified string as its label.

#### Parameters:

Name     | Type                                   | Description
-------- | -------------------------------------- | -----------
`button` | Mixed                                  | The button as a string or a [Moobile.Button](../Control/Button.md) instance.
`after`  | [Moobile.Button](../Control/Button.md) | The button will be placed after this button.

#### Returns:

- `Moobile.Alert` This Moobile.Alert instance.

#### Example:

	var alert = new Moobile.Alert();
	var buttonOne = new Moobile.Button();
	var buttonTwo = new Moobile.Button();
	alert.addButton(buttonOne);
	alert.addButtonAfter(buttonTwo, buttonOne); // buttonTwo is after buttonOne

-----

### addButtonBefore(button, before) {#addButtonBefore}

Adds the specified button before a button from this alert. The button may be a string. In this case, this method will create a [Moobile.Button](../Control/Button.md) instance and set the specified string as its label.

#### Parameters:

Name     | Type                                   | Description
-------- | -------------------------------------- | -----------
`button` | Mixed                                  | The button as a string or a [Moobile.Button](../Control/Button.md) instance.
`after`  | [Moobile.Button](../Control/Button.md) | The button will be placed before this button.

#### Returns:

- `Moobile.Alert` This Moobile.Alert instance.

#### Example:

	var alert = new Moobile.Alert();
	var buttonOne = new Moobile.Button();
	var buttonTwo = new Moobile.Button();
	alert.addButton(buttonOne);
	alert.addButtonBefore(buttonTwo, buttonOne); // buttonTwo is before buttonOne

-----

### getButtons() {#getButtons}

Returns all the buttons in this alert.

#### Returns:

- `Array` An array of all the buttons in this alert.

#### Example:

	var alert = new Moobile.ButtonGroup();
	var buttonOne = new Moobile.Button();
	var buttonTwo = new Moobile.Button();
	alert.addButton(buttonOne);
	alert.addButton(buttonTwo);
	alert.getButtons(); // returns [buttonOne, buttonTwo]

-----

### getButton(name) {#getButton}

Returns a button that matches the specified name.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The name of the button to search for.

#### Returns:

- [Moobile.Button](../Control/Button.md) The button or `null` if no buttons were found with the name.

#### Example:

	var alert = new Moobile.Alert();
	var buttonOne = new Moobile.Button(null, null, 'me');
	alert.addButton(buttonOne);
	alert.getButton('me'); // returns buttonOne

-----

### getButtonAt(index) {#getButtonAt}

Return a button at a specified index.

#### Parameters:

Name    | Type   | Description
------- | ------ | -----------
`index` | Number | The index location of the button.

#### Returns:

- [Moobile.Button](../Control/Button.md) The button or `null` if no buttons were found at the index.

#### Example:

	var alert = new Moobile.ButtonGroup();
	var buttonOne = new Moobile.Button();
	var buttonTwo = new Moobile.Button();
	alert.addButton(buttonOne);
	alert.addButton(buttonTwo);
	alert.getButtonAt(0); // returns buttonOne

-----

### removeButton(button, [destroy]) {#removeButton}

Removes a button.

#### Parameters:

Name                 | Type                                   | Description
-------------------- | -------------------------------------- | -----------
`button`             | [Moobile.Button](../Control/Button.md) | The button to remove.
`destroy` *Optional* | Boolean                                | Whether to destroy the button upon removal.

#### Returns:

- `Moobile.Alert` This Moobile.Alert instance.

#### Example:

	var alert = new Moobile.Alert();
	var buttonOne = new Moobile.Button();
	var buttonTwo = new Moobile.Button();
	alert.addButton(buttonOne);
	alert.addButton(buttonTwo);
	alert.removeButton(buttonOne); // the button group contains only buttonTwo

-----

### removeAllButtons() {#removeAllButtons}

Removes all buttons.

#### Parameters:

Name                 | Type     | Description
-------------------- | -------- | -----------
`destroy` *Optional* | Boolean  | Whether to destroy the button upon removal.

#### Returns:

- `Moobile.Alert` This Moobile.Alert instance.

#### Example:

	var alert = new Moobile.Alert();
	var buttonOne = new Moobile.Button();
	var buttonTwo = new Moobile.Button();
	alert.addButton(buttonOne);
	alert.addButton(buttonTwo);
	alert.removeAllButtons(); // no buttons remains

-----

### setDefaultButton(button) {#setDefaultButton}

Sets the button that will be shown as the default button. When displayed, the default button generally have a style that differentiate it from other buttons.

#### Parameters:

Name     | Type                                   | Description
-------- | -------------------------------------- | -----------
`button` | [Moobile.Button](../Control/Button.md) | The button to set as default.

#### Returns:

- `Moobile.Alert` This Moobile.Alert instance.

#### Examples:

	var button = new Moobile.Button();
	button.setLabel('OK');
	var alert = new Moobile.Alert();
	alert.addButton(button);
	alert.setDefaultButton(button);

-----

### setDefaultButtonIndex(index) {#setDefaultButtonIndex}

Sets the index of the button that will be shown as the default button. When displayed, the default button generally have a style that differentiate it from other buttons.

#### Parameters:

Name     | Type   | Description
-------- | ------ | -----------
`button` | Number | The button index.

#### Returns:

- `Moobile.Alert` This Moobile.Alert instance.

#### Examples:

	var button = new Moobile.Button();
	button.setLabel('OK');
	var alert = new Moobile.Alert();
	alert.addButton(button);
	alert.setDefaultButtonIndex(0);

-----

### showAnimated() {#showAnimated}

Shows this alert with an animation by adding the `show-animated` CSS class to the element. Update the properties of this CSS class to customize the animation.

#### Returns:

- `Moobile.Alert` This Moobile.Alert instance.

-----

### hideAnimated() {#hideAnimated}

Hides this alert with an animation by adding the `hide-animated` CSS class to the element. Update the properties of this CSS class to customize the animation.

#### Returns:

- `Moobile.Alert` This Moobile.Alert instance.
