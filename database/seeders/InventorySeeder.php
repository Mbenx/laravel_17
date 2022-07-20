<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Honda Jazz Kuning',
             'inventory_number' => 'B 1331 RA'],
            ['name' => 'Honda Jazz Biru',
             'inventory_number' => 'B 2342 BR'],
            ['name' => 'Fotuner Putih Silver',
             'inventory_number' => 'B 5521 ACW'],
            ['name' => 'Inova Hitam',
             'inventory_number' => 'B 5522 ACW'],
        ];

        foreach ($data as $d){
            DB::table('inventories')->insert([
                'name' => $d['name'],
                'inventory_number' => $d['inventory_number'],
            ]);
        }
    }
}
