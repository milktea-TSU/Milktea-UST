<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            'email'=>'nmsdzbmt@gmail.com',
            'name'=>'Sơn',
            'password'=>bcrypt('123456789'),
            'role_id'=>'1'
        ];
        DB::table('users')->insert($data);
    }
}
