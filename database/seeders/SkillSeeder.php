<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skills;
use Carbon\Carbon;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = array();

#================================Front Skills============Start
        $data = array(
            "type" => 1,
            "name" => "HTMl5",
            "value" => 50,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
        array_push($skills , $data);

        $data = array(
            "type" => 1,
            "name" => "CSS3",
            "value" => 50,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
        array_push($skills , $data);

        $data = array(
            "type" => 1,
            "name" => "Javascript",
            "value" => 50,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
        array_push($skills , $data);

        $data = array(
            "type" => 1,
            "name" => "Sass",
            "value" => 50,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
        array_push($skills , $data);

        $data = array(
            "type" => 1,
            "name" => "JQuery",
            "value" => 50,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
        array_push($skills , $data);
#================================Front Skills============End


#================================Backend Skills============Start
        $data = array(
            "type" => 2,
            "name" => "PHP",
            "value" => 50,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
        array_push($skills , $data);

        $data = array(
            "type" => 2,
            "name" => "MYSQL",
            "value" => 50,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
        array_push($skills , $data);

        $data = array(
            "type" => 2,
            "name" => "JSON",
            "value" => 50,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
        array_push($skills , $data);

        $data = array(
            "type" => 2,
            "name" => "AJAX",
            "value" => 50,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
        array_push($skills , $data);

        $data = array(
            "type" => 2,
            "name" => "GIT(GITHUB)",
            "value" => 50,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
        array_push($skills , $data);
#================================Backend Skills============End

    foreach ($skills as $key => $value) {
        $result = Skills::updateOrCreate($value);
        }
    }
}
