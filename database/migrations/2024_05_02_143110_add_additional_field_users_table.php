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

            $table->string('last_name')->after('name')->nullable();
            $table->string('gender')->after('last_name')->nullable();
            $table->date('dob')->default('2024-01-01')->after('gender')->nullable();
            $table->string('martial_status')->after('dob')->nullable();
            $table->string('no_of_children')->after('martial_status')->nullable();
            $table->string('area')->after('no_of_children')->nullable();
            $table->string('on_behalf')->after('area')->nullable();
            $table->string('on_behalf_name')->after('on_behalf')->default('')->nullable();
            $table->string('phone')->after('on_behalf_name')->nullable();
            $table->string('wp_no')->after('phone')->nullable();
            $table->string('degree')->after('wp_no')->nullable();
            $table->string('address')->after('degree')->nullable();
            $table->string('country')->after('address')->nullable();
            $table->string('state')->after('country')->nullable();
            $table->string('city')->after('state')->nullable();
            // $table->string('height')->after('address');
            // $table->string('profession')->after('height');
            $table->string('is_admin')->after('city')->default(0);
            $table->timestamp('deleted_at')->nullable();
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
