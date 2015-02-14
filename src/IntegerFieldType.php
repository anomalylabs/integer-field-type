<?php namespace Anomaly\IntegerFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

/**
 * Class IntegerFieldType
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\IntegerFieldType
 */
class IntegerFieldType extends FieldType
{

    /**
     * Base field type rules.
     *
     * @var array
     */
    protected $rules = [
        'integer'
    ];

    /**
     * The database column type.
     *
     * @var string
     */
    protected $columnType = 'integer';

    /**
     * Get the rules.
     *
     * @return array
     */
    public function getRules()
    {
        $rules = parent::getRules();

        if ($min = array_get($this->config, 'min')) {
            $rules[] = 'min:' . $min;
        }

        if ($max = array_get($this->config, 'max')) {
            $rules[] = 'max:' . $max;
        }

        return $rules;
    }
}
