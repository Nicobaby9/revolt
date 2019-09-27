<?php

use Illuminate\Database\Seeder;
use App\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new user;
        $user->name='Yudho Aerials';
        $user->email='ademin@mail.com';
        $user->password=bcrypt('admin123');
        $user->role='Admin';
        $user->description='Week-end Developer';
        $user->instagram='www.instagram.com/yudho.alfantyo';
        $user->facebook='Yudho Aerials';
        $user->github='github.com/Nicobaby9';
        $user->no_handphone='087837998122';

        $user->save();
    }
}
