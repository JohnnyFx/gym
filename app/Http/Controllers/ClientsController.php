<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\ClientsRepository;
use App\Services\ClientsService;

class ClientsController extends Controller
{
    private $repository;
    private $service;
    public function __construct(ClientsRepository $repository,ClientsService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }
    public function index($id)
    {   
        return $this->repository->findWhere(['company_id'=>$id]);
    }
    public function store(Request $request)
    {
        return  $this->service->create($request->all());
    }
    public function show($id,$company_id)
    {
        return  $this->repository->findWhere(['id'=>$id,'company_id'=>$company_id]);
    }
    public function destroy($id)
    {
        $this->repository->find($id)->delete();
    }
    public function update(Request $request,$id)
    {  
      $this->repository->find($id)->update($request->all());
      
    }
}