<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\User;
use App\Models\Category;
use App\Models\Dataweb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => "Kartu grafis"
        ]);

        Category::create([
            'name' => "processor"
        ]);

        Category::create([
            'name' => 'Router'
        ]);

        Dataweb::create([
            'nama_web' => 'Toko Buku Laravel',
            'alamat' => 'Sungai Miai',
            'pemilik' => 'syahrul',
            'footer' => '© 2022 Toko Komputer Laravel. All Rights Reserved.',
        ]);
    }
}
