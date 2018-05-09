<?php

use TypiCMS\Form\Elements\File;
use PHPUnit\Framework\TestCase;

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
