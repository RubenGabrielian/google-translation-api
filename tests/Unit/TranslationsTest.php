<?php

namespace Tests\Unit;
use App\Http\Controllers\TranslateController;
use App\Models\User;
use App\Repositories\Interfaces\TranslateRepositoryInterface;
use App\Repositories\TranslateRepository;
use Illuminate\Routing\Route;
use Tests\TestCase;
use Illuminate\Http\Request;



class TranslationsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    protected $translateRepository;
    public function setUp(): void
    {
        parent::setUp();
        $this->translateRepository = $this->app->make('App\Repositories\TranslateRepository');

    }

    public function testApiContent () {
        $response = $this->postJson('/api/translate',['text' => 'price'])->getContent();
        $this->assertEquals('գինը', $response);
    }

    public function testApiStatus () {
        $response = $this->postJson('/api/translate',['text' => 'price']);
        $response->assertStatus(200);
    }

//    public function testDbUser () {
//        $this->assertDatabaseCount('users',5);
//    }

    public function testRepository () {
        $test_repo = $this->translateRepository->translate('price');
        $this->assertEquals('գինը', $test_repo);
    }

    public function testTest () {
        $user = User::factory()->create(['name' => 'ruben']);
        $this->assertInstanceOf(User::class, $user);
    }


}
