<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationQuestions extends Model
{
    use HasFactory;

    protected $fillable = ['why_join','expected_salary','about','start_date','offer_id'];
}
