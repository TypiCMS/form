<?php

namespace TypiCMS\Form\Tests;

use Illuminate\Support\MessageBag;
use Mockery;
use PHPUnit\Framework\TestCase;
use TypiCMS\Form\ErrorStore\IlluminateErrorStore;

/**
 * @internal
 *
 * @coversNothing
 */
class IlluminateErrorStoreTest extends TestCase
{
    public function testItConvertsArrayKeysToDotNotation()
    {
        $errors = new MessageBag(['foo.bar' => 'Some error']);
        $session = Mockery::mock('Illuminate\Session\Store');
        $session->shouldReceive('has')->with('errors')->andReturn(true);
        $session->shouldReceive('get')->with('errors')->andReturn($errors);

        $errorStore = new IlluminateErrorStore($session);
        $this->assertTrue($errorStore->hasError('foo[bar]'));
    }
}
