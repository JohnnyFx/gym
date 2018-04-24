<?php
namespace App\Entities;
use Illuminate\Database\Eloquent\Model;
class MuscleGroups extends Model
{
    protected $fillable = [
        'name',
        'icon'
    ];

    public $timestamps = false;
}