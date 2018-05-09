<?php

use TypiCMS\Form\ErrorStore\IlluminateErrorStore;
use Illuminate\Support\MessageBag;
use PHPUnit\Framework\TestCase;

class IlluminateErrorStoreTest extends TestCase
{
    public function test_it_converts_array_keys_to_dot_notation()
    {
        $errors = new MessageBag(['foo.bar' => 'Some error']);
        $session = Mockery::mock('Illuminate\Session\Store');
        $session->shouldReceive('has')->with('errors')->andReturn(true);
        $session->shouldReceive('get')->with('errors')->andReturn($errors);

        $errorStore = new IlluminateErrorStore($session);
        $this->assertTrue($errorStore->hasError('foo[bar]'));
    }
}
