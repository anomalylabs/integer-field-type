# Configuration

**Example Definition:**

    protected $fields = [
        'example' => [
            'type'   => 'anomaly.field_type.integer',
            'config' => [
                'separator'     => ',',
                'min'           => 0,
                'max'           => 100,
                'step'          => 5,
                'default_value' => 50
            ]
        ]
    ];

### `separator`

The thousands separator character. Valid options are `','`, `'.'`, ```'`'```, and `'&#160;'` (space). The default value is `','`.

### `min`

The minimum value allowed. By default no minimum value is enforced.

### `max`

The maximum value allowed. By default no maximum value is enforced.

### `step`

The size of the step to take when spinning via the buttons or arrow keys. The default value is `1`. 

### `default_value`

The default value. By default value is `null`.