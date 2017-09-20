## Usage[](#usage)

This section will show you how to use the field type via API and in the view layer.


### Setting Values[](#usage/setting-values)

You can set the integer field type value with any valid integer.

    $entry->example = 10;


### Basic Output[](#usage/basic-output)

The integer field type returns `null` or the integer value.

    $entry->example; // 10


### Presenter Output[](#usage/presenter-output)

This section will show you how to use the decorated value provided by the `\Anomaly\IntegerFieldType\IntegerFieldTypePresenter` class.


#### IntegerFieldTypePresenter::format()[](#usage/presenter-output/integerfieldtypepresenter-format)

The `format` method returns the formatted number string according to configuration.

###### Returns: `string`

###### Example

    $decorated->example->format();

###### Twig

    {{ decorated.example.format() }}


#### IntegerFieldTypePresenter::currency()[](#usage/presenter-output/integerfieldtypepresenter-currency)

The `currency` method returns the currency formatted value.

###### Returns: `string`

###### Arguments

<table class="table table-bordered table-striped">

<thead>

<tr>

<th>Key</th>

<th>Required</th>

<th>Type</th>

<th>Default</th>

<th>Description</th>

</tr>

</thead>

<tbody>

<tr>

<td>

$currency

</td>

<td>

false

</td>

<td>

string

</td>

<td>

The currency field value or default configured currency.

</td>

<td>

The currency to format for.

</td>

</tr>

<tr>

<td>

$field

</td>

<td>

false

</td>

<td>

string

</td>

<td>

currency

</td>

<td>

The slug of the currency field.

</td>

</tr>

</tbody>

</table>

###### Example

    $decorated->example->currency();

###### Twig

    {{ decorated.example.currency() }}
