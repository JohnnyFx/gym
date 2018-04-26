<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\MuscleGroupsRepository;
use App\Services\MuscleGroupsService;

class MuscleGroupsController extends Controller
{
    private $repository;
    public function __construct(MuscleGroupsRepository $repository,MuscleGroupsService $service)
    {
        $this->repository = $repository;
    }
    public function index()
    {   
        return $this->repository->all();
    }
    public function store(Request $request)
    {
        return  $this->repository->create($request->all());
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
        $this->repository->find($id)->update($request->all());
      
    }
}