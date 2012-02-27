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
`className` | String | The slider's default CSS class name, defaults to `null`.
`styleName` | String | The slider's default style, defaults to `null`.
`tagName`   | String | The slider's element tag name, defaults to `div`.

#### Generates:

	<div class="slider">
		<div class="slider-track">
			<div class="slider-thumb"></div>
		</div>
	</div>

#### Defined roles:

Name     | Description
-------- | -----------
`slider` | Defines the element that act as a slider. Use the `data-slider` property to specify a subclass instead.

Events {#events}
--------------------------------------------------------------------------------

### change

Fired when the slider's value change either by setting the value manually or by moving the slider's thumb.

Members {#members}
--------------------------------------------------------------------------------

### `Slider` slider {#slider}

The mootools slider used to move this slider's thumb on the track.

-----

### `Element` track {#track}

The element used to create this slider's track.

-----

### `Element` thumb {#thumb}

The element used to create this slider's thumb.

-----

### `Object` options {#options}

The slider's options.

Name        | Type   | Description
----------- | ------ | -----------
`className` | String | The slider's default CSS class name, defaults to `null`.
`styleName` | String | The slider's default style, defaults to `null`.
`tagName`   | String | The slider's element tag name, defaults to `div`.
`min`       | Number | The slider's minimal value, defaults to `0`.
`max`       | Number | The slider's maximal value, defaults to `100`.
`value`     | Number | The slider's initial value, defaults tp `0`.

Methods {#methods}
--------------------------------------------------------------------------------

### setValue(value) {#setValue}

Sets this slider's value and move it's thumb element to the proper position.

#### Parameters:

Name    | Type   | Description
------- | ------ | -----------
`value` | Number | The slider value.

#### Returns:

- [Moobile.Slider](../Control/Slider.md) This Moobile.Slider instance.

-----

### getValue() {#getValue}

Returns this slider's current value.

#### Returns:

- `Number` The current value.

Styles {#styles}
--------------------------------------------------------------------------------

This control does not define any styles.
