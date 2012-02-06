Moobile.View
================================================================================

##### Extends [Moobile.Entity](Entity/Entity.md)

Provides an entity that handles an area in which a user can
       interract.

Initialization {#initialization}
--------------------------------------------------------------------------------

Methods {#methods}
--------------------------------------------------------------------------------

### enableTouch()

Enables the touch interraction of the view.

This method will enable the touch interraction of this view by swapping
the CSS class from `disable` to `enable`. This will set the CSS style
`pointer-events` to `auto` thus enabling touch events.


#### Returns:

- [Moobile.View](View/View.md) This view.


-----

### disableTouch()

Disables the touch interaction of the view.

This method will disable the touch interraction of this view by swapping
the CSS class from `enable` to `disable`. This will set the CSS style
`pointer-events` to `none` thus disabling touch events.


#### Returns:

- [Moobile.View](View/View.md) This view.


-----

### addChild(entity, where, context)

Adds a child entity to this view.

This method will add a child entity to this view's content entity. You
can add the child entity before or after this view's content entity by
passing `header` or `footer` to the `where` parameter.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`entity` *Optional* |  |
`where` *Optional* |  |
`context` *Optional* |  |


-----

### getChild(name)

Returns a child entity from this view.

This method will attempt to find the given child entity from this view's
content entity then from the view itself if the former failed.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`name` *Optional* |  |


-----

### hasChild(entity)

Indicates whether an entity is owned by this view.

This method will attempt to find the given child entity from this view's
content entity then from the view itself if the former failed.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`entity` *Optional* |  |


-----

### getChildren(type)

Returns all the child entities from this view.

This method will return an array that contains both the child entites
from this view and the child entities from this view's content entity.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`type` *Optional* |  |


-----

### replaceChild(replace, entity)

Replaces a child entity with another within this view.

This method will attempt to replace the entity from this view's content
entity first then from the view itself if the former failed.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`replace` *Optional* |  |
`entity` *Optional* |  |


-----

### removeChild(entity)

Removes a child entity.

This method will attempt to remove the entity from this view's content
entity first then from the view itself if the former failed.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`entity` *Optional* |  |


-----

### setParentView(parentView)

Set the view that owns this view.

This method should be used instead of `setParent` because it will set
an view instead of a view content.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`parentView` *Optional* |  |

#### Returns:

- [Moobile.View](View/View.md) This view.


-----

### getParentView()

Returns the view that owns this view.

This method should be used instead of `getParent` because it will return
an view instead of a view content.


#### Returns:

- [Moobile.View](View/View.md) The view that owns this view.


-----

### setContent(content)

Sets the view content.

This method will set the entity that is used as the content of this
view. This entity will contains all child entities except ones in this
view's header or footer.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`content` *Optional* | [Moobile.ViewContent](View/ViewContent.md) | The view content.

#### Returns:

- [Moobile.View](View/View.md) This view.


-----

### getContent()

Returns the view content.

This method will return the entity that is used as the content of this
view. This entity will contains all child entities except ones in this
view's header or footer.


#### Returns:

- [Moobile.ViewContent](View/ViewContent.md) The view content.


-----

### parentViewWillChange(parentView)

Tell the view it's about to be moved to a new view.

The current implementation of this method does nothing. However it's a
good practice to call the parent at the top of your implementation as
the content of this method may change in the future.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`parentView` *Optional* | [Moobile.View](View/View.md) | The view that will own this view.


-----

### parentViewDidChange(parentView)

Tell the view it has been moved to a new view.

The current implementation of this method does nothing. However it's a
good practice to call the parent at the top of your implementation as
the content of this method may change in the future.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`parentView` *Optional* | [Moobile.View](View/View.md) | The view that owns this view.


-----


Members {#members}
--------------------------------------------------------------------------------

### [Moobile.ViewContent](View/ViewContent.md) content

The view content.

-----

### [Moobile.View](View/View.md) parentView

The view that owns this view.

-----


Events {#events}
--------------------------------------------------------------------------------