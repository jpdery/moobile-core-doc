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

Name                 | Type    | Description
-------------------- | ------- | -----------
`className`          | String  | The view's extended CSS class name, defaults to `null`.
`styleName`          | String  | The view's default style, defaults to `null`.
`scroller`           | Mixed   | The view's scrolling engine, either `IScroll` or `Native`, defaults to the `Native` when available otherwise `IScroll`.
`scroll`             | String  | The view's scrolling directions, either `vertical`, `horizontal` or `both`, defaults to `vertical`. This options is only available using the `IScroll` engine.
`scrollbar`          | String  | The view's scrollbars to display, either `vertical`, `horizontal` or `both`, defaults to `vertical`. This options is only available using the `IScroll` engine.
`momentum`           | Boolean | Whether the view scrolls with momentum, defaults to `true`.
`snapToPage`         | Boolean | Whether to snap to the current page upon release, defaults to `false`.
`snapToPageAt`       | Number  | The percentage moved to snap to the next page, defaults to `20`.
`snapToPageSizeX`    | Number  | The width of a page, defaults to `null` which calculate the page's width automatically.
`snapToPageSizeY`    | Number  | The height of a page, defaults to `null` which calculate the page's height automatically.
`snapToPageDuration` | Number  | The time in milliseconds for the snap animation, defaults to `150`.
`snapToPageDelay`    | Number  | The view will automatically snap to the next page if the user scrolls for less than this time in milliseconds, defaults to `150`.
`initialPageX`       | Number  | The initial horizontal page to scroll to, defaults to `0`.
`initialPageY`       | Number  | The initial vertical page to scroll to, defaults to `0`.
`initialScrollX`     | Number  | The initial horizontal scroll, defaults to `0`.
`initialScrollY`     | Number  | The initial vertical scroll, defaults to `0`.

#### Generates:

	<div class="view scroll-view view-layout-vertical (iscroll|native)-engine">
		<div class="view-content-wrapper scrollable">
			<div data-role="content" class="view-content scroll-view-content"></div>
		</div>
	</div>

#### Defined roles:

Name      | Description
--------- | -----------
`view`    | Defines an element acting as a view. Use the `data-view` attribute to specify a subclass instead
`content` | Defines an element acting as a view's content. If omitted, the contents of the view's element will act as its view content.

#### Note:

Upon initialization, this view will use the CSS class name either provided as either an option or directly in the element to generate the view content's class name. The view content CSS class name will be made from the view's CSS class appended with `content`.

Events {#events}
--------------------------------------------------------------------------------

### scrollstart {#dragstart-event}

Fired when the user starts scrolling with a touch event. This event is only fired with the `IScroll` engine.

### scrollend {#dragend-event}

Fired when the users finishes the touch event. This event is only fired with the `IScroll` engine.

### scroll {#scroll-event}

Fired when the content is being scrolled. However, this event is not called when the scrolling occurs from its own momentum. In this case the event will still be called once the momentum stops.

Methods {#methods}
--------------------------------------------------------------------------------

### setContentSize(x, y) {#setContentSize}

Sets this view's content size including the scrollable area.

#### Parameters:

Name         | Type   | Description
--- | ------ | -----------
`x` | Number | This view content's width.
`y` | Number | This view content's height.

#### Returns:

- `Moobile.ScrollView` This Moobile.ScrollView instance.

-----

### getContentSize() {#getContentSize}

Returns this view's content size including the scrollable area.

#### Returns:

- `Object` An object containing the `x` and `y` dimensions of this view's content including the scrollable area.

-----

### getContentWrapperSize() {#getContentWrapperSize}

Returns this view's content size excluding the scrollable area.

#### Returns:

- `Object` An object containing the `x` and `y` dimensions of this view's content excluding the scrollable area.

-----

### getContentScroll() {#getContentScroll}

Returns this view's scroll position.

#### Returns:

- `Object` An object containing the `x` and `y` scroll positions.

-----

### scrollTo(x, y, time) {#scrollTo}

Scrolls to a set of coordinate.

#### Parameters:

Name              | Type   | Description
----------------- | ------ | -----------
`x`               | Number | The x coordinate.
`y`               | Number | The y coordinate.
`time` *Optional* | Number | The duration of the scroll.

#### Returns:

- `Moobile.ScrollView` This Moobile.ScrollView instance.

-----

### scrollToElement(element, time)  {#scrollToElement}

Scrolls to an element.

#### Parameters:

Name              | Type    | Description
----------------- | ------- | -----------
`element`         | Element | The element to scroll to.
`time` *Optional* | Number  | The duration of the scroll.

#### Returns:

- `Moobile.ScrollView` This Moobile.ScrollView instance.

-----

### scrollToPage(pageX, pageY, time) {#scrollToPage}

Scrolls to page.

#### Parameters:

Name              | Type   | Description
----------------- | ------ | -----------
`pageX`           | Number | The horizontal page number.
`pageY`           | Number | The vertical page number.
`time` *Optional* | Number | The duration of the scroll.

#### Returns:

- `Moobile.ScrollView` This Moobile.ScrollView instance.

-----

### getPage() {#getPage}

Return this view's current page. The current page based on the page visible at the top left area of this view's content.

#### Returns:

- `Object` An object containing the `x` and `y` pages.
