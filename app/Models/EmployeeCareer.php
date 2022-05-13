<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeCareer extends Model
{
    use HasFactory;
    protected $table = 'employee_careers';

    protected $fillable = ['career_level','job_title','category_id','job_id','skill1','skill2','skill3','skill4','skill5','skill6','skill7','skill8','expected_salary'];

    public function user(){
        return $this->belongsTo(User::class,'employee_id','id');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function job(){
        return $this->belongsTo(Jobs::class);
    }
}
