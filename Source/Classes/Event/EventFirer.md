Moobile.EventFirer
================================================================================

##### Implements *Events*, *Options*, *Class.Binds*

Provides the base class for classes that fire events.

Methods {#methods}
--------------------------------------------------------------------------------

### fireEvent(type, [args], [delay]) {#fireEvent}

Fires all events of a specified type if this type allowed to fire. This method appends a reference of the object that fires the event to the argument list.

#### Parameters:

Name               | Type   | Description
------------------ | ------ | --------------------------------------------------
`type`             | String | The type of event (e.g. 'complete').
`args`  *Optional* | Array  | The argument(s) to pass to the function. To pass more than one argument, the arguments must be in an array.
`delay` *Optional* | Number | Delay in milliseconds to wait before executing the event (defaults to 0).

#### Returns:

- `Moobile.EventFirer` This Class instance.

#### Example:

	var Cow = new Class({
		Extends: Moobile.EventFirer,
		eat: function() {
			this.fireEvent('ingest', 'hay']);
		}
	});
	var daisy = new Cow();
	daisy.addEvent('ingest', function(food, sender) {
		console.log(food); // 'hay'
		console.log(sender); // the 'daisy' instance
	});
	daisy.eat();

-----

### eventShouldFire(type, args) {#eventShouldFire}

Indicates whether the specified event can be fired.

Override this method if you wish to limit the events that can be fired.

#### Parameters:

Name   | Type   | Description
-------| ------ | -----------
`type` | String | The event's type.
`args` | Array  | The event's arguments.

#### Returns:

- `Boolean` Whether the event can be fired.

#### Example:

	var Cow = new Class({
		Extends: Moobile.EventFirer,
		eat: function() {
			this.fireEvent('ingest', 'hay']);
			this.fireEvent('ingest', 'mud']);
		},
		eventShouldFire: function(type, args) {
			if (type == 'ingest') {
				return args[0] === 'hay';
			}
			return this.parent(type, args);
		}
	});
	var daisy = new Cow();
	daisy.addEvent('ingest', function(food, sender) {
		// this will be called only once because the second event will not fire
		console.log(food); // 'hay'
		console.log(sender); // the 'daisy' instance
	});
	daisy.eat();

-----

### willFireEvent(type, args) {#willFireEvent}

Tell this entity it's about to fire an event.

Override this method to provide your own implementation.

#### Parameters:

Name   | Type   | Description
-------| ------ | --------------------------------------------------
`type` | String | The event's type.
`args` | Array  | The event's arguments.

#### Example:

	var Cow = new Class({
		Extends: Moobile.EventFirer,
		eat: function() {
			this.fireEvent('ingest', 'hay']);
		},
		drink: function() {
			// ...
		},
		willFireEvent: function(type, args) {
			if (type == 'ingest') {
				// this will always be called before the event ingest is fired
				this.drink();
			}
		}
	});
	var daisy = new Cow();
	daisy.eat();

-----

### didFireEvent(type) {#getChildren}

Tell this entity it fired an event.

Override this method to provide your own implementation.

#### Parameters:

Name   | Type   | Description
-------| ------ | --------------------------------------------------
`type` | String | The event's type.
`args` | Array  | The event's arguments.

#### Example:

	var Cow = new Class({
		Extends: Moobile.EventFirer,
		eat: function() {
			this.fireEvent('ingest', 'hay']);
		},
		cleanup: function() {
			// ...
		},
		didFireEvent: function(type, args) {
			if (type == 'ingest') {
				// this will always be called after the event ingest is fired
				this.cleanup();
			}
		}
	});
	var daisy = new Cow();
	daisy.eat();
