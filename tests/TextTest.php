<?php

use TypiCMS\Form\Elements\Text;
use PHPUnit\Framework\TestCase;

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
