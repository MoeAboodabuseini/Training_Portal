<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Date;
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
        Schema::create('agreeds', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('opportunity_id');
            $table->string('supervisor_id')->nullable();
            $table->string('admin_id');
            $table->string('company_id');
            $table->string('status')->nullable();
            $table->string('note')->nullable();
            $table->timestamp('agreed_at')->useCurrent();
            $table->timestamp('finished_at')->nullable();//8 weeks
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agreeds');
    }
};
