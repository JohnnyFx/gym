<?php
namespace App\Validators;
use Prettus\Validator\LaravelValidator;
class  UsersValidator extends LaravelValidator
{
    protected $rules = [
        'name'=>'required|max:255',
        'phone'=>'required',
        'email'=>'required|email',
        'company_id'=>'required'
    ];
}