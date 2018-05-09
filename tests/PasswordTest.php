<?php

use TypiCMS\Form\Elements\Password;
use PHPUnit\Framework\TestCase;

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
