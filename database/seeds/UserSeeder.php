<?php

use Illuminate\Database\Seeder;
Use App\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        DB::table('users')->insert([
            'passcode' => 'seeded',                   
        ]);

        DB::table('users')->insert([
            'passcode' => 'seeded'           
        ]);
        DB::table('users')->insert([
            'passcode' => 'seeded'           
        ]);
    }
}
