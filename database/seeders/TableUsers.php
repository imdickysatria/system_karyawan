<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Staffs;
use Illuminate\Support\Facades\DB;

class TableUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = DB::table('roles')->where('name', 'superadmin')->get()->first()->id;
        $admin = DB::table('roles')->where('name', 'admin')->get()->first()->id;

        $user = User::create([
            'role_id'   => $superAdmin,
            'name'      => 'SuperAdministrator',
            'email'     => 'superadmin@gmail.com',
            'username'  => 'superadmin',
            'password'  => bcrypt('secret'),
        ]);

        $user = User::create([
            'role_id'   => $admin,
            'name'      => 'Administrator',
            'email'     => 'admin@gmail.com',
            'username'  => 'admin',
            'password'  => bcrypt('secret'),
        ]);

        Staffs::create([
            'users_id' => $user->id,
            'position_id' => 1,
            'name' => 'karyawan1',
            'birth' => date('Y-m-d'),
            'startdate' => date('Y-m-d'),
            'address' => 'Jogja',
        ]);
    }
}
