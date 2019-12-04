<?php

use Illuminate\Database\Seeder;

use App\Style;

class StyleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $styles = factory(Style::class, 4)->create();
    }
}
