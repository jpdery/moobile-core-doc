Moobile.ScrollView
================================================================================
##### Extends [View](Docs/View/View.md), Implements `Events`, `Options`, `Class.Binds`

Provides supports for displaying content that is larger tha this view
       size.

Initialization
--------------------------------------------------------------------------------

Methods
--------------------------------------------------------------------------------

### scrollTo(x, y, time)

Scrolls to a set of coordinates.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`x` *Optional* | Number | The x coordinate.
`y` *Optional* | Number | The y coordinate.
`time` *Optional* | Number | The duration of the scroll.

#### Returns:

- [ScrollView](Docs/View/ScrollView.md) This scroll view.


-----

### scrollToPage(pageX, pageY, time)

Scrolls to page.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`pageX` *Optional* | Number | The horizontal page number.
`pageY` *Optional* | Number | The vertical page number.
`time` *Optional* | Number | The duration of the scroll.

#### Returns:

- [Scroller](Docs/Scroller/Scroller.md) This scroller.


-----

### scrollToElement(element, time)

Scrolls to an element.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`element` *Optional* | Element | The element to scroll to.
`time` *Optional* | Number | The duration of the scroll.

#### Returns:

- [Scroller](Docs/Scroller/Scroller.md) This scroller.


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

Returns the content's size including the scrolling area.

This method will return the content's size as an object with two keys,
`x` which indicates the width and `y` which indicates the height.


#### Returns:

- Object The size including the scrolling area.


-----


Members
--------------------------------------------------------------------------------

### [Scroller](Docs/Scroller/Scroller.md) scroller

The scroller.

-----

### Element wrapper

The element that wraps the content and make it scrollable.

-----

### Object options

The class options.

-----


Events
--------------------------------------------------------------------------------