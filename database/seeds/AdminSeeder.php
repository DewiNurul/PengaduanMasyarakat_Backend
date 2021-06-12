<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'id'=> 1,
        	'nik' => 3562730001,
        	'nama' => 'Dewi Nurul Mahardika',
        	'telp' => '087859373495',
            'username' => 'dewi1',
            'password' => bcrypt('123456'),
        	'level' => 'admin',

            'id'=> 2,
        	'nik' => 3562730002,
        	'nama' => 'Alvina Izah',
        	'telp' => '087859373555',
            'username' => 'vina1',
            'password' => bcrypt('123456'),
        	'level' => 'admin',
        ]);

    }
}
