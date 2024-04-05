<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the menu associated with the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function menu()
    {
        return $this->hasOne(Menu::class, 'id', 'menu_id');
    }
}
