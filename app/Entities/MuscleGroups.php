<?php
namespace App\Entities;
use Illuminate\Database\Eloquent\Model;

use App\Entities\Companies;

class MuscleGroups extends Model
{
    protected $fillable = [
        'name',
        'icon',
        'company_id'
    ];

    public $timestamps = false;

    public function companies(){    
        return $this->belongsTo(Companies::class,'company_id');
    }
}