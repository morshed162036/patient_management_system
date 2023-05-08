<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = [
            ['id'=>'1','name'=>'Morshed Ahmed','email'=>'superadmin@gmail.com','mobile'=>'017','status'=>'Active','user_type'=>'Super Admin','user_id'=>0,'password'=>'$2a$12$/Wla/XJzQB7ZdUl/eCCxtOnndvu/8If2xyCTdddOyD1gDhdNN7TyC']
        ];
        User::insert($superAdmin);
    }
}
