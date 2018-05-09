<?php

use TypiCMS\Form\Elements\Hidden;
use PHPUnit\Framework\TestCase;

class HiddenTest extends TestCase
{
    use InputContractTest;

    protected function newTestSubjectInstance($name)
    {
        return new Hidden($name);
    }

    protected function getTestSubjectType()
    {
        return 'hidden';
    }
}
