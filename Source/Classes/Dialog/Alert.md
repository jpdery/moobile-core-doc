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

Name           | Type   | Description
-------------- | ------ | -----------
`className`    | String | The alert's extended CSS class name, defaults to `null`.
`styleName`    | String | The alert's default style, defaults to `null`.
`tagName`      | String | The alert's element tag name, defaults to `div`.
`buttonLayout` | String | The alert's button layout, either `vertical` or `horizontal`, defaults to `vertical`.

#### Generates:

	<div class="alert button-layout-vertical ">
		<div class="overlay "></div>
		<div class="alert-wrapper">
			<div class="alert-header">
				<span class="text title">Title</span>
			</div>
			<div class="alert-content">
				<span class="text message">Test</span>
			</div>
			<div class="alert-footer">
				<div class="button default">
					<span class="text button-label">Test</span>
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
	this.view.addChildComponent(alert);
	alert.setTitle('Title');
	alert.setMessage('Message');
	alert.showAnimated();

-----

Members {#members}
--------------------------------------------------------------------------------

### wrapperElement {#wrapperElement}

The element that wraps the alert's header, content and footer elements.

#### Type:

- `Element`

-----

### contentElement {#contentElement}

The element that contains the alert's message.

#### Type:

- `Element`

-----

### headerElement {#headerElement}

The element that contains the alert's title.

#### Type:

- `Element`

-----

### footerElement {#footerElement}

The element that contains the alert's buttons.

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

Sets the title using either a string or a [Moobile.Text](../Control/Moobile.Text) instance. When provided with a string, this method creates a `Moobile.Text` object and assign the given string as its text.

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

##### Setting the label using a [Moobile.Text](../Control/Moobile.Text) instance

	var alert = new Moobile.Alert();
	alert.setTitle(new Moobile.Text().setText('Moo'));

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

Sets the message using either a string or a [Moobile.Text](../Control/Moobile.Text) instance. When provided with a string, this method creates a `Moobile.Text` object and assign the given string as its text.

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

##### Setting the message using a [Moobile.Text](../Control/Moobile.Text) instance

	var alert = new Moobile.Alert();
	alert.setMessage(new Moobile.Text().setText('Moo'));

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

### addButton(button) {#addButton}

Adds the given button at the bottom of the button list.

#### Parameters:

Name     | Type                                   | Description
-------- | -------------------------------------- | -----------
`button` | [Moobile.Button](../Control/Button.md) | The button.

#### Returns:

- `Moobile.Alert` This Moobile.Alert instance.

#### Examples:

	var alert = new Moobile.Alert();
	alert.addButton(new Moobile.Button().setLabel('OK'));

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

Shows the alert with an animation by adding the `show-animated` CSS class to the element. Update the properties of this CSS class to customize the animation.

#### Returns:

- *[Moobile.Overlay](../Control/Moobile.Overlay.md)* This overlay.

-----

### hideAnimated() {#hideAnimated}

Hides the alert with an animation by adding the `hide-animated` CSS class to the element. Update the properties of this CSS class to customize the animation.

#### Returns:

- *[Moobile.Overlay](../Control/Moobile.Overlay.md)* This overlay.
