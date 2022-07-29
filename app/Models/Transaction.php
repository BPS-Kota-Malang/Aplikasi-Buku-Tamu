<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "transactions";
    protected $fillable = ['id_customer','id_media','id_service','id_purpose','data','id_sub_categories'];

    // public function Customer(){
    //     return $this->belongsTo(Customer::class);
    // }s
    public function Customer(){
        return $this->belongsTo(Customer::class, 'id_customer');
    }

    public function Media(){
        return $this->belongsTo(Media::class, 'id_media');
    }

    public function Service(){
        return $this->belongsTo(Service::class, 'id_service');
    }

    public function Purpose(){
        return $this->belongsTo(Purpose::class, 'id_purpose');
    }

    public function SubCategory(){
        return $this->belongsTo(SubCategory::class, 'id_sub_categories');
    }

    public function Category(){
        return $this->belongsTo(Category::class, 'id_categories');
    }

}
