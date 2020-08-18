<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i < 20; $i++) {
            DB::table('customers')->insert([
                'name'  => Str::random(5),
                'description'   => Str::random(5),
            ]);
        }
    }
}
