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

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The slider's extended CSS class name, defaults to `null`.
`styleName` | String | The slider's default style, defaults to `null`.
`tagName`   | String | The slider's element tag name, defaults to `div`.
`min`       | Number | The slider's minimum value, defaults to `0`.
`max`       | Number | The slider's maximum value, defaults to `100`.

#### Generates:

	<div class="slider">
		<div class="slider-track">
			<div class="slider-thumb"></div>
		</div>
	</div>

#### Subclassing Notes:

This class overrides the following method:

- `willBuild`: Call the parent method at the `top` of your implementation if you override this method.
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

Fired when the slider's value change either by setting the value manually or by moving the slider's thumb.

Members {#members}
--------------------------------------------------------------------------------

### slider {#slider}

The mootools slider used to move this slider's thumb on the track.

#### Type

- `Slider`

-----

### trackElement {#trackElement}

The element used to create this slider's track.

#### Type

- `Element`

-----

### thumbElement {#thumbElement}

The element used to create this slider's thumb.

#### Type

- `Element`

Methods {#methods}
--------------------------------------------------------------------------------

### setValue(value) {#setValue}

Sets this slider's value and move it's thumb element to the proper position.

#### Parameters:

Name    | Type   | Description
------- | ------ | -----------
`value` | Number | The slider value.

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
