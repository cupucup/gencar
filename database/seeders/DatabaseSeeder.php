<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Disposition;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        Role::create([
            'name' => "Administrator",
            'is_admin' => true
        ]);

        Role::create([
            'name' => "User",
            'is_admin' => false
        ]);

        User::create([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'password' => Hash::make("admin1234"),
            'role_id' => Role::where('name', 'Administrator')->first()['id']
        ]);


        Disposition::create([
            'name' => "Sekertariat",
        ]);
        Disposition::create([
            'name' => "Bidang Pembangunan Jembatan",
        ]);
        Disposition::create([
            'name' => "Bidang Pembangunan Jalan",
        ]);
        Disposition::create([
            'name' => "Bidang Tata Ruang",
        ]);

        Category::create(['name' => 'GENCARSOPAP']);
        Category::create(['name' => 'Dinas PUBLIKASI']);
    }
}
