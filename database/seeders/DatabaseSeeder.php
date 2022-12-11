<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TableRoles::class);
        $this->call(TablePosition::class);
        $this->call(TableAttendance::class);
        $this->call(TableUsers::class);
    }
}
