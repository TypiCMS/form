<?php

namespace TypiCMS\Form\Tests;

use DateTime;
use PHPUnit\Framework\TestCase;
use TypiCMS\Form\Elements\DateTimeLocal;

/**
 * @internal
 * @coversNothing
 */
class DateTimeLocalTest extends TestCase
{
    use InputContractTest;

    protected function newTestSubjectInstance($name)
    {
        return new DateTimeLocal($name);
    }

    protected function getTestSubjectType()
    {
        return 'datetime-local';
    }

    public function testDateTimeValuesAreBoundAsFormattedStrings()
    {
        $dateTimeLocal = new DateTimeLocal('dob');
        $dateTimeLocal->value(new DateTime('12-04-1988 10:33'));

        $expected = '<input type="datetime-local" name="dob" value="1988-04-12T10:33">';
        $this->assertSame($expected, $dateTimeLocal->render());
    }

    public function testDateTimeDefaultValuesAreBoundAsFormattedStrings()
    {
        $dateTimeLocal = new DateTimeLocal('dob');
        $dateTimeLocal->defaultValue(new DateTime('12-04-1988 10:33'));

        $expected = '<input type="datetime-local" name="dob" value="1988-04-12T10:33">';
        $this->assertSame($expected, $dateTimeLocal->render());
    }
}
