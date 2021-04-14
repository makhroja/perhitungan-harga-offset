<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Abata Printing Group',
            'email'     => 'admin@abata.com',
            'branch'    => 'Head Office',
            'level'     => '1',
            'password'  => Hash::make('abataaja'),
        ]);

        User::create([
            'name'      => 'Abata Purbalingga',
            'email'     => 'purbalingga@abata.com',
            'branch'    => 'Purbalingga',
            'level'     => '2',
            'password'  => Hash::make('abataaja'),
        ]);
    }
}
