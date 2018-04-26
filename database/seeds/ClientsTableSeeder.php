<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *  
     * @return void
     */
    public function run()
    {
        \App\Entities\Clients::truncate();
        factory(\App\Entities\Clients::class,10)->create();
    
    }
}

