Moobile.View
================================================================================

##### Extends [Moobile.Component](../Component/Component.md)

Provides an area in which a user can interract. A view represents a page in your application.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var view = new Moobile.View([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The view's element, element id or html string.
`options` *Optional* | Object  | The view's options, see below.
`name`    *Optional* | String  | The view's name.

#### Options:

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The view's default CSS class name, defaults to `null`.
`styleName` | String | The view's default style, defaults to `null`.
`tagName`   | String | The view's element tag name, defaults to `div`.

#### Generates:

	<div class="view">
		<div data-role="view-content" class="view-content"></div>
	</div>

#### Note:

Upon initialization, this view will use the CSS class name either provided as either an option or directly in the element to generate the view content's class name. The view content CSS class name will be made from the view's CSS class appended with `content`.

Events {#events}
--------------------------------------------------------------------------------

Members {#members}
--------------------------------------------------------------------------------

### `Element` content {#content}

The element that wraps the content of the view.

Methods {#methods}
--------------------------------------------------------------------------------

### enableTouch() {#enableTouch}

Enable touch interaction of the entire view and it's hierarchy.

#### Returns:

- [Moobile.View](../View/View.md) This Moobile.View instance.

-----

### disableTouch() {#disableTouch}

Disable touch interaction of the entire view and it's hierarchy.

#### Returns:

- [Moobile.View](../View/View.md) This Moobile.View instance.

-----

### setContent(content) {#setContent}

Sets the element that wraps the content of this view.

This method is handled by the `Moobile.View` class and should not be called manually.

#### Parameters:

Name      | Type    | Description
--------- | ------- | -----------
`content` | Element | The view content element.

#### Returns:

- [Moobile.View](../View/View.md) This Moobile.View instance.

-----

### getContent() {#getContent}

Returns the element that wraps the content of this view.

#### Returns:

- `Element` The view content element.

-----

### parentViewWillChange(parentView) {#parentViewWillChange}

Tell the view it's about to be moved to a new view.

Override this method to provide your own implementation.

#### Parameters:

Name         | Type                            | Description
------------ | ------------------------------- | -----------
`parentView` | [Moobile.View](../View/View.md) | The view that is about to become the parent view of this view.

-----

### parentViewDidChange(parentView) {#parentViewDidChange}

Tell the view it has been moved to a new view.

Override this method to provide your own implementation.

#### Parameters:

Name         | Type                            | Description
------------ | ------------------------------- | -----------
`parentView` | [Moobile.View](../View/View.md) | The view that is about to become the parent view of this view.

Styles {#styles}
--------------------------------------------------------------------------------

This class does not define any styles.