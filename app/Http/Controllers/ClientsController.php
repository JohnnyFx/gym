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
    public function index()
    {   
        return $this->repository->all();
    }
    public function store(Request $request)
    {
        return  $this->service->create($request->all());
    }
    public function show($id)
    {
        return  $this->repository->find($id);
    }
    public function destroy($id)
    {
        $this->repository->find($id)->delete();
    }
    public function update(Request $request,$id)
    {  
       $client =  $this->repository->find($id)->update($request->all());
      
    }
}