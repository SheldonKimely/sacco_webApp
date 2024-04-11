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
        Schema::create('membership_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('idNumber');
            $table->string('idImage');
            $table->string('email');
            $table->integer('phone');
            $table->string('churchMembershipNumber');
            $table->string('department');
            $table->string('service');
            $table->string('status');
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
        Schema::dropIfExists('membership_applications');
    }
};
