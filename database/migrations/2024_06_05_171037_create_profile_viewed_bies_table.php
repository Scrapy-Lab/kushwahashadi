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
        Schema::create('profile_viewed_bies', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('profile_id')->unsigned()->comment('id of the user whose profile viewed by other user');
            $table->bigInteger('user_id')->unsigned()->comment('id of the user who viewed the profile');
            $table->timestamps();
            $table->foreign('profile_id')->references('id')->on('users');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_viewed_bies');
    }
};
