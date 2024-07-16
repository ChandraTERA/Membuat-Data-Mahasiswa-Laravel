<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker; // Impor class Faker

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // user::create([
        //     'name' => 'Nama Pengguna',
        //     'email' => 'contoh@email.com',
        //     'password' => bcrypt('password123')
        // ]);

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('upload_foto')->insert([
                'picture' => $faker->imageUrl(), // Contoh penggunaan URL gambar acak, Anda bisa menyesuaikan
                'username' => $faker->userName,
                'name' => $faker->name,
                'privilege' => $faker->word,
                'created_at' => now(), // Menyimpan waktu saat ini pada saat pengisian data
                'updated_at' => now(),
                'waktu_sekarang' => now(), // Jika 'waktu_sekarang' ingin diisi saat pengisian data
            ]);
        }
    }
}
