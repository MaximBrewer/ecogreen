<?php

namespace App\Traits;

/**
 * Trait Formatter
 * @package App\Traits
 */
trait DateFormatter
{
    /**
     * Format datetime
     *
     * @param $attribute
     * @param string $format
     * @return mixed
     */
    public function datetime($attribute, $format = 'H:i m/d/Y')
    {
        return $this->{$attribute}->format($format);
    }
}