<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    protected $table = "Jobs";

    protected $fillable = ['job_name'];

    public function categories(){
        return $this->belongsTo(Category::class);
    }

    public function career(){
        return $this->hasMany(EmployeeCareer::class);
    }
}
