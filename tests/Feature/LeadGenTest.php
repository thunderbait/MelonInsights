<?php

namespace Tests\Feature;

use App\Event;
use App\Venue;
use App\Organisation;
use App\EventType;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LeadGenTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    // Testing to get all leads back for the user under that venue
    //  1. No filters - Just get back all leads
    public function testLeadAPIget(){
        $response = $this->get(route('leads'));

        $response->assertStatus(200);     
    }

    public function testVenueLeadAPIget(){
        $venue = Venue::first();
        
        $response = $this->get(route('venues.leads', ['venue' => $venue]));

        $response->assertStatus(200);

        // $response->assertSee('725');
        // $response->assertDontSee('720');
    }

    public function testYearRequest(){
        $venue = Venue::first();

        $response = $this->get(route('venues.leads', ['venue' => $venue, 'year'=>2023]));

        $response->assertStatus(200);

        $response->assertSee('136');
    }

    // Testing add a new event
    public function testNewEvent(){
        $organisation = Organisation::first()->id;
        $eventType = EventType::first()->id;

        //$request = 'name', 'description'
        $data = [
            'name' => 'New Shoe Conference',
            'description' => 'A conference that brings all the show lovers around the world into one space.',
        ];

        $this->post(route('events.store', $organisation, $eventType), $data)
            ->assertStatus(201);
    }
}
