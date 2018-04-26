<?php 

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Entities\MuscleGroups;

class MuscleGroupsRepositoryEloquent extends BaseRepository implements MuscleGroupsRepository
{
    public function model()
    {
        return MuscleGroups::class;
    }
}