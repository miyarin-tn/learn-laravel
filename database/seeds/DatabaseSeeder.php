<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class
        ]);
    }
}

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'Nguyễn Xuân Thịnh', 'email'=>'thinh.nguyen@gmail.com', 'password'=>bcrypt('ngoc')],
            ['name'=>'Phan Thị Thanh Ngọc', 'email'=>'ngoc.phan@gmail.com', 'password'=>bcrypt('thinh')]
        ]);
    }
}
