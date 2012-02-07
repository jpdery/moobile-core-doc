Moobile.Entity
================================================================================

##### Implements *Events*, *Options*, *Class.Binds*

Provides the base class for objects that encapsulates a DOM element.

Initialization {#initialization}
--------------------------------------------------------------------------------

#### Syntax

	var entity = new Moobile.Entity([element], [options], [name])

The `element` given to this entity must be an an Element object, an element id or an HTML string that represents an element. An empty element is automatically created if none of the above were supplied.

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The Element, element id or string.
`options` *Optional* | Object  | The options.
`name`    *Optional* | String  | The name.

#### Options

Name        | Type   | Description                              | Default
----------- | ------ | ---------------------------------------- | ---------
`className` | String | The class name of this entity's element. | `null`
`styleName` | String | The style name.                          | `null`
`tagName`   | String | The default type of element to build.    | `div`

#### Example 1: *Create an empty entity*

	var entity = new Moobile.Entity();

#### Example 2: *Create an entity using an element from the DOM*

	var entity = new Moobile.Entity(document.id('my-element'));

#### Example 3: *Create an entity using raw HTML*

	var entity = new Moobile.Entity('<div><strong>Lorem</strong><div>');

Methods {#methods}
--------------------------------------------------------------------------------

### addChild(entity, [where], [context]) {#addChild}

Adds a child entity at the bottom of this entity. You may specify the location of the child entity using the `where` parameter combined with the `context` parameter.

If specified, the child entity can be added at the `top`, `bottom`, `before` or `after` this entity. If an element is given as the `context`, the location will be relative to this element.

The child entity's element will not be re-injected in this entity's element if it's already there, in this case only a reference of the child entity will be stored.

#### Parameters:

Name                 | Type                               | Description
-------------------- | ---------------------------------- | -----------
`entity`             | [Moobile.Entity](Entity/Entity.md) | The entity.
`where`   *Optional* | String                             | The location.
`context` *Optional* | Element                            | The location context element.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

#### Example 1: Adding a child entity

	var parentEntity = new Moobile.Entity();
	parentEntity.addClass('parent');

	var childEntity = new Moobile.Entity();
	childEntity.addClass('child');

	parentEntity.addChild(childEntity);

	/* Creates
	<div class="parent">
		<div class="child"></div>
	</div>
	*/

#### Example 2: Adding a child entity at a specific location

	var parentEntityHTML = '<div><div class="middle"></div></div>';

	var parentEntity = new Moobile.Entity(parentEntityHTML);
	parentEntity.addClass('parent');

	var childEntity = new Moobile.Entity();
	childEntity.addClass('child');

	parentEntity.addChild(childEntity, 'top');

	/* Creates
	<div class="parent">
		<div class="child"></div>
		<div class="middle"></div>
	</div>
	*/

#### Example 3: Adding a child entity relative to an element

	var parentEntityHTML = '<div><div class="middle"></div></div>';

	var parentEntity = new Moobile.Entity(parentEntityHTML);
	parentEntity.addClass('parent');

	var childEntity = new Moobile.Entity();
	childEntity.addClass('child');

	var middleElement = parentEntity.getElement('.middle');

	parentEntity.addChild(childEntity, 'bottom', middleElement);

	/* Creates
	<div class="parent">
		<div class="middle">
			<div class="child"></div>
		</div>
	</div>
	*/

-----

### getChild(name) {#getChild}

Return an entity from its own entites that matches the given name.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The name to look for.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* The child entity or `null` if no entities were found using the given name.

#### Example

	var parentEntity = new Moobile.Entity();
	var childEntity = new Moobile.Entity(null, null, 'child-entity'); // we're giving a name
	parentEntity.addChild(childEntity);

	parentEntity.getChild('child-entity'); // return childEntity

-----

### hasChild(entity) {#hasChild}

Indicates whether this entity is the direct parent of a given entity.

#### Parameters:

Name     | Type                               | Description
-------- | ---------------------------------- | -----------
`entity` | [Moobile.Entity](Entity/Entity.md) | The entity.

#### Returns:

- *Boolean* Whether this entity owns a given entity.

-----

### getChildren(type) {#getChildren}

Returns all the child entities.

#### Parameters:

Name              | Type  | Description
----------------- | ----- | -----------
`type` *Optional* | Class | The type of children to filter.

#### Returns:

- *Array* The child entities.

-----

### replaceChild(oldEntity, newEntity) {#replaceChild}

Replaces a child entity with another.

#### Parameters:

Name        | Type                               | Description
----------- | ---------------------------------- | -----------
`oldEntity` | [Moobile.Entity](Entity/Entity.md) | The entity to remove.
`newEntity` | [Moobile.Entity](Entity/Entity.md) | The entity to add.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity

-----

### removeChild(entity) {#removeChild}

Removes a child entity. The removed entity will not be destroyed  since it could be added to another entity. If you wish to destroy the given entity, you must do it manually by calling the `destroy` method.

#### Parameters:

Name     | Type                               | Description
-------- | ---------------------------------- | -----------
`entity` | [Moobile.Entity](Entity/Entity.md) | The entity to remove.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### removeChildren() {#removeChildren}

Removes  children.The removed entities will not be destroyed  since it could be added to another entity. If you wish to destroy the given entity, you must do it manually by calling the `destroy` method.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### removeFromParent() {#removeFromParent}

Removes this entity from its parent without destroying it.  If you wish to destroy the given entity, you must do it manually by calling the `destroy` method.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### setStyle(name) {#setStyle}

Sets the entity's style. Do not be confused with the `Element.setStyle` as it does not set a CSS style. Instead, this method is used to set a style defined with `Moobile.Entity.defineStyle`.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The style name.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### getStyle() {#getStyle}

Returns the name of the style that is current applied.

#### Returns:

- *String* The style name or `null` if no styles were applied to this entity.

-----

### addClass(name) {#addClass}

Adds a CSS class to this entity's element.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The CSS class.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### removeClass(name) {#removeClass}

Removes a CSS class from this entity's element.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The CSS class.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### toggleClass(name) {#toggleClass}

Adds or removes a CSS class from this entity.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The CSS class.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### setParent(parent) {#setParent}

Sets the entity that contains this entity. This method is handled by the API and should not be called manually.

#### Parameters:

Name     | Type                               | Description
-------- | ---------------------------------- | -----------
`parent` | [Moobile.Entity](Entity/Entity.md) | The parent.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### getParent() {#getParent}

Returns the entity that contains this entitiy.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* The entity that contains this entity.

-----

### hasParent() {#hasParent}

Indicates whether this entity has a parent.

#### Returns:

- *Boolean* Whether this entity has an parent.

-----

### setReady() {#setReady}

Marks this entity as begin ready meaning its element is part of the DOM and can be, for instance, measured. This method is handled by the API and should not be called manually.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### isReady() {#isReady}

Indicates whether this entity is ready.

#### Returns:

- *Boolean* Whether the entity is ready.

-----

### setWindow(window) {#setWindow}

Sets the window that contains this entity. This method is handled by the API and should not be called manually.

#### Parameters:

Name     | Type                        | Description
-------- | --------------------------- | -----------
`window` | [Moobile.Window](Window/Window.md) | The window.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### getWindow() {#getWindow}

Returns the window that contains this entity.

#### Returns:

- *[Moobile.Window](Window/Window.md)* The window.

-----

### hasWindow() {#hasWindow}

Indicates whether this entity has a window.

#### Returns:

- *Boolean* Whether this entity as a window.

-----

### getName() {#getName}

Return the name used to identify this entity among its siblings. Given at initialization, the name does not need to be absolutely unique, only different from its siblings.

#### Returns:

- *String* The name.

-----

### getElement(selector) {#getElement}

Returns this entity's element or the first element within this entity's element that matches the given selector.

#### Parameters:

Name                  | Type   | Description
--------------------- | ------ | -----------
`selector` *Optional* | String | An CSS selector.

#### Returns:

- *Element* This entity's element or the first element that matches the selector.

-----

### getElements(selector) {#getElements}

Returns a collection of elements from the entity's element that matches the given selector.

#### Parameters:

Name                  | Type   | Description
--------------------- | ------ | -----------
`selector` *Optional* | String | The CSS selector.

#### Returns:

- *Elements* A collection of elements.

-----

### hasElement(element) {#hasElement}

Indicates whether an element within this entity's element.

#### Parameters:

Name      | Type    | Description
--------- | ------- | -----------
`element` | Element | The element.

#### Returns:

- *Boolean* Whether the element exists.

-----

### getRoleElement(role) {#getRoleElement}

Returns an element with a given `data-role` attribute.

This method will discard any element with a `data-role` attribue that are child of another element with a `data-role` attribute unless the latter is this entity's lement.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`role` | String | The role name.

#### Returns:

- *Element* The element or `null` if no elements were found.

-----

### getRoleElements(role) {#getRoleElements}

Returns a collection of element with a given `data-role` attribute.

This method will discard any element with a `data-role` attribue that are child of another element with a `data-role` attribute unless the latter is this entity's lement.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`role` | String | The role name.

#### Returns:

- *Elements* A collection of elements.

-----

### attachRole(element, role) {#attachRole}

Executes a role definition opon an element.

#### Parameters:

Name      | Type    | Description
--------- | ------- | -----------
`element` | Element | The element.
`role`    | String  | The role name.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### getSize() {#getSize}

Returns this entity's size as an object with two keys, `x` to indicate the
width and `y` to indicate the height.

#### Returns:

- *Object* This entity's size.

-----

### show() {#show}

Shows this entity using the `display` CSS property of this entity's element.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### hide() {#hide}

Hides this entity using the `display` CSS property of this entity's element.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### willBuild() {#willBuild}

Tells the entity it's about to be loaded.

This method is called once the entity's element has been set and before
other pieces of the initialization such as processing elements with role
and applying style have taken place.

-----

### didBuild() {#didBuild}

Tells the entity it's has been loaded.

This method is called once the entire initialization process is
completed, after elements with roles were processed and style was
loaded.

-----

### didBecomeReady() {#didBecomeReady}

Tells the entity it has become part of the DOM document.

-----

### willAddChild(entity) {#willAddChild}

Tells the entity a child entity is about to be added.

#### Parameters:

Name     | Type                               | Description
-------- | ---------------------------------- | -----------
`entity` | [Moobile.Entity](Entity/Entity.md) | The entity that is going to be added.

-----

### didAddChild(entity) {#didAddChild}

Tell the entity a child entity has been added.

#### Parameters:

Name     | Type                               | Description
-------- | ---------------------------------- | -----------
`entity` | [Moobile.Entity](Entity/Entity.md) | The entity that was added.

-----

### willRemoveChild(entity) {#willRemoveChild}

Tell the entity a child entity is about to be removed.

#### Parameters:

Name     | Type                               | Description
-------- | ---------------------------------- | -----------
`entity` | [Moobile.Entity](Entity/Entity.md) | The entity that will be removed.

-----

### didRemoveChild(entity) {#didRemoveChild}

Tell the entity a child entity has been removed.

#### Parameters:

Name     | Type                               | Description
-------- | ---------------------------------- | -----------
`entity` | [Moobile.Entity](Entity/Entity.md) | The entity that was removed.

-----

### parentWillChange(parent) {#parentWillChange}

Tell the entity it's about to be moved to a new entity.

#### Parameters:

Name     | Type                               | Description
-------- | ---------------------------------- | -----------
`parent` | [Moobile.Entity](Entity/Entity.md) | The entity that will own this entity.

-----

### parentDidChange(parent) {#parentDidChange}

Tell the entity it has been moved to a new entity.

#### Parameters:

Name     | Type                               | Description
-------- | ---------------------------------- | -----------
`parent` | [Moobile.Entity](Entity/Entity.md) | The entity that owns this entity.

-----

### willShow() {#willShow}

Tell the entity it's about to become visible.

-----

### didShow() {#didShow}

Tell the entity it became visible.

-----

### willHide() {#willHide}

Tell the entity it's about to become hidden.

-----

### didHide() {#didHide}

Tell the entity it became hidden.

-----

### destroy() {#destroy}

Destroy this entity after it's been removed from its parent.

If you override this method, make sure you call the parent method at
the end of your implementation.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

Static Methods {#methods}
--------------------------------------------------------------------------------

### Moobile.Entity.fromElement(element, property, type) {#fromElement}

Instantiates an entity based on a data-attribute stored on an element and validates the instance type. If the data-attribute is missing, an instance of the `type` will be returned.

#### Parameters:

Name       | Type    | Description
---------- | ------- | -----------
`element`  | Element | The element.
`property` | String  | The data-attribute that contains the class name.
`type`     | Object  | The class instanceof.

#### Returns:

- *Object* An entity instance.

-----

### Moobile.Entity.defineRole(name, target, behavior) {#defineRole}

Defines the behavior of a role for an entity or all entities if the `target` parameter is `null`. The `behavior` function will be bound to the entity and receive it's element upon execution.

#### Parameters:

Name     | Type                                 | Description
-------- | ------------------------------------ | -----------
`name`     | String                             | The name.
`target`   | [Moobile.Entity](Entity/Entity.md) | The target entity.
`behavior` | Function                           | The function that defines the role's behavior.

-----

### Moobile.Entity.defineStyle(name, target, behavior) {#defineStyle}

Defines a style for an entity or all entities if the `target` parameter is `null`. The `behavior` object needs an `attach` and `detach` method that will be used to install or remove the style. Both method will be bound to the entity upon execution.

#### Parameters:

Name     | Type                                 | Description
-------- | ------------------------------------ | -----------
`name`     | String                             | The style name.
`target`   | [Moobile.Entity](Entity/Entity.md) | The entity that will use this style.
`behavior` | Object                             | The style definition which consists of an object with an `attach` and `detach` method.

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

The root element.

-----

### *Array* children {#children}

The child entities.

-----

### *[Moobile.Entity](Entity/Entity.md)* parentEntity {#parentEntity}

The entity that contains this entity.

-----

### *[Moobile.Window](Window/Window.md)* window {#window}

The window that contains this entity.

-----

### *Boolean* ready {#ready}

Whether this entity is ready.

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
