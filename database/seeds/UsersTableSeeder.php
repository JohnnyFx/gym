<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Entities\Users::truncate();
        factory(\App\Entities\Users::class,10)->create();
    }
}
