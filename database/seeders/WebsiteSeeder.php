<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WebsiteSetting;
use Str;
class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item['logo']='documents/fake/images/logo.png';
        $item['working_hours']='01:00 – 08:00';
        $item['working_hours_in_hebrew']='08:00 – 01:00';
        $item['contact']='077-9800400';
        $item['email']='stolero.tlv@gmail.com';
        $item['website_url']='https://stolero.co.il/';
        $item['address']='Eliezer Perry 14 Tel Aviv';
        $item['address_in_hebrew']='אליעזר פרי 14 תל אביב';

        WebsiteSetting::create($item);
    }
}
