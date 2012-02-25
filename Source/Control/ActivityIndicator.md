Moobile.ActivityIndicator
================================================================================

##### Extends *[Moobile.Control](../Control/Control.md)*

Provides an activity indicator control.

Initialization {#initialization}
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
`activity-indicator` | Defines the element that act as an activity-indicator. Use the `data-activity-indicator` property to specify a subclass instead.

Methods {#methods}
--------------------------------------------------------------------------------

### start() {#start}

Starts the indicator animation by adding the `activity` CSS class to the element. Edit the properties of this CSS class to customize the animation.

#### Returns:

- *[Moobile.ActivityIndicator]()* This Moobile.ActivityIndicator instance.

-----

### stop() {#stop}

Stops the indicator animation by removing the `activity` CSS class to the element.

#### Returns:

- *[Moobile.ActivityIndicator]()* This Moobile.ActivityIndicator instance.

Events {#events}
--------------------------------------------------------------------------------

Events inherited from [Moobile.Control](../Control/Control.md).

Styles {#styles}
--------------------------------------------------------------------------------

This component does not define styles.
