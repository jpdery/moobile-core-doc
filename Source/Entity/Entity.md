Moobile.Entity
================================================================================

##### Implements `Events`, `Options`, `Class.Binds`

Provides the base class for objects that encapsulates a DOM element.

Initialization {#initialiation}
--------------------------------------------------------------------------------

Methods {#methods}
--------------------------------------------------------------------------------

### initialize(element, options, name)

Initializes this entity.

The `element` given to this entity must be an instance of an `Element`, an element id or an HTML string that represents an element. An empty element is automatically created if none of the above were supplied.

If you override this method, make sure you call the parent method at the beginning of your implementation.

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The Element, element id or string.
`options` *Optional* | Object  | The options.
`name`    *Optional* | String  | The name.

-----

### addChild(entity, where, context)

Adds a child entity at the bottom of this entity. You may specify the location of the child entity using the `where` parameter combined with the optional `context` parameter.

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

-----

### getChild(name)

Return an entity from its own entites that matches the given name.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The name to look for.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* The child entity or `null` if no entities were found using the given name.

-----

### hasChild(entity)

Indicates whether this entity is the direct parent of a given entity.

#### Parameters:

Name     | Type                               | Description
-------- | ---------------------------------- | -----------
`entity` | [Moobile.Entity](Entity/Entity.md) | The entity.

#### Returns:

- *Boolean* Whether this entity owns a given entity.

-----

### getChildren(type)

Returns all the child entities.

#### Parameters:

Name              | Type  | Description
----------------- | ----- | -----------
`type` *Optional* | Class | The type of children to filter.

#### Returns:

- *Array* The child entities.

-----

### replaceChild(oldEntity, newEntity)

Replaces a child entity with another.

#### Parameters:

Name        | Type                               | Description
----------- | ---------------------------------- | -----------
`oldEntity` | [Moobile.Entity](Entity/Entity.md) | The entity to remove.
`newEntity` | [Moobile.Entity](Entity/Entity.md) | The entity to add.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity

-----

### removeChild(entity)

Removes a child entity. The removed entity will not be destroyed  since it could be added to another entity. If you wish to destroy the given entity, you must do it manually by calling the `destroy` method.

#### Parameters:

Name     | Type                               | Description
-------- | ---------------------------------- | -----------
`entity` | [Moobile.Entity](Entity/Entity.md) | The entity to remove.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### removeAllChildren()

Removes all children.The removed entities will not be destroyed  since it could be added to another entity. If you wish to destroy the given entity, you must do it manually by calling the `destroy` method.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### removeFromParent()

Removes this entity from its parent without destroying it.  If you wish to destroy the given entity, you must do it manually by calling the `destroy` method.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### setStyle(name)

Sets the entity's style. Do not be confused with the `Element.setStyle` as it does not set a CSS style. Instead, this method is used to set a style defined with `Moobile.Entity.defineStyle`.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The style name.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### getStyle()

Returns the name of the style that is current applied.

#### Returns:

- *String* The style name or `null` if no styles were applied to this entity.

-----

### addClass(name)

Adds a CSS class to this entity's element.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The CSS class.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### removeClass(name)

Removes a CSS class from this entity's element.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The CSS class.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### toggleClass(name)

Adds or removes a CSS class from this entity.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The CSS class.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### setParent(parent)

Sets the entity that contains this entity. This method is handled by the API and should not be called manually.

#### Parameters:

Name     | Type                               | Description
-------- | ---------------------------------- | -----------
`parent` | [Moobile.Entity](Entity/Entity.md) | The parent.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### getParent()

Returns the entity that contains this entitiy.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* The entity that contains this entity.

-----

### hasParent()

Indicates whether this entity has a parent.

#### Returns:

- *Boolean* Whether this entity has an parent.

-----

### setReady()

Marks this entity as begin ready meaning its element is part of the DOM and can be, for instance, measured. This method is handled by the API and should not be called manually.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### isReady()

Indicates whether this entity is ready.

#### Returns:

- *Boolean* Whether the entity is ready.

-----

### setWindow(window)

Sets the window that contains this entity. This method is handled by the API and should not be called manually.

#### Parameters:

Name     | Type                        | Description
-------- | --------------------------- | -----------
`window` | [Moobile.Window](Window/Window.md) | The window.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### getWindow()

Returns the window that contains this entity.

#### Returns:

- *[Moobile.Window](Docs/Window/Window.md)* The window.

-----

### hasWindow()

Indicates whether this entity has a window.

#### Returns:

- *Boolean* Whether this entity as a window.

-----

### getName()

Return the name used to identify this entity among its siblings. Given at initialization, the name does not need to be absolutely unique, only different from its siblings.

#### Returns:

- *String* The name.

-----

### getElement(selector)

Returns this entity's element or the first element within this entity's element that matches the given selector.

#### Parameters:

Name                  | Type   | Description
--------------------- | ------ | -----------
`selector` *Optional* | String | An CSS selector.

#### Returns:

- *Element* This entity's element or the first element that matches the selector.

-----

### getElements(selector)

Returns a collection of elements from the entity's element that matches the given selector.

#### Parameters:

Name                  | Type   | Description
--------------------- | ------ | -----------
`selector` *Optional* | String | The CSS selector.

#### Returns:

- *Elements* A collection of elements.

-----

### hasElement(element)

Indicates whether an element within this entity's element.

#### Parameters:

Name      | Type    | Description
--------- | ------- | -----------
`element` | Element | The element.

#### Returns:

- *Boolean* Whether the element exists.

-----

### getRoleElement(role)

Returns an element with a given `data-role` attribute.

This method will discard any element with a `data-role` attribue that are child of another element with a `data-role` attribute unless the latter is this entity's lement.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`role` | String | The role name.

#### Returns:

- *Element* The element or `null` if no elements were found.

-----

### getRoleElements(role)

Returns a collection of element with a given `data-role` attribute.

This method will discard any element with a `data-role` attribue that are child of another element with a `data-role` attribute unless the latter is this entity's lement.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`role` | String | The role name.

#### Returns:

- *Elements* A collection of elements.

-----

### attachRole(element, role)

Executes a role definition opon an element.

#### Parameters:

Name      | Type    | Description
--------- | ------- | -----------
`element` | Element | The element.
`role`    | String  | The role name.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### getSize()

Returns this entity's size as an object with two keys, `x` to indicate the
width and `y` to indicate the height.

#### Returns:

- *Object* This entity's size.

-----

### show()

Shows this entity using the `display` CSS property of this entity's element.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### hide()

Hides this entity using the `display` CSS property of this entity's element.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

-----

### willBuild()

Tells the entity it's about to be loaded.

This method is called once the entity's element has been set and before
other pieces of the initialization such as processing elements with role
and applying style have taken place.

-----

### didBuild()

Tells the entity it's has been loaded.

This method is called once the entire initialization process is
completed, after elements with roles were processed and style was
loaded.

-----

### didBecomeReady()

Tells the entity it has become part of the DOM document.

-----

### willAddChild(entity)

Tells the entity a child entity is about to be added.

#### Parameters:

Name     | Type                               | Description
-------- | ---------------------------------- | -----------
`entity` | [Moobile.Entity](Entity/Entity.md) | The entity that is going to be added.

-----

### didAddChild(entity)

Tell the entity a child entity has been added.

#### Parameters:

Name     | Type                               | Description
-------- | ---------------------------------- | -----------
`entity` | [Moobile.Entity](Entity/Entity.md) | The entity that was added.

-----

### willRemoveChild(entity)

Tell the entity a child entity is about to be removed.

#### Parameters:

Name     | Type                               | Description
-------- | ---------------------------------- | -----------
`entity` | [Moobile.Entity](Entity/Entity.md) | The entity that will be removed.

-----

### didRemoveChild(entity)

Tell the entity a child entity has been removed.

#### Parameters:

Name     | Type                               | Description
-------- | ---------------------------------- | -----------
`entity` | [Moobile.Entity](Entity/Entity.md) | The entity that was removed.

-----

### parentWillChange(parent)

Tell the entity it's about to be moved to a new entity.

#### Parameters:

Name     | Type                               | Description
-------- | ---------------------------------- | -----------
`parent` | [Moobile.Entity](Entity/Entity.md) | The entity that will own this entity.

-----

### parentDidChange(parent)

Tell the entity it has been moved to a new entity.

#### Parameters:

Name     | Type                               | Description
-------- | ---------------------------------- | -----------
`parent` | [Moobile.Entity](Entity/Entity.md) | The entity that owns this entity.

-----

### willShow()

Tell the entity it's about to become visible.

-----

### didShow()

Tell the entity it became visible.

-----

### willHide()

Tell the entity it's about to become hidden.

-----

### didHide()

Tell the entity it became hidden.

-----

### destroy()

Destroy this entity after it's been removed from its parent.

If you override this method, make sure you call the parent method at
the end of your implementation.

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This entity.

Static Methods {#methods}
--------------------------------------------------------------------------------

### Moobile.Entity.fromElement(element, property, type)

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

### Moobile.Entity.defineRole(name, target, behavior)

Defines the behavior of a role for an entity or all entities if the `target` parameter is `null`. The `behavior` function will be bound to the entity and receive it's element upon execution.

#### Parameters:

Name     | Type                                 | Description
-------- | ------------------------------------ | -----------
`name`     | String                             | The name.
`target`   | [Moobile.Entity](Entity/Entity.md) | The target entity.
`behavior` | Function                           | The function that defines the role's behavior.

-----

### Moobile.Entity.defineStyle(name, target, behavior)

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

### *Object* style

The current style.

-----

### *String* name

The name.

-----

### *Element* element

The root element.

-----

### *Array* children

The child entities.

-----

### *[Moobile.Entity](Entity/Entity.md)* parentEntity

The entity that contains this entity.

-----

### *[Moobile.Window](Docs/Window/Window.md)* window

The window that contains this entity.

-----

### *Boolean* ready

Whether this entity is ready.

-----

### *Object* options

The class options.

Events {#events}
--------------------------------------------------------------------------------