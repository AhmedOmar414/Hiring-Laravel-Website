<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedOffers extends Model
{
    use HasFactory;
    protected $table='saved_jobs';

    protected $fillable = ['job_offer_id','user_id','job_desc', 'career_level','jobs_type','category_id','job_id' ,'type','skill1','skill2','skill3','skill4','employer_id','skill5','job_type','salary_range','job_title','created_at','experience_years'];

    public function offers(){
        return $this->belongsTo(JobOffers::class);
    }
}
