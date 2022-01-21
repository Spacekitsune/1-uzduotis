<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            'name' => 'Mažoji bendrija',
            'short_name' => 'MB',
            'description' => 'ribota atsakomybė'
        ]);
        DB::table('types')->insert([
            'name' => 'Akcinė bendrovė',
            'short_name' => 'AB',
            'description' => 'ribota atsakomybė'
        ]);
        DB::table('types')->insert([
            'name' => 'Uždaroji akcinė bendrovė',
            'short_name' => 'UAB',
            'description' => 'ribota atsakomybė'
        ]);
        DB::table('types')->insert([
            'name' => 'Inviduali įmonė',
            'short_name' => 'IĮ',
            'description' => 'ribota atsakomybė'
        ]);
    }
}
