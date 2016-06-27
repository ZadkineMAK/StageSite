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
           'name' => 'Student (inactief)'
        ]);


        \App\role::create([
            'name' => 'Student (in-actief)'
        ]);


        \App\status::create([
            'name' => 'available'

        ]);\App\status::create([
            'name' => 'unavailable'

        ]);\App\status::create([
            'name' => 'hold'

        ]);\App\status::create([
            'name' => 'in proces'

        ]);
        \App\crebo::create([
            'name' => 'applicatie',
            'number' => '675',
        ]);

        \App\crebo::create([
            'name' => 'Apothekersassistente',
            'number' => '6758',
        ]);

        \App\crebo::create([
            'name' => 'Veiligheid, Logistiek',
            'number' => '765',
        ]);

        \App\crebo::create([
            'name' => 'Techniek&Technologie',
            'number' => '234',
        ]);



        \App\school::create([
            'name' => 'Zadkine'
        ]);

        \App\school::create([
            'name' => 'Hoogschool DenHaag'
        ]);

        \App\school::create([
            'name' => 'Albeda'
        ]);

        \App\school::create([
            'name' => 'Inholand'
        ]);

        \App\school::create([
            'name' => 'Amsterdam school'
        ]);

        \App\companie::create([
            'name' => 'Zadkine',
            'address' => 'posthumalaan',
            'zipcode' => '3071',
            'city' => 'Rotterdam',
            'phone' => '0126374848',
            'email' => 'zadkine@stage.nl',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet dignissim libero eu blandit. Sed id laoreet leo. Etiam aliquet nisi eget cursus fringilla. Vestibulum ac quam eget ex posuere interdum sit amet eu leo. Ut aliquet maximus mattis. Etiam risus felis, rutrum et posuere eget, accumsan volutpat purus. Ut nec neque neque. In ultricies sodales ligula sit amet pretium. Donec nec odio nulla. Morbi quis justo sem. Nullam at enim sollicitudin diam suscipit ultricies at et sapien. Proin rutrum consectetur nisl, in iaculis odio luctus vitae. Suspendisse potenti. Aenean a vehicula sapien, a hendrerit ex.Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec libero risus, semper id ornare dictum, tincidunt at nulla. Phasellus imperdiet at lorem vehicula rhoncus. Quisque accumsan metus a tempor ornare. Nunc lacinia nulla ut rhoncus ultricies. Fusce iaculis interdum felis pretium tempus. Duis sit amet luctus diam. Curabitur et maximus tortor, venenatis pulvinar magna. Nunc consectetur rhoncus ultricies. Sed mi nunc, accumsan eget ex ac, maximus fermentum massa. Sed orci lorem, pharetra consequat augue sed, mollis lacinia dolor. Proin bibendum, erat sit amet pulvinar eleifend, sem justo accumsan quam, id vestibulum velit justo eget diam. Sed condimentum laoreet sapien sodales rutrum.',

        ]);\App\companie::create([
            'name' => 'Albeda',
            'address' => 'amsterdamstraat',
            'zipcode' => '7892',
            'city' => 'Amsterdam',
            'phone' => '876544',
            'email' => 'albeda@stage.nl',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet dignissim libero eu blandit. Sed id laoreet leo. Etiam aliquet nisi eget cursus fringilla. Vestibulum ac quam eget ex posuere interdum sit amet eu leo. Ut aliquet maximus mattis. Etiam risus felis, rutrum et posuere eget, accumsan volutpat purus. Ut nec neque neque. In ultricies sodales ligula sit amet pretium. Donec nec odio nulla. Morbi quis justo sem. Nullam at enim sollicitudin diam suscipit ultricies at et sapien. Proin rutrum consectetur nisl, in iaculis odio luctus vitae. Suspendisse potenti. Aenean a vehicula sapien, a hendrerit ex. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec libero risus, semper id ornare dictum, tincidunt at nulla. Phasellus imperdiet at lorem vehicula rhoncus. Quisque accumsan metus a tempor ornare. Nunc lacinia nulla ut rhoncus ultricies. Fusce iaculis interdum felis pretium tempus. Duis sit amet luctus diam. Curabitur et maximus tortor, venenatis pulvinar magna. Nunc consectetur rhoncus ultricies. Sed mi nunc, accumsan eget ex ac, maximus fermentum massa. Sed orci lorem, pharetra consequat augue sed, mollis lacinia dolor. Proin bibendum, erat sit amet pulvinar eleifend, sem justo accumsan quam, id vestibulum velit justo eget diam. Sed condimentum laoreet sapien sodales rutrum.',

        ]);
        \App\cohort::create([
            'name' => '2013-2015',
            'period' => '2013-2015',

        ]);\App\cohort::create([
            'name' => '2015-2018',
            'period' => '2015-2018',

        ]);\App\cohort::create([
            'name' => '2017-2020',
            'period' => '2017-2020',

        ]);
        \App\cohort::create([
            'name' => '2020-2023',
            'period' => '2020-2023',

        ]);
        \App\location::create([
            'address' => 'moerkerkestraat',
            'zipcode' => '3872',
            'city' => 'rotterdam',
            'school_id' => '1'

        ]);
        \App\location::create([
            'address' => 'Signhstraat',
            'zipcode' => '3872',
            'city' => 'Denhaag',
            'school_id' => '2'

        ]);
        \App\location::create([
        'address' => 'bombomstraat',
        'zipcode' => '3762',
        'city' => 'Amsterdam',
        'school_id' => '3'

    ]);
        \App\location::create([
        'address' => 'Proijhstraat',
        'zipcode' => '3082',
        'city' => 'Rotterdam',
        'school_id' => '4'

    ]);

        \App\course::create([
            'location_id' => '1',
            'cohort_id' => '1',
            'crebo_id' => '1',


        ]);

        \App\course::create([
            'location_id' => '2',
            'cohort_id' => '2',
            'crebo_id' => '2',


        ]);
        \App\course::create([
            'location_id' => '3',
            'cohort_id' => '3',
            'crebo_id' => '3',
        ]);

        \App\course::create([
            'location_id' => '4',
            'cohort_id' => '4',
            'crebo_id' => '4',



        ]);
        \App\contact::create([
            'surname' => 'Mohamed',
            'familyname' => 'Gaber',
            'email' => 'KAM@zadkine.com',
            'phone' => '06887878',
            'mobile' => '01076788',
            'companie_id' => '1',


        ]);
        \App\contact::create([
            'surname' => 'Kelvin',
            'insertion' => 'van der',
            'familyname' => 'Gaag',
            'email' => 'KAM@zadkine.com',
            'phone' => '365758699',
            'mobile' => '01076788',
            'companie_id' => '1',

        ]);
        \App\contact::create([
            'surname' => 'Armando',
            'familyname' => 'Janssen',
            'email' => 'KAM@zadkine.com',
            'phone' => '06887878',
            'mobile' => '01076788',
            'companie_id' => '1',


        ]);

        \App\contact::create([
            'surname' => 'Bart',
            'insertion' => 'van',
            'familyname' => 'Venrooij',
            'email' => 'KJKK@zadkine.com',
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
        \App\internship::create([
            'startdate' => '01-05-2013',
            'enddate' => '10-05-2015',
            'course_id' => 2,
            'contact_id' => '2',
            'status_id' => '2'

        ]);
        \App\internship::create([
            'startdate' => '01-05-2016',
            'enddate' => '19-01-2018',
            'course_id' => 3,
            'contact_id' => '3',
            'status_id' => '3'

        ]);
        \App\internship::create([
            'startdate' => '09-04-2015',
            'enddate' => '06-01-2019',
            'course_id' => 4,
            'contact_id' => '4',
            'status_id' => '4'

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
            'contact_id' => '2'

        ]);
        \App\stage_user::create([
            'user_id' => '1',
            'internship_id' => '1'

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

