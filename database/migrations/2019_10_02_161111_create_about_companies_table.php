<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('company_profile');
            $table->string('atOurServices_first_title');
            $table->string('atOurServices_first_desc');
            $table->string('atOurServices_second_title');
            $table->string('atOurServices_second_desc');
            $table->string('atOurServices_third_title');
            $table->string('atOurServices_third_desc');
            $table->string('atOurServices_fourth_title');
            $table->string('atOurServices_fourth_desc');
            $table->string('contact_us_wa_link');
            $table->string('contact_us_instagram_link');
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
        Schema::dropIfExists('about_companies');
    }
}
