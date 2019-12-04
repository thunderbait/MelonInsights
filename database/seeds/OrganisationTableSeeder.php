<?php

use Illuminate\Database\Seeder;

use App\Organisation;

class OrganisationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $organisations = factory(Organisation::class, 10)->create();
    }
}
