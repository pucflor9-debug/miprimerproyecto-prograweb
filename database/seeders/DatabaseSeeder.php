<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pagina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
        $user=new User();
        $user->name='Flor Fabiola Puc Balam ';
        $user->email='pucflor9@gmail.com';
        $user->password=bcrypt('123456');
        $user->save();
        User::factory(50)->create();
        Pagina::factory(500)->create();
    }
}
