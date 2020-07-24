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
        $socioRole = Role::where('name', 'socio')->first();
        $userRole = Role::where('name', 'user')->first();


        $admin = User::create([
            'name'=> 'Daniel',
            'cedula' => '10299093',
            'email' => 'admin@admin.com',
            'password' => Hash::make('isaias45')
        ]);

        $socio = User::create([
            'name' => 'Sofia',
            'cedula' => '10299092',
            'email' => 'socio@socio.com',
            'password' => Hash::make('isaias45')
        ]);

        $user = User::create([
            'name' => 'Diana',
            'cedula' => '10299093',
            'email' => 'user@user.com',
            'password' => Hash::make('isaias45')
        ]);



        $admin->roles()->attach($adminRole);
        $socio->roles()->attach($socioRole);
        $user->roles()->attach($userRole);




    }
}
