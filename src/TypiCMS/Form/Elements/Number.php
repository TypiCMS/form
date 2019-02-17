<?php

namespace TypiCMS\Form\Elements;

class Number extends Input
{
    protected $attributes = [
        'type' => 'number',
    ];

    public function placeholder($placeholder)
    {
        $this->setAttribute('placeholder', $placeholder);

        return $this;
    }

    public function max($max)
    {
        $this->setAttribute('max', $max);

        return $this;
    }

    public function min($min)
    {
        $this->setAttribute('min', $min);

        return $this;
    }

    public function step($step)
    {
        $this->setAttribute('step', $step);

        return $this;
    }

    public function defaultValue($value)
    {
        if (!$this->hasValue()) {
            $this->setValue($value);
        }

        return $this;
    }

    protected function hasValue()
    {
        return isset($this->attributes['value']);
    }
}
