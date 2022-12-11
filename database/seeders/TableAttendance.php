<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Attendances;

class TableAttendance extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attendance = [
            ['name'=>'Present', 'label'=>'badge badge-success', 'singkatan'=>'H', 'value'=>1],
            ['name'=>'Permision', 'label'=>'badge badge-warning', 'singkatan'=>'I', 'value'=>0],
            ['name'=>'Sick', 'label'=>'badge badge-info', 'singkatan'=>'S', 'value'=>0],
            ['name'=>'Alpha', 'label'=>'badge badge-danger', 'singkatan'=>'A', 'value'=>0],
        ];
        foreach($attendance as $row)
        {
            Attendances::create($row);
        }
    }
}
