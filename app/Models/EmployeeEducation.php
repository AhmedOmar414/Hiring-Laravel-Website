<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeEducation extends Model
{
    use HasFactory;

    protected $fillable = ['university','study_field','starts_year','end_year'];

    public function user(){
        return $this->belongsTo(User::class,'employee_id','id');
    }
}
