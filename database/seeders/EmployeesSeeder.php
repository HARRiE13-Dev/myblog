<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert(
        [
            [
                'fullname' => 'Harrie',
                'gender' => 'Male',
                'email' => 'mju@mju.ac.th',
                'tel' => '0645485929',
                'age' => 18,
                'address' => 'xxx',
                'avatar' => 'xxx',
                'status' => 1

            ],
            [
                'fullname' => 'Ryu',
                'gender' => 'Male',
                'email' => 'mju1@mju.ac.th',
                'tel' => '000',
                'age' => 18,
                'address' => 'yyy',
                'avatar' => 'yyy',
                'status' => 1

            ],
            [
                'fullname' => 'Stang',
                'gender' => 'Male',
                'email' => 'mju02@mju.ac.th',
                'tel' => '111',
                'age' => 19,
                'address' => 'zzz',
                'avatar' => 'zzz',
                'status' => 2

            ]
        ]);
    }
}
