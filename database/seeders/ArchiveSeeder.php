<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArchiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'BPKB & STNK - B 1331 RA',
             'archive_number' => '1000109',
             'inventory_id' => 1],
            ['name' => 'BPKB & STNK - B 2342 BR',
             'archive_number' => '1000110',
             'inventory_id' => 2],
            ['name' => 'BPKB & STNK - B 5521 ACW',
             'archive_number' => '1000111',
             'inventory_id' => 3],
            ['name' => 'BPKB & STNK - B 5522 ACW',
             'archive_number' => '1000112',
             'inventory_id' => 4],
        ];

        foreach ($data as $d){
            DB::table('archives')->insert([
                'name' => $d['name'],
                'archive_number' => $d['archive_number'],
                'inventory_id' => $d['inventory_id'],
            ]);
        }
    }
}
