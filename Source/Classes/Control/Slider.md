Moobile.Slider
================================================================================

##### Extends [Moobile.Control](../Control/Control.md)

Provides an horizontal slider control.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var slider = new Moobile.Slider([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The slider's element, element id or html string.
`options` *Optional* | Object  | The slider's options, see below.
`name`    *Optional* | String  | The slider's name.

#### Options:

Name        | Type    | Description
----------- | ------- | -----------
`className` | String  | The slider's extended CSS class name, defaults to `null`.
`styleName` | String  | The slider's default style, defaults to `null`.
`tagName`   | String  | The slider's element tag name, defaults to `div`.
`value`     | Number  | The slider's initial value.
`snap`      | Boolean | Whether to snap to each values.
`mode`      | String  | The slider's mode, either `horizontal` or `vertical`, defaults to `horizontal`.
`minimum`   | Number  | The slider's minimum value, defaults to `0`.
`maximum`   | Number  | The slider's maximum value, defaults to `100`.

#### Generates:

	<div class="slider">
		<div class="slider-track">
			<div class="slider-thumb"></div>
		</div>
	</div>

#### Subclassing Notes:

This class overrides the following method:

- `willBuild`: Call the parent method at the `top` of your implementation if you override this method.
- `didBuild`: Call the parent method at the `top` of your implementation if you override this method.
- `didBecomeReady`: Call the parent method at the `top` of your implementation if you override this method.
- `destroy`  : Call the parent method at the `bottom` of your implementation if you override this method.

#### Defined roles:

Name     | Description                                             | Applies to     | Note
-------- | ------------------------------------------------------- | -------------- | -------------------------------------------------------------
`slider` | Defines an element acting as a `Moobile.Slider` control | All components | Use the `data-slider` attribute to specify a subclass instead

#### Examples:

##### Specifying an element that acts a slider control using the `data-role` attribute:

	<div data-role="slider"></div>

##### Specifying an element that acts a slider control subclass using the `data-role` attribute:

	<div data-role="button" data-button="MySlider"></div>

Events {#events}
--------------------------------------------------------------------------------

### change {#change-event}

Fired when this slider's value change either by setting the value manually or by moving this slider's thumb.

Members {#members}
--------------------------------------------------------------------------------

### trackElement {#trackElement}

The element that defines this slider's movable area.

#### Type

- `Element`

-----

### thumbElement {#thumbElement}

The element used to create this slider's thumb.

#### Type

- `Element`

-----

### rangeElement {#rangeElement}

The element that defines this slider's value movable area.

#### Type

- `Element`

-----

### valueElement {#valueElement}

The element that defines the second color of this slider.

#### Type

- `Element`

Methods {#methods}
--------------------------------------------------------------------------------

### setValue(value) {#setValue}

Sets this slider's value and move it's thumb element to the proper position.

#### Parameters:

Name    | Type   | Description
------- | ------ | -----------
`value` | Number | This slider's value.

#### Returns:

- `Moobile.Slider` This Moobile.Slider instance.

#### Example:

	var slider = new Moobile.Slider();
	slider.setValue(50);

-----

### getValue() {#getValue}

Returns this slider's current value.

#### Returns:

- `Number` The current value.

#### Example:

	var slider = new Moobile.Slider();
	slider.setValue(50);
	slider.getValue(); // returns 50

-----

### setMinimum(minimum) {#setMinimum}

Sets this slider's minimum value.

#### Parameters:

Name      | Type   | Description
--------- | ------ | -----------
`minimum` | Number | This slider's minimum value.

#### Returns:

- `Moobile.Slider` This Moobile.Slider instance.

-----

### getMinimum() {#getMinimum}

Returns this slider's minimum value.

#### Returns:

- `Number` The minimum value.

-----

### setMaximum(maximum) {#setMaximum}

Sets this slider's maximum value.

#### Parameters:

Name      | Type   | Description
--------- | ------ | -----------
`maximum` | Number | This slider's maximum value.

#### Returns:

- `Moobile.Slider` This Moobile.Slider instance.

-----

### getMaximum() {#getMaximum}

Returns this slider's maximum value.

#### Returns:

- `Number` The maximum value.

-----

### refresh() {#refresh}

Refreshes the measures of this slider.

#### Returns:

- `Moobile.Slider` This Moobile.Slider instance.
