<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "feedback";
    protected $fillable = ['id_transaction','service','facility','dataqualities'];

    public function guestTransaction(){
        return $this->belongsTo(Transaction::class, 'id_transaction');
    }
}
