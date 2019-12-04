<?php

use Illuminate\Database\Seeder;

use App\EventInstance;
use Carbon\Carbon;
use App\SicDivision;

class EventIntancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allEvents = App\Event::all();  

        $year = 0;

        $date = Carbon::now();

        foreach($allEvents as $event){
            $year = random_int(1, 4); 
            $days = random_int(1, 3);          
            $date = Carbon::createFromDate(random_int(2025, 2030), random_int(1, 11), random_int(1, 30));

            $date_end = $date->copy()->startOfDay();
            $date_end->addDays($days);

            factory(EventInstance::class, 15)->create(['event_id' => $event->id])    
                            ->each(function($s) use ($year, $date, $date_end) {
                               // $days = random_int(1, 2); 
                               $currentDate = Carbon::now();

                                $new_date = $date->subYears($year);
                                $end_date = $date_end->subYears($year);
                               // $end_date = $date->addDays(2);
                                
                                $s->date_start = $new_date;
                                $s->date_end =  $end_date;

                                if($new_date > $currentDate){
                                    $s->happened = 0;
                                }
                                $s->save();
                            });
        }

        EventInstance::all()->each(function ($eInstance){
            $eInstance->sicDivisions()->saveMany(SicDivision::all()->random(3));
        });
    }
}
