<?php
namespace App\Validators;
use Prettus\Validator\LaravelValidator;
class  MuscleGroupsValidator extends LaravelValidator
{
    protected $rules = [
        'name'=>'required|max:255',
        'company_id'=>'required'
    ];
}