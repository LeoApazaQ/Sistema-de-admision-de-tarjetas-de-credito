<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Roles de usuario
                $adminRole = Role::findByName('Admin');
                $GerenteRole = Role::findByName('Gerente');
                $EmpleadoRole = Role::findByName('Empleado');

                // usuario Admin
                $admin = User::create([
                    'name' => 'Edgar Apaza',
                    'email' => 'edgar@example.com',
                    'password' => Hash::make('123456789'),
                ]);
                $admin->assignRole($adminRole);
                $admin->assignRole($GerenteRole);

                // usuario Gerente
                $user = User::create([
                    'name' => 'Jayro Ballon',
                    'email' => 'jayro@example.com',
                    'password' => Hash::make('123456789'),
                ]);
                $user->assignRole($GerenteRole);

                // usuario Empleado
                $Empleado = User::create([
                    'name' => 'Nuria Carrillo',
                    'email' => 'nuria@example.com',
                    'password' => Hash::make('123456789'),
                ]);
                $Empleado->assignRole($EmpleadoRole);
    }
}
