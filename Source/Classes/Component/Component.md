Moobile.Component
================================================================================

##### Extends [Moobile.EventDispatcher](../Event/EventDispatcher.md)

Provides the base class for most visual objects the user will interact with. A component encapsulates a DOM element and provides methods to handle a hierarchy of components.

Initialization {#initialize}
--------------------------------------------------------------------------------

This class should not be instantiated, instead you should subclass it and create your own components.

Events {#events}
--------------------------------------------------------------------------------

### ready

Fired when this component becomes ready.

A component is *ready* when it's hierarchy is assigned to a window and therefore in the DOM. Upon begin *ready*, a component can access its window and perform tasks such as measuring.

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

### `Element` element {#element}

The element managed by the component.

-----

### `Object` options {#options}

The component's options.

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The component's default CSS class name, defaults to `null`.
`styleName` | String | The component's default style, defaults to `null`.
`tagName`   | String | The component's element tag name, defaults to `div`.

Methods {#methods}
--------------------------------------------------------------------------------

### addChild(component, [where]) {#addChild}

Add the specified component at the `top` or `bottom` of this component. If `where` is unspecified, the component will be added at the bottom of this component. The component's element will also be added at the `top` or `bottom` of this component's element hierarchy. However, the component's element will stay at its current location if it's already in this component's element hierarchy and `where` is unspecified.

#### Parameters:

Name               | Type                                           | Description
------------------ | ---------------------------------------------- | -----------
`component`        | [Moobile.Component](../Component/Component.md) | The component.
`where` *Optional* | String                                         | The component's location, either `top` or `bottom`, defaults to `bottom`.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### addChildInside(component, element, [where]) {#addChildInside}

Adds the specified component at the `top` or `bottom` of a component's element. If `where` is unspecified, the component will be added at the `bottom` of the component's element.

This methods will remove the component from its current parent before adding it.

#### Parameters:

Name               | Type                                           | Description
------------------ | ---------------------------------------------- | -----------
`component`        | [Moobile.Component](../Component/Component.md) | The component.
`element`          | Element                                        | The component's element.
`where` *Optional* | String                                         | The component's location, either `top` or `bottom`, defaults to `bottom`.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### addChildAfter(component, after) {#addChildAfter}

Adds the specified component after another child of this component.

This methods will remove the component from its current parent before adding it.

#### Parameters:

Name        | Type                                           | Description
----------- | ---------------------------------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The component.
`after`     | [Moobile.Component](../Component/Component.md) | The component will be placed after this component.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### addChildBefore(component, before) {#addChildBefore}

Adds the specified component before another child of this component.

This methods will remove the component from its current parent before adding it.

#### Parameters:

Name        | Type                                           | Description
----------- | ---------------------------------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The component.
`after`     | [Moobile.Component](../Component/Component.md) | The component will be placed before this component.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### getChild(name) {#getChild}

Return a component that matching the specified name.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The component's name to search for.

#### Returns:

- [Moobile.Component](../Component/Component.md) The component or `null` if no components were found with the name.

-----

### getChildOfType(type, name) {#getChildOfType}

Return a component of a specified type that matching the specified name.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`type` | Class  | The component's class.
`name` | String | The component's name to search for.

#### Returns:

- [Moobile.Component](../Component/Component.md) The component or `null` if no components of that type were found with the name.

-----

### getChildAt(index) {#getChildAt}

Return a component at a specified index.

#### Parameters:

Name    | Type   | Description
------- | ------ | -----------
`index` | Number | The component's index.

#### Returns:

- [Moobile.Component](../Component/Component.md) The component or `null` if no components were found at the index.

-----

### getChildOfTypeAt(type, index) {#getChildOfTypeAt}

Return a component of a specified type at a specified index.

#### Parameters:

Name    | Type   | Description
------- | ------ | -----------
`type`  | Class  | The component's class.
`index` | Number | The component's index.

#### Returns:

- [Moobile.Component](../Component/Component.md) The component or `null` if no components of that type were found at the index.

-----

### getChildIndex(component) {#getChildIndex}

Returns the index of a specified component or `-1` if the component is not present in this component.

#### Parameters:

Name        | Type                                           | Description
----------- | ---------------------------------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The component to search for.

#### Returns:

- `Number` The component index or `-1` if the component is not present in this component.

-----

### getChildren() {#getChildren}

Returns all the components in this component.

#### Returns:

- `Array` An array of all the components in this component.

-----

### getChildrenOfType(type) {#getChildrenOfType}

Returns all the components of a specified type in this component.

#### Parameters:

Name   | Type  | Description
------ | ----- | -----------
`type` | Class | The component's class.

#### Returns:

- `Array` An array of all the components of the type in this component.

-----

### hasChild(component) {#hasChild}

Indicates whether a component is present in this component.

#### Parameters:

Name        | Type                                           | Description
----------- | ---------------------------------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The component to search for.

#### Returns:

- `Boolean` Whether the component is present in this component.

-----

### hasChildOfType(type) {#hasChild}

Indicates whether this component has at least one component of the specified type.

#### Parameters:

Name   | Type  | Description
------ | ----- | -----------
`type` | Class | The component's class.

#### Returns:

- `Boolean` Whether this component has at least one component of that type.

-----

### replaceChild(component, replacement, destroy) {#replaceChild}

Replaces a component with another.

#### Parameters:

Name          | Type                                           | Description
------------- | ---------------------------------------------- | -----------
`component`   | [Moobile.Component](../Component/Component.md) | The component to remove.
`replacement` | [Moobile.Component](../Component/Component.md) | The component to replace with.
`destroy`     | Boolean                                        | Whether to destroy the old component.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### removeChild(component, destroy) {#removeChild}

Removes a component.

#### Parameters:

Name          | Type                                           | Description
------------- | ---------------------------------------------- | -----------
`component`   | [Moobile.Component](../Component/Component.md) | The component to remove.
`destroy`     | Boolean                                        | Whether to destroy the component upon removal.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### removeChildren(destroy) {#removeChildren}

Removes all components.

#### Parameters:

Name      | Type    | Description
--------- | ------- | -----------
`destroy` | Boolean | Whether to destroy the component upon removal.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### removeChildrenOfType(type, destroy) {#removeChildrenOfType}

Removes all components of a specified type.

#### Parameters:

Name      | Type    | Description
--------- | ------- | -----------
`type`    | Class   | The component's class.
`destroy` | Boolean | Whether to destroy the component upon removal.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### removeFromParent(destroy) {#removeFromParent}

Removes this component from its parent.

#### Parameters:

Name      | Type    | Description
--------- | ------- | -----------
`destroy` | Boolean | Whether to destroy the component upon removal.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### setParent(parent) {#setParent}

Sets the parent of this component.

This method is handled by the `Moobile.Component` class and should not be called manually.

#### Parameters:

Name     | Type                                           | Description
-------- | ---------------------------------------------- | -----------
`parent` | [Moobile.Component](../Component/Component.md) | The parent.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### getParent() {#getParent}

Returns the parent of this component.

#### Returns:

- [Moobile.Component](../Component/Component.md) The parent component.

-----

### hasParent() {#hasParent}

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

A component is *ready* when it's hierarchy is assigned to a window and therefore in the DOM. Upon begin *ready*, a component can access its window and perform tasks such as measuring.

This method is handled by the `Moobile.Component` class and should not be called manually.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### isReady() {#isReady}

Indicates whether this component is ready.

A component is *ready* when it's hierarchy is assigned to a window and therefore in the DOM. Upon begin *ready*, a component can access its window and perform tasks such as measuring.

#### Returns:

- `Boolean` Whether this component is ready.

----

### getName() {#getName}

Returns this component name's name.

#### Returns:

- `String` This component's name.

-----

### setStyle(name) {#setStyle}

Set the style of this component.

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

- `String` The current style name or `null` if no style were set.

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

Tells this component it became ready.

A component is *ready* when it's hierarchy is assigned to a window and therefore in the DOM. Upon begin *ready*, a component can access its window and perform tasks such as measuring.

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

Remove this component from its parent, destroy its hierarchy prepares it for garbage collection.

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

For every elements with the `data-role="wrapped"` attribute found in all type of components, an element will be created and wrapped around it.

	 Moobile.Component.defineRole('wrapped', null, function(element) {
	 	new Element('div.wrapped').wraps(element);
	 });

For every elements with the `data-role="popup"` attribute, a new `Moobile.Alert` instance will be created and added to the view as a child component.

	Moobile.Component.defineRole('warning', Moobile.View, function(element) {
		var alert = new Moobile.Alert();
		alert.setMessage(element.get('html'));
		this.addChild(alert, 'after', element);
		element.destroy();
	});

-----

### Moobile.Component.defineStyle(name, target, behavior) {#defineStyle}

Defines a style for a component or all components if `target` is set to `null`.

#### Parameters:

Name       | Type                                           | Description
---------- | ---------------------------------------------- | -----------
`name`     | String                                         | The style name.
`target`   | [Moobile.Component](../Component/Component.md) | The target component or `null` to define the role for all components.
`behavior` | Object                                         | The style definition which consists of an object with an `attach` and `detach` method.

#### Example:

	Moobile.Component.defineStyle('glowing', Moobile.Button, {
		attach: function() {
			this.addClass('glow');
		},
		detach: function() {
			this.removeClass('glow');
		}
	});