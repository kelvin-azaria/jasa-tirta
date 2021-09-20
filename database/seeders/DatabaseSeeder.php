<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $password = Hash::make('admin123');
        // DB::table('admins')->insert([
        //     'name' => 'admin',
        //     'email' => 'admin@email.com',
        //     'password' => $password,
        // ]);

        $i=1;
        do {
            DB::table('bridges')->insert([
                'name' => 'test'.$i,
                'phone' => 62821231212+$i,
                'bbo_username' => 'test'.$i.'u',
            ]);
            $i++;
        } while ($i <= 10);
    }
}
