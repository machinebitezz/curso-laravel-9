<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Carlos Ferreira',
            'email' => 'carlos@especializati.com.br',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Gustavo Rodrigues',
            'email' => 'gustavo.rodrigues@prodepa.pa.gov.br',
            'password' => bcrypt('123456789')
        ]);
    }
}
