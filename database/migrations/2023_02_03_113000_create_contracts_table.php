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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string("city");
            $table->string("state_number");
            $table->string("type");
            $table->string("prop_number");
            $table->string("postal");
            $table->string("email");
            $table->string("name");
            $table->string("start");
            $table->string("end");
            $table->string("process");
            $table->string("pdf");
            $table->string("confirmed");
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('contracts');
    }
};
