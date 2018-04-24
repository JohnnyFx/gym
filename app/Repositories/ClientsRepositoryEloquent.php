<?php 

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Entities\Clients;

class ClientsRepositoryEloquent extends BaseRepository implements ClientsRepository
{
    public function model()
    {
        return Clients::class;
    }
}