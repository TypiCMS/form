<?php

use PHPUnit\Framework\TestCase;
use TypiCMS\Form\Elements\Password;

class PasswordTest extends TestCase
{
    use TextSubclassContractTest;

    protected function newTestSubjectInstance($name)
    {
        return new Password($name);
    }

    protected function getTestSubjectType()
    {
        return 'password';
    }
}
