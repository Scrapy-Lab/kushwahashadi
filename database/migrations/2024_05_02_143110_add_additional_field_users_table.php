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
            $table->string('on_behalf')->after('email');
            $table->string('sibling_name')->after('on_behalf')->default('');
            $table->string('user_surname')->after('name');
            $table->string('gender')->after('user_surname');
            $table->date('dob')->after('gender');
            $table->string('phone')->after('dob');
            $table->string('degree')->after('phone');
            $table->string('address')->after('degree');
            $table->string('height')->after('address');
            $table->string('profession')->after('height');
            $table->string('is_admin')->after('profession')->default(0);
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
