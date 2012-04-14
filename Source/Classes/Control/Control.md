Moobile.Control
================================================================================

##### Extends [Moobile.Component](../Component/Component.md)

Provides the base class for controls such has buttons and lists.

#### Syntax:

	var control = new Moobile.Control([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The control's element, element id or html string.
`options` *Optional* | Object  | The control's options, see below.
`name`    *Optional* | String  | The control's name.

#### Options:

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The control's extended CSS class name, defaults to `null`.
`styleName` | String | The control's default style, defaults to `null`.
`tagName`   | String | The control's element tag name, defaults to `div`.

#### Subclassing Notes:

Don't instantiate this class. Instead, extend it by creating subclasses for your own implementation.

This class overrides the following method:

- `shouldFireEvent`: Returns `false` if the control is disabled.

Methods {#methods}
--------------------------------------------------------------------------------

### setDisabled(value) {#setDisabled}

Sets whether this control is disabled. The CSS class `is-disabled` is added to the control element upon being disabled.

Events won't be fired when a control is disabled.

#### Parameters:

Name    | Type    | Description
------- | ------- | -----------
`value` | Boolean | Whether this control is disabled.

#### Returns:

- `Moobile.Control` This Moobile.Control instance.

-----

### isDisabled() {#isDisabled}

Indicate whether this control is disabled.

#### Returns:

- `Boolean` Whether this control is disabled.

-----

### setSelected(value) {#setSelected}

Sets whether this control is selected. The CSS class `is-selected` is added to the control element upon being disabled.

#### Parameters:

Name    | Type    | Description
------- | ------- | -----------
`value` | Boolean | Whether this control is selected.

#### Returns:

- `Moobile.Control` This Moobile.Control instance.

-----

### isSelected() {#isSelected}

Indicates whether this control is selected.

#### Returns:

- `Boolean` Whether this control is selected.

-----

### setHighlighted(value) {#setHighlighted}

Sets whether this control is selected. The CSS class `is-highlighted` is added to the control element upon being highlighted.

#### Parameters:

Name    | Type    | Description
------- | ------- | -----------
`value` | Boolean | Whether this control is highlighted.

#### Returns:

- `Moobile.Control` This Moobile.Control instance.

-----

### isHighlighted() {#isHighlighted}

Indicate whether this control is highlighted.

#### Returns:

- `Boolean` Whether this control is highlighted.

-----

### willChangeState(state) {#willChangeState}

Tell this control it's about to change state.

Override this method to provide your own implementation.

Name    | Type   | Description
------- | ------ | -----------
`state` | String | The state that will be set.

-----

### didChangeState(state) {#didChangeState}

Tell this control it has changed state.

Override this method to provide your own implementation.

Name    | Type   | Description
------- | ------ | -----------
`state` | String | The state that will be set.

-----

### shouldAllowState(state) {#shouldAllowState}

Indicate whether the specified state is applicable to this control.

Override this method if you wish to limit the states that can be applied to this control.

Name    | Type   | Description
------- | ------ | -----------
`state` | String | The state.

#### Returns:

- `Boolean` Whether the state can be applied to this control.

#### Example:

	var SpecialControl = new Class({
		Extends: Moobile.Control,
		shouldAllowState: function(state) {
			return state !== 'highlighted'
		}
	});
	var specialControl = new SpecialControl();
	specialControl.setDisabled(true); // works
	specialControl.setSelected(true); // works
	specialControl.setHighlighted(true); // does not work
