<?php

namespace TypiCMS\Form\OldInput;

use Illuminate\Session\Store as Session;

class IlluminateOldInputProvider implements OldInputInterface
{
    /**
     * @var Session
     */
    private $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public function hasOldInput(): bool
    {
        return ($this->session->get('_old_input')) ? true : false;
    }

    public function getOldInput(string $key): mixed
    {
        return $this->session->getOldInput($this->transformKey($key));
    }

    protected function transformKey(string $key): string
    {
        return str_replace(['.', '[]', '[', ']'], ['_', '', '.', ''], $key);
    }
}
