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

##### Creating a component that passes options using element attributes:

	var element =
		'<div data-option-style-name="moo" data-option-some-option="value">' +
		'</div>';
	var component = new Moobile.Component(element);

Events {#events}
--------------------------------------------------------------------------------

### ready {#ready-event}

Fired when this component becomes ready.

A component is *ready* when its hierarchy is assigned to a window and therefore in the DOM. Upon being *ready*, a component can access its window and perform tasks such as measuring.

-----

### tap {#tap-event}

Fired when this component receives a `touchend` event with only one touch. The `tap` event is cancelled when the current touch moves more than `10` pixels.

-----

### tapstart {#tapstart-event}

Fired when this component receives a `touchstart` event with only one touch.

-----

### tapmove {#tapmove-event}

Fired when this component receives a `touchmove` event with only one touch.

-----

### tapend {#tapend-event}

Fired when this component receives a `touchend` event with only one touch.

-----

### touchstart {#touchstart-event}

Fired when this component receives a standard `touchstart` event.

-----

### touchmove {#touchmove-event}

Fired when this component receives a standard `touchmove` event.

-----

### touchend {#touchend-event}

Fired when this component receives a standard `touchend` event.

-----

### pinch {#pinch-event}

Fired when this component receives a `pinch` event.

-----

### swipe {#swipe-event}

Fired when this component receives a `swipe` event.

-----

### show {#show-event}

Fired when this component becomes visible.

-----

### hide {#hide-event}

Fired when this component becomes hidden.

-----

### owntransitionend {#owntransitionend-event}

Fired when a CSS transition finishes. The transition must be applied to this component's root element.

-----

### ownanimationend {#ownanimationend-event}

Fired when a CSS animation finishes. The animation must be applied to this component's root element.

Members {#members}
--------------------------------------------------------------------------------

### element {#element}

The element managed by this component.

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

Adds the specified component at the `top` or `bottom` of this component. If `where` is omitted, the specified component will be added at the bottom.

#### Parameters:

Name               | Type              | Description
------------------ | ----------------- | -----------
`component`        | Moobile.Component | The component.
`where` *Optional* | String            | The component's location, either `top` or `bottom`, defaults to `bottom`.

#### Returns:

- `Moobile.Component` This Moobile.Component instance.

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

Adds the specified component at the `top` or `bottom` of this component's element. If `where` is omitted, the specified component will be added at the `bottom` of this component's element.

#### Parameters:

Name               | Type              | Description
------------------ | ----------------- | -----------
`component`        | Moobile.Component | The component.
`element`          | Mixed             | The component's element or a CSS selector.
`where` *Optional* | String            | The component's location, either `top` or `bottom`, defaults to `bottom`.

#### Returns:

- `Moobile.Component` This Moobile.Component instance.

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

Name        | Type              | Description
----------- | ----------------- | -----------
`component` | Moobile.Component | The component.
`after`     | Moobile.Component | The component will be placed after this component.

#### Returns:

- `Moobile.Component` This Moobile.Component instance.

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

Name        | Type              | Description
----------- | ----------------- | -----------
`component` | Moobile.Component | The component.
`before`    | Moobile.Component | The component will be placed before this component.

#### Returns:

- `Moobile.Component` This Moobile.Component instance.

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

- `Moobile.Component` The component or `null` if no components were found with that name.

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

- `Moobile.Component` The component or `null` if no components of that type were found with the name.

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

- `Moobile.Component` The component or `null` if no components were found at the index.

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

- `Moobile.Component` The component or `null` if no components of that type were found at the index.

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

Name        | Type              | Description
----------- | ----------------- | -----------
`component` | Moobile.Component | The component to search for.

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

Returns all components in this component.

#### Returns:

- `Array` An array of all components in this component.

#### Example:

	var component = new Moobile.Component();
	var buttonOne = new Moobile.Button();
	var buttonTwo = new Moobile.Button();
	component.addChildComponent(buttonOne);
	component.addChildComponent(buttonTwo);
	component.getChildComponents(); // returns [buttonOne, buttonTwo]

-----

### getChildComponentsOfType(type) {#getAllChildComponentOfType}

Returns all components of a specified type in this component.

#### Parameters:

Name   | Type  | Description
------ | ----- | -----------
`type` | Class | The component's class.

#### Returns:

- `Array` An array of components of a specified type in this component.

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

Name        | Type              | Description
----------- | ----------------- | -----------
`component` | Moobile.Component | The component to search for.

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

### getDescendantComponent(name) {#getDescendantComponent}

Returns a component that matches the specified name within all the child components recursively.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The name of the component to search for.

#### Returns:

- `Moobile.Component` The component or `null` if no components were found with that name.

#### Example:

	var componentOne = new Moobile.Component('<div class="component-one"></div>');
	var componentTwo = new Moobile.Component('<div class="component-two"></div>', null, 'my-second-component');
	var componentThree new Moobile.Component('<div class="component-two"></div>', null, 'my-third-component');
	componentOne.addChildComponent(componentTwo);
	componentTwo.addChildComponent(componentThree);
	componentOne.getChildComponent('my-third-component'); // returns componentThree

-----

### replaceChildComponent(component, replacement, [destroy]) {#replaceChildComponent}

Replaces a component with another.

#### Parameters:

Name                 | Type              | Description
-------------------- | ----------------- | -----------
`component`          | Moobile.Component | The component to remove.
`replacement`        | Moobile.Component | The component to replace it with.
`destroy` *Optional* | Boolean           | Whether to destroy the component upon removal.

#### Returns:

- `Moobile.Component` This Moobile.Component instance.

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

Name                 | Type              | Description
-------------------- | ----------------- | -----------
`component`          | Moobile.Component | The component to remove.
`destroy` *Optional* | Boolean           | Whether to destroy the component upon removal.

#### Returns:

- `Moobile.Component` This Moobile.Component instance.

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
`destroy` *Optional* | Boolean | Whether to destroy the components upon removal.

#### Returns:

- `Moobile.Component` This Moobile.Component instance.

-----

### removeAllChildComponentsOfType(type, [destroy]) {#removeAllChildComponentsOfType}

Removes all components of a specified type.

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`type`               | Class   | The component's class.
`destroy` *Optional* | Boolean | Whether to destroy the components upon removal.

#### Returns:

- `Moobile.Component` This Moobile.Component instance.

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
`destroy` *Optional* | Boolean | Whether to destroy the component upon removal.

#### Returns:

- `Moobile.Component` This Moobile.Component instance.

-----

### setParentComponent(parent) {#setParentComponent}

Sets the parent of this component.

This method is handled by the `Moobile.Component` class and should not be called manually.

#### Parameters:

Name     | Type              | Description
-------- | ----------------- | -----------
`parent` | Moobile.Component | The parent.

#### Returns:

- `Moobile.Component` This Moobile.Component instance.

-----

### getParentComponent() {#getParentComponent}

Returns the parent of this component.

#### Returns:

- `Moobile.Component` The parent component.

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

- `Moobile.Component` This Moobile.Component instance.

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

- `Moobile.Component` This Moobile.Component instance.

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

- `Moobile.Component` This Moobile.Component instance.

-----

### getStyle() {#getStyle}

Returns the current style name.

#### Returns:

- `String` The current style name or `null` if no style is set.

-----

### hasStyle(name) {#hasStyle}

Indicates whether the specified style is currently applied to this component.

#### Returns:

- `Boolean` Whether the specified style is currently applied to this component.

-----

### addClass(name) {#addClass}

Adds the specified CSS class to this component's element.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The CSS class.

#### Returns:

- `Moobile.Component` This Moobile.Component instance.

-----

### removeClass(name) {#removeClass}

Removes the specified CSS class from this component's element.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The CSS class.

#### Returns:

- `Moobile.Component` This Moobile.Component instance.

-----

### toggleClass(name, force) {#toggleClass}

Adds or removes the specified CSS class from this component.

#### Parameters:

Name               | Type    | Description
------------------ | ------- | -----------
`name`             | String  | The CSS class.
`force` *Optional* | Boolean | Force the class to be either added or removed

#### Returns:

- `Moobile.Component` This Moobile.Component instance.

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

Returns a collection of elements from this component's element that matches the specified selector.

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

-----

### getRoleElement(name) {#getRoleElement}

Returns the first element within this component's element that matches the specified role.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The role.

#### Returns:

- `Element` The first element within this component's element that matches the specified role.

#### Example:

	var component = new Moobile.Component('<div><div data-role="button"></div></div>');
	component.getRoleElement('button'); // Returns <div data-role="button"></div>

	var component = new Moobile.Component('<div><div data-role="button"><div data-role="label"></div></div></div>');
	component.getRoleElement('label'); // Returns null because the element with the 'label' role is inside an element with the 'button' role

-----

### getRoleElements(name, limit) {#getRoleElements}

Returns a collection of elements from this component's element that matches the specified role.

#### Parameters:

Name               | Type   | Description
------------------ | ------ | -----------
`name`             | String | The role.
`limit` *Optional* | Number | The maximal amount of elements that can be returned.

#### Returns:

- `Array` A collection of elements from this component's element that matches the specified role.

-----

### getSize() {#getSize}

Returns this component's size as an object with two keys, `x` to indicate the
width and `y` to indicate the height.

The component must be *ready* when calling this method otherwise it won't be measured.

#### Returns:

- `Object` This component's size.

-----

### getPosition([relative]) {#getPosition}

Returns this component's position relative to a specified element. If omitted, the position returned will be relative to its parent.

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

- `Moobile.Component` This Moobile.Component instance.

-----

### hide() {#hide}

Hides this component. This method will also add the `hidden` CSS class from this component's element.

This method fires the `hide` event.

#### Returns:

- `Moobile.Component` This Moobile.Component instance.

-----

### willBuild() {#willBuild}

Tells this component it's about to be built. This method is called once this component's element is set and before its roles are being processed.

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

### willAddChildComponent(component) {#willAddChildComponent}

Tells this component a component is about to be added.

Override this method to provide your own implementation.

#### Parameters:

Name        | Type              | Description
----------- | ----------------- | -----------
`component` | Moobile.Component | The component that is about to be added.

-----

### didAddChildComponent(component) {#didAddChildComponent}

Tells this component a component has been added.

Override this method to provide your own implementation.

#### Parameters:

Name        | Type              | Description
----------- | ----------------- | -----------
`component` | Moobile.Component | The component that has been added.

-----

### willRemoveChildComponent(component) {#willRemoveChildComponent}

Tell this component a child component is about to be removed.

Override this method to provide your own implementation.

#### Parameters:

Name        | Type              | Description
----------- | ----------------- | -----------
`component` | Moobile.Component | The component that is about to be removed.

-----

### didRemoveChildComponent(component) {#didRemoveChildComponent}

Tell this component a child component has been removed.

Override this method to provide your own implementation.

#### Parameters:

Name        | Type              | Description
----------- | ----------------- | -----------
`component` | Moobile.Component | The component that has been removed.

-----

### parentComponentWillChange(parent) {#parentComponentWillChange}

Tell this component it's about to be moved to another component.

Override this method to provide your own implementation.

#### Parameters:

Name     | Type              | Description
-------- | ----------------- | -----------
`parent` | Moobile.Component | The component this component will be moved to.

-----

### parentComponentDidChange(parent) {#parentComponentDidChange}

Tell this component it has been moved to a new component.

Override this method to provide your own implementation.

#### Parameters:

Name     | Type              | Description
-------- | ----------------- | -----------
`parent` | Moobile.Component | The component this component has been moved to.

-----

### windowWillChange(window) {#windowWillChange}

Tell this component it's about to be moved to another window.

Override this method to provide your own implementation.

#### Parameters:

Name     | Type           | Description
-------- | -------------- | -----------
`window` | Moobile.Window | The window this component will be moved to.

-----

### windowDidChange(window) {#windowDidChange}

Tell this component it has been moved to a new window.

Override this method to provide your own implementation.

#### Parameters:

Name     | Type           | Description
-------- | -------------- | -----------
`parent` | Moobile.Window | The window this component has been moved to.

-----

### willShow() {#willShow}

Tell thid component it's about to become visible.

Override this method to provide your own implementation.

-----

### didShow() {#didShow}

Tell this component it became visible.

Override this method to provide your own implementation.

-----

### willHide() {#willHide}

Tell this component it's about to become hidden.

Override this method to provide your own implementation.

-----

### didHide() {#didHide}

Tell this component it became hidden.

Override this method to provide your own implementation.

-----

### destroy() {#destroy}

Remove this component from its parent, destroy its hierarchy and prepare it for garbage collection.

If you override this method, make sure you call the parent method at
the end of your implementation.

#### Returns:

- `Moobile.Component` This Moobile.Component instance.

Static Methods {#static}
--------------------------------------------------------------------------------

### Moobile.Component.defineRole(name, context, options, handler) {#defineRole}

Define the process to execute upon finding an element with the given role.

#### Parameters:

Name      | Type              | Description
--------- | ----------------- | -----------
`name`    | String            | The name.
`context` | Moobile.Component | The context component or `null` to define the role for all components.
`options` | Object            | The options.
`handler` | Function          | The function that handles this role.

#### Options:

Name          | Type    | Description
------------- | ------- | -----------
`traversable` | Boolean | Defines whether this component will go continue looking for element with roles within this element upon building, defaults to `false`.

#### Examples:

##### For every element with the `data-role="wrapped"` attribute found in all types of components, an element will be created and wrapped around it.

	 Moobile.Component.defineRole('wrapped', null, null, function(element) {
	 	new Element('div.wrapped').wraps(element);
	 });

##### For every elements with the `data-role="button"` attribute within a `Moobile.ButtonGroup` control, a new `Moobile.Button` instance will be created and added to the group as a child component.

	Moobile.Component.defineRole('button', Moobile.ButtonGroup, null, function(element) {
		var button = new Moobile.Button(element);
		this.addChildComponent(button);
	});

-----

### Moobile.Component.defineAttribute(name, context, handler) {#defineAttribute}

Define the process to execute upon finding a specified attribute of the component's element.

Name      | Type              | Description
--------- | ----------------- | -----------
`name`    | String            | The name.
`context` | Moobile.Component | The context component or `null` to define the role for all components.
`handler` | Function          | The function that handles this attribute.

#### Example:

	Moobile.Component.defineAttribute('data-style', null, function(value) {
		this.options.styleName = value;
	});

-----

### Moobile.Component.defineStyle(name, target, behavior) {#defineStyle}

Defines a style for a component or all components if `target` is set to `null`.

#### Parameters:

Name       | Type              | Description
---------- | ----------------- | -----------
`name`     | String            | The style name.
`target`   | Moobile.Component | The target component or `null` to define the role for all components.
`behavior` | Object            | The style definition, which consists of an object with an `attach` and `detach` method.

#### Example:

	Moobile.Component.defineStyle('glowing', Moobile.Button, {
		attach: function() {
			this.addClass('glow');
		},
		detach: function() {
			this.removeClass('glow');
		}
	});
