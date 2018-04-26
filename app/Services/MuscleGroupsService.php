<?php

namespace App\Services;

use App\Repositories\MuscleGroupsRepository;
use App\Validators\MuscleGroupsValidator;
use Prettus\Validator\Exceptions\ValidatorException;

class MuscleGroupsService
{
    /**
     * 
     *
     * @var MuscleGroupsRepository 
     */
    protected $repository;
    /**
     * 
     *
     * @var MuscleGroupsValidator
     */
    protected $validator;
    public function __construct(MuscleGroupsRepository $repository,MuscleGroupsValidator $validator)
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