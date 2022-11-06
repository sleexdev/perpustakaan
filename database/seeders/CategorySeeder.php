<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'nama' => 'Bahasa & Sastra',
        ]);
        Category::create([
            'nama' => 'Fiqih',
        ]);
        Category::create([
            'nama' => 'Hukum & Politik',
        ]);
        Category::create([
            'nama' => 'Ilmu Agama',
        ]);
        Category::create([
            'nama' => 'Kamus',
        ]);
        Category::create([
            'nama' => 'Keagamaan',
        ]);
        Category::create([
            'nama' => 'Komik',
        ]);
        Category::create([
            'nama' => 'Motivasi',
        ]);
        Category::create([
            'nama' => 'Novel & Kisah (Sastra)',
        ]);
        Category::create([
            'nama' => 'Pemikiran',
        ]);
        Category::create([
            'nama' => 'Pengetahuan',
        ]);
        Category::create([
            'nama' => 'Pustaka Al-Muhibbin',
        ]);
        Category::create([
            'nama' => 'Sejarah & Biografi',
        ]);
    }
}
