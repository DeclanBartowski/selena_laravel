<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
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
                'name' => 'Mail',
                'icon' => '/static/img/social/mail.svg',
                'active'=>true,
                'sort' => 100,
                'link'=>'mailto:test@test.ru',
            ],
            [
                'name' => 'Telegramm',
                'icon' => '/static/img/social/tg.svg',
                'active'=>true,
                'sort' => 200,
                'link'=>'https://web.telegram.org/z/',
            ],
            [
                'name' => 'Whatsapp',
                'icon' => '/static/img/social/wa.svg',
                'active'=>true,
                'sort' => 300,
                'link'=>'https://www.whatsapp.com/?lang=ru',
            ],
        ];

        foreach ($arItems as $arItem) {
            Social::updateOrCreate([
                'name' => $arItem['name']
            ], $arItem);
        }
    }
}
