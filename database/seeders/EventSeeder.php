<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use Str;
class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title'=>"DAILY HAPPY HOUR",
                'title_in_he'=>"שעת שמחה יומית",
                'description'=>"<p>1+1 on alcohol from&nbsp;<em><strong>15:30 to 18:30</strong></em>&nbsp;-15% on everything on the menu</p>",
                'description_in_he'=>"<p>1+1 על אלכוהול מ-15:30 עד 18:30 - 15% על כל התפריט</p>",
                'image'=>'documents/fake/images/event1.png'
            ],
            [
                'title'=>"FRIDAY LUNCH BREAK CELEBRATION",
                'title_in_he'=>"חגיגת הצהרון של יום שישי",
                'description'=>"<p><strong>14:00 the celebration</strong>&nbsp;begins and there will also be a<br />bouzouki player for the atmosphere</p>",
                'description_in_he'=>"<p><strong>14:00</strong> החגיגה מתחילה וגם יהיה נגן בוזוקי <strong>לתת אווירה</strong></p>",
                'image'=>'documents/fake/images/event2.png'
            ],
        ];

        foreach ($data as $item) {
            $input['title'] = $item['title'];
            $input['title_in_he'] = $item['title_in_he'];
            $input['description'] = $item['description'];
            $input['description_in_he'] = $item['description_in_he'];

            $input['image'] =$item['image'];
            Event::create($input);
        }
    }
}
