<?php

use App\Blog;
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
        // $this->call(UsersTableSeeder::class);
        for ($i = 0; $i < 1000; $i++) {
            Blog::create([
                'name' => 'Name-'.$i,
                'description' => 'This is the '.$i.' description',
            ]);
        }
    }
}
