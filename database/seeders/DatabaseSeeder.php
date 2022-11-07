<?php

namespace Database\Seeders;
use App\Models\Books;
use App\Models\Schools;
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
        // User::factory(10)->create();
        Schools::create([
            'name' => 'SMK 1 Ungaran'
        ]);

        Schools::create([
            'name' => 'SMA 2 Yogyakarta'
        ]);

        Schools::create([
            'name' => 'SMK 3 Sleman'
        ]);

        Schools::create([
            'name' => 'SMU Semarang'
        ]);

        Schools::create([
            'name' => 'SMK 3 Semarang'
        ]);

        Schools::create([
            'name' => 'SMA 1 Salatiga'
        ]);

        Schools::create([
            'name' => 'SMK 11 Banyumanik'
        ]);

        Schools::create([
            'name' => 'SMK Telekomunikasi'
        ]);

        Schools::create([
            'name' => 'SMK Tunas Harapan'
        ]);

        Schools::create([
            'name' => 'SMK RPL'
        ]);

        Books::create([
            'name' => 'Fundamental PHP'
        ]);

        Books::create([
            'name' => 'Belajar HTML CSS'
        ]);

        Books::create([
            'name' => 'Mengenal Componen Bootsrap'
        ]);

        Books::create([
            'name' => 'Mahir Pemrograman Web'
        ]);

        Books::create([
            'name' => 'Belajar GIT untuk pemula'
        ]);

        Books::create([
            'name' => 'MySQL Database'
        ]);

        Books::create([
            'name' => 'VueJS Framework'
        ]);

        Books::create([
            'name' => 'Tutorial Laravel'
        ]);

        Books::create([
            'name' => 'Data Mining'
        ]);
        
    }
}
