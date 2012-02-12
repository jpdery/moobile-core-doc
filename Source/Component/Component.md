Moobile.Component
================================================================================

##### Extends *[Moobile.Component](Entity/Entity.md)*

Provides the base class for objects that encapsulates a DOM element and it hierarchy. Do not instantiate this class directly, instead subclass it to create your own components.

Methods {#methods}
--------------------------------------------------------------------------------

### addChild(child, [where], [context]) {#addChild}

Adds a child component inside this component. The child component location can be specified using `where` and `context`. If there are no `context` specified, the location will be relative to this component's element.

***Note***: The component's element will not be re-injected if it's already present, in this case only a reference of the child component will be stored.

#### Parameters:

Name                 | Type                | Description
-------------------- | ------------------- | -----------
`child`              | [Moobile.Component] | The child component.
`where`   *Optional* | String              | The location name `top`, `bottom`, `before`, `after`.
`context` *Optional* | Element             | The location context element.

#### Returns:

- *[Moobile.Component]* This Moobile.Component instance.

-----

### getChild(name) {#getChild}

Return an component from its child components that matches the given name.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The component's name to search for.

#### Returns:

- *[Moobile.Component]* The child component or `null` if no components were found using the given name.

-----

### hasChild(child) {#hasChild}

Indicates whether a component is the direct child of this component.

#### Parameters:

Name    | Type                | Description
------- | ------------------- | -----------
`child` | [Moobile.Component] | The component to search for.

#### Returns:

- *Boolean* Whether the component is the direct child of this component.

-----

### getChildren([type]) {#getChildren}

Returns all the child components or all the child components of a given type.

#### Parameters:

Name              | Type  | Description
----------------- | ----- | -----------
`type` *Optional* | Class | The type of child to filter by.

#### Returns:

- *Array* The child components.

-----

### replaceChild(child, replacement) {#replaceChild}

Replaces a child component with another.

***Note:*** This method does not destroy the removed child component.

#### Parameters:

Name          | Type                               | Description
------------- | ---------------------------------- | -----------
`child`       | [Moobile.Component]                | The component to remove.
`replacement` | [Moobile.Component]                | The component to replace with.

#### Returns:

- *[Moobile.Component]* This Moobile.Component instance.

-----

### removeChild(child) {#removeChild}

Removes a child component.

***Note:*** This method does not destroy the removed child component.

#### Parameters:

Name     | Type                | Description
-------- | ------------------- | -----------
`child`  | [Moobile.Component] | The component to remove.

#### Returns:

- *[Moobile.Component]* This Moobile.Component instance.

-----

### removeChildren([type]) {#removeChildren}

Removes all the child components or all the child components of a given type.

***Note:*** This method does not destroy the removed child component.

#### Parameters:

Name              | Type  | Description
----------------- | ----- | -----------
`type` *Optional* | Class | The type of child to filter by.

#### Returns:

- *[Moobile.Component]* This Moobile.Component instance.

-----

### removeFromParent() {#removeFromParent}

Removes this component from its parent component.

***Note:*** This method does not destroy the component.

#### Returns:

- *[Moobile.Component]* This Moobile.Component instance.

-----

### setParent(parent) {#setParent}

Sets the parent component of this component. This method is handled by the API and should not be called manually.

#### Parameters:

Name     | Type                | Description
-------- | ------------------- | -----------
`parent` | [Moobile.Component] | The parent.

#### Returns:

- *[Moobile.Component]* This Moobile.Component instance.

-----

### getParent() {#getParent}

Returns the component that contains this entitiy.

#### Returns:

- *[Moobile.Component]* The component that contains this component.

-----

### hasParent() {#hasParent}

Indicates whether this component has a parent.

#### Returns:

- *Boolean* Whether this component has an parent.

----

### setWindow(window) {#setWindow}

Sets the window that contains this component. This method is handled by the API and should not be called manually.

#### Parameters:

Name     | Type             | Description
-------- | ---------------- | -----------
`window` | [Moobile.Window] | The window.

#### Returns:

- *[Moobile.Component]* This Moobile.Component instance.

-----

### getWindow() {#getWindow}

Returns the window that contains this component.

#### Returns:

- *[Moobile.Window](Window/Window.md)* The window.

-----

### hasWindow() {#hasWindow}

Indicates whether this component has a window.

#### Returns:

- *Boolean* Whether this component as a window.

----

### setReady() {#setReady}

Marks this component as being ready.

 ***Note:*** A component is ready when its element is part of the DOM.

#### Returns:

- *[Moobile.Component]* This Moobile.Component instance.

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

- *[Moobile.Component]* This Moobile.Component instance.

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

- *[Moobile.Component]* This Moobile.Component instance.

-----

### removeClass(name) {#removeClass}

Removes a CSS class from this component's element.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The CSS class.

#### Returns:

- *[Moobile.Component]* This Moobile.Component instance.

-----

### toggleClass(name) {#toggleClass}

Adds or removes a CSS class from this component.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The CSS class.

#### Returns:

- *[Moobile.Component]* This Moobile.Component instance.


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

- *[Moobile.Component]* This Moobile.Component instance.

-----

### hide() {#hide}

Hides this component using the `display` CSS property of this component's element.

#### Returns:

- *[Moobile.Component]* This Moobile.Component instance.

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

Tells the component it has become part of the DOM document.

Override this method to provide your custom implementation.

-----

### willAddChild(component) {#willAddChild}

Tells the component a child component is about to be added.

#### Parameters:

Name        | Type                | Description
----------- | ------------------- | -----------
`component` | [Moobile.Component] | The component that is going to be added.

-----

### didAddChild(component) {#didAddChild}

Tell the component a child component has been added.

#### Parameters:

Name        | Type                | Description
----------- | ------------------- | -----------
`component` | [Moobile.Component] | The component that was added.

-----

### willRemoveChild(component) {#willRemoveChild}

Tell the component a child component is about to be removed.

#### Parameters:

Name        | Type                | Description
----------- | ------------------- | -----------
`component` | [Moobile.Component] | The component that will be removed.

-----

### didRemoveChild(component) {#didRemoveChild}

Tell the component a child component has been removed.

#### Parameters:

Name     | Type                   | Description
-------- | ---------------------- | -----------
`component` | [Moobile.Component] | The component that was removed.

-----

### parentWillChange(parent) {#parentWillChange}

Tell the component it's about to be moved to a new component.

#### Parameters:

Name     | Type                | Description
-------- | ------------------- | -----------
`parent` | [Moobile.Component] | The component that will own this component.

-----

### parentDidChange(parent) {#parentDidChange}

Tell the component it has been moved to a new component.

#### Parameters:

Name     | Type                | Description
-------- | ------------------- | -----------
`parent` | [Moobile.Component] | The component that owns this component.

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

- *[Moobile.Component]* This Moobile.Component instance.

Static Methods {#static-methods}
--------------------------------------------------------------------------------

### Moobile.Component.defineRole(name, target, behavior) {#defineRole}

Define the process to execute upon finding an element with the given role.

#### Parameters:

Name       | Type                | Description
---------- | ------------------- | -----------
`name`     | String              | The name.
`target`   | [Moobile.Component] | The target component or `null` to define the role for all components.
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
`target`   | [Moobile.Component] | The target component or `null` to define the role for all components.
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

Events {#events}
--------------------------------------------------------------------------------

#### tap

#### tapstart

#### tapmove

#### tapend

#### touchstart

#### touchmove

#### touchend

#### pinch

#### swipe

#### show

#### hide
