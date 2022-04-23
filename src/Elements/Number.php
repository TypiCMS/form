<?php

namespace TypiCMS\Form\Elements;

class Number extends Input
{
    /**
     * @var array
     */
    protected $attributes = [
        'type' => 'number',
    ];

    public function placeholder($placeholder): self
    {
        $this->setAttribute('placeholder', $placeholder);

        return $this;
    }

    public function max($max): self
    {
        $this->setAttribute('max', $max);

        return $this;
    }

    public function min($min): self
    {
        $this->setAttribute('min', $min);

        return $this;
    }

    public function step($step): self
    {
        $this->setAttribute('step', $step);

        return $this;
    }

    public function defaultValue($value): self
    {
        if (!$this->hasValue()) {
            $this->setValue($value);
        }

        return $this;
    }

    protected function hasValue(): bool
    {
        return isset($this->attributes['value']);
    }
}
