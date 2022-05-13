<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployerGeneral extends Model
{
    use HasFactory;
    protected $table='employer_general';
    protected $fillable=[
        'id','company_name','company_location','phone1','phone2','company_starting','image_url',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function application(){
        return $this->hasMany(Application::class,'employer_id','id');
    }

    public function review(){
        return $this->hasMany(Review::class);
    }


}
