<?php

use Illuminate\Database\Seeder;
use App\Yazi;
use App\Kategori;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Bu sayılarda rastgele veri eklenmesini factory sayesinde yapıyoruz
        factory(User::class,10)->create();
        factory(Kategori::class,10)->create();
        factory(Yazi::class,50)->create();
    }
}
