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
            $table->string('username',100)->unique();
            $table->string('email',50)->unique();
            $table->string('phone',50)->unique();
            $table->string('password');            
            $table->string('remember_token',200)->nullable();
            $table->timestamp("verified_email")->nullable();
            $table->timestamp("verified_phone")->nullable();
            $table->boolean("must_verified_email")->default(false);
            $table->boolean("must_verified_phone")->default(false);
            $table->string("company_name",200)->unique();             
            $table->boolean("is_refferal")->default(false);
            $table->string("code_refferal",10)->unique();
            $table->string("bank_account",100)->nullable();
            $table->string("bank_no_account",200)->nullable();
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
