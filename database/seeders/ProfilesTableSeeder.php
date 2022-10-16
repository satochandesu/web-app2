<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ここを追加

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // usersテーブルから1つのデータを取得
        $user = DB::table('users')->first();

        DB::table('profile_tables')->insert([
            'profileName' => 'satoshi',
            'profile_id' => $user->id,
            'profileName' => 'satoshi',
            'sports' => 'soccer',
            'team' => 'fukushima',
            'number' => 1,
            'position' => 'gk',
            'profileName' => 'satoshi',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
