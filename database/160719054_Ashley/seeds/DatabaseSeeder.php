<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategorySeeder::class);
        //$this->call(ProductSeeder::class);
        //$this->call(CategoriesSeeder::class);
        $this->call(MedicinesSeeder::class);

    }
}
