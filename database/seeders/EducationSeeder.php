<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Education;
use Carbon\Carbon;


class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $education = array();
        $data = array(
            'course_name' => "PGDCA", 	
            'address' => "Guru Nanak College,Ferozepur,Punjab", 
            'description' => 'Now i am doing Post Graduate Diploma in Computer        Applications',
            'from' =>  Carbon::now(),
            'to' =>  Carbon::now(),
            'current' =>  0,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
        array_push($education , $data);

        $data = array(
            'course_name' => "Computer Operator & Programming Assistant", 	
            'address' => "Baba Farid Govt Institute,Faridkot,Punjab", 
            'description' => 'I have done computer operater and programming assistant(govt NCVT) course where i learnt lot of computer technologies related things like programming languages,coding skills,softwares,practicals etc. ',
            'from' =>  Carbon::now(),
            'to' =>  Carbon::now(),
            'current' =>  0,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
        array_push($education , $data);

        $data = array(
            'course_name' => "BA(Computer Science)", 	
            'address' => "Guru Nanak College,Ferozepur,Punjab", 
            'description' => 'I have Done BA (an extremely popular undergraduate course) in computer science where i learnt c and c++ consepts deeply. ',
            'from' =>  Carbon::now(),
            'to' =>  Carbon::now(),
            'current' =>  0,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
        array_push($education , $data);

        foreach ($education as $key => $value) {
            $result = Education::updateOrCreate($value);
        }

    }
}
