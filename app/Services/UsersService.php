<?php

namespace App\Services;

use App\Repositories\UsersRepository;
use App\Validators\UsersValidator;
use Prettus\Validator\Exceptions\ValidatorException;

class UsersService
{
    /**
     * 
     *
     * @var UsersRepository 
     */
    protected $repository;
    /**
     * 
     *
     * @var UsersValidator
     */
    protected $validator;
    public function __construct(UsersRepository $repository,UsersValidator $validator)
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