<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // for jobs
        \App\Models\Job::factory(100)->create();
        // for users
        \App\Models\User::factory(100)->create();
    }
}
