<?php

namespace TypiCMS\Form\Elements;

class Date extends Text
{
    /**
     * @var array
     */
    protected $attributes = [
        'type' => 'date',
    ];

    public function value($value): Input
    {
        if ($value instanceof \DateTime) {
            $value = $value->format('Y-m-d');
        }

        return parent::value($value);
    }

    public function defaultValue($value): self
    {
        if (!$this->hasValue()) {
            if ($value instanceof \DateTime) {
                $value = $value->format('Y-m-d');
            }
            $this->setValue($value);
        }

        return $this;
    }
}
