<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->delete();

        //Test Project
        DB::table('projects')->insert([
            'name' => 'projectName1',
            'start_year' => '2018-1-1',
            'end_year' => '2019-1-1',
            'leader_id' => 3,
            'intro' => 'the first project :D'
        ]);

        DB::table('projects')->insert([
            'name' => 'projectName0002',
            'start_year' => '2007-1-1',
            'end_year' => '2079-1-1',
            'leader_id' => 1,
            'intro' => 'the longest project...'
        ]);

        DB::table('projects')->insert([
            'name' => 'projectName0003',
            'start_year' => '2012-1-1',
            'end_year' => '2015-1-1',
            'leader_id' => 1,
            'mom_project_id' => 1,
            'intro' => 'the third project'
        ]);


    }
}
