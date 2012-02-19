Moobile.ViewController
================================================================================

##### Extends *[Moobile.EventDispatcher](../Event/EventDispatcher.md)*

Provides an object that manages a view and its view controller hierarchy. You rarely instantiate a `Moobile.ViewController` directly, instead you instantiate subclass of `Moobile.ViewController` based on the task it performs.

Members {#members}
--------------------------------------------------------------------------------

### *[Moobile.View](../View/View.md)* view {#view}

The view that the view controller manages. Must be initialized it using the `loadView` method.

Methods {#methods}
--------------------------------------------------------------------------------

### loadView() {#loadView}

Creates the view that the view controller manages. Overrides this method and assign the view to the `view` member of this class. Do not call the parent of this method as it could overwrite your view.

-----

### addChildViewController(viewController) {#addChildViewController}

Adds a child view controller at the bottom the view controller hierarchy. The child view controller's view is added to the bottom of this view controller's view.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The view controller to add to the hierarchy.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* This Moobile.ViewController instance.

-----

### addChildViewControllerAfter(viewController, after) {#addChildViewControllerAfter}

Adds a child view controller to the view controller hierarchy after a given view controller. The child view controller's view is added after the given view controller's view.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The view controller to add to the hierarchy.
`after`          | [Moobile.ViewController](../ViewController/ViewController.md) | The view controller used as a context to put the child view controller after.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* This Moobile.ViewController instance.

-----

### addChildViewControllerBefore(viewController, before) {#addChildViewControllerBefore}

Adds a child view controller to the view controller hierarchy before a given view controller. The child view controller's view is added before the given view controller's view.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The view controller to add to the hierarchy.
`before`         | [Moobile.ViewController](../ViewController/ViewController.md) | The view controller used as a context to put the child view controller before.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* This Moobile.ViewController instance.

-----

### getChildViewController(name) {#getChildViewController}

Returns a child view controller that matches the given name.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The child view controller name.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* The child view controller or `null` if no child view controllers were found.

-----

### getChildViewControllerAt(index) {#getChildViewControllerAt}

Returns a child view controller at a given index.

#### Parameters:

Name    | Type   | Description
------- | ------ | -----------
`index` | String | The child view controller index.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* The child view controller or `null` if no child view controllers exist at the given index.

-----

### getChildViewControllerIndex(index) {#getChildViewControllerIndex}

Returns the index of a given view controller.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The view controller to look up.

#### Returns:

- *Number* The child view controller index or `-1` if the given child view controller is not in this view controller's hierarchy.

-----

### getChildViewControllers() {#getChildViewControllers}

Return the array that contains all the child view controllers.

#### Returns:

- *Array* The array that contains all the child view controllers.

-----

### hasChildViewController(viewController) {#hasChildViewController}

Indicates whether a given view controller is a child of this view controller.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The view controller to look up.

#### Returns:

- *Boolean* Whether the given view controller is a child of this view controller.


-----

### removeChildViewController(viewController, [destroy]) {#removeChildViewController}

Removes a given child view controller from this view controller. If `destroy` is `true`, the given child view controller will also be destroyed.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The view controller to remove.
`destroy`        | Boolean                                                       | Whether to destroy the view controller upon removal.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* This Moobile.ViewController instance.

-----

### removeChildViewControllers(, [destroy]) {#removeChildViewControllers}

Removes all child view controllers from this view controller. If `destroy` is `true`, the given child view controller will also be destroyed.

#### Parameters:

Name      | Type    | Description
--------- | ------- | -----------
`destroy` | Boolean | Whether to destroy the view controller upon removal.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* This Moobile.ViewController instance.

-----

### removeFromParentViewController([destroy]) {#removeFromParentViewController}

Removes this view controller from its parent.

#### Parameters:

Name      | Type    | Description
--------- | ------- | -----------
`destroy` | Boolean | Whether to destroy the view controller upon removal.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* This Moobile.ViewController instance.

-----

### presentModalViewController(viewController, [viewTransition]) {#presentModalViewController}

Display a child view controller over this view controller using a given transition. The view controller presented as modal will only have a reference to its parent view controller and will use it to dismiss the modal view controller.

#### Parameters:

Name                        | Type                                                       | Description
--------------------------- | ---------------------------------------------------------- | -----------
`viewController`            | [Moobile.ViewController](../ViewController/ViewController.md) | The view controller.
`viewTransition` *Optional* | [Moobile.ViewTransition](../ViewTransition/ViewTransition.md) | The view transition.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* This Moobile.ViewController instance.

-----

### dismissModalViewController() {#dismissModalViewController}

Dismisses the current modal view controller and destroy it.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* This Moobile.ViewController instance.

-----

### getName() {#getName}

Return this view controller's name.

#### Returns:

- *String* The name.

-----

### setTitle(title) {#setTitle}

Sets the title using either a string or a `Moobile.Label` instance. When provided with a string, this methods creates a `Moobile.Label` instance and assign the given string as its text.

#### Parameters:

Name    | Type  | Description
------- | ----- | -----------
`title` | Mixed | The title as a string or as a `Moobile.Label` instance.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* This Moobile.ViewController instance.

-----

### getTitle() {#getTitle}

Returns the title.

#### Returns:

- [Moobile.Text](Control/Text.md) The title.

-----

### setImage(image) {#setImage}

Sets the image using either a string or a `Moobile.Image` instance. When provided with a string, this methods creates a `Moobile.Image` instance and assign the given string as its source.

#### Parameters:

Name    | Type  | Description
------- | ----- | -----------
`image` | Mixed | The image as a string or a `Moobile.Image` instance.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* This Moobile.ViewController instance.

-----

### getImage() {#getImage}

Returns the image.

#### Returns:

- *[Moobile.Image](../Control/Image.md)* The image.

-----

### setModal(modal) {#isModal}

Sets whether this view controller is being presented as the modal view controller of another view controller. You should rarely use this method as it's handled by the `Moobile.ViewController` class.

#### Parameters:

Name    | Type    | Description
------- | ------- | -----------
`modal` | Boolean | Whether this view controller is modal.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* This Moobile.ViewController instance.

-----

### isModal() {#isModal}

Indicates whether this view controller is being presented as the modal view controller of another view controller.

#### Returns:

- *Boolean* Whether this view controller is modal.

-----

### isViewReady() {#isViewReady}

Indicates whether the managed view is ready.

The view is considered *ready* when it's a child of a `Moobile.Window` instance in the DOM. Upon being ready, the view can be, for instance, measured.

#### Returns:

- *Boolean* Whether the managed view is ready.

-----

### getView() {#getView}

Returns the managed view.

#### Returns:

- *[Moobile.View](../View/View.md)* The managed view.

-----

### setViewTransition(viewTransition) {#setViewTransition}

Sets the view transition used to push or present a view controller. You should rarely use this method as it's handled by the `Moobile.ViewController` class.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewTransition` | [Moobile.ViewTransition](../ViewTransition/ViewTransition.md) | The view transition.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* This Moobile.ViewController instance.

-----

### getViewTransition() {#getViewTransition}

Returns the view transition.

#### Returns:

- [Moobile.ViewTransition](../ViewTransition/ViewTransition.md) The view transition.

-----

### setViewControllerStack(viewControllerStack) {#setViewControllerStack}

Sets the view controller stack. You should rarely use this method as it's handled by the `Moobile.ViewController` class.

#### Parameters:

Name                  | Type                                                                    | Description
--------------------- | ----------------------------------------------------------------------- | -----------
`viewControllerStack` | [Moobile.ViewControllerStack](../ViewController/ViewControllerStack.md) | The view controller stack.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* This Moobile.ViewController instance.

-----

### getViewControllerStack() {#getViewControllerStack}

Returns the view controller stack that contains this view controller.

#### Returns:

- [Moobile.ViewControllerStack](../ViewController/ViewControllerStack.md) The view controller stack or `null` if this view controller is not within the hierarchy of a view controller stack.

-----

### setViewControllerPanel(viewControllerPanel) {#setViewControllerPanel}

Sets the view controller panel that contains this view controller. You should rarely use this method as it's handled by the `Moobile.ViewController` class.

#### Parameters:

Name                  | Type                                                                    | Description
--------------------- | ----------------------------------------------------------------------- | -----------
`viewControllerPanel` | [Moobile.ViewControllerPanel](../ViewController/ViewControllerPanel.md) | The view controller panel.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* This Moobile.ViewController instance.

-----

### getViewControllerPanel() {#getViewControllerPanel}

Returns the view controller panel that contains this view controller.

#### Returns:

- [Moobile.ViewControllerPanel](../ViewController/ViewControllerPanel.md) The view controller panel or `null` if this view controller is not within the hierarchy of a view controller panel.

-----

### setParentViewController(parentViewController) {#setParentViewController}

Sets the parent view controller. You should rarely use this method as it's handled by the `Moobile.ViewController` class.

#### Parameters:

Name                   | Type                                                          | Description
---------------------- | ------------------------------------------------------------- | -----------
`parentViewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The parent view controller.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* This Moobile.ViewController instance.

-----

### getParentViewController() {#getParentViewController}

Returns the parent view controller.

#### Returns:

- [Moobile.ViewController](../ViewController/ViewController.md) The parent view controller or `null` if this view controller is not within the hierarchy of another view controller.

-----

### willAddChildViewController(viewController) {#willAddChildViewController}

Tells this view controller a child view controller is about to be added. Override this method to provide your own implementation.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The view controller to be added.

-----

### didAddChildViewController(viewController) {#didAddChildViewController}

Tells this view controller a child view controller has been added. Override this method to provide your own implementation.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The added child view controller.

-----

### willRemoveChildViewController(viewController) {#willRemoveChildViewController}

Tells this view controller a child view controller is about to be removed. Override this method to provide your own implementation.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The child view controller about to be removed.

-----

### didRemoveChildViewController(viewController) {#didRemoveChildViewController}

Tells this view controller a child view controller has been removed. Override this method to provide your own implementation.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewController` | [Moobile.ViewController](../ViewController/ViewController.md) | The removed child view controller.

-----

### parentViewControllerWillChange(viewController) {#parentViewControllerWillChange}

Tells this view controller its parent view controller is about to change. Override this method to provide your own implementation.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewController` | [Moobile.ViewController](../ViewController/ViewController.md) | This view controller's parent view controller.

-----

### parentViewControllerDidChange(viewController) {#parentViewControllerDidChange}

Tells this view controller its parent view controller has changed. Override this method to provide your own implementation.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewController` | [Moobile.ViewController](../ViewController/ViewController.md) | This view controller's parent view controller.

-----

### willPresentModalViewController() {#willPresentModalViewController}

Tells this view controller its about to present a modal view controller. Override this method to provide your own implementation.

-----

### didPresentModalViewController() {#didPresentModalViewController}

Tells this view controller it has presented a modal view controller. Override this method to provide your own implementation.

-----

### willDismissModalViewController() {#willDismissModalViewController}

Tells this view controller its about to dismiss the current modal view controller. Override this method to provide your own implementation.

-----

### didDismissModalViewController() {#didDismissModalViewController}

Tells this view controller it has dismissed the current modal view controller. Override this method to provide your own implementation.

-----

### didRotateToOrientation(orientation) {#didRotateToOrientation}

Tells this view controller the device orientation changed. Override this method to provide your own implementation.

#### Parameters:

Name          | Type   | Description
------------- | ------ | -----------
`orientation` | String | The orientation, `portrait` or `landscape`.

-----

### viewDidLoad() {#viewDidLoad}

Tells this view controller its managed view was loaded. Override this method to provide your own implementation.

-----

### viewDidBecomeReady() {#viewDidBecomeReady}

Tells this view controller its managed view became ready. Override this method to provide your own implementation.

-----

### viewWillEnter() {#viewWillEnter}

Tells this view controller its managed view is about to enter the screen and become visible. Override this method to provide your own implementation.

-----

### viewDidEnter() {#viewDidEnter}

Tells this view controller its managed view enterd the screen and became visible. Override this method to provide your own implementation.

-----

### viewWillLeave() {#viewWillLeave}

Tells this view controller its managed view is about to leave the screen and become hidden. Override this method to provide your own implementation.

-----

### viewDidLeave() {#viewDidLeave}

Tells this view controller its managed view is left the screen and became hidden. Override this method to provide your own implementation.

-----

### destroy() {#destroy}

Destroys this view controller's view controller hierarchy as well as the view it manages. Override this method to provide your own implementation.

#### Returns:

- *[Moobile.ViewController](../ViewController/ViewController.md)* This Moobile.ViewController instance.

Events {#events}
--------------------------------------------------------------------------------

This class does not fire events at the moment.