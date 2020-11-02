<?php

namespace Tests\Unit;
use App\Repositories\TranslateRepository;
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

    public function testApiContent () {
        $response = $this->postJson('/api/translate',['text' => 'price'])->getContent();
        $this->assertEquals('գինը', $response);
    }

    public function testApiStatus () {
        $response = $this->postJson('/api/translate',['text' => 'price']);
        $response->assertStatus(200);
    }

    public function testRepository () {
        $repository = new TranslateRepository();
        $test_repo = $repository->translate('price');
        $this->assertEquals('գինը', $test_repo);
    }

}
