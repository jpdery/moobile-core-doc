Moobile.Control
================================================================================
##### Extends *[Moobile.Entity](Entity/Entity.md)*, Implements `Events`, `Options`, `Class.Binds`

Provides the base class for controls.

Initialization {#initialiation}
--------------------------------------------------------------------------------

Methods {#methods}
--------------------------------------------------------------------------------

### setDisabled(value)

Sets whether the control is disabled.

This method will add the `is-disabled` CSS class to the control's
element upon disabling. What can and cannot be done when a control is
disabled is up to the control's implementation, however, core events
will not be propagated when a control is disabled.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`value` *Optional* | Boolean | Whether the control is disabled.

#### Returns:

- *[Moobile.Control](Docs/Control/Control.md)* This control.


-----

### isDisabled()

Indicate whether the control is disabled.

What can and cannot be done when a control is disabled is up to the
control's implementation, however, core events will not be propagated when a
control is disabled.


#### Returns:

- *Boolean* Whether the control is disabled.


-----

### setSelected(value)

Sets whether the control is selected.

This method will add the `is-selected` CSS class to the control's
element upon selecting. What can and cannot be done when a control is
selected is up to the control's implementation as the selected state
is mostly used for presentation purposes.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`value` *Optional* | Boolean | Whether the control is selected.

#### Returns:

- *[Moobile.Control](Docs/Control/Control.md)* This control.


-----

### isSelected()

Indicates whether the control is selected.

What can and cannot be done when a control is selected is up to the
control's implementation as the selected state is mostly used for
presentation purposes.


#### Returns:

- *Boolean* Whether the control is selected.


-----

### setHighlighted(value)

Sets whether the control is highlighted.

This method will add the `is-highlighted` CSS class to the control's
element upon highlighting. What can and cannot be done when a control is
selected is up to the control's implementation as the highlighted state
is mostly used for presentation purposes.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`value` *Optional* | Boolean | Whether the control is highlighted.

#### Returns:

- *[Moobile.Control](Docs/Control/Control.md)* This control.


-----

### isHighlighted()

Indicate whether the control is highlighted.

What can and cannot be done when a control is highlighted is up to the
control's implementation as the highlighted state is mostly used for
presentation purposes.


#### Returns:

- *Boolean* Whether the control is highlighted.


-----

### setSelectable(value)

Sets whether the control is selectable.

This method will set whether this control can go from an unselected
state to a selected state. However, it will not be locked as the control
will always be able to go to the unselected state.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`value` *Optional* | Boolean | Whether the control is selectable.

#### Returns:

- *[Moobile.Control](Docs/Control/Control.md)* This control.


-----

### isSelectable()

Indicates whether the control is selectable.

This method will indicate whether this control can go from an unselected
state to a selected state. However, it will not be locked as the control
will always be able to go to the unselected state.


#### Returns:

- *Boolean* Whether the control is selectable.


-----

### setHighlightable(value)

Sets whether the control is highlightable.

This method will set whether this control can go from an unhighlighted
state to an highlighted state. However, it will not be locked as the
control will always be able to go to the unhighlighted state.

#### Parameters:

Name  | Type | Description
----- | ---- | -----------
`value` *Optional* | Boolean | Whether the control is highlightable.

#### Returns:

- *[Moobile.Control](Docs/Control/Control.md)* This control.


-----

### isHighlightable()

Indicates whether the control is highlightable.

This method will indicate whether this control can go from an
unhighlighted state to an highlighted state. However, it will not be
locked as the control will always be able to go to the unhighlighted
state.


#### Returns:

- *Boolean* selectable Whether the control is highlightable.


-----


Members {#members}
--------------------------------------------------------------------------------

### Boolean disabled

Whether the control is disabled.

-----

### Boolean selected

Whether the control is selected.

-----

### Boolean highlighted

Whether the control is highlighted.

-----

### Boolean selectable

Whether the control is selectable.

-----

### Boolean highlightable

Whether the control is highlightable.

-----

### Object options

The control options.

-----


Events {#events}
--------------------------------------------------------------------------------