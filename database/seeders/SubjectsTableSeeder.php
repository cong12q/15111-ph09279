<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('subjects')->count() === 0) {
            DB::table('subjects')->insert([
            [
                'name' => 'Laravel',
                'is_active' => true,
            ],
            [
                'name' => 'NoteJS',
                'is_active' => true,
            ]
        ]);
        }
        else{
            echo 'Bang subjects da co du lieu' . PHP_EOL;
        }
    }
}
