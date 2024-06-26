<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\Autentikasi\User;
use Database\Seeders\Kurir\Kurir;
use Database\Seeders\Pengumuman\Pengumuman;
use Database\Seeders\PilihanPaket\PilihanPaket;
use Database\Seeders\Rating\Rating;
use Database\Seeders\Role\Role;
use Illuminate\Database\Seeder;

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

        $this->call([
            Kurir::class,
        ]);
        $this->call([
            User::class,
        ]);
        $this->call([
            PilihanPaket::class,
        ]);

        $this->call([
            Rating::class,
        ]);
        // $this->call([
        //     Role::class,
        // ]);
      
        $this->call([
            Pengumuman::class,
        ]);
    }
}
