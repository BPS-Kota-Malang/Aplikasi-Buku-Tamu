<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgricultureMining extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "agriculture_mining";
    protected $fillable = ['agrimin_type'];
}
