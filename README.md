# Integer Field Type

*anomaly.field_type.integer*

#### An integer input field type.

The integer field type provides a basic HTML input that restricts values to integer values between an optional range.

## Configuration

- `min` - any valid integer
- `max` - any valid integer
- `separator` - any valid separator character
- `placeholder` - any string including translation keys

The default separator is ",".

#### Example

	config => [
	    'placeholder' => 'Enter a whole number between 0 and 10.',
		'separator' => '.',
		'min' => 0,
		'max' => 10
	]
