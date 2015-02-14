<?php namespace Anomaly\IntegerFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter;

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
     * @param null $separator
     * @return string
     */
    public function format($separator = null)
    {
        if (!$separator) {
            $separator = array_get($this->object->getConfig(), 'separator');
        }

        return number_format($this->object->getValue(), 0, '.', $separator);
    }
}
