<?php

namespace List\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('lists')->insert([
            [
                'rank' => '1',
                'name' => 'EXO',
            ],
            [
                'rank' => '2',
                'name' => 'NCT',
            ],
            [
                'rank' => '3',
                'name' => 'SVT',
            ]
        ]);
    }
}