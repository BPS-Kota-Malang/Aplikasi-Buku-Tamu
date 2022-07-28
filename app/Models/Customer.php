<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customer";
    protected $fillable = ['hp','name','gender','email','age','nipnim','institute','address','id_job','id_education'];

    public function guestEducation() {
        return $this->belongsTo(Education::class, 'id_education');
    }

    public function guestJob() {
        return $this->belongsTo(Job::class, 'id_job');
    }

    public function guestTransaction() {
    return $this->hasMany(Transaction::class);
    }

    public static function getCustomer(){
        $records = DB::table('customer')->select(
            'name',
            'hp',
            'gender',
            'id_education',
            'id_job')->get()->toArray();
        return $records;
    } 
    }

