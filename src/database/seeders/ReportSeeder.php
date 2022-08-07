<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reports')->insert([
            'name' => 'dev-mizuno',
            'food' => 'コロッケ',
            'comment' => '美味しい',
            'created_at' => Carbon::now(),
            'updated_at' => carbon::now()
        ]);
    }
}
