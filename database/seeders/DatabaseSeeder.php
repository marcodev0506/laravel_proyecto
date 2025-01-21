<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

    }
}
