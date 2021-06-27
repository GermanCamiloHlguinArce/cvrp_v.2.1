<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class Roles_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Administrador','Vendedor','Comprador'];

        foreach ($roles as $role){
            Role::create([
                'description_role'=> $role
            ]);
        }
////        $faker=Faker::create();
////
////        for ($i=0;$i<10;$i ++){
////            Role::create([
////                'descrpcionrol'=>$faker->descrpcionrol,
////            ]);
//
//        }
    }
}
