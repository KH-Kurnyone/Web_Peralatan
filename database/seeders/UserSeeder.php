<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            // 1
            [
                'username'=>'Admin',
                'password'=>bcrypt('password1'),
                'role'=>'Admin',
            ],
            // 2
            [
                'username'=>'Manajer',
                'password'=>bcrypt('password2'),
                'role'=>'Manajer',
            ],
            // 3
            [
                'username'=>'Karyawan 1',
                'password'=>bcrypt('password3'),
                'role'=>'Karyawan',
            ],
        ])->each(function($data){
            User::create($data);
        });
    }
}
