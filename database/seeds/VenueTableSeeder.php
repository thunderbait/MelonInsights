<?php

use Illuminate\Database\Seeder;
use App\Venue;
use App\Room;

use Grimzy\LaravelMysqlSpatial\Types\Point;

class VenueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('venues')->insert([
            'name' => 'Harrogate Convention Centre',
            'description' => 'Delivering world-class facilities for events, conferences, exhibitions and entertainment in a contemporary space.',
            'website_url' => 'https://www.harrogateconventioncentre.co.uk/',
            'max_capacity' => 5500,
            'break_out_rooms' => 10,
            'square_meter' => 13700,
            'country_code' => 'GB',
            'location' => null ,	// (lat, lng)
        ]);

        // Saving this as Harrogates real location
        $venue = Venue::find(1);
        $venue->location = new Point(-1.5409,53.9970);
        $venue->save();
        
        $venues = factory(Venue::class, 5)->create(); 
    }
}
