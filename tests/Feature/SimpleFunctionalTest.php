<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Category;


class SimpleFunctionalTest extends TestCase
{
  // Trait
  use DatabaseMigrations;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testWelcomePageWorks()
    {
        //$this->assertTrue(5+5 == 9);
        //$this->assertTrue(9, 5+5);
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function testOnlyAvailableCategoriesAreShown()
    {
      // arrenge
      $economyCategory = \App\Category::create([
        'name' => 'Economy',
        'capacity' => 4,
        'cost' => '25.99',
        'created_at' => getdate(),
        'updated_at' => getdate()
      ]);
      $suvCategory = \App\Category::create([
        'name' => 'Suv',
        'capacity' => 6,
        'cost' => '45.99'
      ]);
      $location = \App\Location::create([
        'name' => 'Aeropuerto Internacional de Guadalajara',
        'is_airport' => true,
        'created_at' => getdate(),
        'updated_at' => getdate()
      ]);
      $location->categories()->attach($economyCategory);
      // action
      $response = $this->call('get', '/reservations/categories', [
        'pick_up_location_id' => $location->id,
        'pick_up_date' => '2019-09-01',
        'drop_off_location_id' => $location->id,
        'drop_off_date' => '2019-09-03',
      ]);
      // assert
      $response->assertStatus(200);
      $response->assertSee('Economy');
      $response->assertDontSee('SUV');
    }
}
