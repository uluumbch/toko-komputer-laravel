<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\User;
use App\Models\Category;
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
            'name' => "bachrul Uluum",
            'email' => "uluum@gmail.com",
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
    }
}
