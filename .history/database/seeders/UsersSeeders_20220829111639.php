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
            'uuid'              =>  \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'name'              =>  'Luis Campos',
            'username'          =>  'lcampos',
            'email'             =>  "luis.924@boomsolutions.com",
            'password'          =>  bcrypt('nd4spd'),
            'created_at'        =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'        =>  Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
