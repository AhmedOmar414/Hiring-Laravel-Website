<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class JobOffers extends Model
{
    use HasFactory;

    protected $table='job_offer';

    protected $fillable = [
      'career_level','jobs_type','category_id','job_id' ,'type','skill1','skill1','skill1','skill1','skill1','experience_years','expected_salary','job_title','created_at','job_desc'
    ];

    public function setTransactionDateAttribute($value)
    {
        $this->attributes['created_at'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }


    public function user(){
        return $this->belongsTo(User::class);
   }

   public function savedd(){
        return $this->hasMany(SavedOffers::class);
   }

   public function application(){
        return $this->hasMany(Application::class);
   }
}
