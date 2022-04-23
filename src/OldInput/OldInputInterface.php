<?php

namespace TypiCMS\Form\OldInput;

interface OldInputInterface
{
    public function hasOldInput();

    public function getOldInput($key);
}
