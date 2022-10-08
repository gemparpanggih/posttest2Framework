<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelanggan = [
            [
                // 'id' => '1',
                'username' => 'gempar',
                'password' => 'panggih',
                'nometer' => '5678',
                'nama' => 'Gempar Panggih Dwi Putra',
                'alamat' => 'Jln. Sultan Sulaiman',
            ],
            [
                // 'id' => '2',
                'username' => 'yanuar',
                'password' => 'satria',
                'nometer' => '5679',
                'nama' => 'Acun, Lord of Chaos',
                'alamat' => 'Jln. Go to Sage Realms',
            ],
        ];

        foreach ($pelanggan as $plg){
            \App\Models\Pelanggan::firstOrCreate($plg);
        }
    }
}
