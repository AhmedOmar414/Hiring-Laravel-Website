<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeGeneral extends Model
{
    use HasFactory;
    protected $table = 'employee_general';

    protected $fillable = ['employee_id','phone1','phone2','image_url','gender'];


}
