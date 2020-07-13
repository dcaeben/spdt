<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();


        $admin = User::create([
            'name'=> 'Daniel',
            'cedula' => '10299093',
            'email' => 'admin@admin.com',
            'password' => Hash::make('isaias45')
        ]);

        $author = User::create([
            'name' => 'Sofia',
            'cedula' => '10299092',
            'email' => 'author@author.com',
            'password' => Hash::make('isaias45')
        ]);

        $user = User::create([
            'name' => 'Diana',
            'cedula' => '10299093',
            'email' => 'user@user.com',
            'password' => Hash::make('isaias45')
        ]);



        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);




    }
}
