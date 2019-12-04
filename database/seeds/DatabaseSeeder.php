<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(VenueTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(StyleTableSeeder::class);
        $this->call(EventTypeTableSeeder::class);
        $this->call(OrganisationTableSeeder::class);
        $this->call(SicSectionTableSeeder::class);
        $this->call(SicDivisionsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(EventIntancesTableSeeder::class);
        $this->call(CapRoomStylesTableSeeder::class); 
        $this->call(LeadTableSeeder::class);
        $this->call(LeadScoreTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
