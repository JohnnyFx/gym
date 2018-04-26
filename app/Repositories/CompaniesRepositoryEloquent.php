<?php 

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Entities\Companies;

class CompaniesRepositoryEloquent extends BaseRepository implements CompaniesRepository
{
    public function model()
    {
        return Companies::class;
    }
}