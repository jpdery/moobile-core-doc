Moobile.ActivityIndicator
================================================================================

##### Extends [Moobile.Control](../Control/Control.md)

Provides a visual progress feedback for tasks of unknown duration.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var activityIndicator = new Moobile.ActivityIndicator([element], [events], [options]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The activity indicator's element, element id or html string.
`options` *Optional* | Object  | The activity indicator's options, see below.
`name`    *Optional* | String  | The activity indicator's name.

#### Options:

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The activity indicator's extended CSS class name, defaults to `null`.
`styleName` | String | The activity indicator's default style, defaults to `null`.
`tagName`   | String | The activity indicator's element tag name, defaults to `div`.

#### Generates:

	<div class="activity-indicator"></div>

#### Subclassing Notes:

This class overrides the following method:

- `willBuild`: Call the parent method at the `top` of your implementation if you override this method.

#### Defined roles:

Name                 | Description                                                        | Applies to      | Note
-------------------- | ------------------------------------------------------------------ | --------------- | ----
`activity-indicator` | Defines an element acting as a `Moobile.ActivityIndicator` control |  All components | Use the `data-activity-indicator` attribute to specify a subclass instead

#### Examples:

##### Specifying an element that acts an activity indicator control using the `data-role` attribute:

	<div data-role="activity-indicator"></div>

##### Specifying an element that acts an activity indicator control subclass using the `data-role` attribute:

	<div data-role="activity-indicator" data-activity-indicator="MyActivityIndicator"></div>

Methods {#methods}
--------------------------------------------------------------------------------

### start() {#start}

Starts this activity indicator animation. This method adds the `activity` CSS class to the element upon starting.

#### Returns:

- [Moobile.ActivityIndicator](../Control/ActivityIndicator.md) This Moobile.ActivityIndicator instance.

#### Example:

	var activityIndicator = new Moobile.ActivityIndicator();
	activityIndicator.start();

-----

### stop() {#stop}

Stops this activity indicator animation. This method removes the `activity` CSS class to the element upon stopping.

#### Returns:

- [Moobile.ActivityIndicator](../Control/ActivityIndicator.md) This Moobile.ActivityIndicator instance.

#### Example:

	var activityIndicator = new Moobile.ActivityIndicator();
	activityIndicator.stop();
