<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    return $this->hasMany(Transaction::clas);
    }


}
