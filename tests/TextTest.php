<?php

use PHPUnit\Framework\TestCase;
use TypiCMS\Form\Elements\Text;

class TextTest extends TestCase
{
    use TextSubclassContractTest;

    protected function newTestSubjectInstance($name)
    {
        return new Text($name);
    }

    protected function getTestSubjectType()
    {
        return 'text';
    }
}
