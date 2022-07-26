<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "categories";
    protected $fillable = ['categories_type'];

    public function guestSubCategory() {
        return $this->hasMany(SubCategory::class, 'id_sub_categories');
    }

}
