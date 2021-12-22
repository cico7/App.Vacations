<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//Ovo je potrebno dodati na početku!! inače ne radi DB...
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $users = 
        [
            ['user_log_in' => 'deri', 'user_name' => 'Damir Eri'],
            ['user_log_in' => 'mklaric', 'user_name' => 'Marijan Klarić'],
            ['user_log_in' => 'Lpopovic', 'user_name' => 'Laura Popović'],
            ['user_log_in' => 'mprebeg', 'user_name' => 'Marko Prebeg']
        ];
        DB::table('users')->insert ($users);


        $employees = 
        [
            ['employee_first_name' => 'Damir', 'employee_last_name' => 'Eri', 'oib' =>'12548968749', 'job_name' => 'Nizi direktor', 'employee_address' =>'Donji Vukojevac', 'employee_email'=>'deri@vvg.hr', 'phone_number'=> '0977772213'],
            ['employee_first_name' => 'Pero', 'employee_last_name' => 'Perić', 'oib' =>'12125468749', 'job_name' => 'Nizi direktor', 'employee_address' =>'Donja Lomnica', 'employee_email'=>'pperic@vvg.hr', 'phone_number'=> '09812541587'],
            ['employee_first_name' => 'Mirko', 'employee_last_name' => 'Marić', 'oib' =>'98648468749', 'job_name' => 'Pomoćni radnik', 'employee_address' =>'Donja Lomnica', 'employee_email'=>'mmaric@vvg.hr', 'phone_number'=> '09875541587'],
            ['employee_first_name' => 'Ante', 'employee_last_name' => 'Anić', 'oib' =>'36525468749', 'job_name' => 'Direktor', 'employee_address' =>'Prepuštevec', 'employee_email'=>'aanic@vvg.hr', 'phone_number'=> '0975541587']
        ];
        DB::table('employees')->insert ($employees);


        $groups1 = 
        [
            ['group_name' => 'kadrovska' , 'can_approve_request' => 1, 'can_enter_request' =>0, 'can_add_free_days' => 1, 'can_add_new_user' =>0, 'can_change_group_rights'=>0, 'group_description'=> 'Kadrovska služba'],
            ['group_name' => 'voditelji' , 'can_approve_request' => 1, 'can_enter_request' =>1, 'can_add_free_days' => 0, 'can_add_new_user' =>0, 'can_change_group_rights'=>0, 'group_description'=> 'Voditelji odjela '],
            ['group_name' => 'financije' , 'can_approve_request' => 0, 'can_enter_request' =>0, 'can_add_free_days' => 0, 'can_add_new_user' =>0, 'can_change_group_rights'=>0, 'group_description'=> 'financije i računovodstvo'],
            ['group_name' => 'direktor'  , 'can_approve_request' => 1, 'can_enter_request' =>1, 'can_add_free_days' => 0, 'can_add_new_user' =>1, 'can_change_group_rights'=>1, 'group_description'=> 'Direktor']
        ];
        DB::table('groups1')->insert ($groups1);
        

        $groups_members = 
        [
            ['user_id' => 1, 'group_id' => 1],
            ['user_id' => 2, 'group_id' => 2],
            ['user_id' => 3, 'group_id' => 3],
            ['user_id' => 4, 'group_id' => 4]
        ];
        DB::table('groups_members')->insert ($groups_members);


        $departments = 
        [
            ['user_id' => 4, 'department_name' => 'department'    , 'department_desription' => 'BBO department................'],
            ['user_id' => 2, 'department_name' => 'KADROVSKA'     , 'department_desription' => 'kadrovska.................'],
            ['user_id' => 3, 'department_name' => 'FINANCIJE'     , 'department_desription' => 'financije...............'],
            ['user_id' => 1, 'department_name' => 'Odjel'         , 'department_desription' => 'odjel................................']
        ];
        DB::table('departments')->insert ($departments);


        $employments = 
        [
            ['employee_id' => 1, 'department_id' => 1, 'employee_hire_date'=>'1995-02-15', 'employee_termination_date'=> null],
            ['employee_id' => 2, 'department_id' => 2, 'employee_hire_date'=>'1998-05-17', 'employee_termination_date'=> null],
            ['employee_id' => 3, 'department_id' => 3, 'employee_hire_date'=>'1999-05-07', 'employee_termination_date'=> null],
            ['employee_id' => 4, 'department_id' => 4, 'employee_hire_date'=>'2000-05-27', 'employee_termination_date'=> null]
        ];
        DB::table('employments')->insert ($employments);

        // \App\Models\User::factory(10)->create();
    }
}