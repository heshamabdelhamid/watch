<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\Models\User::create([
            'name' => 'Hesham Abdelhamid',
            'email' => 'heshamabdelhamid432@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
