<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Console\Commands\dialog;

use function PHPUnit\Framework\assertEquals;

class inputTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_input_from_keyword(): void
    {
        //readline должна возвращать пустую строку
        $input = (new dialog())->InputFromKeyword('');
        assertEquals(strcmp($input,''),0);
    }
}
