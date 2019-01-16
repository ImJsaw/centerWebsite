<?php

use Illuminate\Database\Seeder;


class JudgeTableSeeder extends Seeder {
    public function run()
    {
        //Test User
        DB::table('users')->insert([
            'username' => 'judge2018',
            'password' => Hash::make('judge8102'),
            'identity' => 'judge',
        ]);

        DB::table('users')->insert([
            'school'=>'NTUST',
            'username' => 'GameUser',
            'password' => Hash::make('123456'),
            'identity' => 'upload',
        ]);

        //judge
        for ($i =1 ; $i<= 4; $i++) {
            DB::table('users')->insert([
                'username' => 'GameJudge_'.str_pad($i, 2, '0', STR_PAD_LEFT),
                'password' => Hash::make('PassJudge'.str_pad($i, 2, '0', STR_PAD_LEFT)),
                'identity' => 'judge',
            ]);
        }
        //////////////////////////////NTUST
        //NTUST 10組
        for ($i =1 ; $i<= 10; $i++) {
            DB::table('users')->insert([
                'school'=>'NTUST',
                'username' => 'GameNTUST_'.str_pad($i, 2, '0', STR_PAD_LEFT),
                'password' => Hash::make('PassNTUST'.str_pad($i, 2, '0', STR_PAD_LEFT)),
                'identity' => 'upload',
            ]);
        }

        //NTU 27組
        for ($i =1 ; $i<= 27; $i++) {
            DB::table('users')->insert([
                'school'=>'NTU',
                'username' => 'GameNTU_'.str_pad($i, 2, '0', STR_PAD_LEFT),
                'password' => Hash::make('PassNTU'.str_pad($i, 2, '0', STR_PAD_LEFT)),
                'identity' => 'upload',
            ]);
        }

        //NTHU 27組
        for ($i =1 ; $i<= 27; $i++) {
            DB::table('users')->insert([
                'school'=>'NTHU',
                'username' => 'GameNTHU_'.str_pad($i, 2, '0', STR_PAD_LEFT),
                'password' => Hash::make('PassNTHU'.str_pad($i, 2, '0', STR_PAD_LEFT)),
                'identity' => 'upload',
            ]);
        }        //NCCU 10組
        for ($i =1 ; $i<= 10; $i++) {
            DB::table('users')->insert([
                'school'=>'NCCU',
                'username' => 'GameNCCU_'.str_pad($i, 2, '0', STR_PAD_LEFT),
                'password' => Hash::make('PassNCCU'.str_pad($i, 2, '0', STR_PAD_LEFT)),
                'identity' => 'upload',
            ]);
        }

        //NIU 10組
        for ($i =1 ; $i<= 2; $i++) {
            DB::table('users')->insert([
                'school'=>'NIU',
                'username' => 'GameNIU_'.str_pad($i, 2, '0', STR_PAD_LEFT),
                'password' => Hash::make('PassNIU'.str_pad($i, 2, '0', STR_PAD_LEFT)),
                'identity' => 'upload',
            ]);
        }



    }
}
