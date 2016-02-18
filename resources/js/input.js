$(function () {

    // Initialize integers
    $('input[data-provides="anomaly.field_type.integer"]').each(function () {
        $(this).spinner({
            min: $(this).data('min'),
            max: $(this).data('max'),
            step: $(this).data('step')
        });
    });
});
