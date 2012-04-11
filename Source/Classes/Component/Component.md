Moobile.Component
================================================================================

##### Extends [Moobile.EventFirer](../Event/EventFirer.md)

Provides the base class for most visual objects the user will interact with. A component encapsulates a DOM element and provides methods to handle a hierarchy of components.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var component = new Moobile.Component([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The component's element, element id or html string.
`options` *Optional* | Object  | The component's options, see below.
`name`    *Optional* | String  | The component's name.

#### Options:

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The component's extended CSS class name, defaults to `null`.
`styleName` | String | The component's default style, defaults to `null`.
`tagName`   | String | The component's element tag name, defaults to `div`.

#### Notes:

Upon initialization, a component builds its hierarchy using the `element` given to the constructor. It will looks for elements with the `data-role` attribute and execute their definitions recursively. The example section shows how to create components with complex hierarchies.

#### Subclassing Notes:

Don't instantiate this class. Instead, extend it by creating subclasses for your own implementation.

#### Examples:

##### Creating an empty component:

	var component = new Moobile.Component();

##### Creating a component with a single child:

	var element =
		'<div>' +
			'<div data-role="button" data-name="my-button">Button</div>' +
		'</div>';
	var component = new Moobile.Component(element);
	component.getChildComponent('my-button'); // returns a Moobile.Button instance

##### Creating a component with multiple children:

	var element =
		'<div>' +
			'<img data-role="image" data-name="my-image" />' +
			'<div data-role="button" data-name="my-button-1">Button 1</div>' +
			'<div data-role="button" data-name="my-button-2">Button 2</div>' +
		'</div>';
	var component = new Moobile.Component(element);
	component.getChildComponent('my-image'); // returns a Moobile.Image instance
	component.getChildComponent('my-button-1'); // returns a Moobile.Button instance
	component.getChildComponent('my-button-2'); // returns a Moobile.Button instance

##### Creating a component with a complex hierarchy:

	var element =
		'<div>' +
			'<div data-role="button" data-name="my-button">' +
				'<img data-role="image" data-name="my-button-image" />' +
				'<div data-role="label">Button 2</div>' +
			'</div>' +
		'</div>';
	var component = new Moobile.Component(element);
	component.getChildComponent('my-button-image'); // returns null! The image is a child of the button.
	component.getChildComponent('my-button').getChildComponent('my-button-image'); // returns a Moobile.Image instance.

##### Creating a component that passes options using element attributes

	var element =
		'<div data-option-style-name="moo" data-option-some-option="value">' +
		'</div>';
	var component = new Moobile.Component(element);

Events {#events}
--------------------------------------------------------------------------------

### ready

Fired when this component becomes ready.

A component is *ready* when its hierarchy is assigned to a window and therefore in the DOM. Upon being *ready*, a component can access its window and perform tasks such as measuring.

-----

### tap

Fired when this component receives a `tap` event.

-----

### tapstart

Fired when this component receives a `tapstart` event.

-----

### tapmove

Fired when this component receives a `tapmove` event.

-----

### tapend

Fired when this component receives a `tapend` event.

-----

### touchstart

Fired when this component receives a `touchstart` event.

-----

### touchmove

Fired when this component receives a `touchmove` event.

-----

### touchend

Fired when this component receives a `touchend` event.

-----

### pinch

Fired when this component receives a `pinch` event.

-----

### swipe

Fired when this component receives a `swipe` event.

-----

### show

Fired when this component becomes visible.

-----

### hide

Fired when this component becomes hidden.

Members {#members}
--------------------------------------------------------------------------------

### element {#element}

The element managed by the component.

#### Type

 - `Element`

-----

### options {#options}

The component's options.

#### Type

 - `Object`

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The component's extended CSS class name, defaults to `null`.
`styleName` | String | The component's default style, defaults to `null`.
`tagName`   | String | The component's element tag name, defaults to `div`.

Methods {#methods}
--------------------------------------------------------------------------------

### addChildComponent(component, [where]) {#addChildComponent}

Adds the specified component at the `top` or `bottom` of this component. If `where` is unspecified, the component will be added at the bottom.

#### Parameters:

Name               | Type                                           | Description
------------------ | ---------------------------------------------- | -----------
`component`        | [Moobile.Component](../Component/Component.md) | The component.
`where` *Optional* | String                                         | The component's location, either `top` or `bottom`, defaults to `bottom`.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

#### Examples:

##### Adding a component at the top:

	var componentOne = new Moobile.Component('<div class="component-one"><span>Lorem</span></div>')
	var componentTwo = new Moobile.Component('<div class="component-two"></div>');
	componentOne.addChildComponent(componentTwo, 'top');

Resulting element:

	<div class="component-one">
		<div class="component-two"></div>
		<span>Lorem</span>
	</div>

##### Adding a component at the botom:

	var componentOne = new Moobile.Component('<div class="component-one"><span>Lorem</span></div>')
	var componentTwo = new Moobile.Component('<div class="component-two"></div>');
	componentOne.addChildComponent(componentTwo, 'bottom');

Resulting element:

	<div class="component-one">
		<span>Lorem</span>
		<div class="component-two"></div>
	</div>

-----

### addChildComponentInside(component, element, [where]) {#addChildComponentInside}

Adds the specified component at the `top` or `bottom` of this component's element. If `where` is unspecified, the component will be added at the `bottom` of the component's element.

#### Parameters:

Name               | Type                                           | Description
------------------ | ---------------------------------------------- | -----------
`component`        | [Moobile.Component](../Component/Component.md) | The component.
`element`          | Mixed                                          | The component's element or a CSS selector.
`where` *Optional* | String                                         | The component's location, either `top` or `bottom`, defaults to `bottom`.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

#### Example:

	var componentOne = new Moobile.Component('<div class="component-one"><div class="me"></div></div>')
	var componentTwo = new Moobile.Component('<div class="component-two"></div>');
	componentOne.addChildComponentInside(componentTwo, '.me');

Resulting element:

	<div class="component-one">
		<div class="me">
			<div class="component-two"></div>
		</div>
	</div>

-----

### addChildComponentAfter(component, after) {#addChildComponentAfter}

Adds the specified component after another child of this component.

#### Parameters:

Name        | Type                                           | Description
----------- | ---------------------------------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The component.
`after`     | [Moobile.Component](../Component/Component.md) | The component will be placed after this component.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

#### Example:

	var componentOne = new Moobile.Component('<div class="component-one"></div>');
	var componentTwo = new Moobile.Component('<div class="component-two"></div>');
	var componentThree = new Moobile.Component('<div class="third"></div>');
	componentOne.addChildComponent(componentTwo);
	componentOne.addChildComponentAfter(componentThree, componentTwo);

Resulting element:

	<div class="component-one">
		<div class="component-two"></div>
		<div class="third"></div>
	</div>

-----

### addChildComponentBefore(component, before) {#addChildComponentBefore}

Adds the specified component before another child of this component.

#### Parameters:

Name        | Type                                           | Description
----------- | ---------------------------------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The component.
`before`    | [Moobile.Component](../Component/Component.md) | The component will be placed before this component.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

#### Example:

	var componentOne = new Moobile.Component('<div class="component-one"></div>');
	var componentTwo = new Moobile.Component('<div class="component-two"></div>');
	var componentThree = new Moobile.Component('<div class="third"></div>');
	componentOne.addChildComponent(componentTwo);
	componentOne.addChildComponentBefore(componentThree, componentTwo);

Resulting element:

	<div class="component-one">
		<div class="third"></div>
		<div class="component-two"></div>
	</div>

-----

### getChildComponent(name) {#getChildComponent}

Returns a component that matches the specified name.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The name of the component to search for.

#### Returns:

- [Moobile.Component](../Component/Component.md) The component or `null` if no components were found with that name.

#### Example:

	var componentOne = new Moobile.Component('<div class="component-one"></div>');
	var componentTwo = new Moobile.Component('<div class="component-two"></div>', null, 'my-second-component');
	componentOne.addChildComponent(componentTwo);
	componentOne.getChildComponent('my-second-component'); // returns componentTwo

-----

### getChildComponentOfType(type, name) {#getChildComponentOfType}

Returns a component of a specified type that matches the specified name.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`type` | Class  | The component's class.
`name` | String | The name of the component to search for.

#### Returns:

- [Moobile.Component](../Component/Component.md) The component or `null` if no components of that type were found with the name.

#### Example:

	var component = new Moobile.Component();
	var button = new Moobile.Button(null, null, 'foo');
	var image = new Moobile.Image(null, null, 'foo');
	component.addChildComponent(button);
	component.addChildComponent(image);
	component.getChildComponentOfType(Moobile.Image, 'foo'); // returns image

-----

### getChildComponentAt(index) {#getChildComponentAt}

Returns a component at a specified index.

#### Parameters:

Name    | Type   | Description
------- | ------ | -----------
`index` | Number | The index location of the component.

#### Returns:

- [Moobile.Component](../Component/Component.md) The component or `null` if no components were found at the index.

#### Example:

	var component = new Moobile.Component();
	var button = new Moobile.Button();
	var image = new Moobile.Image();
	component.addChildComponent(button);
	component.addChildComponent(image);
	component.getChildComponentAt(0); // returns button

-----

### getChildComponentOfTypeAt(type, index) {#getChildComponentOfTypeAt}

Returns a component of a specified type at a specified index.

#### Parameters:

Name    | Type   | Description
------- | ------ | -----------
`type`  | Class  | The component's class.
`index` | Number | The component's index.

#### Returns:

- [Moobile.Component](../Component/Component.md) The component or `null` if no components of that type were found at the index.

#### Example:

	var component = new Moobile.Component();
	var button = new Moobile.Button();
	var image = new Moobile.Image();
	component.addChildComponent(button);
	component.addChildComponent(image);
	component.getChildComponentOfTypeAt(Moobile.Image, 0); // returns image

-----

### getChildComponentIndex(component) {#getChildComponentIndex}

Returns the index of a specified component or `-1` if the component is not a child of this component.

#### Parameters:

Name        | Type                                           | Description
----------- | ---------------------------------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The component to search for.

#### Returns:

- `Number` The component index or `-1` if the component is not present in this component.

#### Example:

	var component = new Moobile.Component();
	var button = new Moobile.Button();
	var image = new Moobile.Image();
	component.addChildComponent(button);
	component.addChildComponent(image);
	component.getChildComponentIndex(Moobile.Image); // returns 1

-----

### getChildComponents() {#getChildComponents}

Returns all the components in this component.

#### Returns:

- `Array` An array of all the components in this component.

#### Example:

	var component = new Moobile.Component();
	var buttonOne = new Moobile.Button();
	var buttonTwo = new Moobile.Button();
	component.addChildComponent(buttonOne);
	component.addChildComponent(buttonTwo);
	component.getChildComponents(); // returns [buttonOne, buttonTwo]

-----

### getChildComponentsOfType(type) {#getAllChildComponentOfType}

Returns all the components of a specified type in this component.

#### Parameters:

Name   | Type  | Description
------ | ----- | -----------
`type` | Class | The component's class.

#### Returns:

- `Array` An array of all the components of the type in this component.

#### Example:

	var component = new Moobile.Component();
	var buttonOne = new Moobile.Button();
	var buttonTwo = new Moobile.Button();
	var image = new Moobile.Image();
	component.addChildComponent(buttonOne);
	component.addChildComponent(buttonTwo);
	component.addChildComponent(image);
	component.getChildComponentsOfType(Moobile.Button); // returns [buttonOne, buttonTwo]

-----

### hasChildComponent(component) {#hasChildComponent}

Indicates whether a component is present in this component.

#### Parameters:

Name        | Type                                           | Description
----------- | ---------------------------------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The component to search for.

#### Returns:

- `Boolean` Whether the component is present in this component.

#### Example:

	var component = new Moobile.Component();
	var button = new Moobile.Button();
	component.addChildComponent(button);
	component.hasChildComponent(button); // returns true

-----

### hasChildComponentOfType(type) {#hasChildComponentOfType}

Indicates whether this component has at least one component of the specified type.

#### Parameters:

Name   | Type  | Description
------ | ----- | -----------
`type` | Class | The component's class.

#### Returns:

- `Boolean` Whether this component has at least one component of that type.

#### Example:

	var component = new Moobile.Component();
	var button = new Moobile.Button();
	var image = new Moobile.Image();
	component.addChildComponent(button);
	component.addChildComponent(image);
	component.hasChildComponentOfType(Moobile.Image); // returns true

-----

### replaceChildComponent(component, replacement, [destroy]) {#replaceChildComponent}

Replaces a component with another.

#### Parameters:

Name                 | Type                                           | Description
-------------------- | ---------------------------------------------- | -----------
`component`          | [Moobile.Component](../Component/Component.md) | The component to remove.
`replacement`        | [Moobile.Component](../Component/Component.md) | The component to replace it with.
`destroy` *Optional* | Boolean                                        | Whether or not to destroy the old component.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

#### Example:

	var component = new Moobile.Component();
	var buttonOne = new Moobile.Button();
	var buttonTwo = new Moobile.Button();
	component.addChildComponent(buttonOne);
	component.replaceChildComponent(buttonOne, buttonTwo); // Replaces buttonOne with buttonTwo

-----

### removeChildComponent(component, [destroy]) {#removeChildComponent}

Removes a component.

#### Parameters:

Name                 | Type                                           | Description
-------------------- | ---------------------------------------------- | -----------
`component`          | [Moobile.Component](../Component/Component.md) | The component to remove.
`destroy` *Optional* | Boolean                                        | Whether or not to destroy the component upon removal.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

#### Example:

	var component = new Moobile.Component();
	var button = new Moobile.Button();
	component.addChildComponent(button);
	component.removeChildComponent(button); // Removes button

-----

### removeAllChildComponents([destroy]) {#removeAllChildComponents}

Removes all components.

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`destroy` *Optional* | Boolean | Whether or not to destroy the components upon removal.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### removeAllChildComponentsOfType(type, [destroy]) {#removeAllChildComponentsOfType}

Removes all components of a specified type.

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`type`               | Class   | The component's class.
`destroy` *Optional* | Boolean | Whether or not to destroy the components upon removal.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

#### Example:

	var component = new Moobile.Component();
	var buttonOne = new Moobile.Button();
	var buttonTwo = new Moobile.Button();
	var image = new Moobile.Image();
	component.addChildComponent(buttonOne);
	component.addChildComponent(buttonTwo);
	component.addChildComponent(image);
	component.removeAllChildComponentsOfType(Moobile.Button); // Removes buttonOne, buttonTwo

-----

### removeFromParentComponent([destroy]) {#removeFromParentComponent}

Removes this component from its parent.

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`destroy` *Optional* | Boolean | Whether or not to destroy the component upon removal.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### setParentComponent(parent) {#setParentComponent}

Sets the parent of this component.

This method is handled by the `Moobile.Component` class and should not be called manually.

#### Parameters:

Name     | Type                                           | Description
-------- | ---------------------------------------------- | -----------
`parent` | [Moobile.Component](../Component/Component.md) | The parent.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### getParentComponent() {#getParentComponent}

Returns the parent of this component.

#### Returns:

- [Moobile.Component](../Component/Component.md) The parent component.

-----

### hasParentComponent() {#hasParentComponent}

Indicates whether this component has a parent.

#### Returns:

- `Boolean` Whether this component has a parent.

----

### setWindow(window) {#setWindow}

Sets the window that contains this component.

This method is handled by the `Moobile.Component` class and should not be called manually.

#### Parameters:

Name     | Type                                  | Description
-------- | ------------------------------------- | -----------
`window` | [Moobile.Window](../Window/Window.md) | The window.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### getWindow() {#getWindow}

Returns the window that contains this component.

#### Returns:

- [Moobile.Window](../Window/Window.md) The window.

-----

### hasWindow() {#hasWindow}

Indicates whether this component has a window.

#### Returns:

- `Boolean` Whether this component as a window.

----

### setReady() {#setReady}

Sets whether this component is ready.

A component is *ready* when its element is assigned to a window and therefore in the DOM. Upon being *ready*, a component can access its window and perform tasks such as measuring.

This method is handled by the `Moobile.Component` class and should not be called manually.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### isReady() {#isReady}

Indicates whether this component is ready.

A component is *ready* when its element is assigned to a window and therefore in the DOM. Upon being *ready*, a component can access its window and perform tasks such as measuring.

#### Returns:

- `Boolean` Whether this component is ready.

----

### getName() {#getName}

Returns this component's name.

#### Returns:

- `String` This component's name.

-----

### setStyle(name) {#setStyle}

Sets the style of this component.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The style name.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### getStyle() {#getStyle}

Returns the current style name.

#### Returns:

- `String` The current style name or `null` if no style is set.

-----

### addClass(name) {#addClass}

Adds the specified CSS class to this component's element.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The CSS class.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### removeClass(name) {#removeClass}

Removes the specified CSS class from this component's element.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The CSS class.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### toggleClass(name) {#toggleClass}

Adds or removes the specified CSS class from this component.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The CSS class.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### getElement(selector) {#getElement}

Returns this component's element or the first element within this component's element that matches the specified selector.

#### Parameters:

Name                  | Type   | Description
--------------------- | ------ | -----------
`selector` *Optional* | String | An CSS selector.

#### Returns:

- `Element` This component's element or the first element that matches the selector.

-----

### getElements(selector) {#getElements}

Returns a collection of elements from the component's element that matches the specified selector.

#### Parameters:

Name       | Type   | Description
---------- | ------ | -----------
`selector` | String | The CSS selector.

#### Returns:

- `Elements` A collection of elements.

-----

### hasElement(element) {#hasElement}

Indicates whether the specified element is a child of this component's element.

#### Parameters:

Name      | Type    | Description
--------- | ------- | -----------
`element` | Element | The element.

#### Returns:

- `Boolean` Whether the element exists.

----

### getSize() {#getSize}

Returns this component's size as an object with two keys, `x` to indicate the
width and `y` to indicate the height.

The component must be *ready* when calling this method otherwise it won't be measured.

#### Returns:

- `Object` This component's size.

----

### getPosition([relative]) {#getPosition}

Returns this component's position relative to a specified element. If unspecified, the position returned will be relative to its parent.

The component must be *ready* when calling this method otherwise it won't be measured.

#### Parameters:

Name       | Type    | Description
---------- | ------- | -----------
`relative` | Mixed   | The position will be relative to this element or component

#### Returns:

- `Object` This component's position.

-----

### show() {#show}

Shows this component. This method will also remove the `hidden` CSS class from this component's element.

This method fires the `show` event.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### hide() {#hide}

Hides this component. This method will also add the `hidden` CSS class from this component's element.

This method fires the `hide` event.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### willBuild() {#willBuild}

Tells this component it's about to be built. This method is called once the component's element is set and before its roles are being processed.

Override this method to provide your own implementation.

-----

### didBuild() {#didBuild}

Tells this component it has been built.

Override this method to provide your own implementation.

-----

### didBecomeReady() {#didBecomeReady}

Tells this component it has become ready.

A component is *ready* when its element is assigned to a window and therefore in the DOM. Upon being *ready*, a component can access its window and perform tasks such as measuring.

Override this method to provide your own implementation.

-----

### willAddChild(component) {#willAddChild}

Tells this component a component is about to be added.

Override this method to provide your own implementation.

#### Parameters:

Name        | Type                                           | Description
----------- | ---------------------------------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The component that is about to be added.

-----

### didAddChild(component) {#didAddChild}

Tells this component a component has been added.

Override this method to provide your own implementation.

#### Parameters:

Name        | Type                                           | Description
----------- | ---------------------------------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The component that has been added.

-----

### willRemoveChild(component) {#willRemoveChild}

Tell the component a child component is about to be removed.

Override this method to provide your own implementation.

#### Parameters:

Name        | Type                                           | Description
----------- | ---------------------------------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The component that is about to be removed.

-----

### didRemoveChild(component) {#didRemoveChild}

Tell the component a child component has been removed.

Override this method to provide your own implementation.

#### Parameters:

Name        | Type                                           | Description
----------- | ---------------------------------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The component that has been removed.

-----

### parentWillChange(parent) {#parentWillChange}

Tell the component it's about to be moved to another component.

Override this method to provide your own implementation.

#### Parameters:

Name     | Type                                           | Description
-------- | ---------------------------------------------- | -----------
`parent` | [Moobile.Component](../Component/Component.md) | The component this component will be moved to.

-----

### parentDidChange(parent) {#parentDidChange}

Tell the component it has been moved to a new component.

Override this method to provide your own implementation.

#### Parameters:

Name     | Type                                           | Description
-------- | ---------------------------------------------- | -----------
`parent` | [Moobile.Component](../Component/Component.md) | The component this component has been moved to.

-----

### willShow() {#willShow}

Tell the component it's about to become visible.

Override this method to provide your own implementation.

-----

### didShow() {#didShow}

Tell the component it became visible.

Override this method to provide your own implementation.

-----

### willHide() {#willHide}

Tell the component it's about to become hidden.

Override this method to provide your own implementation.

-----

### didHide() {#didHide}

Tell the component it became hidden.

Override this method to provide your own implementation.

-----

### destroy() {#destroy}

Remove this component from its parent, destroy its hierarchy and prepare it for garbage collection.

If you override this method, make sure you call the parent method at
the end of your implementation.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

Static Methods {#static}
--------------------------------------------------------------------------------

### Moobile.Component.defineRole(name, target, behavior) {#defineRole}

Define the process to execute upon finding an element with the given role.

#### Parameters:

Name       | Type                                           | Description
---------- | ---------------------------------------------- | -----------
`name`     | String                                         | The name.
`target`   | [Moobile.Component](../Component/Component.md) | The target component or `null` to define the role for all components.
`behavior` | Function                                       | The function that defines the role's behavior.

#### Examples:

##### For every element with the `data-role="wrapped"` attribute found in all types of components, an element will be created and wrapped around it.

	 Moobile.Component.defineRole('wrapped', null, function(element) {
	 	new Element('div.wrapped').wraps(element);
	 });

##### For every elements with the `data-role="button"` attribute, a new `Moobile.Button` instance will be created and added to the view as a child component.

	Moobile.Component.defineRole('warning', Moobile.View, function(element) {
		var button = new Moobile.Button(element);
		this.addChildComponent(button);
	});

-----

### Moobile.Component.defineStyle(name, target, behavior) {#defineStyle}

Defines a style for a component or all components if `target` is set to `null`.

#### Parameters:

Name       | Type                                           | Description
---------- | ---------------------------------------------- | -----------
`name`     | String                                         | The style name.
`target`   | [Moobile.Component](../Component/Component.md) | The target component or `null` to define the role for all components.
`behavior` | Object                                         | The style definition, which consists of an object with an `attach` and `detach` method.

#### Example:

	Moobile.Component.defineStyle('glowing', Moobile.Button, {
		attach: function() {
			this.addClass('glow');
		},
		detach: function() {
			this.removeClass('glow');
		}
	});
