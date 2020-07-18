<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            'name' => 'Abia',                   
        ]);

        DB::table('states')->insert([
            'name' => 'Adamawa'           
        ]);

        DB::table('states')->insert([
            'name' => 'Akwa Ibom'           
        ]);

        DB::table('states')->insert([
            'name' => 'Anambra'           
        ]);

        DB::table('states')->insert([
            'name' => 'Bauchi'           
        ]);

        DB::table('states')->insert([
            'name' => 'Bayelsa'           
        ]);
        DB::table('states')->insert([
            'name' => 'Borno'           
        ]);
        DB::table('states')->insert([
            'name' => 'Edo'           
        ]);
        DB::table('states')->insert([
            'name' => 'Enugu'           
        ]);
        DB::table('states')->insert([
            'name' => 'Imo'           
        ]);
        DB::table('states')->insert([
            'name' => 'Lagos'           
        ]);        
        DB::table('states')->insert([
            'name' => 'Plateau'           
        ]);
    }
}
