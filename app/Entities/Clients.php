<?php
namespace App\Entities;
use Illuminate\Database\Eloquent\Model;
class Clients extends Model
{
    protected $fillable = [
        'name',
        'active',
        'phone',
        'obs',
        'company_id'
    ];
}