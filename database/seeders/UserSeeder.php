<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            'name' => 'Navjot Singh',
            'username' => 'navjotsinghprince',
            'nickname' => 'Prince',
            'email' => 'navjotsinghprince1@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make("n@v!prince"),
            'remember_token' => md5(Carbon::now()),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        );
        $user = User::updateOrCreate($data);

        $dateOfBirth = "26-05-1997";
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dateOfBirth), date_create($today));
        $myage = (int)$diff->format('%y');

        $profile = array(
            'user_id'  =>  $user->id,
            "profession" => "Software Engineer",
            "aboutme" => "Hi! I am Navjot Singh, a web designer/developer focused on crafting great web experiences. Designing and Coding have been my passion since the days I started working with computers but I found myself into web design/development since 2017. I enjoy creating beautifully designed, intuitive and functional websites.
            I am a proficient web developer with an influential personality who wants to pursue a competitive and technical career as a Web Developer. In the long term I want to become an innovative entrepreneur and create exciting opportunities in the field of IT",
            "age"  => $myage,
            "country"  => "India",
            "city"  =>     "Ferozepur",
            "pincode"  => 152004,
            "state"  => "Punjab",
            "country_code"  => "+91",
            "phone"  => 8591373660,
            "freelance_avaialable" => 0,
            "github"  => "https://github.com/navjotsinghprince",
            "linkedin" => "https://www.linkedin.com/in/navjot-singh-82172a18a/",
            "codepen"  => "https://codepen.io/NavjotSinghPrince",
            "twitter" => "https://twitter.com/Princeferozepur",
            "stackoverflow" => "https://stackoverflow.com/users/12120513/navjotsinghprince",
            "download_resume_url" => "https://www.mediafire.com/file/bw8i4vdrgzg7c6k/Navjot__Singh_Resume.pdf/file",
            "signature_url" => "img/signature-black.png",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        );
        $profile = Profile::updateOrCreate($profile);
    }
}
