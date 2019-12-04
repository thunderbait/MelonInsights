<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Venue;
use App\Lead;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Brain Dobson',
            'email' => 'hcc@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
            'image' => 'https://www.totaljobs.com/CompanyLogos/b206621df21b4134aa34fb0bf4d52688.png'
        ]);

        DB::table('user_venue')->insert([
            'user_id' => 1,
            'venue_id' => 1,
        ]);

        $users = factory(User::class, 10)->create();

        User::all()->each(function ($user){
            $user->venues()->saveMany(Venue::all()->random(5));
        });
         
    }
}

