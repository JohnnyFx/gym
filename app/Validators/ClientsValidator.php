<?php
namespace App\Validators;
use Prettus\Validator\LaravelValidator;
class  ClientsValidator extends LaravelValidator
{
    protected $rules = [
        'name'=>'required|max:255',
        'phone'=>'required',
    ];
}