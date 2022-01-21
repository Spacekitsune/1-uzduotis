<?php

namespace Database\Seeders;
use App\Models\Client;
use App\Models\Company;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Client::factory()->count(30)->create();
        // Company::factory()->count(10)->create();
        $this->call([
            TypeSeeder::class,
            CompanySeeder::class,
            ClientSeeder::class
            
        ]);
    }
}
