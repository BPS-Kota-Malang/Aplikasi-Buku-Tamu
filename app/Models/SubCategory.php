<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "sub_categories";
    protected $fillable = ['sub_categories_type','id_categories'];
    
    public function guestCategory() {
        return $this->belongsTo(Category::class, 'id_categories');
    }

}
