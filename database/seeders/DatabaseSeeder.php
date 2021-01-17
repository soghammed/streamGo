<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Message::factory(10)->create();
    }
}
