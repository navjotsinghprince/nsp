<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use Carbon\Carbon;


class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $services = array();
        $data = array(
            'icon_name' => 'lnr-laptop',
            'title' => 'Web Development',
            'description' => 'I have a basic understanding of HTML, CSS, JavaScript, Dom, Bom, HTTP/URL, Testing/Debugging, Browser developer  Tools',
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
        array_push($services , $data);


        $data = array(
            'icon_name' => 'lnr-laptop-phone',
            'title' => 'Responsive Design',
            'description' => 'Cross-Browser Development, CSS Preprocessing(SASS) CSS3, Flex, Grid, And Bootstrap framework',
             'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );

        array_push($services , $data);

        $data = array(
            'icon_name' => 'lnr-rocket',
            'title' => 'Front-End/Back-End',
            'description' =>'focuses on databases, scripting, and the architecture of websites',
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );

        array_push($services , $data);

        $data = array(
            'icon_name' => 'lnr-database',
            'title' => 'DataBase',
            'description' => 'MySQL,Core Php,JQuery, Json, Ajax',
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );

        array_push($services , $data);

        foreach ($services as $key => $value) {
            $result = Service::updateOrCreate($value);
        }

       
    }
}
