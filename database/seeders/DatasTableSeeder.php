<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ここを追加
class DatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('users')->first();
        //
        DB::table('datas')->insert([
            'user_id' => $users->id,
            'bt' => '36.6',
            'pulse' => '16',
            'Trb_bw' => '75.7',
            'Tra_bw' => '75.0',
            'fatigue' => '70',
            
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]); 
        
        DB::table('datas')->insert([
            'user_id' => $users->id,
            'bt' => '36.6',
            'pulse' => '19',
            'Trb_bw' => '79.7',
            'Tra_bw' => '79.0',
            'fatigue' => '90',
            
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('datas')->insert([
            'user_id' => $users->id,
            'bt' => '36.6',
            'pulse' => '18',
            'Trb_bw' => '78.7',
            'Tra_bw' => '78.0',
            'fatigue' => '80',
            
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('datas')->insert([
            'user_id' => $users->id,
            'bt' => '35.6',
            'pulse' => '15',
            'Trb_bw' => '74.7',
            'Tra_bw' => '74.0',
            'fatigue' => '40',
            
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
