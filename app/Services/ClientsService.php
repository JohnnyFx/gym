<?php

namespace App\Services;

use App\Repositories\ClientsRepository;
use App\Validators\ClientsValidator;
use Prettus\Validator\Exceptions\ValidatorException;

class ClientsService
{
    /**
     * 
     *
     * @var ClientsRepository 
     */
    protected $repository;
    /**
     * 
     *
     * @var ClientsValidator
     */
    protected $validator;
    public function __construct(ClientsRepository $repository,ClientsValidator $validator)
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