Moobile.NavigationBarItem
================================================================================

##### Extends [Moobile.BarItem](../Control/BarItem.md)

Provides an extended [Moobile.BarItem](../Control/BarItem.md) that handles a title and buttons on both sides of the title.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var navigationBarItem = new Moobile.NavigationBarItem([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The navigation bar item's element, element id or html string.
`options` *Optional* | Object  | The navigation bar item's options, see below.
`name`    *Optional* | String  | The navigation bar item's name.

#### Options:

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The navigation bar item's extended CSS class name, defaults to `null`.
`styleName` | String | The navigation bar item's default style, defaults to `null`.
`tagName`   | String | The navigation bar item's element tag name, defaults to `div`.

#### Generates:

	<div data-role="item" class="bar-item navigation-bar-item">
		<div class="bar-title">
			<div data-role="title" class="text"></div>
		</div>
	</div>

#### Notes:

Upon initialization, this control creates its title with a [Moobile.Text](../Control/BarItem.md) instance using the navigation bar item element's content. For instance, if you create a navigation bar item like this:

	<div data-role="navigation-bar">
		<div data-role="item">
			<div class="element-one"></div>
			<div class="element-two"></div>
		</div>
	</div>

The result will be:

	<div data-role="navigation-bar" class="navigation-bar">
		<div data-role="item" class="navigation-bar-item">
			<div data-role="title" class="title">
				<div class="element-one"></div>
				<div class="element-two"></div>
			</div>
		</div>
	</div>

If you wish to put elements outside of the navigation bar item's title, you will have to specify which element has the `title` role:

	<div data-role="navigation-bar">
		<div data-role="item">
			<div class="element-one"></div>
			<div data-role="title"></div>
			<div class="element-two"></div>
		</div>
	</div>

#### Subclassing Notes:

This class overrides the following method:

- `willBuild`: Call the parent method at the `top` of your implementation if you override this method.
- `destroy`  : Call the parent method at the `bottom` of your implementation if you override this method.

#### Defined roles:

Name    | Description                                                          | Applies to                                                            | Note
------- | -------------------------------------------------------------------- | --------------------------------------------------------------------- | ----
`item`  | Defines an element actins as the `Moobile.NavigationBarItem` control | [Moobile.NavigationBar](../Control/Moobile.NavigationBar.md) controls | Use the `data-item` attribute to specify a subclass instead
`title` | Defines the element acting as the navigation bar item title.         | `Moobile.NavigationBarItem` controls                                  | If unspecified, the contents of the navigation bar item's element will act as its title.

#### Examples:

##### Specifying an element that acts a navigation bar item control using the `data-role` attribute:

	<div data-role="navigation-bar">
		<div data-role="item"></div>
	</div>

##### Specifying an element that acts a navigation bar item control subclass using the `data-role` attribute:

	<div data-role="navigation-bar">
		<div data-role="item" data-item="MyNavigationBarItem></div>
	</div>

Methods {#methods}
--------------------------------------------------------------------------------

### setTitle(title) {#setTitle}

Sets the title using either a string or `Moobile.Text` instance. When provided with a string, this methods creates a `Moobile.Text` object and assign the given string as its text.

#### Parameters:

Name    | Type  | Description
------- | ----- | -----------
`title` | Mixed | The title as a string or a `Moobile.Text` instance.

#### Returns:

- [Moobile.NavigationBarItem](../Control/NavigationBarItem.md) This Moobile.NavigationBarItem instance.

#### Examples:

##### Setting the title using a string:

	var navigationBar = new Moobile.NavigationBar();
	var navigationBarItem = navigationBar.getItem();
	navigationBarItem.setTitle('Moo');

##### Setting the title using a Moobile.Text instance:

	var navigationBar = new Moobile.NavigationBar();
	var navigationBarItem = navigationBar.getItem();
	navigationBarItem.setTitle(new Moobile.Text().setText('Moo'));

-----

### getTitle() {#getTitle}

Returns the title.

#### Returns:

- [Moobile.Text](../Control/Text.js) The title.

#### Example:

	var navigationBar = new Moobile.NavigationBar();
	var navigationBarItem = navigationBar.getItem();
	navigationBarItem.setTitle('Moo');
	navigationBarItem.getTitle(); // returns an instance of Moobile.Text

-----

### addLeftButton(button) {#addLeftButton}

Adds a button at the left of the title.

#### Parameters:

Name     | Type                                      | Description
-------- | ----------------------------------------- | -----------
`button` | [Moobile.Button](../Control/Button.md) | The button.

#### Returns:

- [Moobile.NavigationBarItem](../Control/NavigationBarItem.md) This Moobile.NavigationBarItem instance.

#### Example:

	var navigationBar = new Moobile.NavigationBar();
	var navigationBarItem = navigationBar.getItem();
	var buttonOne = new Moobile.Button();
	navigationBarItem.addLeftButton(button);

-----

### addRightButton(button) {#addRightButton}

Adds a button at the right of the title.

#### Parameters:

Name     | Type                                      | Description
-------- | ----------------------------------------- | -----------
`button` | [Moobile.Button](../Control/Button.md) | The button.

#### Returns:

- [Moobile.NavigationBarItem](../Control/NavigationBarItem.md) This Moobile.NavigationBarItem instance.

#### Example:

	var navigationBar = new Moobile.NavigationBar();
	var navigationBarItem = navigationBar.getItem();
	var buttonOne = new Moobile.Button();
	navigationBarItem.addRightButton(button);

-----

### getButton(name) {#getButton}

Return a button that matches the specified name.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The name of the button to search for.

#### Returns:

- [Moobile.Button](../Control/Button.md) The button or `null` if no buttons were found with the name.

#### Example:

	var navigationBar = new Moobile.NavigationBar();
	var navigationBarItem = navigationBar.getItem();
	var buttonOne = new Moobile.Button(null, null, 'me');
	navigationBarItem.addButton(buttonOne);
	navigationBarItem.getButton('me'); // returns buttonOne

-----

### removeButton(button, [destroy]) {#removeButton}

Removes a button.

#### Parameters:

Name                 | Type                                         | Description
-------------------- | -------------------------------------------- | -----------
`button`             | [Moobile.Button](../Control/Button.md)       | The button to remove.
`destroy` *Optional* | Boolean                                      | Whether or not to destroy the button upon removal.

#### Returns:

- [Moobile.NavigationBarItem](../Control/NavigationBarItem.md) This Moobile.NavigationBarItem instance.

#### Example:

	var navigationBar = new Moobile.NavigationBar();
	var navigationBarItem = navigationBar.getItem();
	var buttonOne = new Moobile.Button();
	var buttonTwo = new Moobile.Button();
	navigationBarItem.addButton(buttonOne);
	navigationBarItem.addButton(buttonTwo);
	navigationBarItem.removeButton(buttoOne); // the navigation bar item contains only buttonTow

-----

### removeAllButtons([destroy]) {#removeAllButtons}

Removes all buttons.

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`destroy` *Optional* | Boolean | Whether or not to destroy the button upon removal.

#### Returns:

- [Moobile.NavigationBarItem](../Control/NavigationBarItem.md) This Moobile.NavigationBarItem instance.

#### Example:

	var navigationBar = new Moobile.NavigationBar();
	var navigationBarItem = navigationBar.getItem();
	var buttonOne = new Moobile.Button();
	var buttonTwo = new Moobile.Button();
	navigationBarItem.addButton(buttonOne);
	navigationBarItem.addButton(buttonTwo);
	navigationBarItem.removeAllButtons(); // no buttons remains
