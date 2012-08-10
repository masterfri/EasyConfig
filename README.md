EasyConfig
==========

EasyConfig is designed for simple work with configuration of web applications.
This format allows to represent php arrays as easy-readable text.

Features:
* Supports strings, integer and decimal numbers, boolean values and NULL;
* Supports string-based and numbers-based keys in arrays;
* Minimal amount of markup, only names of elements and their values;
* Indentation defines nesting;
* Supports comments, of course.

Example:

	# There is an example
	integer		1
	float1		2.0
	float2		3e-5

	string		'Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
			'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

	boolean1	true
	boolean2	false
	voidValue	null

	array
		nestedArray
			element1	'Value of the element
			element2	'Another value
			element3	'My parent is "nestedArray"
		element4		'My parent is "array"
