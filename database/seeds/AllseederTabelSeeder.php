<?php

use Illuminate\Database\Seeder;

class AllseederTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        \App\role::create([
            'name' => 'Admin'
        ]);
        \App\role::create([
            'name' => 'User'
        ]);

        \App\role::create([
            'name' => 'Student (actief)'
        ]);

        \App\role::create([
            'name' => 'Praktijkopleider'
        ]);
        \App\role::create([
            'name' => 'Docent'
        ]);

        \App\role::create([
            'name' => 'Student (in-actief)'
        ]);


        \App\status::create([
            'name' => 'good'

        ]);
        \App\crebo::create([
            'name' => 'Mo',
            'number' => '675',
        ]);
        \App\school::create([
            'name' => 'Zadkine'

        ]);
        \App\companie::create([
            'name' => 'zadkine',
            'address' => 'posthumalaan',
            'zipcode' => '3071',
            'city' => 'rotterdam',
            'phone' => '0126374848',

        ]);
        \App\cohort::create([
            'name' => 'Mo',
            'period' => '2015',
            'crebo_id' => '1',

        ]);
        \App\location::create([
            'address' => 'moerkerkestraat',
            'zipcode' => '3872',
            'city' => 'rotterdam',
            'school_id' => '1'

        ]);
        \App\course::create([
            'location_id' => '1',
            'cohort_id' => '1',

        ]);
        \App\contact::create([
            'surname' => 'Mohamed',
            'insertion' => 'mma',
            'familyname' => 'Gaber',
            'email' => 'KAM@zadkine.com',
            'phone' => '06887878',
            'mobile' => '01076788',
            'companie_id' => '1',

        ]);
        \App\internship::create([
            'startdate' => '01-05-2016',
            'enddate' => '10-05-2016',
            'course_id' => 1,
            'contact_id' => '1',
            'status_id' => '1'

        ]);
        \App\User::create([
            'email' => 'admin@admin.nl',
            'password' => bcrypt('123456'),
            'role_id' => '1',
            'contact_id' => '1'

        ]);

        \App\User::create([
            'email' => 'user@user.nl',
            'password' => bcrypt('123456'),
            'role_id' => '2',
            'contact_id' => '1'

        ]);
        \App\stage_user::create([
            'user_id' => '1',
            'internship_id' => '1'

        ]);
        \App\review::create([
            'grade' => 'second',
            'review' => 'blablabla',
            'stage_user_id' => '1',
            'status_id' => '1'

        ]);
        \App\tool::create([
            'name' => 'tool1',
            'description' => 'dit is tool 1',
            'status_id' => '1'

        ]);
        \App\stagetool::create([
            'tool_id' => '1',
            'stage_user_id' => '1',
            'companie_id' => '1'

        ]);


    }
}

