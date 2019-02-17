<?php

use PHPUnit\Framework\TestCase;
use TypiCMS\Form\Elements\Number;

class NumberTest extends TestCase
{
    use TextSubclassContractTest;

    protected function newTestSubjectInstance($name)
    {
        return new Number($name);
    }

    protected function getTestSubjectType()
    {
        return 'number';
    }
}
