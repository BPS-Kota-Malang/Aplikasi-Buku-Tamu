<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EconomyTrade extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "economy_trade";
    protected $fillable = ['ecotra_type'];
}
