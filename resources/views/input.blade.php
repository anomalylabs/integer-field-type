<input {!! html_attributes($fieldType->attributes([
        'type'    => 'nummber',
        'min'     => $fieldType->config('min'),
        'max'     => $fieldType->config('max'),
        'step'    => $fieldType->config('step'),
        'onhover' => '(function (e) {e.preventDefault();})(event);',
])) !!}>
