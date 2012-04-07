Moobile.Scroller
================================================================================

##### Implements *Events*, *Options*, *Class.Binds*

Provides the class that wraps a scroller engine.

Initialization {#initialization}
--------------------------------------------------------------------------------

Methods {#methods}
--------------------------------------------------------------------------------

### initialize(content, options) {#initialize}

Initializes this scroller.

This `content` element given to this method will be wrapped with an
other element. Any CSS classes given to the `content` element will be
added to the wrapper element with the `-wrapper` suffix.

This method also creates a scroller engine that is proper for the
current platform based on the `engine` option.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`content` *Optional* | Element | The Element, element id or string.
`options` *Optional* | Object | The options.


-----

### destroy()

Destroys this scroller.

This method will destroy the scroller engine. The scrollable content
will not be removed upon destruction as the content wrapper will.


#### Returns:

- [Moobile.Scroller](Scroller/Scroller.md) This scroller.


-----

### scrollTo(x, y, time) {#scrollTo}

Scrolls to a set of coordinates.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`x` *Optional* | Number | The x coordinate.
`y` *Optional* | Number | The y coordinate.
`time` *Optional* | Number | The duration of the scroll.

#### Returns:

- [Moobile.Scroller](Scroller/Scroller.md) This scroller.


-----

### scrollToPage(pageX, pageY, time) {}

Scrolls to page.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`pageX` *Optional* | Number | The horizontal page number.
`pageY` *Optional* | Number | The vertical page number.
`time` *Optional* | Number | The duration of the scroll.

#### Returns:

- [Moobile.Scroller](Scroller/Scroller.md) This scroller.


-----

### scrollToElement(element, time)

Scrolls to an element.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`element` *Optional* | Element | The element to scroll to.
`time` *Optional* | Number | The duration of the scroll.

#### Returns:

- [Moobile.Scroller](Scroller/Scroller.md) This scroller.


-----

### snap()

Snaps to the proper page.

This method will snap to the closest page based on the scroller options.
You should seldom need to call this method as it's called automatically
when the `snapToPage` option is enabled.


#### Returns:

- [Moobile.Scroller](Scroller/Scroller.md) This scroller.


-----

### refresh()

Refreshes this scroller.

What this method exacly does is based on this scroller engine
implementation of the `refresh` method.


#### Returns:

- [Moobile.Scroller](Scroller/Scroller.md) This scroller.


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

### getPage()

Returns the current page.

This method will return the current page as an object with two keys,
`x` which indicates horizontal page and `y` which indicates the vertical
page.


#### Returns:

- Object This scroller's current page.


-----

### getContent()

Returns the content element.


#### Returns:

- Element The content element.


-----

### getWrapper()

Returns the wrapper element.


#### Returns:

- Element The wrapper element.


-----


Members {#members}
--------------------------------------------------------------------------------

### [Moobile.Scroller.Engine](Scroller/Scroller.Engine.md) engine

The engine.

-----

### Element content

The content element, with variable size.

-----

### Element wrapper

The content wrapper element, with fixed size.

-----

### Object startScroll

The scrolling position at the beginning of a scroll.

-----

### Object startTime

The scrolling time at the beginning of a scroll.

-----

### Object startPage

The scrolling page at the beginning of a scroll.

-----

### Object page

The current page.

-----

### Object options

The class options.

-----


Events {#events}
--------------------------------------------------------------------------------