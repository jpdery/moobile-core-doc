Moobile.Control
================================================================================

##### Extends [Moobile.Component](../Component/Component.md)

Provides the base class for controls such has buttons and list and includes method for getting and setting state.

Initialization {#initialize}
--------------------------------------------------------------------------------

This class should not be instantiated, instead you should subclass it and create your own controls.

Events {#events}
--------------------------------------------------------------------------------

This class does not define additional events.

Members {#members}
--------------------------------------------------------------------------------

This class does not define additional members.

Methods {#methods}
--------------------------------------------------------------------------------

### setDisabled(value) {#setDisabled}

Sets whether this control is disabled. The CSS class `is-disabled` is added to the control element upon being disabled.

Events won't be fired when this control is disabled.

#### Parameters:

Name    | Type    | Description
------- | ------- | -----------
`value` | Boolean | Whether this control is disabled.

#### Returns:

- [Moobile.Control] This Moobile.Control instance.

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

- [Moobile.Control] This Moobile.Control instance.

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

- [Moobile.Control] This Moobile.Control instance.

-----

### isHighlighted() {#isHighlighted}

Indicate whether this control is highlighted.

#### Returns:

- `Boolean` Whether this control is highlighted.

-----

### willChangeState(state) {#willChangeState}

Tell this control it's about to change state.

Name    | Type   | Description
------- | ------ | -----------
`state` | String | The state that will be set.

-----

### didSetState(state, value) {#didSetState}

Tell this control it has changed state.

Name    | Type   | Description
------- | ------ | -----------
`state` | String | The state that will be set.

-----

### shouldAllowState(state) {#shouldAllowState}

Indicate whether the specified state is applicable to this control.

Name    | Type   | Description
------- | ------ | -----------
`state` | String | The state.

#### Returns:

- `Boolean` Whether the state is applicable to this control.
