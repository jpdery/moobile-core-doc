Moobile.ActivityIndicator
================================================================================

##### Extends [Moobile.Control](../Control/Control.md)

Provides a control that informs the user an operation is running.

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
`className` | String | The activity indicator's default CSS class name, defaults to `null`.
`styleName` | String | The activity indicator's default style, defaults to `null`.
`tagName`   | String | The activity indicator's element tag name, defaults to `div`.

#### Generates:

	<div class="activity-indicator"></div>

#### Defined roles:

Name                 | Description
-------------------- | -----------
`activity-indicator` | Defines the element that act as an activity indicator. Use the `data-activity-indicator` property to specify a subclass instead.

Events {#events}
--------------------------------------------------------------------------------

This class does not define additional events.

Members {#members}
--------------------------------------------------------------------------------

This class does not define additional members.

Methods {#methods}
--------------------------------------------------------------------------------

### start() {#start}

Starts this activity indicator animation. This method adds the `activity` CSS class to the element upon starting.

#### Returns:

- [Moobile.ActivityIndicator](../Control/ActivityIndicator.md) This Moobile.ActivityIndicator instance.

-----

### stop() {#stop}

Stops this activity indicator animation. This method removes the `activity` CSS class to the element upon stopping.

#### Returns:

- [Moobile.ActivityIndicator](../Control/ActivityIndicator.md) This Moobile.ActivityIndicator instance.

Styles {#styles}
--------------------------------------------------------------------------------

This control does not define any styles.
