<?php 

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Entities\Users;

class UsersRepositoryEloquent extends BaseRepository implements UsersRepository
{
    public function model()
    {
        return Users::class;
    }
}