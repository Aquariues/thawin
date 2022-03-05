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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->unique();
            $table->string('dob');
            $table->string('zalo');
            $table->string('facebook');
            $table->string('address');
            $table->string('job');
            $table->string('salary');
            $table->string('moneyNumber');
            $table->string('bankNumber');
            $table->string('bankName');
            $table->string('bankOwner');
            $table->string('frontIdentityCard');
            $table->string('backIdentityCard');
            $table->dropColumn('email_verified_at');
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
