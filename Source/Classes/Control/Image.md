Moobile.Image
================================================================================

##### Extends *[Moobile.Control](../Control/Control.md)*

Provides an image control that correctly free the memory upon being unloaded.

Initialization {#initialize}
--------------------------------------------------------------------------------

#### Syntax:

	var image = new Moobile.Image([element], [options], [name]);

#### Parameters:

Name                 | Type    | Description
-------------------- | ------- | -----------
`element` *Optional* | Element | The image's element, element id or html string.
`options` *Optional* | Object  | The image's options, see below.
`name`    *Optional* | String  | The image's name.

#### Options:

Name        | Type    | Description
----------- | ------- | -----------
`className` | String  | The image's extended CSS class name, defaults to `null`.
`styleName` | String  | The image's default style, defaults to `null`.
`tagName`   | String  | The image's element tag name, defaults to `img`.
`preload`   | Boolean | Whether to preload the image.

#### Generates:

	<img class="image"></div>

#### Defined roles:

Name    | Description                                            | Applies to      | Note
------- | ------------------------------------------------------ | --------------- | ----
`image` | Defines an element acting as a `Moobile.Image` control |  All components | Use the `data-image` attribute to specify a subclass instead

#### Examples:

##### Specifying an element that acts an image control using the `data-role` attribute:

	<img data-role="image" />

##### Specifying an element that acts an image control subclass using the `data-role` attribute:

	<img data-role="image" data-image="MyImage" />

Events {#events}
--------------------------------------------------------------------------------

### load

Fired when the image is loaded. If the `preload` option is `true`, this event will be fired once the image is preloaded otherwise it will be fired as soon as a source is specified.

-----

### unload

Fired when the image is unloaded by setting its source to `null`.

Methods {#methods}
--------------------------------------------------------------------------------

### setSource(source) {#setSource}

Sets the image source into the `src` attribute of the element. Passing `null` as the source will unload the image.

#### Parameters:

Name     | Type   | Description
-------- | ------ | -----------
`source` | String | The image source.

#### Returns:

- `Moobile.Image` This Moobile.Image instance.

#### Example:

	var image = new Moobile.Image();
	image.setSource('path/to/an-image.png');

-----

### getSource() {#getSource}

Returns the image source from the `src` attribute of the element.

#### Returns:

- String The image source.

#### Example:

	var image = new Moobile.Image();
	image.setSource('path/to/an-image.png');
	image.getSource(); // returns 'path/to/an-image.png'

-----

### getImage() {#getImage}

Returns the `Image` object used to preload this image. The `preload` option must be set to `true` otherwise this method will return `null`.

#### Returns:

- `Image` The `Image` object used to preload this image.

#### Example:

	var image = new Moobile.Image(null, {preload: true});
	image.setSource('path/to/an-image.png');
	image.getImage(); // return the Image object.

-----

### getOriginalSize() {#getOriginalSize}

Returns the original image size. The `preload` option must be set to `true` otherwise the original size will not be calculated.

#### Returns:

- `Object` The original image size object with two keys, `x` for the width and `y` for the height.

#### Example:

	var image = new Moobile.Image(null, {preload: true});
	image.setSource('path/to/an-image.png');
	image.addEvent('load', function() {
		image.getOriginalSize(); // returns {x: X,y: Y}
	});

-----

### isLoaded() {#isLoaded}

Indicates whether the image is loaded.

#### Returns:

- `Boolean` Whether the image is loaded.

#### Example:

	var image = new Moobile.Image(null, {preload: true});
	image.setSource('path/to/an-image.png');
	image.addEvent('load', function() {
		image.isLoaded(); // returns true
	});
	image.isLoaded(); // returns false
