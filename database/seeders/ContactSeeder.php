<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Social;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Contact::updateOrCreate([
            'email' => 'mail@mail.ru',
        ], [
            'address' => 'Москва, ул. Пушкина 130, оф. 58',
            'email' => 'mail@mail.ru',
            'text' => 'Каждый день мы открываем свои двери для вас и всегда ждём! ',
            'phone' => '+7 (900) 555-55-55',
            'link_map' => '#',
            'social_link' => Social::whereIn('name', ['Telegramm', 'Whatsapp'])->select('id')->pluck('id')->all(),
            'work_time' => '11:00−22:00',
            'map' => [
                '55.868177516827',
                '37.492904',
            ],
        ]);
    }
}
