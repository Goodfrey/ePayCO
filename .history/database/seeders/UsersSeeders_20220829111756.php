<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'              =>  'Luis Campos',
            'celular'           =>  '584245387921',
            'email'             =>  "campos.luis19@gmail.com",
            'password'          =>  bcrypt('ePayCO.01'),
            'created_at'        =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'        =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
