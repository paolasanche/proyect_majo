<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /** hhh
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'i@user.com',
            'password' => bcrypt('password'),
            'rol' => 0
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'i@admin.com',
            'password' => bcrypt('password'),
            'rol' => 1
        ]);
       // \App\Models\Producto::factory(100)->create();

       $this->call(UsersTableSeeder::class);
       $this->call(clientestableseeder::class);
       $this->call(productostableseeder::class);
       $this->call(empleadostableseeder::class);

    }
}
