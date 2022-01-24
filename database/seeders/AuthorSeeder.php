<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::factory()
            ->count(5)
            ->for(User::factory())
            ->create();
    }
}
