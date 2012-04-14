Moobile.Scroller.Engine.Native
================================================================================

##### Extends `Moobile.Scroller.Engine.Navive`

Provides an engine that uses the native scroller overflow.

Initialization {#initialization}
--------------------------------------------------------------------------------

Methods {#methods}
--------------------------------------------------------------------------------

### initialize(content, options)

Initializes this scroller engine.

This method will creates a `wrapper` element and wrap it around the
given `content` element.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`content` *Optional* | Element | The Element, element id or string.
`options` *Optional* | Object | The options.


-----

### destroy()

Destroys this scroller engine.

This method will remove the wrapper without removing the content
element.


#### Returns:

- `Moobile.Scroller.Engine.Navive` This scroller engine.


-----

### scrollTo(x, y, time)

Scrolls to a set of coordinates.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`x` *Optional* | Number | The x coordinate.
`y` *Optional* | Number | The y coordinate.
`time` *Optional* | Number | The duration of the scroll.

#### Returns:

- `Moobile.Scroller.Engine.Navive` This scroller engine.


-----

### scrollToElement(element, time)

Scrolls to an element.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`element` *Optional* | Element | The element to scroll to.
`time` *Optional* | Number | The duration of the scroll.

#### Returns:

- `Moobile.Scroller.Engine.Navive` This scroller engine.


-----

### refresh()

Refreshes this scroller engine.


#### Returns:

- `Moobile.Scroller.Engine.Navive` This scroller engine.


-----

### getSize()

Returns the size.

This method will return the wrapper's size as an object with two keys,
`x` which indicates the width and `y` which indicates the height.


#### Returns:

- Object The size.


-----

### getScroll()

Returns the current scroll position.

This method will return the current scroll position as an object
with two keys, `x` which indicates the horizontal scroll and `y` which
indicates the vertical scroll of this entity.


#### Returns:

- Object The scroll position.


-----

### getScrollSize()

Returns size including the scrolling area.

This method will return the content's size as an object with two keys,
`x` which indicates the width and `y` which indicates the height.


#### Returns:

- Object The size including the scrolling area.


-----


Members {#members}
--------------------------------------------------------------------------------


Events {#events}
--------------------------------------------------------------------------------