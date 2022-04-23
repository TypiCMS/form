<?php

namespace TypiCMS\Form\Elements;

abstract class FormControl extends Element
{
    public function __construct($name)
    {
        $this->setName($name);
    }

    protected function setName($name): void
    {
        $this->setAttribute('name', $name);
    }

    public function required($conditional = true): self
    {
        $this->setBooleanAttribute('required', $conditional);

        return $this;
    }

    public function optional(): self
    {
        $this->removeAttribute('required');

        return $this;
    }

    public function disable($conditional = true): self
    {
        $this->setBooleanAttribute('disabled', $conditional);

        return $this;
    }

    public function readonly($conditional = true): self
    {
        $this->setBooleanAttribute('readonly', $conditional);

        return $this;
    }

    public function enable(): self
    {
        $this->removeAttribute('disabled');
        $this->removeAttribute('readonly');

        return $this;
    }

    public function autofocus(): self
    {
        $this->setAttribute('autofocus', 'autofocus');

        return $this;
    }

    public function unfocus(): self
    {
        $this->removeAttribute('autofocus');

        return $this;
    }
}
