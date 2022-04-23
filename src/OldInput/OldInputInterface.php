<?php

namespace TypiCMS\Form\OldInput;

interface OldInputInterface
{
    public function hasOldInput(): bool;

    public function getOldInput(string $key): array|string;
}
