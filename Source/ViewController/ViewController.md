Moobile.ViewController
================================================================================

##### Implements *Events*, *Options*, *Class.Binds*

Provides a controller used to manage a view.

Initialization {#initialization}
--------------------------------------------------------------------------------

Methods {#methods}
--------------------------------------------------------------------------------

### initialize(options, name)

Initialize this view controller.

If you override this method, make sure you call the parent method at
the beginning of your implementation.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`options` *Optional* | Object | The options.
`name` *Optional* | String | The name.

#### Returns:

- [Moobile.ViewController](ViewController/ViewController.md) This view controller.

-----

### loadView()

Loads the view.

This method has to be overridden and needs to create a view instance in
the `view` property of this class. Do not call the parent method unless
you are required to.



-----

### addChildViewController(viewController)

Adds a child view controller.

This method adds the child view controller's view at the bottom of its
view. You may specify the location of the child view controller's view
using the `where` parameter combined with the optional `context`
parameter.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewController` *Optional* | [Moobile.ViewController](ViewController/ViewController.md) | The child view controller.

#### Returns:

- Boolean Whether the child view controller was successfully
                  added.


-----

### getChildViewController(name)

Returns a child view controller.

This method will return an child view controller from its own child view
controllers that matches the given name.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`name` *Optional* | String | The child view controller name.

#### Returns:

- [Moobile.ViewController](ViewController/ViewController.md) The child view controller or `null` if no child
                         view controllers were found.


-----

### hasChildViewController(viewController)

Indicates whether this view controller is the direct owner of a child
view controller.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewController` *Optional* | [Moobile.ViewController](ViewController/ViewController.md) | The view controller.

#### Returns:

- Boolean Whether this view controller owns a given child view
                  controller.


-----

### getChildViewControllers()

Return all the child view controllers.


#### Returns:

- Array The child view controllers.


-----

### removeChildViewController(viewController)

Removes a child view controller.

This method will not destroy the given child view controller upon
removal since it could be added to another view controlelr. If you wish
to destroy the given child view controller, you must do so manually.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewController` *Optional* | [Moobile.ViewController](ViewController/ViewController.md) | The view controller to remove.

#### Returns:

- Boolean Whether the child view controller was successfully
                  removed.


-----

### removeFromParentViewController()

Removes this view controller from its parent.

This method will not destroy the given child view controller upon
removal since it could be added to another view controlelr. If you wish
to destroy the given child view controller, you must do so manually.


#### Returns:

- Boolean Whether this view controller was successfully removed
                  from its parent view controller.


-----

### presentModalViewController(viewController, viewTransition)

Presents a modal view controller.

This method will present a child view controller using a given
transition. The view controller presented as modal will only have a
reference to its parent view controller and will use it to dismiss
the modal view controller.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewController` *Optional* | [Moobile.ViewController](ViewController/ViewController.md) | The view controller.
`viewTransition` *Optional* | [Moobile.ViewTransition](ViewTransition/ViewTransition.md) | The view transition.

#### Returns:

- [Moobile.ViewController](ViewController/ViewController.md) This view controller.


-----

### dismissModalViewController()

Dismisses the current modal view controller.

This method will dismiss the current modal view controller using the
transition used to present it. The modal view controller will be
destroyed at the end of the transition animation.


#### Returns:

- [Moobile.ViewController](ViewController/ViewController.md) This view controller.


-----

### getName()

Returns the name.


#### Returns:

- String The name.


-----

### setTitle(title)

Sets the title.

This method will set the title using either a string or an instance of a
`Label`. When provided with a string, this methods creates a `Label`
instance and assign the given string as its text.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`title` *Optional* | Mixed | The title as a string or a `Label` instance.

#### Returns:

- [Moobile.ViewController](ViewController/ViewController.md) This view controller.


-----

### getTitle()

Returns the title.


#### Returns:

- [Moobile.Text](Control/Text.md) The title.


-----

### setImage(image)

Sets the image.

This method will set the image using either a string or an instance of
an `Image`. When provided with a string, this methods creates an `Image`
instance and assign the given string as its source.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`image` *Optional* | Mixed | The image as a string or a `Image` instance.

#### Returns:

- [Moobile.ViewController](ViewController/ViewController.md) This view controller.


-----

### getImage()

Returns the image.


#### Returns:

- [Moobile.Image](Control/Image.md) The image.


-----

### isModal()

Indicates whether this view controller is modal.

This method will indicate whether this view controller is modal, meaning
this view controller needs to be dismissed before anything else can
be executed.


#### Returns:

- Boolean Whether this view controller is modal.


-----

### isViewReady()

Indicates whether the managed view is ready.

This method will indicate whether the managed view is ready, meaning its
element is part of an element that is part of the DOM and can be, for
instance, measured.


#### Returns:

- Boolean Whether the managed view is ready.


-----

### getView()

Returns the managed view.


#### Returns:

- [Moobile.View](View/View.md) The managed view.


-----

### setViewTransition(viewTransition)

Sets the view transition.

This method will store the view transition used to push or present a
view controller then retrieve it to dismiss or pop it. You should seldom
need this method as it's mostly used internally.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewTransition` *Optional* | [Moobile.ViewTransition](ViewTransition/ViewTransition.md) | The view transition.

#### Returns:

- [Moobile.ViewController](ViewController/ViewController.md) This view controller.


-----

### getViewTransition()

Returns the view transition.

This method will retrieve the view transition used to push or present a
view controller. You should seldom need this method as it's mostly used
internally.


#### Returns:

- [Moobile.ViewTransition](ViewTransition/ViewTransition.md) The view transition.


-----

### setViewControllerStack(viewControllerStack)

Sets the view controller stack.

This method will set a reference of the view controller stack that owns
this view controller. You should seldom need this method as it's mostly
used internally.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewControllerStack` *Optional* | [Moobile.ViewControllerStack](ViewController/ViewControllerStack.md) | The view controller
                                                 stack.

#### Returns:

- [Moobile.ViewController](ViewController/ViewController.md) This view controller.


-----

### getViewControllerStack()

Returns the view controller stack.

This method will return a reference of the view controller stack that
owns this view controller. You should seldom need this method as it's
mostly used internally.


#### Returns:

- [Moobile.ViewControllerStack](ViewController/ViewControllerStack.md) The view controller stack or `null` if
                              this view controller is not owned by a
                              view controller stack.


-----

### setViewControllerPanel(viewControllerPanel)

Sets the view controller panel.

This method will set a reference of the view controller panel that owns
this view controller. You should seldom need this method as it's mostly
used internally.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewControllerPanel` *Optional* | [Moobile.ViewControllerPanel](ViewController/ViewControllerPanel.md) | The view controller
                                                 panel.

#### Returns:

- [Moobile.ViewController](ViewController/ViewController.md) This view controller.


-----

### getViewControllerPanel(viewControllerPanel)

Returns the view controller panel.

This method will return a reference of the view controller panel that
owns this view controller. You should seldom need this method as it's
mostly used internally.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewControllerPanel` *Optional* |  |

#### Returns:

- [Moobile.ViewControllerStack](ViewController/ViewControllerStack.md) The view controller panel or `null` if
                              this view controller is not owned by a
                              view controller panel.


-----

### setParentViewController(parentViewController)

Sets the parent view controller.

This method will set a reference of the view controller that is a direct
owner of this view controller. You should seldom need this method as
it's mostly used internally.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`parentViewController` *Optional* | [Moobile.ViewController](ViewController/ViewController.md) | The parent view controller.

#### Returns:

- [Moobile.ViewController](ViewController/ViewController.md) This view controller.


-----

### getParentViewController()

Returns the parent view controller.

This method will return a reference of the view controller that is a
direct owner of this view controller. You should seldom need this method
as it's mostly used internally.


#### Returns:

- [Moobile.ViewController](ViewController/ViewController.md) The parent view controller.


-----

### willAddChildViewController(viewController)

Tells this view controller a child view controller is about to be added.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewController` *Optional* | [Moobile.ViewController](ViewController/ViewController.md) | The view controller


-----

### didAddChildViewController(viewController)

Tells this view controller a child view controller has been added.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewController` *Optional* | [Moobile.ViewController](ViewController/ViewController.md) | The view controller.


-----

### willRemoveChildViewController(viewController)

Tells this view controller a child view controller is about to be
removed.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewController` *Optional* | [Moobile.ViewController](ViewController/ViewController.md) | The view controller.


-----

### didRemoveChildViewController(viewController)

Tells this view controller a child view controller has been removed.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewController` *Optional* | [Moobile.ViewController](ViewController/ViewController.md) | The view controller.


-----

### parentViewControllerWillChange(viewController)

Tells this view controller its parent view controller is about to change.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewController` *Optional* | [Moobile.ViewController](ViewController/ViewController.md) | The parent view controller.


-----

### parentViewControllerDidChange(viewController)

Tells this view controller its parent view controller has changed.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`viewController` *Optional* | [Moobile.ViewController](ViewController/ViewController.md) | The parent view controller.


-----

### willPresentModalViewController()

Tells this view controller its about to present a modal view controller.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.



-----

### didPresentModalViewController()

Tells this view controller it has presented a modal view controller.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.



-----

### willDismissModalViewController()

Tells this view controller its about to dismiss a modal view controller.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.



-----

### didDismissModalViewController()

Tells this view controller it has dismissed a modal view controller.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.



-----

### didRotateToOrientation(orientation)

Tells this view controller its orientation changed.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`orientation` *Optional* | String | The orientation, `portrait` or `landscape`.


-----

### viewDidLoad()

Tells this view controller its managed view was loaded.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.



-----

### viewDidBecomeReady()

Tells this view controller its managed view became ready.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.



-----

### viewWillEnter()

Tells this view controller its managed view is about to enter the screen
and become the visible view of its hierarchy.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.



-----

### viewDidEnter()

Tells this view controller its managed view enterd the screen and became
the visible view of its hierarchy.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.



-----

### viewWillLeave()

Tells this view controller its managed view is about to leave the screen
and become the hidden.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.



-----

### viewDidLeave()

Tells this view controller its managed view is left the screen and
became hidden.

The current implementation of this method does nothing. However it's a
good practice to call the parent as the implementation of this method
may change in the future.



-----

### destroy()

Destroys this view controller.

This method will destroy this view controller's managed view and all its
child view controllers.

If you override this method, make sure you call the parent method at
the end of your implementation.


#### Returns:

- [Moobile.Entity](Entity/Entity.md) This entity.


-----


Members {#members}
--------------------------------------------------------------------------------

### String name

The name.

-----

### [Moobile.Text](Control/Text.md) title

The title.

-----

### [Moobile.Image](Control/Image.md) image

The image.

-----

### Boolean modal

Whether this view controller is modal.

-----

### [Moobile.View](View/View.md) view

The managed view.

-----

### Boolean viewReady

Whether the managed view is ready.

-----

### [Moobile.ViewTransition](ViewTransition/ViewTransition.md) viewTransition

The view transition.

-----

### [Moobile.WindowController](Window/WindowController.md) windowController

The window controller

-----

### [Moobile.ViewControllerStack](ViewController/ViewControllerStack.md) viewControllerStack

The view controller stack.

-----

### [Moobile.ViewControllerPanel](ViewController/ViewControllerPanel.md) viewControllerPanel

The view controller panel.

-----

### ViewControllerTabs viewControllerTabs

The view controller tabs.

-----

### [Moobile.ViewController](ViewController/ViewController.md) parentViewController

The parent view controller.

-----

### [Moobile.ViewController](ViewController/ViewController.md) modalViewController

The modal view controller being presented.

-----

### Array childViewControllers

The child view controllers.

-----


Events {#events}
--------------------------------------------------------------------------------