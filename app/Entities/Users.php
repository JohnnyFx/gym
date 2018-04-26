<?php
namespace App\Entities;
use Illuminate\Database\Eloquent\Model;

use App\Entities\Companies;
class Users extends  Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name',
        'active',
        'phone',
        'email',
        'password',
        'remember_token',
        'company_id',
        'role'

    ];

    public function companies(){    
        return $this->belongsTo(Companies::class,'company_id');
    }
}