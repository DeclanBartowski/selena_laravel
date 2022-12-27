<?php

namespace Database\Seeders;

use App\Models\Advantage;
use Illuminate\Database\Seeder;

class AdvantageSeeder extends Seeder
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
                'active' => true,
                'sort' => 100,
                'name' => 'Оставьте нам свою заявку на сайте и мы сразу с вами свяжемся в ближайшее время',
                'preview' => '/static/img/advantages/01.jpg',
                'content' => '',
            ],
            [
                'active' => true,
                'sort' => 200,
                'name' => 'Оставьте нам свою заявку на сайте и мы сразу с вами свяжемся в ближайшее время',
                'preview' => '/static/img/advantages/02.jpg',
                'content' => '',
            ],
            [
                'active' => true,
                'sort' => 300,
                'name' => 'Оставьте нам свою заявку на сайте и мы сразу с вами свяжемся в ближайшее время',
                'preview' => '/static/img/advantages/03.jpg',
                'content' => '<span class="first-letter">Легкость</span> и баланс',
            ],
            [
                'active' => true,
                'sort' => 400,
                'name' => 'Оставьте нам свою заявку на сайте и мы сразу с вами свяжемся в ближайшее время',
                'preview' => '/static/img/advantages/04.jpg',
                'content' => '',
            ],

        ];

        foreach ($arItems as $arItem) {
            $adv = new Advantage();
            $adv->fill($arItem);
            $adv->save();
        }
    }
}
