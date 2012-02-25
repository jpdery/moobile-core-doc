Moobile.EventDispatcher
================================================================================

##### Implements *Events*, *Options*, *Class.Binds*

Provides the base class for classes that fire events.

Initialization {#initialize}
--------------------------------------------------------------------------------

This class should not be instantiated, instead you should subclass it.

Events {#events}
--------------------------------------------------------------------------------

This class does not define events.

Members {#members}
--------------------------------------------------------------------------------

This class does not define members.

Methods {#methods}
--------------------------------------------------------------------------------

### fireEvent(type, [args], [delay]) {#fireEvent}

Fires all events of a specified type if this type allowed to fire. This methods appends a reference to the object who's firing the event to the event arguments.

#### Parameters:

Name               | Type   | Description
------------------ | ------ | --------------------------------------------------
`type`             | String | The type of event (e.g. 'complete').
`args`  *Optional* | Array  | The argument(s) to pass to the function. To pass more than one argument, the arguments must be in an array.
`delay` *Optional* | Number | Delay in milliseconds to wait before executing the event (defaults to 0).

#### Returns:

- [Moobile.Entity](Entity/Entity.md) This Class instance.

-----

### eventShouldFire(type, args) {#eventShouldFire}

Indicates whether the specified event can be fired. Override this method if you wish to limit the events that can be fired.

#### Parameters:

Name   | Type   | Description
-------| ------ | -----------
`type` | String | The event's type.
`args` | Array  | The event's arguments.

#### Returns:

- `Boolean` Whether the event can be fired.

-----

### willFireEvent(type, args) {#willFireEvent}

Tell this entity it's about to fire an event.

Override this method to provide your own implementation.

#### Parameters:

Name   | Type   | Description
-------| ------ | --------------------------------------------------
`type` | String | The event's type.
`args` | Array  | The event's arguments.

-----

### didFireEvent(type) {#getChildren}

Tell this entity it fired an event.

Override this method to provide your own implementation.

#### Parameters:

Name   | Type   | Description
-------| ------ | --------------------------------------------------
`type` | String | The event's type.
`args` | Array  | The event's arguments.
