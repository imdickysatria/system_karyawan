<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Positions;

class TablePosition extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $position = [
            ['name'=>'Product Manager', 'status'=>'Tetap', 'salary'=>3000000],
            ['name'=>'Copy Writer', 'status'=>'Tetap', 'salary'=>3000000],
            ['name'=>'Advisor', 'status'=>'Tetap', 'salary'=>3000000],
            ['name'=>'SosMed', 'status'=>'Tetap', 'salary'=>3000000],
            ['name'=>'FullStack Dev', 'status'=>'Tetap', 'salary'=>3000000],
            ['name'=>'Marketing', 'status'=>'Tetap', 'salary'=>3000000],
            ['name'=>'Desainer', 'status'=>'Tetap', 'salary'=>3000000],
        ];
        foreach($position as $row)
        {
            Positions::create($row);
        }
    }
}
