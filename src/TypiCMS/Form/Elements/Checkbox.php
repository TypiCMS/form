<?php

namespace TypiCMS\Form\Elements;

class Checkbox extends Input
{
    /**
     * @var array
     */
    protected $attributes = [
        'type' => 'checkbox',
    ];

    protected $checked;

    protected $oldValue;

    public function __construct($name, $value = 1)
    {
        parent::__construct($name);

        $this->setValue($value);
    }

    public function setOldValue($oldValue)
    {
        $this->oldValue = $oldValue;
    }

    public function unsetOldValue()
    {
        $this->oldValue = null;
    }

    public function defaultToChecked(): self
    {
        if (!isset($this->checked) && is_null($this->oldValue)) {
            $this->check();
        }

        return $this;
    }

    public function defaultToUnchecked(): self
    {
        if (!isset($this->checked) && is_null($this->oldValue)) {
            $this->uncheck();
        }

        return $this;
    }

    public function defaultCheckedState($state): self
    {
        $state ? $this->defaultToChecked() : $this->defaultToUnchecked();

        return $this;
    }

    public function check(): self
    {
        $this->unsetOldValue();
        $this->setChecked(true);

        return $this;
    }

    public function uncheck(): self
    {
        $this->unsetOldValue();
        $this->setChecked(false);

        return $this;
    }

    protected function setChecked($checked = true)
    {
        $this->checked = $checked;
        $this->removeAttribute('checked');

        if ($checked) {
            $this->setAttribute('checked', 'checked');
        }
    }

    protected function checkBinding()
    {
        $currentValue = (string) $this->getAttribute('value');

        $oldValue = $this->oldValue;
        $oldValue = is_array($oldValue) ? $oldValue : [$oldValue];
        $oldValue = array_map('strval', $oldValue);

        if (in_array($currentValue, $oldValue)) {
            return $this->check();
        }
    }

    public function render(): string
    {
        $this->checkBinding();

        return parent::render();
    }
}
