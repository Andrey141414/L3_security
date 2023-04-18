<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Console\Commands\dialog;

use function PHPUnit\Framework\assertEquals;

class apiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    //Проверим подключение к api 
    public function test_api_connection(): void
    {

        $response = (new dialog())->SendMessage('Привет, как дела?');
        assertEquals($response->status(),200);
    }
}
