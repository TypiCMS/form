<?php

namespace TypiCMS\Form\Tests;

use PHPUnit\Framework\TestCase;
use TypiCMS\Form\Elements\File;

/**
 * @internal
 * @coversNothing
 */
class FileTest extends TestCase
{
    use InputContractTest;

    protected function newTestSubjectInstance($name)
    {
        return new File($name);
    }

    protected function getTestSubjectType()
    {
        return 'file';
    }
}
