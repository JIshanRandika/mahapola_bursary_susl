<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Status;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = [
            [
                'name'=>'Vice Chancellor',
                'email'=>'vc@gmail.com',
                'is_permission'=>'1',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Registrar',
                'email'=>'reg@gmail.com',
                'is_permission'=>'2',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Assistant Registrar of The Faculty of Graduate Studies"',
                'email'=>'graduatear@gmail.com',
                'is_permission'=>'31',
                'password'=> bcrypt('123456'),
            ],

            [
                'name'=>'Assistant Registrar of The Faculty of Agriculture Science',
                'email'=>'agriculturear@gmail.com',
                'is_permission'=>'32',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Assistant Registrar of The Faculty of Applied Sciences',
                'email'=>'appliedar@gmail.com',
                'is_permission'=>'33',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Assistant Registrar of The Faculty of Geomatics',
                'email'=>'geomaticsar@gmail.com',
                'is_permission'=>'34',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Assistant Registrar of The Faculty of Management Studies',
                'email'=>'managementar@gmail.com',
                'is_permission'=>'35',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Assistant Registrar of The Faculty of Medicine',
                'email'=>'medicinear@gmail.com',
                'is_permission'=>'36',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Assistant Registrar of The Faculty of Social Sciences & Languages',
                'email'=>'socialar@gmail.com',
                'is_permission'=>'37',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Assistant Registrar of The Faculty of Technology',
                'email'=>'technologyar@gmail.com',
                'is_permission'=>'38',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Student Affairs Division Clerk',
                'email'=>'stdaff@gmail.com',
                'is_permission'=>'4',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Finance Division Clerk',
                'email'=>'fin@gmail.com',
                'is_permission'=>'5',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Student',
                'email'=>'std@gmail.com',
                'is_permission'=>'0',
                'password'=> bcrypt('123456'),
            ],
        ];


//        $status = [
//            [
//                'mahalpola_name' => 'Expect the next installment soon',
//                'status' => 'Not in progress',
//                'level' => '0'
//            ]
//        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

//        foreach ($status as $key => $value) {
//            Status::create($value);
//        }
    }
}
