<?php

namespace TypiCMS\Form\ErrorStore;

interface ErrorStoreInterface
{
    public function hasError(string $key): bool;

    public function getError(string $key): ?string;
}
