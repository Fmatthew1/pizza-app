<?php

use Illuminate\Database\Seeder;
use App\SuperAdmin;
use App\User;
use App\Role;
class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Find or create the Super Admin role
        $superAdminRole = Role::firstOrCreate(['name' => 'Super Admin']);

        // Find or create the Super Admin user by email
        $superAdmin = User::firstOrCreate(
            ['email' => 'matweb2020@gmail.com'],
            [
                'name' => 'Fekumoh',
                'password' => bcrypt('matt1234'),
                'role_id' => $superAdminRole->id,
            ]
        );

        if ($superAdmin->wasRecentlyCreated) {
            $this->command->info('Super Admin user created successfully.');
        } else {
            $this->command->info('Super Admin user already exists.');
        }
    }
}
