<?php namespace Anomaly\IntegerFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;
use NumberFormatter;

/**
 * Class IntegerFieldTypePresenter
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
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
     * @param  null   $currency
     * @param  string $field
     * @return string
     */
    public function currency($currency = null, $field = 'currency')
    {
        if (!$currency) {
            $currency = $this->object->getEntry()->{$field};
        }

        $format = new NumberFormatter(config('app.locale') . "@currency={$currency}", NumberFormatter::CURRENCY);

        $symbol = $format->getSymbol(NumberFormatter::CURRENCY_SYMBOL);

        return $symbol . $this->formatted();
    }
}
