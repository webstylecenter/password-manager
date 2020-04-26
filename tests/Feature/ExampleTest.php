<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\CreatesApplication;
use Tests\MigrateFreshSeedOnce;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use CreatesApplication;
    use MigrateFreshSeedOnce;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
