<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $table = "transactions";
    protected $fillable = ['id_customer','id_media','id_service','purpose','data','id_social_population','id_economy_trade','id_agriculture_mining'];

    public function guestCustomer(){
        return $this->belongsTo(Customer::class, 'id_customer');
    }

    public function guestMedia(){
        return $this->belongsTo(Media::class, 'id_media');
    }

    public function guestService(){
        return $this->belongsTo(Service::class, 'id_service');
    }

    public function guestSocialPopulation(){
        return $this->belongsTo(SocialPopulation::class, 'id_social_population');
    }

    public function guestEconomyTrade(){
        return $this->belongsTo(EconomyTrade::class, 'id_economy_trade');
    }

    public function guestAgricultureMining(){
        return $this->belongsTo(AgricultureMining::class, 'id_agriculture_mining');
    }
}
