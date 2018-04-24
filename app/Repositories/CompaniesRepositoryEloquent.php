<?php 

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Entities\Companies;

class CompaniesRepositoryEloquent extends BaseRepository implements ClientsRepository
{
    public function model()
    {
        return Companies::class;
    }
}