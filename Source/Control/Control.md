Moobile.Control
================================================================================

##### Extends *[Moobile.Component]*

Provides the base class for controls. Do not instantiate this class directly, instead subclass it to create your own components.

Methods {#methods}
--------------------------------------------------------------------------------

### setDisabled(value) {#setDisabled}

Sets whether the control is disabled by adding or removing the `is-disabled` CSS class to the control's element. Events won't be fired when the control is disabled.

#### Parameters:

Name    | Type    | Description
------- | ------- | -----------
`value` | Boolean | Whether the control is disabled.

#### Returns:

- *[Moobile.Control]* This Moobile.Control instance.

-----

### isDisabled() {#isDisabled}

Indicate whether the control is disabled.

#### Returns:

- *Boolean* Whether the control is disabled.

-----

### setSelected(value) {#setSelected}

Sets whether the control is selected by adding or removing the `is-selected` CSS class to the control's element.

#### Parameters:

Name    | Type    | Description
------- | ------- | -----------
`value` | Boolean | Whether the control is selected.

#### Returns:

- *[Moobile.Control]* This Moobile.Control instance.

-----

### isSelected() {#isSelected}

Indicates whether the control is selected.

#### Returns:

- *Boolean* Whether the control is selected.

-----

### setHighlighted(value) {#setHighlighted}

Sets whether the control is selected by adding or removing the `is-highlighted` CSS class to the control's element.

#### Parameters:

Name    | Type    | Description
------- | ------- | -----------
`value` | Boolean | Whether the control is highlighted.

#### Returns:

- *[Moobile.Control]* This Moobile.Control instance.

-----

### isHighlighted() {#isHighlighted}

Indicate whether the control is highlighted.

#### Returns:

- *Boolean* Whether the control is highlighted.

-----

### setSelectable(value) {#setSelectable}

Sets whether the control is selectable.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`value` *Optional* | Boolean | Whether the control is selectable.

#### Returns:

- *[Moobile.Control]* This Moobile.Control instance.

-----

### isSelectable() {#isSelectable}

Indicates whether the control is selectable.

#### Returns:

- *Boolean* Whether the control is selectable.

-----

### setHighlightable(value) {#setHighlightable}

Sets whether the control is highlightable.

#### Parameters:

Name    | Type    | Description
------- | ------- | -----------
`value` | Boolean | Whether the control is highlightable.

#### Returns:

- *[Moobile.Control]* This Moobile.Control instance.

-----

### isHighlightable() {#isHighlightable}

Indicates whether the control is highlightable.

#### Returns:

- *Boolean* selectable Whether the control is highlightable.

-----

### willSetState(state, value) {#willSetState}

Tell the control one of its state is about to be set.

Name    | Type    | Description
------- | ------- | -----------
`state` | String  | The state that will be set.
`value` | Boolean | The state value.

-----

### didSetState(state, value) {#didSetState}

Tell the control one of its state has been set.

Name    | Type    | Description
------- | ------- | -----------
`state` | String  | The state that will be set.
`value` | Boolean | The state value.

-----

Members {#members}
--------------------------------------------------------------------------------

### *Boolean* disabled {#disabled}

Whether the control is disabled.

-----

### *Boolean* selected {#selected}

Whether the control is selected.

-----

### *Boolean* highlighted {#highlighted}

Whether the control is highlighted.

-----

### *Boolean* selectable {#selectable}

Whether the control is selectable.

-----

### *Boolean* highlightable {#highlightable}

Whether the control is highlightable.

-----

### *Object* options  {#options}

The control options with values inherited from [Moobile.Component].

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The control's extra CSS class name.
`styleName` | String | The control's default style.
`tagName`   | String | The control's default element type.

Events {#events}
--------------------------------------------------------------------------------

Inherited from [Moobile.Component]
