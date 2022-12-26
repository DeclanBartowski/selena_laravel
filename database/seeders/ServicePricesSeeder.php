<?php

namespace Database\Seeders;

use App\Models\ServicePrice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicePricesSeeder extends Seeder
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
                'name' => 'Коучинг. Online-сессия',
                'code' => 'couching-online-sessia',
                'price' => 5000,
                'active'=>true,
                'description'=>'Разнообразный и богатый опыт начало повседневной работы по формированию позиции представляет собой интересный эксперимент проверки форм развития.',
            ],
            [
                'name' => 'Коучинг. Offline-сессия',
                'code' => 'couching-offline-sessia',
                'price' => 4000,
                'active'=>true,
                'description'=>'Разнообразный и богатый опыт начало повседневной работы по формированию позиции представляет собой интересный эксперимент проверки форм развития.',
            ],
            [
                'name' => 'Коучинг',
                'code' => 'couching',
                'price' => 5500,
                'active'=>true,
                'description'=>'Разнообразный и богатый опыт начало повседневной работы по формированию позиции представляет собой интересный эксперимент проверки форм развития.',
            ],
        ];

        foreach ($arItems as $arItem) {
            ServicePrice::updateOrCreate([
                'code' => $arItem['code']
            ], $arItem);
        }
    }
}
