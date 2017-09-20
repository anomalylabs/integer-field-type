## Introduction[](#introduction)

`anomaly.field_type.integer`

The integer field type provides a basic HTML input that restricts input to integer values between an optional range.


### Configuration[](#introduction/configuration)

Below is the full configuration available with defaults values:

    "example" => [
        "type"   => "anomaly.field_type.integer",
        "config" => [
            "default_value" => null,
            "separator" => ",",
            "step"      => 1,
            "min"       => null,
            "max"       => null,
        ]
    ]

###### Configuration

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>Key</th>

<th>Example</th>

<th>Description</th>

</tr>

</thead>

<tbody>

<tr>

<td>

default_value

</td>

<td>

25

</td>

<td>

The default value.

</td>

</tr>

<tr>

<td>

separator

</td>

<td></td>

<td>

The thousands separator.

</td>

</tr>

<tr>

<td>

step

</td>

<td>

5

</td>

<td>

The numerical interval between value steps.

</td>

</tr>

<tr>

<td>

min

</td>

<td>

1

</td>

<td>

The minumum value allowed.

</td>

</tr>

<tr>

<td>

max

</td>

<td>

99

</td>

<td>

The maximum value allowed.

</td>

</tr>

</tbody>

</table>
