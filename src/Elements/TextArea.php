<?php

namespace TypiCMS\Form\Elements;

class TextArea extends FormControl
{
    /**
     * @var array
     */
    protected $attributes = [
        'name' => '',
        'rows' => 10,
        'cols' => 50,
    ];

    /**
     * @var ?string
     */
    protected $value;

    public function render(): string
    {
        return implode([
            sprintf('<textarea%s>', $this->renderAttributes()),
            $this->escape($this->value),
            '</textarea>',
        ]);
    }

    public function rows(int $rows): self
    {
        $this->setAttribute('rows', $rows);

        return $this;
    }

    public function cols(int $cols): self
    {
        $this->setAttribute('cols', $cols);

        return $this;
    }

    public function value(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function placeholder(string $placeholder): self
    {
        $this->setAttribute('placeholder', $placeholder);

        return $this;
    }

    public function defaultValue(string $value): self
    {
        if (!$this->hasValue()) {
            $this->value($value);
        }

        return $this;
    }

    protected function hasValue(): bool
    {
        return isset($this->value);
    }
}
