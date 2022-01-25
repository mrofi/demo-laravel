<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class WriterUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrNew([
            'email' => 'me@writer',
            'name' =>'Penulis',
        ]);

        $user->fill([
            'password' => bcrypt('writer'),
            'email_verified_at' => date('Y-m-d'),
        ]);

        $user->save();

        $role = Role::findOrCreate('Writer');
        $user->assignRole($role);
    }
}
