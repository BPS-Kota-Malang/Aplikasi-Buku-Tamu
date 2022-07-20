<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialPopulation extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "social_population";
    protected $fillable = ['sospol_type'];
}
