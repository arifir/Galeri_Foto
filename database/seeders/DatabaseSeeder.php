<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\categories;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Categories::create ([
            'name' => 'Nature',
            'deskripsi' => 'ini dalah deskripsi untuk  kategori nature'
        ]);
        Categories::create ([
            'name' => 'People',
            'deskripsi' => 'ini dalah deskripsi untuk  kategori people'
        ]);
        Categories::create ([
            'name' => 'Objects',
            'deskripsi' => 'ini dalah deskripsi untuk  kategori objects'
        ]);
        Categories::create ([
            'name' => 'Animal',
            'deskripsi' => 'ini dalah deskripsi untuk  kategori animal'
        ]);
        Categories::create ([
            'name' => 'Food',
            'deskripsi' => 'ini dalah deskripsi untuk  kategori old'
        ]);
        Categories::create ([
            'name' => 'Art',
            'deskripsi' => 'ini dalah deskripsi untuk  kategori art'
        ]);
        Categories::create ([
            'name' => 'Pixel Art',
            'deskripsi' => 'ini dalah deskripsi untuk  kategori pixel art'
        ]);
        Categories::create ([
            'name' => 'Anime',
            'deskripsi' => 'ini dalah deskripsi untuk  kategori Anime'
        ]);
    }
}