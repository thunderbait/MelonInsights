<?php

use Illuminate\Database\Seeder;

use App\Lead;

class LeadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $leads = factory(Lead::class, 150)->create();

    }
}
