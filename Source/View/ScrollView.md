Moobile.ScrollView
================================================================================

##### Extends [Moobile.View](View/View.md)

Provides support for displaying content that is larger than the view
       size.

Initialization {#initialization}
--------------------------------------------------------------------------------

Methods {#methods}
--------------------------------------------------------------------------------

### scrollTo(x, y, time)

Scrolls to a set of coordinate.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`x` *Optional* | Number | The x coordinate.
`y` *Optional* | Number | The y coordinate.
`time` *Optional* | Number | The duration of the scroll.

#### Returns:

- [Moobile.ScrollView](View/ScrollView.md) This scroll view.

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

- [Moobile.ScrollView](View/ScrollView.md) This scroll view.

-----

### scrollToElement(element, time)

Scrolls to an element.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`element` *Optional* | Element | The element to scroll to.
`time` *Optional* | Number | The duration of the scroll.

#### Returns:

- [Moobile.ScrollView](View/ScrollView.md) This scroll view.

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

Returns the content size including the scrolling area.

This method will return the content size as an object with two keys,
`x` which indicates the width and `y` which indicates the height.


#### Returns:

- Object The size including the scrolling area.


-----


Members {#members}
--------------------------------------------------------------------------------

### [Moobile.Scroller](Scroller/Scroller.md) scroller

The scroller.

-----

### Element wrapper

The element that wraps the content and make it scrollable.

-----

### Object options

The class options.

-----

Events {#events}
--------------------------------------------------------------------------------