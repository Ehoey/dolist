<?php

use App\dolist;
use Illuminate\Database\Seeder;

class dolistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(dolist::class , 10)->create();
    }
}
