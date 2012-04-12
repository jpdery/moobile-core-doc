Element.From
================================================================================

Provides methods to retrieve elements from different contexts.

Static Methods {#methods}
--------------------------------------------------------------------------------

### Element.from(text) {#ElementFrom}

Returns an element from a string of html or an object that implements the `toElement` method.

#### Parameters:

Name               | Type  | Description
------------------ | ----- | -----------
`text`             | Mixed | A string of html or an object that implements the `toElement` method.

#### Returns:

- *Element* The element or `null` if no elements were extracted from the source.

#### Example

	var element = Element.from('<div><strong>Lorem</strong></div>');

----

### Element.at(path, [async], [fn]) {#ElementAt}

Returns an element stored in a file.

#### Parameters:

Name               | Type     | Description
------------------ | -------- | -----------
`path`             | String   | The file path.
`async` *Optional* | Boolean  | Whether to load the file asynchronously. Defaults to `false`.
`fn`    *Optional* | Function | The callback used when loading asynchronously.

#### Returns:

 - `Element` The element that was requested or `null` if the content is loaded asynchronously.

#### Example:

	var element = Element.at('/www/templates/template.html');
