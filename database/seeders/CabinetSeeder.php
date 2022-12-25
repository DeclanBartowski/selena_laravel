<?php

namespace Database\Seeders;

use App\Models\Cabinet;
use Illuminate\Database\Seeder;

class CabinetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Cabinet::updateOrCreate([
            'name' => 'Мой кабинет',
        ], [
            'name' => 'Мой кабинет',
            'children_area_value' => '1',
            'children_area_description' => 'Детская <br>зона',
            'cabinet_value' => '2',
            'cabinet_description' => 'Кабинета',
            'session_value' => '60',
            'session_description' => 'Минут <br>сессия',
            'photo' => [
                '/static/img/cabinet/01.jpg',
                '/static/img/cabinet/02.jpg',
                '/static/img/cabinet/01.jpg',
                '/static/img/cabinet/02.jpg',
                '/static/img/cabinet/01.jpg',
                '/static/img/cabinet/02.jpg',
            ],
            'preview' => 'Для моей работы обстановка кабинета крайне важна. Она поможет помочь раскрыться и наладить процессы. Я постаралась сделать так, чтобы вы смогли расслабиться, рассказать о проблемах и настроиться на перемены.',
        ]);
    }
}
