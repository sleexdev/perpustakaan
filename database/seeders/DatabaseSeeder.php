<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Book;
use App\Models\Member;
use App\Models\User;
use App\Models\Transaction;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(MemberSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(BookSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TransactionSeeder::class);
    }
}
