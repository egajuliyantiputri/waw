<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
           $this->call(BarangsSeeder::class);
             $this->call(JenisbarangsSeeder::class);
               $this->call(KaryawansSeeder::class);
                 $this->call(TransaksisSeeder::class);
    }
}
