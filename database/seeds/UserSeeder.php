<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            'name' => 'Hassan Ezzeddine',
            'email' => 'hassan.ezzeddine197@gmail.com',
            'password' => Hash::make('H@ssanezz123'),
        ]);
    }
}
