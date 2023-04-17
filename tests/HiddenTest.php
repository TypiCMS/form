<?php

namespace TypiCMS\Form\Tests;

use PHPUnit\Framework\TestCase;
use TypiCMS\Form\Elements\Hidden;

/**
 * @internal
 *
 * @coversNothing
 */
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
