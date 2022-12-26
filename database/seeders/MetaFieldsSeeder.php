<?php

namespace Database\Seeders;

use App\Models\MetaField;
use Illuminate\Database\Seeder;

class MetaFieldsSeeder extends Seeder
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
                'route' => '/',
                'title' => 'Главная',
                'keywords' => 'Главная',
                'description' => 'Главная',
            ],
            [
                'route' => '/about/',
                'title' => 'О проекте',
                'keywords' => 'О проекте',
                'description' => 'О проекте',
            ],
            [
                'route' => '/contacts/',
                'title' => 'Контакты',
                'keywords' => 'Контакты',
                'description' => 'Контакты',
            ],
            [
                'route' => '/user-agreement/',
                'title' => 'Пользовательское соглашение',
                'keywords' => 'Пользовательское соглашение',
                'description' => 'Пользовательское соглашение',
            ],
            [
                'route' => '/privacy-policy/',
                'title' => 'Политика конфиденциальности',
                'keywords' => 'Политика конфиденциальности',
                'description' => 'Политика конфиденциальности',
            ],
            [
                'route' => '/services/',
                'title' => 'Услуги',
                'keywords' => 'Услуги',
                'description' => 'Услуги',
            ],
            [
                'route' => '/services/transaktnyy-analiz/',
                'title' => 'Трансактный анализ',
                'keywords' => 'Трансактный анализ',
                'description' => 'Трансактный анализ',
            ],
            [
                'route' => '/services/teta-khiling/',
                'title' => 'Тета-Хилинг',
                'keywords' => 'Тета-Хилинг',
                'description' => 'Тета-Хилинг',
            ],
            [
                'route' => '/services/vedicheskaya-astrologiya-dzhyotish/',
                'title' => 'Ведическая астрология - Джйотиш',
                'keywords' => 'Ведическая астрология - Джйотиш',
                'description' => 'Ведическая астрология - Джйотиш',
            ],
            [
                'route' => '/services/zapadnaya-atrologiya/',
                'title' => 'Западная атрология',
                'keywords' => 'Западная атрология',
                'description' => 'Западная атрология',
            ],
            [
                'route' => '/services/sistemnye-rasstanovki/',
                'title' => 'Системные расстановки',
                'keywords' => 'Системные расстановки',
                'description' => 'Системные расстановки',
            ],
            [
                'route' => '/services/vastu/',
                'title' => 'Васту',
                'keywords' => 'Васту',
                'description' => 'Васту',
            ],
        ];

        foreach ($arItems as $arItem) {
            MetaField::updateOrCreate([
                'route' => $arItem['route']
            ], $arItem);
        }
    }
}
