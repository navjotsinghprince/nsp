<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('profession', 100)->nullable();
            $table->text('aboutme')->nullable();
            $table->bigInteger('age');
            $table->string('country',255)->nullable();
            $table->string('city',255)->nullable();
            $table->string('state',255)->nullable();
            $table->bigInteger('pincode')->nullable();
            $table->string('country_code')->unique();
            $table->bigInteger('phone')->unique();
            $table->tinyInteger('freelance_avaialable')->default(0)->comment("0=Unavailable , 1=available");
            $table->string('linkedin')->nullable();
            $table->string('github')->nullable();
            $table->string('twitter')->nullable();
            $table->string('codepen')->nullable();
            $table->string('stackoverflow')->nullable();
            $table->string('download_resume_url')->default('');
            $table->string('signature_url')->default('../../public/assets/img/signature.png');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
