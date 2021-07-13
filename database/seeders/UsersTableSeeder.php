<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla
        User::truncate();
        $faker = \Faker\Factory::create();
        // Crear la misma clave para todos los usuarios
        // conviene hacerlo antes del for para que el seeder
        // no se vuelva lento.
        $password = Hash::make('123123');        
        // Generar algunos usuarios conductores para nuestra aplicacion
        $role=['ROLE_STUDENT','ROLE_BUSINESS'];
        for ($i = 0; $i < 5; $i++) {
            User::create([
                'name' => $faker->firstName,
                'email' => $faker->email,
                'password' => $password,
                'province'=>$faker->sentence,
                'city'=>$faker->sentence,
                'location'=>$faker->sentence,
                'type' => $faker->randomElement($role),
                'description' => $faker->paragraph,
                'career' => $faker->sentence,
                'cellphone' => '0987654321',
                'image' => $faker->imageUrl(400,300, null, false)
            ]);
        }
    }
}