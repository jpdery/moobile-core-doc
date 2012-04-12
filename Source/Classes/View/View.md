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
`className` | String | The view's extended CSS class name, defaults to `null`.
`styleName` | String | The view's default style, defaults to `null`.
`tagName`   | String | The view's element tag name, defaults to `div`.

#### Generates:

	<div class="view">
		<div data-role="view-content" class="view-content"></div>
	</div>

#### Note:

Upon initialization, the view creates its content element using the view element's content. For instance, if you create a view like this:

	<div data-role="view">
		<div class="element-one"></div>
		<div class="element-two"></div>
	</div>

The result will be:

	<div data-role="view" class="view">
		<div data-role="view-content" class="view-content">
			<div class="element-one"></div>
			<div class="element-two"></div>
		</div>
	</div>

If you wish to put elements outside of the view's content element, you will have to specify which element has the `view-content` role:

	<div data-role="button">
		<div class="element-one"></div>
		<div data-role="view-content"></div>
		<div class="element-two"></div>
	</div>

Also, the view will use the CSS class name either provided as either an option or directly in the element to generate the view content's class name and append the `-content` suffix. For instance, if you create a view like this:

	<div data-role="view" class="my-view">
	</div>

The result will be:

	<div data-role="view" class="view">
		<div data-role="view-content" class="view-content my-view-content">
		</div>
	</div>

#### Subclassing Notes:

This class overrides the following method:

- `willBuild`: Call the parent method at the `top` of your implementation if you override this method.
- `didBuild`: Call the parent method at the `top` of your implementation if you override this method.
- `destroy`: Call the parent method at the `bottom` of your implementation if you override this method
- `willAddChildComponent: Call the parent method at the `top` of your implementation if you override this method.
- `willRemoveChildComponent: Call the parent method at the `top` of your implementation if you override this method.

Members {#members}
--------------------------------------------------------------------------------

### contentElement {#contentElement}

The element that wraps the content of the view.

#### Type

- `Element`

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

### setContentElement(content) {#setContentElement}

Sets the element that wraps the content of this view.

This method is handled by the `Moobile.View` class and should not be called manually.

#### Parameters:

Name      | Type    | Description
--------- | ------- | -----------
`content` | Element | The view content element.

#### Returns:

- [Moobile.View](../View/View.md) This Moobile.View instance.

-----

### getContentElement() {#getContentElement}

Returns the element that wraps the content of this view.

#### Returns:

- `Element` The view content element.

Other {#other}
--------------------------------------------------------------------------------

<span class="important">These methods are added to the [Moobile.Component](../Component/Component.md) class:</span>

### setParentView(parentView) {#setParentView}

Sets the parent view of this component.

This method is handled by the `Moobile.View` class and should not be called manually.

#### Parameters:

Name     | Type                                           | Description
-------- | ---------------------------------------------- | -----------
`parent` | [Moobile.Component](../Component/Component.md) | The parent.

#### Returns:

- [Moobile.Component](../Component/Component.md) This Moobile.Component instance.

-----

### getParentView() {#getParentView}

Returns the parent view of this component.

#### Returns:

- [Moobile.View](../View/View.md) The parent component.

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
