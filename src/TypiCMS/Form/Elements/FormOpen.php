<?php

namespace TypiCMS\Form\Elements;

class FormOpen extends Element
{
    /**
     * @var array
     */
    protected $attributes = [
        'method' => 'POST',
        'action' => '',
    ];

    /**
     * @var Hidden
     */
    protected $token;

    /**
     * @var Hidden
     */
    protected $hiddenMethod;

    public function render(): string
    {
        $tags = [sprintf('<form%s>', $this->renderAttributes())];

        if ($this->hasToken() && ($this->attributes['method'] !== 'GET')) {
            $tags[] = $this->token->render();
        }

        if ($this->hasHiddenMethod()) {
            $tags[] = $this->hiddenMethod->render();
        }

        return implode($tags);
    }

    protected function hasToken(): bool
    {
        return isset($this->token);
    }

    protected function hasHiddenMethod(): bool
    {
        return isset($this->hiddenMethod);
    }

    public function post(): self
    {
        $this->setMethod('POST');

        return $this;
    }

    public function get(): self
    {
        $this->setMethod('GET');

        return $this;
    }

    public function put(): self
    {
        return $this->setHiddenMethod('PUT');
    }

    public function patch(): self
    {
        return $this->setHiddenMethod('PATCH');
    }

    public function delete(): self
    {
        return $this->setHiddenMethod('DELETE');
    }

    public function token(string $token): self
    {
        $this->token = new Hidden('_token');
        $this->token->value($token);

        return $this;
    }

    protected function setHiddenMethod($method): self
    {
        $this->setMethod('POST');
        $this->hiddenMethod = new Hidden('_method');
        $this->hiddenMethod->value($method);

        return $this;
    }

    public function setMethod($method): self
    {
        $this->setAttribute('method', $method);

        return $this;
    }

    public function action($action): self
    {
        $this->setAttribute('action', $action);

        return $this;
    }

    public function encodingType($type): self
    {
        $this->setAttribute('enctype', $type);

        return $this;
    }

    public function multipart(): self
    {
        return $this->encodingType('multipart/form-data');
    }
}
