Moobile.Component
================================================================================

##### Extends *[Moobile.Component](../Component/Component.md)(Entity/Entity.md)*

Provides the base class for objects that encapsulates a DOM element and it hierarchy. Do not instantiate this class directly, instead subclass it to create your own components.

Members {#members}
--------------------------------------------------------------------------------

### *Element* element {#element}

The element managed by the component. The element is also the root element of the component's hierarchy.

### *Object* options {#options}

The component's options.

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The component's default CSS class name, defaults to `null`.
`styleName` | String | The component's default style, defaults to `null`.
`tagName`   | String | The component's element tag name, defaults to `div`.

Methods {#methods}
--------------------------------------------------------------------------------

### addChild(component, [where]) {#addChild}

Adds a child component to the `top` or `bottom` of this component. If the `where` parameter is unspecified, the child compoment will be added at the `bottom` of this component.

If the child component's element is already within this component's element, it won't be move, only the reference of the component itself will be stored.

#### Parameters:

Name               | Type                                           | Description
------------------ | ---------------------------------------------- | -----------
`component`        | [Moobile.Component](../Component/Component.md) | The child component.
`where` *Optional* | String                                         | The child component's location, cam be either `top` or `bottom`, defaults to `bottom`.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* This Moobile.Component instance.

-----

### addChildInside(component, element, [where]) {#addChildInside}

Adds a child component to the `top` or `bottom` of one of this component's child element. If the `where` parameter is unspecified, the child compoment will be added at the `bottom` of this component's child element.

If the child component's element is already within this component's element, it won't be move, only the reference of the component itself will be stored.

#### Parameters:

Name               | Type                                           | Description
------------------ | ---------------------------------------------- | -----------
`component`        | [Moobile.Component](../Component/Component.md) | The child component.
`element`          | Element                                        | The component's child element to put the child component inside.
`where` *Optional* | String                                         | The child component's location, cam be either `top` or `bottom`, defaults to `bottom`.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* This Moobile.Component instance.

-----

### addChildAfter(component, after) {#addChildAfter}

Adds a child component after another child component of this component.

If the child component's element is already within this component's element, it won't be move, only the reference of the component itself will be stored.

#### Parameters:

Name        | Type                                           | Description
----------- | ---------------------------------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The child component.
`after`     | [Moobile.Component](../Component/Component.md) | The child component will be placed after this component.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* This Moobile.Component instance.

-----

### addChildBefore(component, before) {#addChildBefore}

Adds a child component before another child component of this component.

If the child component's element is already within this component's element, it won't be move, only the reference of the component itself will be stored.

#### Parameters:

Name        | Type                                           | Description
----------- | ---------------------------------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The child component.
`after`     | [Moobile.Component](../Component/Component.md) | The child component will be placed before this component.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* This Moobile.Component instance.

-----

### getChild(name) {#getChild}

Return a child component that matches the given name.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The component's name to search for.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* The child component or `null` if no components were found using the given name.

-----

### getChildOfType(type, name) {#getChildOfType}

Return a child component of a given type that matches the given name.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`type` | Class  | The component's class.
`name` | String | The component's name to search for.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* The child component or `null` if no components were found using the given name.

#### Example:

	component.getChildOfType(Moobile.Button, 'foo');

-----

### getChildAt(index) {#getChildAt}

Return a child component at a given index.

#### Parameters:

Name    | Type   | Description
------- | ------ | -----------
`index` | Number | The component's index.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* The child component or `null` if no components were found using the given name.

-----

### getChildOfTypeAt(type, index) {#getChildOfTypeAt}

Return a child component of a certain type at a given index.

#### Parameters:

Name    | Type   | Description
------- | ------ | -----------
`type`  | Class  | The component's class.
`index` | Number | The component's index.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* The child component or `null` if no components were found using the given name.

#### Example:

	component.getChildOfTypeAt(Moobile.Button, 2); // returns the third button

-----

### getChildIndex(component) {#getChildIndex}

Returns the index of a given component or `-1` if the component is not a child of this component.

#### Parameters:

Name        | Type                                           | Description
----------- | ---------------------------------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The child component to retrieve its index.

#### Returns:

- *Number* The child component index or `-1` if the given component is not a child of this component.

-----

### getChildren() {#getChildren}

Returns all the child components of this component.

#### Returns:

- *Array* The child components.

-----

### getChildrenOfType() {#getChildrenOfType}

Returns all the child components of this component of a given type

#### Parameters:

Name   | Type  | Description
------ | ----- | -----------
`type` | Class | The component's class.

#### Returns:

- *Array* The child components.

#### Example:

	component.getChildrenOfType(Moobile.Button);

-----

### hasChild(component) {#hasChild}

Indicates whether a component is a child of this component.

#### Parameters:

Name        | Type                                           | Description
----------- | ---------------------------------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The component to search for.

#### Returns:

- *Boolean* Whether the component is a child of this component.

-----

### hasChildOfType(type) {#hasChild}

Indicates whether a component has at least one child of the given type.

#### Parameters:

Name   | Type  | Description
------ | ----- | -----------
`type` | Class | The component's class.

#### Returns:

- *Boolean* Whether a component has at least one child of the given type.

-----

### replaceChild(component, replacement, destroy) {#replaceChild}

Replaces a child component with another.

#### Parameters:

Name          | Type                                           | Description
------------- | ---------------------------------------------- | -----------
`component`   | [Moobile.Component](../Component/Component.md) | The component to remove.
`replacement` | [Moobile.Component](../Component/Component.md) | The component to replace with.
`destroy`     | Boolean                                        | Whether to destroy the old component.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* This Moobile.Component instance.

-----

### removeChild(component, destroy) {#removeChild}

Removes a child component.

#### Parameters:

Name          | Type                                           | Description
------------- | ---------------------------------------------- | -----------
`component`   | [Moobile.Component](../Component/Component.md) | The component to remove.
`destroy`     | Boolean                                        | Whether to destroy the component upon removal.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* This Moobile.Component instance.

-----

### removeChildren(destroy) {#removeChildren}

Removes all the child components.

#### Parameters:

Name      | Type    | Description
--------- | ------- | -----------
`destroy` | Boolean | Whether to destroy the component upon removal.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* This Moobile.Component instance.

-----

### removeChildrenOfType(type, destroy) {#removeChildrenOfType}

Removes all the child components of a given type.

#### Parameters:

Name      | Type    | Description
--------- | ------- | -----------
`type`    | Class   | The component's class.
`destroy` | Boolean | Whether to destroy the component upon removal.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* This Moobile.Component instance.

-----

### removeFromParent(destroy) {#removeFromParent}

Removes this component from its parent component.

#### Parameters:

Name      | Type    | Description
--------- | ------- | -----------
`destroy` | Boolean | Whether to destroy the component upon removal.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* This Moobile.Component instance.

-----

### setParent(parent) {#setParent}

Sets the parent component of this component. This method is handled by the API and should not be called manually.

#### Parameters:

Name     | Type                                           | Description
-------- | ---------------------------------------------- | -----------
`parent` | [Moobile.Component](../Component/Component.md) | The parent.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* This Moobile.Component instance.

-----

### getParent() {#getParent}

Returns the parent component of this component.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* The parent component.

-----

### hasParent() {#hasParent}

Indicates whether this component has a parent.

#### Returns:

- *Boolean* Whether this component has an parent.

----

### setWindow(window) {#setWindow}

Sets the window that contains this component. This method is handled by the API and should not be called manually.

#### Parameters:

Name     | Type                                  | Description
-------- | ------------------------------------- | -----------
`window` | [Moobile.Window](../Window/Window.md) | The window.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* This Moobile.Component instance.

-----

### getWindow() {#getWindow}

Returns the window that contains this component.

#### Returns:

- *[Moobile.Window](../Window/Window.md)* The window.

-----

### hasWindow() {#hasWindow}

Indicates whether this component has a window.

#### Returns:

- *Boolean* Whether this component as a window.

----

### setReady() {#setReady}

Marks this component as being ready. This method is handled by the API and should not be called manually.

 ***Note:*** A component is ready when its element is part of the DOM.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* This Moobile.Component instance.

-----

### isReady() {#isReady}

Indicates whether this component is ready.

***Note:*** A component is ready when its element is part of the DOM.

#### Returns:

- *Boolean* Whether the component is ready.

----

### getName() {#getName}

Returns the component name given at initialization.

#### Returns:

- *String* The name.

-----

### setStyle(name) {#setStyle}

Sets a predefined style to this component.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The style name.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* This Moobile.Component instance.

-----

### getStyle() {#getStyle}

Returns the name of the current style of this component.

#### Returns:

- *String* The style name or `null`.

-----

### addClass(name) {#addClass}

Adds a CSS class to this component's element.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The CSS class.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* This Moobile.Component instance.

-----

### removeClass(name) {#removeClass}

Removes a CSS class from this component's element.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The CSS class.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* This Moobile.Component instance.

-----

### toggleClass(name) {#toggleClass}

Adds or removes a CSS class from this component.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The CSS class.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* This Moobile.Component instance.


-----

### getElement(selector) {#getElement}

Returns this component's element or the first element within this component's element that matches the given selector.

#### Parameters:

Name                  | Type   | Description
--------------------- | ------ | -----------
`selector` *Optional* | String | An CSS selector.

#### Returns:

- *Element* This component's element or the first element that matches the selector.

-----

### getElements(selector) {#getElements}

Returns a collection of elements from the component's element that matches the given selector.

#### Parameters:

Name                  | Type   | Description
--------------------- | ------ | -----------
`selector` *Optional* | String | The CSS selector.

#### Returns:

- *Elements* A collection of elements.

-----

### hasElement(element) {#hasElement}

Indicates whether an element within this component's element.

#### Parameters:

Name      | Type    | Description
--------- | ------- | -----------
`element` | Element | The element.

#### Returns:

- *Boolean* Whether the element exists.

----

### getSize() {#getSize}

Returns this component's size as an object with two keys, `x` to indicate the
width and `y` to indicate the height.

#### Returns:

- *Object* This component's size.

----

### getPosition([relative]) {#getPosition}

Returns this component's position relative to an element. If unspecified, the position returned will be relative to its parent component.

#### Returns:

- *Object* This component's position.

-----

### show() {#show}

Shows this component using the `display` CSS property of this component's element.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* This Moobile.Component instance.

-----

### hide() {#hide}

Hides this component using the `display` CSS property of this component's element.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* This Moobile.Component instance.

-----

### willBuild() {#willBuild}

Tells the component it's about to be build.

This method is called once the component's element has been set and before
other pieces of the initialization such as processing elements with role
and applying style have taken place.

Override this method to provide your custom implementation.

-----

### didBuild() {#didBuild}

Tells the component it's has been built.

This method is called once the entire initialization process is
completed, after elements with roles were processed and style was
loaded.

Override this method to provide your custom implementation.

-----

### didBecomeReady() {#didBecomeReady}

Tells the component it has become part of the DOM.

Override this method to provide your custom implementation.

-----

### willAddChild(component) {#willAddChild}

Tells the component a child component is about to be added.

#### Parameters:

Name        | Type                | Description
----------- | ------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The component that is going to be added.

-----

### didAddChild(component) {#didAddChild}

Tell the component a child component has been added.

#### Parameters:

Name        | Type                | Description
----------- | ------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The component that was added.

-----

### willRemoveChild(component) {#willRemoveChild}

Tell the component a child component is about to be removed.

#### Parameters:

Name        | Type                | Description
----------- | ------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The component that will be removed.

-----

### didRemoveChild(component) {#didRemoveChild}

Tell the component a child component has been removed.

#### Parameters:

Name     | Type                   | Description
-------- | ---------------------- | -----------
`component` | [Moobile.Component](../Component/Component.md) | The component that was removed.

-----

### parentWillChange(parent) {#parentWillChange}

Tell the component it's about to be moved to a new component.

#### Parameters:

Name     | Type                | Description
-------- | ------------------- | -----------
`parent` | [Moobile.Component](../Component/Component.md) | The component that will own this component.

-----

### parentDidChange(parent) {#parentDidChange}

Tell the component it has been moved to a new component.

#### Parameters:

Name     | Type                | Description
-------- | ------------------- | -----------
`parent` | [Moobile.Component](../Component/Component.md) | The component that owns this component.

-----

### willShow() {#willShow}

Tell the component it's about to become visible.

-----

### didShow() {#didShow}

Tell the component it became visible.

-----

### willHide() {#willHide}

Tell the component it's about to become hidden.

-----

### didHide() {#didHide}

Tell the component it became hidden.

-----

### destroy() {#destroy}

Remove this component from its parent and destroy its hierarchy.

If you override this method, make sure you call the parent method at
the end of your implementation.

#### Returns:

- *[Moobile.Component](../Component/Component.md)* This Moobile.Component instance.

Static Methods {#static-methods}
--------------------------------------------------------------------------------

### Moobile.Component.defineRole(name, target, behavior) {#defineRole}

Define the process to execute upon finding an element with the given role.

#### Parameters:

Name       | Type                | Description
---------- | ------------------- | -----------
`name`     | String              | The name.
`target`   | [Moobile.Component](../Component/Component.md) | The target component or `null` to define the role for all components.
`behavior` | Function            | The function that defines the role's behavior.

#### Example:

	/**
	 * For every elements with the <code>data-role="wrapped"</code> attribute
	 * found in all type of components, an element will be created and wrapped
	 * around it.
	 */
	 Moobile.Component.defineRole('wrapped', null, function(element) {
	 	new Element('div.wrapped').wraps(element);
	 });

	/**
	 * For every elements with the <code>data-role="popup"</code> attribute, a
	 * new <code>Alert</code> object will be created and added to the view as
	 * a child component.
	 */
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

Name       | Type                | Description
---------- | ------------------- | -----------
`name`     | String              | The style name.
`target`   | [Moobile.Component](../Component/Component.md) | The target component or `null` to define the role for all components.
`behavior` | Object              | The style definition which consists of an object with an `attach` and `detach` method.

#### Example:

	Moobile.Component.defineStyle('glowing', Moobile.Button, {
		attach: function() {
			this.addClass('glow');
		},
		detach: function() {
			this.removeClass('glow');
		}
	})

-----

Members {#members}
--------------------------------------------------------------------------------

### *Object* style {#style}

The current style.

-----

### *String* name {#name}

The name.

-----

### *Element* element {#element}

The element.

-----

### *Boolean* ready {#ready}

Whether this component is ready.

-----

### *Object* options {#options}

The class options.

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The component's extra CSS class name.
`styleName` | String | The component's default style.
`tagName`   | String | The component's default element type.

Events {#events}
--------------------------------------------------------------------------------

- tap
- tapstart
- tapmove
- tapend
- touchstart
- touchmove
- touchend
- pinch
- swipe
- show
- hide
