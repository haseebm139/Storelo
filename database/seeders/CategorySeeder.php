<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            /* Alcohole	אלכוהול */
            [
                'name'=>"Beers",
                'name_in_he'=>"בירות",
                'menu_id'=>1,
            ],
            [
                'name'=>"Vodka",
                'name_in_he'=>"וודקה",
                'menu_id'=>1,
            ],
            [
                'name'=>"Whiskey",
                'name_in_he'=>"וויסקי",
                'menu_id'=>1,
            ],
            [
                'name'=>"Gin",
                'name_in_he'=>"ג'ין",
                'menu_id'=>1,
            ],
            [
                'name'=>"Tequila",
                'name_in_he'=>"טקילה",
                'menu_id'=>1,
            ],
            [
                'name'=>"Anise",
                'name_in_he'=>"אניס",
                'menu_id'=>1,
            ],
            [
                'name'=>"Rum",
                'name_in_he'=>"רום",
                'menu_id'=>1,
            ],
            [
                'name'=>"Aperitif",
                'name_in_he'=>"אפריטיף",
                'menu_id'=>1,
            ],
            [
                'name'=>"Dejstif",
                'name_in_he'=>"דז'סטיף",
                'menu_id'=>1,
            ],
            [
                'name'=>"Liqueurs",
                'name_in_he'=>"ליקרים",
                'menu_id'=>1,
            ],
            [
                'name'=>"Cognac",
                'name_in_he'=>"קוניאק",
                'menu_id'=>1,
            ],
            [
                'name'=>"White wine",
                'name_in_he'=>"יין לבן",
                'menu_id'=>1,
            ],
            [
                'name'=>"Red wine",
                'name_in_he'=>"יין אדום",
                'menu_id'=>1,
            ],
            [
                'name'=>"Sparkling",
                'name_in_he'=>"מבעבע",
                'menu_id'=>1,
            ],
            [
                'name'=>"Rosé wine",
                'name_in_he'=>"יין רוזה",
                'menu_id'=>1,
            ],
            [
                'name'=>"Cocktails",
                'name_in_he'=>"קוקטליים",
                'menu_id'=>1,
            ],
            /* Light & Hot Drink	שתיה קלה&חמה */
            [
                'name'=>"Soft drink",
                'name_in_he'=>"שתיה קלה",
                'menu_id'=>2,
            ],
            [
                'name'=>"Squeezed in place",
                'name_in_he'=>"סחוטים במקום",
                'menu_id'=>2,
            ],
            [
                'name'=>"Hot beverage",
                'name_in_he'=>"שתיה קלה",
                'menu_id'=>2,
            ],

            /* Desserts	קינוחים */
            [
                'name'=>"Vegan",
                'name_in_he'=>"טבעוני",
                'menu_id'=>3,
            ],
            [
                'name'=>"Desserts",
                'name_in_he'=>"קינוחים",
                'menu_id'=>3,
            ],

            /* Main Dishes 	מנות עיקריות */
            [
                'name'=>"Pizzas",
                'name_in_he'=>"פיצות",
                'menu_id'=>4,
            ],
            [
                'name'=>"Pastas",
                'name_in_he'=>"פסטות",
                'menu_id'=>4,
            ],
            [
                'name'=>"Fish",
                'name_in_he'=>"דגים",
                'menu_id'=>4,
            ],
            [
                'name'=>"Vegan",
                'name_in_he'=>"טבעוני",
                'menu_id'=>4,
            ],
            [
                'name'=>"Meats",
                'name_in_he'=>"בשרים",
                'menu_id'=>4,
            ],
            [
                'name'=>"Kids Meals",
                'name_in_he'=>"מנות ילדים",
                'menu_id'=>4,
            ],

            /* Starter		 מנות ראשונות */
            [
                'name'=>"Appetizers",
                'name_in_he'=>"מתאבנים",
                'menu_id'=>5,
            ],
            [
                'name'=>"Salads",
                'name_in_he'=>"סלטים",
                'menu_id'=>5,
            ],
            [
                'name'=>"Vegan",
                'name_in_he'=>"טבעוני",
                'menu_id'=>5,
            ],
            [
                'name'=>"From The Sea",
                'name_in_he'=>"מהים",
                'menu_id'=>5,
            ],


        ];

        foreach ($data as $item) {
            $input['name'] = $item['name'];
            $input['name_in_he'] = $item['name_in_he'];
            $slug = Str::slug($input['name']);
            $input['slug'] = $this->makeUniqueSlug($slug);

            $input['menu_id'] = $item['menu_id'];


            Category::create($input);
        }
    }
    private function makeUniqueSlug($slug)
    {
        $uniqueSlug = $slug;
        $counter = 2;

        while (Category::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $slug . '-' . $counter;
            $counter++;
        }

        return $uniqueSlug;
    }
}
