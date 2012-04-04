Moobile.ScrollView
================================================================================

##### Extends [Moobile.View](../View/View.md)

Provides support for displaying content that is larger than the view size.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var scrollView = new Moobile.ScrollView([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The view's element, element id or html string.
`options` *Optional* | Object  | The view's options, see below.
`name`    *Optional* | String  | The view's name.

#### Options:

Name           | Type    | Description
-------------- | ------- | -----------
`className`    | String  | The view's default CSS class name, defaults to `null`.
`styleName`    | String  | The view's default style, defaults to `null`.
`tagName`      | String  | The view's element tag name, defaults to `div`.
`momentum`     | Boolean | Whether the view scrolls with momentum, defaults to `true`.
`scrollX`      | Boolean | Whether to scroll on the x axis, defaults to `true`.
`scrollY`      | Boolean | Whether to scroll on the y axis, defaults to `true`.
`snapToPage`   | Boolean | Whether to snap to the current page upon release, defaults to `false`.
`snapToPageAt` | Number  | The percentage moved to snap to the next page, defaults to `35`.
`snapToPageDuration` | Number | The time in miliseconds for the snap animation, defaults to `150`.
`snapToPageDelay` | Number | The view will automatically snap to the next page if the user scrolls for less than this time in miliseconds, defaults to `150`.

#### Generates:

	<div class="view scroll-view">
		<div class="view-content-wrapper scroll-view-content-wrapper scroll">
			<div data-role="view-content" class="view-content scroll-view-content" ></div>
		</div>
	</div>

#### Note:

Upon initialization, this view will use the CSS class name either provided as either an option or directly in the element to generate the view content's class name. The view content CSS class name will be made from the view's CSS class appended with `content`.

Events {#events}
--------------------------------------------------------------------------------

#### dragstart

Fired when the user starts scrolling with a touch event.

#### dragend

Fired when the users finishes the touch event.

#### scroll

Fired when the content is being scrolled. However, this event is not called when the scrolling occurs from its own momentum. In this case the event will still be called once the momentum stops.

Members {#members}
--------------------------------------------------------------------------------

### `Element` wrapper

The element that wraps the content and make it scrollable.

Methods {#methods}
--------------------------------------------------------------------------------

### scrollTo(x, y, time) {#scrollTo}

Scrolls to a set of coordinate.

#### Parameters:

Name              | Type   | Description
----------------- | ------ | -----------
`x`               | Number | The x coordinate.
`y`               | Number | The y coordinate.
`time` *Optional* | Number | The duration of the scroll.

#### Returns:

- [Moobile.ScrollView](../View/ScrollView.md) This Moobile.ScrollView instance.

-----

### scrollToPage(pageX, pageY, time) {#scrollTo}

Scrolls to page.

#### Parameters:

Name              | Type   | Description
----------------- | ------ | -----------
`pageX`           | Number | The horizontal page number.
`pageY`           | Number | The vertical page number.
`time` *Optional* | Number | The duration of the scroll.

#### Returns:

- [Moobile.ScrollView](../View/ScrollView.md) This Moobile.ScrollView instance.

-----

### scrollToElement(element, time)  {#scrollTo}

Scrolls to an element.

#### Parameters:

Name              | Type    | Description
----------------- | ------- | -----------
`element`         | Element | The element to scroll to.
`time` *Optional* | Number  | The duration of the scroll.

#### Returns:

- [Moobile.ScrollView](../View/ScrollView.md) This Moobile.ScrollView instance.

-----

### getScroll()  {#scrollTo}

Returns the current scroll position as an object with two keys, `x` which indicates the horizontal scroll and `y` which indicates the vertical scroll of this view.

#### Returns:

- `Object` The scroll position.

-----

### getScrollSize()  {#scrollTo}

Returns the content size including the scrolling area as an object with two keys, `x` which indicates the width and `y` which indicates the height.

#### Returns:

- `Object` The size including the scrolling area.

Styles {#styles}
--------------------------------------------------------------------------------

This class does not define any styles.
