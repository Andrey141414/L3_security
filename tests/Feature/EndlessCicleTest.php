<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Console\Commands\dialog;

use function PHPUnit\Framework\assertTrue;

class EndlessCicleTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_endless_cicle(): void
    {
        //Необходимо сделать бету(функцию, которая общается с ботом) которая на вход получает массив сообщений и если
        //сообщение end, то завершает диалог и возвраoftn true
        $res = (new dialog())->Beta(['Привет', 'Как дела?','end']);
        assertTrue($res);
    }
}
