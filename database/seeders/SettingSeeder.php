<?php

namespace Database\Seeders;

use App\Models\Advantage;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arItems = [
            [
                'name' => 'Номер для отображение',
                'code' => 'phone_read',
                'value' => '+7 (909) 790-71-17',
            ],
            [
                'name' => 'Номер для звонока',
                'code' => 'phone_call',
                'value' => '+79097907117',
            ],

        ];

        foreach ($arItems as $arItem) {
            Setting::updateOrCreate([
                'code' => $arItem['code']
            ], $arItem);
        }
    }
}
