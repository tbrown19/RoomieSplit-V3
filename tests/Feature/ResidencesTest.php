<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ResidencesTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    /** @test */
     public function a_user_can_create_a_residence()
     {
         $this->withoutExceptionHandling();

         $attributes = [
             'title' => $this->faker->sentence
         ];

         $this->post('/residences', $attributes);

         $this->assertDatabaseHas('residences', $attributes);
     }
}
