Moobile.ViewStack
================================================================================

##### Extends [Moobile.View](../View/View.md)

Provides a view that handles child views arrenged as a stack, the last view added being the visible view. This class is the default view of the `Moobile.ViewControllerStack` class.


Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var viewStack = new Moobile.ViewStack([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The view's element, element id or html string.
`options` *Optional* | Object  | The view's options, see below.
`name`    *Optional* | String  | The view's name.

#### Options:

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The view's second CSS class name, defaults to `null`.
`styleName` | String | The view's default style, defaults to `null`.
`tagName`   | String | The view's element tag name, defaults to `div`.

#### Generates:

	<div class="view view-stack">
		<div data-role="view-content" class="view-content view-stack-content"></div>
	</div>

#### Defined roles:

Name           | Description
-------------- | -----------
`view`         | Defines an element acting as a view. Use the `data-view` property to specify a subclass instead.
`view-content` | Defines an element acting as a view's content. If unspecified, the contents of the content's element will act as its view content.

#### Note:

Upon initialization, this view will use the CSS class name either provided as either an option or directly in the element to generate the view content's class name. The view content CSS class name will be made from the view's CSS class appended with `content`.

Events {#events}
--------------------------------------------------------------------------------

This class does not define additional events.

Members {#members}
--------------------------------------------------------------------------------

This class does not define additional members.

Methods {#methods}
--------------------------------------------------------------------------------

This class does not define additional methods.

Styles {#styles}
--------------------------------------------------------------------------------

This class does not define any styles.

