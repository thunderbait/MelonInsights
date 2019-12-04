<?php

use Illuminate\Database\Seeder;

use App\LeadScore;
use App\Lead;

class LeadScoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $leads = Lead::all();

        foreach($leads as $lead){
            $leadscore = factory(LeadScore::class, 2)->create(['lead_id' => $lead->id]);
        }
        
    }
}
