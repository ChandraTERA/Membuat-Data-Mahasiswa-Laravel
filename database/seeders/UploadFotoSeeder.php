<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UploadFotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 5 ; $i++) { 
            DB::table('upload_foto')->insert([
                'picture' => 'picture_1'.$i. '.jpg',
                'username' => 'chandra'. $i,
                'name' => 'tera', 
                'privilege' => 'View Page',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
