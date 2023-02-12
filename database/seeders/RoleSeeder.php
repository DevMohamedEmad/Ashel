<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['user' , 'provider' , 'Admin' , 'Super Admin'];
        foreach ($roles as $k=>$v){
            Role::create([
                'role' => $v,
            ]);
        }

    }
}
