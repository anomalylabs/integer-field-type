<?php namespace Anomaly\IntegerFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

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
    public function format()
    {
        $separator = $this->object->config('separator');

        return number_format($this->object->getValue(), 0, null, str_replace('&#160;', ' ', $separator));
    }

    /**
     * Return the integer formatted as a currency.
     *
     * @param null $currency
     * @param string $field
     * @return string
     */
    public function currency($currency = null, $field = 'currency', $showSeparator = true)
    {
        if (!$currency) {
            $currency = $this->object->getEntry()->{$field};
        }

        if (!$currency) {
            $currency = config('streams::currencies.default');
        }

        $direction = config('streams::currencies.supported.' . strtoupper($currency) . '.direction');
        $symbol = config('streams::currencies.supported.' . strtoupper($currency) . '.symbol');

        $prefix = null;
        $suffix = null;

        if (strtolower($direction) == 'ltr') {
            $prefix = $symbol;
        } else {
            $suffix = $symbol;
        }
        if ($showSeparator) {
            return $prefix . " " . $this->format() . " " . $suffix;
        }
        return $prefix . " " . $this->object->getValue() . " " . $suffix;

    }
}
