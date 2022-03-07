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
        Schema::create('whyuses', function (Blueprint $table) {
            $table->id();
            
            $table->string('why_us_desc');
            $table->string('w1_heading');
            $table->string('w2_heading');
            $table->string('w3_heading');
            $table->string('w1_desc');
            $table->string('w2_desc');
            $table->string('w3_desc');
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
        Schema::dropIfExists('whyuses');
    }
};
