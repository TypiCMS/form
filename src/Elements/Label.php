<?php

namespace TypiCMS\Form\Elements;

class Label extends Element
{
    /**
     * @var ?Element
     */
    protected $element;

    /**
     * @var bool
     */
    protected $labelBefore;

    /**
     * @var string
     */
    protected $label;

    public function __construct(string $label)
    {
        $this->label = $label;
    }

    public function render(): string
    {
        $tags = [sprintf('<label%s>', $this->renderAttributes())];

        if ($this->labelBefore) {
            $tags[] = $this->label;
        }

        $tags[] = $this->renderElement();

        if (!$this->labelBefore) {
            $tags[] = $this->label;
        }

        $tags[] = '</label>';

        return implode($tags);
    }

    public function forId(string $name): self
    {
        $this->setAttribute('for', $name);

        return $this;
    }

    public function before(Element $element): self
    {
        $this->element = $element;
        $this->labelBefore = true;

        return $this;
    }

    public function after(Element $element): self
    {
        $this->element = $element;
        $this->labelBefore = false;

        return $this;
    }

    protected function renderElement(): string
    {
        if (!$this->element) {
            return '';
        }

        return $this->element->render();
    }

    public function getControl(): Element
    {
        return $this->element;
    }
}
