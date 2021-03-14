<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        "profession", 	
        "aboutme" ,
        "age" ,
        "country" ,
        "city" ,	
        "state" ,
        "pincode" ,	
        "country_code" ,
        "phone" ,	
        "freelance_avaialable",
        "linkedin",
        "github" ,	
        "twitter",	
        "codepen",	
        "stackoverflow", 	
        "download_resume_url",	
        "signature_url",	
        "user_id",	
        "created_at",	
        "updated_at" 	
    ];
}
