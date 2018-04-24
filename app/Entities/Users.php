<?php
namespace App\Entities;
use Illuminate\Database\Eloquent\Model;
class Users extends Model
{
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
}