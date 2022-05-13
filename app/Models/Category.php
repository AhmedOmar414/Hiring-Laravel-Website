<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ="categories";

    public function jobs(){
        return $this->hasMany(Jobs::class);
    }

    public function offer(){
        return $this->hasMany(JobOffers::class);
    }

    public function career(){
        return $this->hasMany(EmployeeCareer::class);
    }
}
