<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use DB để có thể sử dụng các phương thức trong đó
use DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('students')->count() === 0) {
            DB::table('students')->insert([
            [
                'name' => 'Nguyen Van A',
                'phone' => '03003300330',
                'age' => 18,
                'gender' => 1,
                'address' => 'Tay Tuu Tu Liem Ha Noi',
                'is_active' => true,
            ],
            [
                'name' => 'Nguyen Van B',
                'phone' => '55555',
                'age' => 20,
                'gender' => 0,
                'address' => 'Tay Tuu Tu Liem Ha Noi',
                'is_active' => true,
            ]
        ]);
        }
        else{
            echo 'Bang student da co du lieu' . PHP_EOL;
        }
    }
}
