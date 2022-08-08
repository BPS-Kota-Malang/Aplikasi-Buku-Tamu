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

    /**
     *  Kalau Pakai Eloquent tinggal 
     *  $record = Customer::all();
     * 
     */
    public static function getCustomer(){
        $records = DB::table('customer')
        ->join('education', 'customer.id_education', '=', 'education.id')
        ->join('job', 'customer.id_job', '=', 'job.id')
        ->select('customer.name', 'customer.hp', 'customer.gender','education.education_type','job.job_type')
        ->get()->toArray();

        return $records;
    }    
    }

