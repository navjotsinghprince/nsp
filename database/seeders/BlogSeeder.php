<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogCategory;
use App\Models\Blogs;
use Carbon\Carbon;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogCategories = array();


        #================Blog Categories============Start
            $data = array(
                "name" => "ALL",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                );
            array_push($blogCategories , $data);
        
            $data = array(
                "name" => "DEVELOPMENT",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                );
            array_push($blogCategories , $data);
        
            $data = array(
                "name" => "CONFIGURATIONS",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                );
            array_push($blogCategories , $data);

            $data = array(
                "name" => "PERSONAL",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                );
            array_push($blogCategories , $data);
        
            foreach ($blogCategories as $key => $value) {
                $result = BlogCategory::updateOrCreate($value);
            }
        
        #================Blog Categories============End


#================Blog Post============Start
    $blogs = array();

    $data = array(
        "blog_category_id" => 1,
        "title" => "Best Way To Code",
        "description" => " <h4>OVERVIEW</h4>
        <b>As technology becomes more and more accessible, the need for programmers is always increasing. Coding is a skill learned and perfected over time, but everyone has to start somewhere. There are a variety of languages that are perfect for beginners regardless of the field that you're interested in. (Ex. JavaScript, Etc.) (JavaScript is quite advanced, so start with HTML or CSS)
        </b><br><br>
      <b>Web development is a field that is expanding with the introduction of new technologies, such as apps on smartphones and tablets. The demand for people who are familiar with creating new apps and programs is very high.</b><br><br>
           
    <b>If you’re interested in becoming a web developer, hone your computer programming skills and master programming languages such as HTML or Python. Because web design is a demanding career, work on expanding your interpersonal skills by learning to deal with difficult clients. For schooling, choose courses in programming, web design, database management, networking, and mathematics. Then, enroll in internships to gain experience in your field. Continue reading for information on the most popular program languages required by employers</b>
        <br><br>
   
       
        <blockquote>
         <b>HOW TO CODE</b><br>
         1:-Pick a language if you are interested web development like html5,css3,javascript etc.<br>
         2:-Find free resources online for the language you choose.<br>
         3:-Download a good text editor.<br>
         4:-Download any necessary compilers like C,C++ and koala For Sass.<br>
         5:-Start your first project like basic html5 webpage,basic database and form functions with PHP, simple programs with any of the compiler languages.<br>
         6:-Comment all of your code for future understanding.<br>
         7:-Pick apart other programs or web projects like view source code of websites.<br>
         8:-Expand your knowledge like take classes.<br>
         9:-Learn more languages like php,python,sql.<br>
         10:-Be patient.<br>
         11:-Learn to work with others.<br>
         12:-Get a job where you can practice your coding skills.<br>
         13:-Connect with other programmers. like StackOverflow.<br>
         14:-Use code related online/Offline tools,softwares like Git.<br>
         15:-Practice, practice, practice.
        </blockquote>", 	
        "image" => "img/blog/blog-page-img.jpg",
        "user_id" => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
        );
    array_push($blogs , $data);

    foreach ($blogs as $key => $value) {
        $result = Blogs::updateOrCreate($value);
    }

   #================Blog Post============End

    }
}
