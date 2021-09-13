<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Database\Seeders\RoleTableSeeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = Role::create(['name' => 'superadmin']);
        $consultant = Role::create(['name' => 'consultant']);
        $recruiter = Role::create(['name' => 'recruiter']);
        $dataop = Role::create(['name' => 'dataop']);
        $user = Role::create(['name' => 'user']);
    }
}
