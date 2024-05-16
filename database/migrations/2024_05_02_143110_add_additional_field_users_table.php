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
        Schema::table('users', function (Blueprint $table) {

            $table->string('last_name')->after('name');
            $table->string('gender')->after('last_name');
            $table->date('dob')->default('2024-01-01')->after('gender');
            $table->string('martial_status')->after('dob');
            $table->string('no_of_children')->after('martial_status');
            $table->string('area')->after('no_of_children');
            $table->string('on_behalf')->after('area');
            $table->string('on_behalf_name')->after('on_behalf')->default('');
            $table->string('phone')->after('on_behalf_name');
            $table->string('wp_no')->after('phone');
            $table->string('degree')->after('wp_no');
            $table->string('address')->after('degree');
            $table->string('country')->after('address');
            $table->string('state')->after('country');
            $table->string('city')->after('state');
            // $table->string('height')->after('address');
            // $table->string('profession')->after('height');
            $table->string('is_admin')->after('city')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
