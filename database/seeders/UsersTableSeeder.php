<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('name', 'admin')->first();
        $journalistRole = Role::where('name', 'journalist')->first();

        User::truncate();

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);

        $jane = User::create([
            'name' => 'jane',
            'email' => 'jane@jane.com',
            'password' => bcrypt('password')
        ]);

        $admin->roles()->attach($adminRole);
        $jane->roles()->attach($journalistRole);
    }
}
