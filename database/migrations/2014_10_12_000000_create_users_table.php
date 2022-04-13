<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('user_id')->unique();
            $table->string('phone')->nullable();
            $table->string('role')->default('user');
            $table->string('skills')->default('null');
            $table->string('type')->default('null');
            $table->string('major')->default('null');
            $table->string('location')->default('null');
            $table->string('hours')->default('null');
            $table->string('GPA')->default('null');
            $table->string('photo')->default('null');
            $table->string('rate')->default('null');
            $table->string('website')->default('null');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('description')->default('null');
            $table->string('zip')->default('null');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
