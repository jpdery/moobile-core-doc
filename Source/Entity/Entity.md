Moobile.Entity
================================================================================

##### Implements *Events*, *Options*, *Class.Binds*

Provides the root class of most Moobile objects.

Methods {#methods}
--------------------------------------------------------------------------------

### fireEvent(type, [args], [delay]) {#fireEvent}

Fires all events of a specified type if it's allowed to fire. This methods appends a reference to the object who's firing the event to the event arguments.

#### Parameters:

Name               | Type   | Description
------------------ | ------ | --------------------------------------------------
`type`             | String | The type of event (e.g. 'complete').
`args`  *Optional* | Array  | The argument(s) to pass to the function. To pass more than one argument, the arguments must be in an array.
`delay` *Optional* | Number | Delay in milliseconds to wait before executing the event (defaults to 0).

#### Returns:

- *[Moobile.Entity](Entity/Entity.md)* This Class instance.

-----

### eventShouldFire(type, args) {#eventShouldFire}

Indicates whether the given event can be fired. Override this method if you wish to limit the events that can be fired on this object.

#### Parameters:

Name   | Type   | Description
-------| ------ | --------------------------------------------------
`type` | String | The event's type.
`args` | Array  | The event's arguments.

#### Returns:

- *Boolean* Whether the given event can be fired.

-----

### willFireEvent(type, args) {#willFireEvent}

Tell this entity it's about to fire an event. This method does nothing, override it to add your own implementation.

#### Parameters:

Name   | Type   | Description
-------| ------ | --------------------------------------------------
`type` | String | The event's type.
`args` | Array  | The event's arguments.

-----

### didFireEvent(type) {#getChildren}

Tell this entity it fired an event. This method does nothing, override it to add your own implementation.

#### Parameters:

Name   | Type   | Description
-------| ------ | --------------------------------------------------
`type` | String | The event's type.
`args` | Array  | The event's arguments.
