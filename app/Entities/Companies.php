<?php
namespace App\Entities;
use Illuminate\Database\Eloquent\Model;
use App\Entities\Users;
use App\Entities\Clients;
use App\Entities\MuscleGroups;
class Companies extends Model
{
    protected $fillable = [
        'name',
        'active',
        'phone',
        'logo',
     ];

     public function users()
     {
        return $this->hasMany(Users::class,'company_id');
     }

     public function clients()
     {
        return $this->hasMany(Clients::class,'company_id');
     }

     public function muscle_groups()
     {
        return $this->hasMany(MuscleGroups::class,'company_id');
     }
}