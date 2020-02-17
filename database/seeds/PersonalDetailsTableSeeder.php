<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\PersonalDetails::class, 50)->create();

    }

}
