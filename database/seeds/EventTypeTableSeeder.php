<?php

use Illuminate\Database\Seeder;

use App\EventType;

class EventTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $eventType = factory(EventType::class, 10)->create();
    }
}
