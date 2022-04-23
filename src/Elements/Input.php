<?php

namespace TypiCMS\Form\Elements;

abstract class Input extends FormControl
{
    public function render(): string
    {
        return sprintf('<input%s>', $this->renderAttributes());
    }

    public function value($value): self
    {
        $this->setValue($value);

        return $this;
    }

    protected function setValue($value): self
    {
        $this->setAttribute('value', $value);

        return $this;
    }
}
