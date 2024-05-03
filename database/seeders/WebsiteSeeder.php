<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WebsiteSetting;
use App\Models\Award;
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
        //  Awards
        $item1['image']='documents/fake/images/award.png';
        $item1['bg_image']='documents/fake/images/award_bg.jpg';
        $item1['description']='<h5>Welcome To</h5>
                                <h4><strong>JOIN THE FAMILY</strong></h4>        
                                <p>We&#39;ve been shortlisted in the Japanese category!<br />
                                Wanna show your love and help us hit the top spot?</p>';
        $item1['description_in_he']='<pre aria-label="Translated text" data-placeholder="Translation" data-ved="2ahUKEwj3qYmaxu-FAxXrQvEDHeOhDRAQ3ewLegQIBRAU" dir="rtl" id="tw-target-text">
                                    ברוך הבא ל
                                    <strong>הצטרפו למשפחה</strong>
                                    הגענו לרשימה הקצרה בקטגוריית היפנית!
                                    רוצה להראות את אהבתך ולעזור לנו להגיע למקום הראשון?</pre>';

        Award::create($item1);
    }
}
