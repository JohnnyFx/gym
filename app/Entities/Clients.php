<?php
namespace App\Entities;
use Illuminate\Database\Eloquent\Model;
use App\Entities\Companies;

class Clients extends Model
{
    protected $fillable = [
        'name',
        'active',
        'phone',
        'obs',
        'company_id'
    ];

    public function companies(){    
        return $this->belongsTo(Companies::class,'company_id');
    }
}