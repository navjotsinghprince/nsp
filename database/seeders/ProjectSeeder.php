<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Carbon\Carbon;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = array();
        $data = array(
            "title" => "NEWS-SITE-CMS",
            "description" => "I created Content Management System Fully Dynamic Website in Php+MySQL, Which is often used to helps users to create, manage, and modify content on a website without the need for specialized technical ", 
            "view_link" => "https://github.com/navjotsinghprince/News-Site-CMS", 	
            "from" => Carbon::now(),
            "to" => Carbon::now(),
            "current" => 0,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
        array_push($projects , $data);

        $data = array(
            "title" => "COVID-19",
            "description" => "I created a API-During the present novel coronavirus (COVID-19) pandemic, those on the front lines—including health care professionals, researchers, and government experts—need quick, easy access to real-time critical data.https://navjotsinghprince.github.io/Covid-19/ ", 
            "view_link" => "https://navjotsinghprince.github.io/Covid-19/", 	
            "from" => Carbon::now(),
            "to" => Carbon::now(),
            "current" => 0,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
        array_push($projects , $data);


        $data = array(
            "title" => "CRUD-REST-API",
            "description" => "This is CRUD Operation with PHP Rest API ,Ajax,JQuery,and MySQL..This is a interface between systems using HTTP to obtain data and generate operations on those data in all possible formats, such as XML and JSON.", 
            "view_link" => "https://github.com/navjotsinghprince/CRUD-REST-API", 	
            "from" => Carbon::now(),
            "to" => Carbon::now(),
            "current" => 0,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
        array_push($projects , $data);

        
        foreach ($projects as $key => $value) {
            $result = Project::updateOrCreate($value);
        }
    }
}
