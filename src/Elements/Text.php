<?php

namespace TypiCMS\Form\Elements;

class Text extends Input
{
    /**
     * @var array
     */
    protected $attributes = [
        'type' => 'text',
    ];

    public function placeholder(string $placeholder): self
    {
        $this->setAttribute('placeholder', $placeholder);

        return $this;
    }

    public function defaultValue(string $value): self
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
