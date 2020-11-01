<?php

namespace Tests\Unit;
use Illuminate\Filesystem\Cache;
use Tests\TestCase;
use App\TranslateLogic;

class TranslationsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {

        $response = $this->postJson('/api/translate',['text' => 'hello']);

        $response->assertStatus(200);

        $this->mock(TranslateLogic::class, function ($mock) {
            $mock->shouldReceive('translate');
        });

        $this->assertTrue(true);
    }
}
