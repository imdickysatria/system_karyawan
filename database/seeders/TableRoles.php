<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;

class TableRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name'=>'superadmin', 'display_name'=>'SuperAdministrator'],
            ['name'=>'admin', 'display_name'=>'Administrator'],
            ['name'=>'karyawan', 'display_name'=>'Karyawan'],
        ];
        foreach($roles as $row)
        {
            Roles::create($row);
        }
    }
}
