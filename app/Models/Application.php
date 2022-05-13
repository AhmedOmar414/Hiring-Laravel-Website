<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable=['offer_id','employer_id','user_id','status'];

    public function offer(){
        return $this->belongsTo(JobOffers::class);
    }

    public function employer(){
        return $this->belongsTo(EmployerGeneral::class,'employer_id','id');
    }

    public function user(){
        return $this->hasMany(User::class);
    }
}
