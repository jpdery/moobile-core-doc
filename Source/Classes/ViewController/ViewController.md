Moobile.ViewController
================================================================================

##### Extends [Moobile.EventFirer](../Event/EventFirer.md)

Provides an object for managing a view and its view controller hierarchy.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var viewController = new Moobile.ViewController([options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`options` *Optional* | Object  | The view controller's options.
`name`    *Optional* | String  | The view controller's name.

#### Subclassing Notes:

Don't instantiate this class. Instead, extend it by creating subclasses for your own implementation.

#### Example

File at /templates/say-hello-view.html:

	<div class="say-hello-view">
		<h2>Tap the button</h2>
		<div data-role="button" data-name="tap-me-button">Tap me!</div>
	</div>

The view controller:

	var SayHelloViewController = new Class({

		Extends: Moobile.ViewController,

		tapMeButton: null,

		loadView: function() {
			this.view = Moobile.View.at('/templates/say-hello-view.html');
		},

		viewDidLoad: function() {
			this.tapMeButton = this.view.getChildComponent('tap-me-button');
			this.tapMeButton.addEvent('tap', this.bound('onTapMeButtonTap'));
		},

		destroy: function() {
			this.tapMeButton.removeEvent('tap', this.bound('onTapMeButtonTap'));
			this.tapMeButton = null;
			this.parent();
		},

		onTapMeButtonTap: function(e, sender) {
			alert('Mooooooooo!');
		}
	});

Members {#members}
--------------------------------------------------------------------------------

### view {#view}

The view managed by the current view controller. Must be initialized using the `loadView` method.

#### Type:

- [Moobile.View](../View/View.md)

Methods {#methods}
--------------------------------------------------------------------------------

### loadView() {#loadView}

Creates the view managed by this view controller. Override this method and assign a view instance to the `view` member of this class. Do not call the parent method as it could overwrite your view.

#### Note:

Do not call the parent method when overriding this method, this would overwrite the current view.

#### Example

##### Loading a view:

	var MyViewController = new Class({
		Extends: Moobile.ViewController,
		loadView: function() {
			var element = new Element('div.my-view').grab(new Element('h1').set('html', 'This is my view'));
			this.view = new Moobile.View(element);
		}
	});

##### Loading a view from a file:

The content of the file at `/templates/my-view.html`:

	<div class="my-view">
		<h1>This is my view</h1>
	</div>

The view controller:

	var MyViewController = new Class({
		Extends: Moobile.ViewController,
		loadView: function() {
			this.view = Moobile.View.at('/templates/my-view.html');
		}
	});

-----

### addChildViewController(viewController) {#addChildViewController}

Adds the specified view controller at the bottom this view controller hierarchy.

#### Parameters:

Name             | Type                   | Description
---------------- | ---------------------- | -----------
`viewController` | Moobile.ViewController | The view controller to add to the hierarchy.

#### Returns:

- `Moobile.ViewController` This Moobile.ViewController instance.

#### Example:

	var viewControllerOne = new Moobile.ViewController();
	var viewControllerTwo = new Moobile.ViewController();
	viewControllerOne.addChildViewController(viewControllerTwo);

-----

### addChildViewControllerAfter(viewController, after) {#addChildViewControllerAfter}

Adds the specified view controller to the view controller hierarchy after a specified view controller. The specified view controller's view is added after the second view controller's view.

#### Parameters:

Name             | Type                   | Description
---------------- | ---------------------- | -----------
`viewController` | Moobile.ViewController | The view controller to add to the hierarchy.
`after`          | Moobile.ViewController | The view controller used as a context to put the specified view controller after.

#### Returns:

- `Moobile.ViewController` This Moobile.ViewController instance.

#### Example:

	var viewControllerOne = new Moobile.ViewController();
	var viewControllerTwo = new Moobile.ViewController();
	var viewControllerThree = new Moobile.ViewController();
	viewControllerOne.addChildViewController(viewControllerTwo);
	viewControllerOne.addChildViewControllerAfter(viewControllerThree, viewControllerTwo); // viewControllerThree is after viewControllerTwo

-----

### addChildViewControllerBefore(viewController, before) {#addChildViewControllerBefore}

Adds specified view controller to the view controller hierarchy before a specified view controller. The specified view controller's view is added before the given second controller's view.

#### Parameters:

Name             | Type                   | Description
---------------- | ---------------------- | -----------
`viewController` | Moobile.ViewController | The view controller to add to the hierarchy.
`before`         | Moobile.ViewController | The view controller used as a context to put the child view controller before.

#### Returns:

- `Moobile.ViewController` This Moobile.ViewController instance.

#### Example:

	var viewControllerOne = new Moobile.ViewController();
	var viewControllerTwo = new Moobile.ViewController();
	var viewControllerThree = new Moobile.ViewController();
	viewControllerOne.addChildViewController(viewControllerTwo);
	viewControllerOne.addChildViewControllerBefore(viewControllerThree, viewControllerTwo); // viewControllerThree is before viewControllerTwo

-----

### getChildViewController(name) {#getChildViewController}

Returns a child view controller matching a specified name.

#### Parameters:

Name   | Type   | Description
------ | ------ | -----------
`name` | String | The child view controller name to search form.

#### Returns:

- `Moobile.ViewController` The child view controller or `null` if no child view controllers were found.

#### Example:

	var viewControllerOne = new Moobile.ViewController();
	var viewControllerTwo = new Moobile.ViewController(null, 'me');
	viewControllerOne.addChildViewController(viewControllerTwo);
	viewControllerOne.getChildViewController('me'); // returns viewControllerTwo

-----

### getChildViewControllerAt(index) {#getChildViewControllerAt}

Returns a child view controller at a specified index.

#### Parameters:

Name    | Type   | Description
------- | ------ | -----------
`index` | String | The child view controller index.

#### Returns:

- `Moobile.ViewController` The child view controller or `null` if no child view controllers exist at the given index.

#### Example:

	var viewControllerOne = new Moobile.ViewController();
	var viewControllerTwo = new Moobile.ViewController();
	viewControllerOne.addChildViewController(viewControllerTwo);
	viewControllerOne.getChildViewControllerAt(0); // returns viewControllerTwo

-----

### getChildViewControllerIndex(index) {#getChildViewControllerIndex}

Returns the index of a specified view controller.

#### Parameters:

Name             | Type                   | Description
---------------- | ---------------------- | -----------
`viewController` | Moobile.ViewController | The view controller to search for.

#### Returns:

- *Number* The child view controller index or `-1` if the given child view controller is not in this view controller's hierarchy.

#### Example:

	var viewControllerOne = new Moobile.ViewController();
	var viewControllerTwo = new Moobile.ViewController();
	viewControllerOne.addChildViewController(viewControllerTwo);
	viewControllerOne.getChildViewControllerIndex(viewControllerTwo); // returns 0

-----

### getChildViewControllers() {#getChildViewControllers}

Return an array containing all child view controllers.

#### Returns:

- *Array* Array containing all children view controllers.

#### Example:

	var viewControllerOne = new Moobile.ViewController();
	var viewControllerTwo = new Moobile.ViewController();
	var viewControllerThree = new Moobile.ViewController();
	viewControllerOne.addChildViewController(viewControllerTwo);
	viewControllerOne.addChildViewController(viewControllerThree);
	viewControllerOne.getChildViewControllers(); // returns [viewControllerTwo, viewControllerThree]

-----

### hasChildViewController(viewController) {#hasChildViewController}

Indicates whether the given viewController is a child of the current instance.

#### Parameters:

Name             | Type                   | Description
---------------- | ---------------------- | -----------
`viewController` | Moobile.ViewController | The view controller to search for.

#### Returns:

- *Boolean* Whether the given view controller is a child of this view controller.

#### Example:

	var viewControllerOne = new Moobile.ViewController();
	var viewControllerTwo = new Moobile.ViewController();
	viewControllerOne.addChildViewController(viewControllerTwo);
	viewControllerOne.hasChildViewController(viewControllerTwo); // returns true

-----

### removeChildViewController(viewController, [destroy]) {#removeChildViewController}

Removes the given viewController from the child view controllers. If `destroy` is `true`, the given viewController will also be destroyed.

#### Parameters:

Name                 | Type                   | Description
-------------------- | ---------------------- | -----------
`viewController`     | Moobile.ViewController | The view controller to remove.
`destroy` *Optional* | Boolean                | Whether to destroy the view controller upon removal.

#### Returns:

- `Moobile.ViewController` This Moobile.ViewController instance.

#### Example:

	var viewControllerOne = new Moobile.ViewController();
	var viewControllerTwo = new Moobile.ViewController();
	viewControllerOne.addChildViewController(viewControllerTwo);
	viewControllerOne.removeChildViewController(viewControllerTwo); // removes viewControllerTwo

-----

### removeChildViewControllers([destroy]) {#removeChildViewControllers}

Removes all child view controllers. If `destroy` is `true`, All child view controllers will also be destroyed.

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`destroy` *Optional* | Boolean | Whether to destroy the view controller upon removal.

#### Returns:

- `Moobile.ViewController` This Moobile.ViewController instance.

#### Example:

	var viewControllerOne = new Moobile.ViewController();
	var viewControllerTwo = new Moobile.ViewController();
	var viewControllerThree = new Moobile.ViewController();
	viewControllerOne.addChildViewController(viewControllerTwo);
	viewControllerOne.addChildViewController(viewControllerThree);
	viewControllerOne.removeChildViewControllers(); // viewControllerTwo and viewControllerThree are removed

-----

### removeFromParentViewController([destroy]) {#removeFromParentViewController}

Removes the current instance from its parent.

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`destroy` *Optional* | Boolean | Whether to destroy the view controller upon removal.

#### Returns:

- `Moobile.ViewController` This Moobile.ViewController instance.

#### Example:

	var viewControllerOne = new Moobile.ViewController();
	var viewControllerTwo = new Moobile.ViewController();
	viewControllerOne.addChildViewController(viewControllerTwo);
	viewControllerTwo.removeFromParentViewController(); // viewControllerTwo is removed

-----

### presentModalViewController(viewController, [viewTransition]) {#presentModalViewController}

Displays a child view controller over this view controller using a specified transition. The view controller presented as modal will only have a reference to its parent view controller and will use it to dismiss the modal view controller.

#### Parameters:

Name                        | Type                                                          | Description
--------------------------- | ------------------------------------------------------------- | -----------
`viewController`            | Moobile.ViewController                                        | The view controller.
`viewTransition` *Optional* | [Moobile.ViewTransition](../ViewTransition/ViewTransition.md) | The view transition.

#### Returns:

- `Moobile.ViewController` This Moobile.ViewController instance.

#### Example:

	var viewControllerOne = new Moobile.ViewController();
	var viewControllerTwo = new Moobile.ViewController();
	viewControllerOne.presentModalViewController(viewControllerTwo); // the viewControllerTwo's view is presented over the viewControllerOne's view

-----

### dismissModalViewController() {#dismissModalViewController}

Dismisses the current modal view controller and destroy it.

#### Returns:

- `Moobile.ViewController` This Moobile.ViewController instance.

#### Example:

	var viewControllerOne = new Moobile.ViewController();
	var viewControllerTwo = new Moobile.ViewController();
	viewControllerOne.presentModalViewController(viewControllerTwo);
	viewControllerOne.dismissModalViewController(); // the viewControllerTwo's view is removed

-----

### getName() {#getName}

Returns the view controller name.

#### Returns:

- *String* The name.

#### Example:

	var viewController = new Moobile.ViewController(null, 'me');
	viewController.getName(); // returns 'me'

-----

### setTitle(title) {#setTitle}

Sets the title using either a string or a `Moobile.Label` instance. When provided with a string, this method creates a `Moobile.Label` instance and assign the given string as its text.

#### Parameters:

Name    | Type  | Description
------- | ----- | -----------
`title` | Mixed | The title as a string or as a `Moobile.Label` instance.

#### Returns:

- `Moobile.ViewController` This Moobile.ViewController instance.

#### Example:

	var viewController = new Moobile.ViewController();
	viewController.setTitle('Moo');

-----

### getTitle() {#getTitle}

Returns the title.

#### Returns:

- [Moobile.Text](../Control/Text.md) The title.

#### Example:

	var viewController = new Moobile.ViewController();
	viewController.setTitle('Moo');
	viewController.getTitle(); // returns 'Moo'

-----

### setImage(image) {#setImage}

Sets the image using either a string or a `Moobile.Image` instance. When provided with a string, this method creates a `Moobile.Image` instance and assign the given string as its source.

#### Parameters:

Name    | Type  | Description
------- | ----- | -----------
`image` | Mixed | The image as a string or a `Moobile.Image` instance.

#### Returns:

- `Moobile.ViewController` This Moobile.ViewController instance.

#### Example:

	var viewController = new Moobile.ViewController();
	viewController.setImage('path/to/an-image.png');

-----

### getImage() {#getImage}

Returns the image.

#### Returns:

- [Moobile.Image](../Control/Image.md) The image.

#### Example:

	var viewController = new Moobile.ViewController();
	viewController.setImage('path/to/an-image.png');
	viewController.getImage(); // returns a Moobile.Image instance.

-----

### setModal(modal) {#setModal}

Sets whether the current instance is being presented as the modal view controller of another view controller. You should rarely use this method as it's handled by the `Moobile.ViewController` class.

#### Parameters:

Name    | Type    | Description
------- | ------- | -----------
`modal` | Boolean | Whether this view controller is modal.

#### Returns:

- `Moobile.ViewController` This Moobile.ViewController instance.

-----

### isModal() {#isModal}

Indicates whether the current instance is being presented as a modal view controller of another view controller.

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

- [Moobile.View](../View/View.md) The managed view.

-----

### setViewTransition(viewTransition) {#setViewTransition}

Sets the view transition used to push or present a view controller. You should rarely use this method as the `Moobile.ViewController` class handles it.

#### Parameters:

Name             | Type                                                          | Description
---------------- | ------------------------------------------------------------- | -----------
`viewTransition` | [Moobile.ViewTransition](../ViewTransition/ViewTransition.md) | The view transition.

#### Returns:

- `Moobile.ViewController` This Moobile.ViewController instance.

-----

### getViewTransition() {#getViewTransition}

Returns the view transition.

#### Returns:

- [Moobile.ViewTransition](../ViewTransition/ViewTransition.md) The view transition.

-----

### setViewControllerPanel(viewControllerPanel) {#setViewControllerPanel}

Sets the view controller panel containing this view controller. You should rarely use this method as the `Moobile.ViewController` class handles it.

#### Parameters:

Name                  | Type                                                                    | Description
--------------------- | ----------------------------------------------------------------------- | -----------
`viewControllerPanel` | [Moobile.ViewControllerPanel](../ViewController/ViewControllerPanel.md) | The view controller panel.

#### Returns:

- `Moobile.ViewController` This Moobile.ViewController instance.

-----

### getViewControllerPanel() {#getViewControllerPanel}

Returns the view controller panel containing this view controller.

#### Returns:

- [Moobile.ViewControllerPanel](../ViewController/ViewControllerPanel.md) The view controller panel or `null` if this view controller is not within the hierarchy of a view controller panel.

-----

### setParentViewController(parentViewController) {#setParentViewController}

Sets the parent view controller. You should rarely use this method as the `Moobile.ViewController` class handles it.

#### Parameters:

Name                   | Type                   | Description
---------------------- | ---------------------- | -----------
`parentViewController` | Moobile.ViewController | The parent view controller.

#### Returns:

- `Moobile.ViewController` This Moobile.ViewController instance.

-----

### getParentViewController() {#getParentViewController}

Returns the parent view controller.

#### Returns:

- `Moobile.ViewController` The parent view controller or `null` if this view controller is not within the hierarchy of another view controller.

-----

### willAddChildViewController(viewController) {#willAddChildViewController}

Tells this view controller a child view controller is about to be added. Override this method to provide your own implementation.

#### Parameters:

Name             | Type                   | Description
---------------- | ---------------------- | -----------
`viewController` | Moobile.ViewController | The view controller to be added.

-----

### didAddChildViewController(viewController) {#didAddChildViewController}

Tells this view controller a child view controller has been added. Override this method to provide your own implementation.

#### Parameters:

Name             | Type                   | Description
---------------- | ---------------------- | -----------
`viewController` | Moobile.ViewController | The added child view controller.

-----

### willRemoveChildViewController(viewController) {#willRemoveChildViewController}

Tells this view controller a child view controller is about to be removed. Override this method to provide your own implementation.

#### Parameters:

Name             | Type                   | Description
---------------- | ---------------------- | -----------
`viewController` | Moobile.ViewController | The child view controller about to be removed.

-----

### didRemoveChildViewController(viewController) {#didRemoveChildViewController}

Tells this view controller a child view controller has been removed. Override this method to provide your own implementation.

#### Parameters:

Name             | Type                   | Description
---------------- | ---------------------- | -----------
`viewController` | Moobile.ViewController | The removed child view controller.

-----

### parentViewControllerWillChange(viewController) {#parentViewControllerWillChange}

Tells this view controller its parent view controller is about to change. Override this method to provide your own implementation.

#### Parameters:

Name             | Type                   | Description
---------------- | ---------------------- | -----------
`viewController` | Moobile.ViewController | This view controller's parent view controller.

-----

### parentViewControllerDidChange(viewController) {#parentViewControllerDidChange}

Tells this view controller its parent view controller has changed. Override this method to provide your own implementation.

#### Parameters:

Name             | Type                   | Description
---------------- | ---------------------- | -----------
`viewController` | Moobile.ViewController | This view controller's parent view controller.

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

### viewDidRotate(orientation) {#viewDidRotate}

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

- `Moobile.ViewController` This Moobile.ViewController instance.
