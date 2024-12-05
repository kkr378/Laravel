<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ok_infos', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email_address');
            $table->string('password');
            $table->string('phone_number');
            $table->timestamps(); // For created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('ok_infos');
    }

};
