<?php
namespace App\Validators;
use Prettus\Validator\LaravelValidator;
class  CompaniesValidator extends LaravelValidator
{
    protected $rules = [
        'name'=>'required|max:255',
        'active'=>'required'
    ];
}