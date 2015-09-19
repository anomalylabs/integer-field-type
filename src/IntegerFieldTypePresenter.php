<?php namespace Anomaly\IntegerFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;
use NumberFormatter;

/**
 * Class IntegerFieldTypePresenter
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\IntegerFieldType
 */
class IntegerFieldTypePresenter extends FieldTypePresenter
{

    /**
     * Return a formatted integer.
     *
     * @return string
     */
    public function formatted()
    {
        $separator = array_get($this->object->getConfig(), 'separator');

        return number_format($this->object->getValue(), 0, '.', $separator);
    }

    /**
     * Return the integer formatted as a currency.
     *
     * @param null   $currency
     * @param string $field
     * @return string
     */
    public function currency($currency = null, $field = 'currency')
    {
        if (!$currency) {
            $currency = $this->object->getEntry()->{$field};
        }

        $format = new NumberFormatter(app('app.locale') . "@currency={$currency}", NumberFormatter::CURRENCY);

        $symbol = $format->getSymbol(NumberFormatter::CURRENCY_SYMBOL);

        return $symbol . $this->formatted();
    }
}
