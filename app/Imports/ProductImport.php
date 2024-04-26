<?php

namespace App\Imports;

use App\Models\Product;
use App\Models\Menu;
use App\Models\Category;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;
use Str;
class ProductImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        $slug = Str::slug($row['menu_name_in_english']);
        $uniqueSlug = $this->makeUniqueSlug($slug);
        $menu_name_in_english = $row['menu_name_in_english'];
        $category_name_in_english = $row['category_name_in_english'];
        $getMenuId = $this->getMenuId($menu_name_in_english);
        $getCateId = $this->getCateId($category_name_in_english);
        if ($getMenuId == false) {
            return false;
        }
        if ($getCateId == false) {
            return false;
        }
        dd($getCateId);

        $item['name'] = $row['product_name_in_english'];
        $item['slug'] = $uniqueSlug;
        $item['name_in_he'] = $row['product_name_in_hebrew'];
        $item['price'] = $row['price'];
        $item['menu_id'] = $getMenuId;
        $item['category_id'] = $getCateId;

        dd($item);
        return new Product([
            //
        ]);
    }

    public function getMenuId($name){
        $slug = Str::slug($name);
        $menu = Menu::where('slug',$slug)->first();
        if(isset($menu)){
            return $menu->id;
        }
        return false;
         
    }
    public function getCateId($name){
        $slug = Str::slug($name);
        $menu = Category::where('slug',$slug)->first();
        if(isset($menu)){
            return $menu->id;
        }
        return false;
         
    }

    private function makeUniqueSlug($slug)
    {
        $uniqueSlug = $slug;
        $counter = 2;

        while (Product::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $slug . '-' . $counter;
            $counter++;
        }

        return $uniqueSlug;
    }
}
