<?php

use Illuminate\Database\Seeder;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Admin::create([
            'username' =>  "bimbo",
            'email' =>  "bimbo@email.com",
            'password' => Hash::make("bimbo")
        ]);
       
    }
}
