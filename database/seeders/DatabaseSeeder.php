<?php

namespace Database\Seeders;

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
        $this->call([
            UserSeeder::class,
            ServicesSeeder::class,
            ProjectSeeder::class,
            EducationSeeder::class,
            SkillSeeder::class,
            PortfolioSeeder::class,
            BlogSeeder::class,
        ]);
    }
}
