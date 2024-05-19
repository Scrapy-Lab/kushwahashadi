<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('gender')->nullable();
            $table->date('dob')->default('2024-01-01')->nullable();
            $table->string('martial_status')->nullable();
            $table->string('no_of_children')->nullable();
            $table->string('area')->nullable();
            $table->string('on_behalf')->nullable();
            $table->string('on_behalf_name')->default('')->nullable();
            $table->string('phone')->nullable();
            $table->string('wp_no')->nullable();
            $table->string('degree')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            // $table->string('height')->after('address');
            // $table->string('profession')->after('height');

            $table->string('highest_education')->nullable();
            $table->string('occupation')->nullable();
            $table->string('edu_details')->nullable();
            $table->string('posting_place')->nullable();
            $table->string('annual_income')->nullable();
            $table->string('other_occupation')->nullable();
            $table->string('height')->nullable();
            $table->string('wight')->nullable();
            $table->string('complexion')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('body_type')->nullable();
            $table->string('any_disability')->nullable();
            $table->string('religion')->nullable();
            $table->string('caste')->nullable();
            $table->string('sub_caste')->nullable();
            $table->string('gotra')->nullable();
            $table->string('family_values')->nullable();
            $table->string('family_status')->nullable();
            $table->string('sun_sign')->nullable();
            $table->string('moon_sign')->nullable();
            $table->string('birth_city')->nullable();
            $table->string('time_of_birth')->nullable();
            $table->string('family_residence')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('brother')->nullable();
            $table->string('sister')->nullable();
            $table->string('partner_exp_general_requirement')->nullable();
            $table->string('partner_exp_height')->nullable();
            $table->string('partner_exp_marital_status')->nullable();
            $table->string('partner_exp_country_of_residence')->nullable();
            $table->string('partner_exp_caste')->nullable();
            $table->string('partner_exp_education')->nullable();
            $table->string('partner_exp_drinking_habits')->nullable();
            $table->string('partner_exp_diet')->nullable();
            $table->string('partner_exp_manglik')->nullable();
            $table->string('partner_exp_family_values')->nullable();
            $table->string('partner_exp_prefered_countries')->nullable();
            $table->string('partner_exp_prefered_cities')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
