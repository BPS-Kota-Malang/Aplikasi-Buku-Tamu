<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "transactions";
    protected $fillable = ['id_customer','id_media','id_service','purpose','data'];

    public function guestCustomer(){
        return $this->belongsTo(Customer::class, 'id_customer');
    }

    public function guestMedia(){
        return $this->belongsTo(Media::class, 'id_media');
    }

    public function guestService(){
        return $this->belongsTo(Service::class, 'id_service');
    }

}
