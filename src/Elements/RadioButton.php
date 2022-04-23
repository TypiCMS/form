<?php

namespace TypiCMS\Form\Elements;

class RadioButton extends Checkbox
{
    /**
     * @var array
     */
    protected $attributes = [
        'type' => 'radio',
    ];

    public function __construct(string $name, ?string $value = null)
    {
        parent::__construct($name);

        if (is_null($value)) {
            $value = $name;
        }

        $this->setValue($value);
    }
}
