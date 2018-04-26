<?php

namespace App\Services;

use App\Repositories\CompaniesRepository;
use App\Validators\CompaniesValidator;
use Prettus\Validator\Exceptions\ValidatorException;

class CompaniesService
{
    /**
     * 
     *
     * @var CompaniesRepository 
     */
    protected $repository;
    /**
     * 
     *
     * @var CompaniesValidator
     */
    protected $validator;
    public function __construct(CompaniesRepository $repository,CompaniesValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }
    public function create(array $data){
        try{
            $this->validator->with($data)->passesOrFail();
            return $this->repository->create($data);
        }catch(ValidatorException $e){
            return [
               'error'=>true,
               'message'=>$e->getMessageBag()
            ];
        }
    }
    public function update(array $data,$id){
        try{
            $this->validator->with($data)->passOrFail();
            return $this->repository->update($data,$id);
         }catch(\ValidatorException $e){
            return [
               'error'=>true,
               'message'=>$e->getMessageBag()
            ];
        }
    }
}