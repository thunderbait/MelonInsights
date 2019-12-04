<?php

use Illuminate\Database\Seeder;

use App\Room;
use App\EventInstance;
use App\CapRoomStyle;
use App\Style;

class CapRoomStylesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rooms = Room::all();
        $styles = Style::all();

        foreach($rooms as $room){
            foreach($styles as $stlye){
                factory(CapRoomStyle::class)->create(['room_id' => $room->id, 'style_id' => $stlye->id]);
            }
            
        }

        EventInstance::all()->each(function ($crs){
            $crs->capRoomStyles()->saveMany(CapRoomStyle::all()->random(5));
        });
    }
}
