<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrNew([
            'name' => 'Super Admin',
            'email' => 'root@root'
        ]);

        $user->fill([
            'password' => bcrypt('root'),
            'email_verified_at' => date('Y-m-d'),
        ]);

        $user->save();

        $role = Role::findOrCreate('super-admin');

        $user->assignRole($role);
    }
}
