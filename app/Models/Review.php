<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['employer_general_id','user_id','review'];

    public function employer(){
        return $this->belongsTo(EmployerGeneral::class);
    }
}
