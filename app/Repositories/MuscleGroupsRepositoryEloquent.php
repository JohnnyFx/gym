<?php 

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Entities\MuscleGroups;

class MuscleGroupsRepositoryEloquent extends BaseRepository implements ClientsRepository
{
    public function model()
    {
        return MuscleGroups::class;
    }
}