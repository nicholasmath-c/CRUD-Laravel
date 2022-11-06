<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
             'name' => 'J. K. Rowling',
             'email' => 'jkrowling@hotmail.com',
         ]);
        User::factory()->create([
            'name' => 'J. R. R. Tolkien',
            'email' => 'jrrtolkien@hotmail.com'
        ]);
        User::factory()->create([
            'name' => 'Miguel de Cervantes',
            'email' => 'migueldecervantes@hotmail.com'
        ]);
        User::factory(7)->create();

        $this->call(BookSeeder::class);
    }
}
