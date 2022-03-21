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
            $table->string('name')->nullable()->change();
            $table->string('dob')->nullable()->change();
            $table->string('zalo')->nullable()->change();
            $table->string('facebook')->nullable()->change();
            $table->string('address')->nullable()->change();
            $table->string('job')->nullable()->change();
            $table->string('salary')->nullable()->change();
            $table->string('moneyNumber')->nullable()->change();
            $table->string('bankNumber')->nullable()->change();
            $table->string('bankName')->nullable()->change();
            $table->string('bankOwner')->nullable()->change();
            $table->string('frontIdentityCard')->nullable()->change();
            $table->string('backIdentityCard')->nullable()->change();
            $table->boolean('isCompleted')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
