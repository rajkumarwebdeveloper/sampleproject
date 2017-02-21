<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            array(
                array('name' => 'Admin', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
                array('name' => 'Angajator', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
                array('name' => 'Angajat', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            ));
    }
}
