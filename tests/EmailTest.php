<?php

use TypiCMS\Form\Elements\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    use TextSubclassContractTest;

    protected function newTestSubjectInstance($name)
    {
        return new Email($name);
    }

    protected function getTestSubjectType()
    {
        return 'email';
    }
}
