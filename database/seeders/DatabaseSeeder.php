<?php

namespace Database\Seeders;

use App\Models\FormResult;
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
            SocialSeeder::class,
            ContactSeeder::class,
            CabinetSeeder::class,
            AdvantageSeeder::class,
            TextBlocksSeeder::class,
            PagesSeeder::class,
            SettingSeeder::class,
            MetaFieldsSeeder::class,
        ]);
        FormResult::factory()->count(10)->create();
    }
}
