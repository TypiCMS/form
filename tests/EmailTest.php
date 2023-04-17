<?php

namespace TypiCMS\Form\Tests;

use PHPUnit\Framework\TestCase;
use TypiCMS\Form\Elements\Email;

/**
 * @internal
 *
 * @coversNothing
 */
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
