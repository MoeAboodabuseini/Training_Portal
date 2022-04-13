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
        Schema::create('opportunities', function (Blueprint $table) {

            $table->id();
            $table->string('company_id');
            $table->string('starting_date');
            $table->string('details');
            $table->string('name');
            $table->string('major');
            $table->string('photo');
            $table->string('seats')->default(5);
            $table->string('seats')->default('avilable');
            $table->string('supervisor_name')->nullable();
            $table->string('supervisor_phone')->nullable();
            $table->string('supervisor_email')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opportunities');
    }
};
