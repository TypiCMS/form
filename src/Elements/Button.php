<?php

namespace TypiCMS\Form\Elements;

class Button extends FormControl
{
    protected array $attributes = [
        'type' => 'button',
    ];

    protected string $value;

    public function __construct(string $value, ?string $name = null)
    {
        parent::__construct($name);

        $this->value($value);
    }

    public function render(): string
    {
        return sprintf('<button%s>%s</button>', $this->renderAttributes(), $this->value);
    }

    public function value(string $value): void
    {
        $this->value = $value;
    }
}
