<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PortfolioCategory;
use App\Models\Portfolio;
use Carbon\Carbon;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $portfolioCategories = array();


#================PortFolio Categories============Start
    $data = array(
        "name" => "ALL",
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        );
    array_push($portfolioCategories , $data);

    $data = array(
        "name" => "JAVASCRIPT",
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        );
    array_push($portfolioCategories , $data);

    $data = array(
        "name" => "GAMES",
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        );
    array_push($portfolioCategories , $data);

    $data = array(
        "name" => "PAGES",
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        );
    array_push($portfolioCategories , $data);

    $data = array(
        "name" => "BUILDS",
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        );
    array_push($portfolioCategories , $data);

    foreach ($portfolioCategories as $key => $value) {
        $result = PortfolioCategory::updateOrCreate($value);
    }

#================PortFolio Categories============End

   $portfolios = array();

   $data = array(
    "portfolio_category_id" => 1,
    "title" => "Calculator",
    "visit_link" => "https://codepen.io/NavjotSinghPrince/pen/xxbpvvV" ,	
    "image" => "img/portfolio/img-9.png",
    'user_id' => 1,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    );

   array_push($portfolios , $data);

   $data = array(
    "portfolio_category_id" => 1,
    "title" => "Racing Car Game",
    "visit_link" => "https://github.com/navjotsinghprince/Car-Racer-Game/tree/master" ,	
    "image" => "img/portfolio/img-13.png",
    'user_id' => 1,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
   );
     array_push($portfolios , $data);
 
   $data = array(
    "portfolio_category_id" => 1,
    "title" => "Ludo Game",
    "visit_link" => "https://github.com/navjotsinghprince/Ludo-JavaScript-Game",
    "image" => "img/portfolio/img-12.png",
    'user_id' => 1,
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    );
    array_push($portfolios , $data);

    foreach ($portfolios as $key => $value) {
        $result = Portfolio::updateOrCreate($value);
    }

    } 
}