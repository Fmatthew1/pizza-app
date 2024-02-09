<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("permissions")->insert([
            ['name' => 'create-role', 'description' => 'can create role'],
            ['name' => 'create-user', 'description' => 'can create user'],
            ['name' => 'create-product', 'description' => 'can create product'],
            ['name' => 'edit-role', 'description' => 'can edit user'],
            ['name' => 'edit-user', 'description' => 'can edit role'],
            ['name' => 'edit-product', 'description' => 'can edit product'],
            ['name' => 'view-role', 'description' => 'can view role'],
            ['name' => 'view-user', 'description' => 'can view user'],
            ['name' => 'view-product', 'description' => 'can view product'],
        ]);
    }
}
