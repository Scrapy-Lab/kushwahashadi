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
        Schema::table('user_details', function (Blueprint $table) {
            $table->text('native_place')->after('sister')->nullable();
            $table->text('father_occupation')->after('native_place')->nullable();
            $table->text('mother_occupation')->after('father_occupation')->nullable();
            $table->text('sister_occupation')->after('mother_occupation')->nullable();
            $table->text('brother_occupation')->after('sister_occupation')->nullable();
            $table->text('partner_exp_age')->after('partner_exp_prefered_cities')->nullable();
            $table->text('partner_exp_weight')->after('partner_exp_age')->nullable();
            $table->text('partner_exp_with_child')->after('partner_exp_weight')->nullable();
            $table->text('partner_exp_religion')->after('partner_exp_with_child')->nullable();
            $table->text('partner_exp_sub_caste')->after('partner_exp_religion')->nullable();
            $table->text('partner_exp_profession')->after('partner_exp_sub_caste')->nullable();
            $table->text('partner_exp_smoking')->after('partner_exp_profession')->nullable();
            $table->text('partner_exp_bodyType')->after('partner_exp_smoking')->nullable();
            $table->text('partner_exp_disability')->after('partner_exp_bodyType')->nullable();
            $table->text('partner_exp_family_stat')->after('partner_exp_disability')->nullable();
            $table->text('partner_exp_prefered_state')->after('partner_exp_family_stat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_details', function (Blueprint $table) {
            //
        });
    }
};
