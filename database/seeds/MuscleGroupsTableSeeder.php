<?php

use Illuminate\Database\Seeder;

class MuscleGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Entities\MuscleGroups::truncate();
        factory(\App\Entities\MuscleGroups::class,10)->create();
    }
}
