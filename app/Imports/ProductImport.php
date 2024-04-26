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
        if ($getMenuId == false || $getCateId == false) {
            return ;
        } 
        $item['menu_id'] = $getMenuId;
        $item['category_id'] = $getCateId;
        if ($row['product_image_url']) {
            # code...
            $item['image'] = $row['product_image_url'];
        }
        if ($row['product_name_in_english']) {
            # code...
            $item['name'] = $row['product_name_in_english'];
            $item['slug'] = $uniqueSlug;
        }
        if ($row['product_name_in_hebrew']) {
            # code...
            $item['name_in_he'] = $row['product_name_in_hebrew'];
        }
        if ($row['price']) {
            # code...
            $item['price'] = $row['price'];
        }
         
         
        return new Product($item);
        
        
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
