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
        Schema::create('channel_payments', function (Blueprint $table) {
            $table->id();
            $table->string("name",50);
            $table->string("icon",100)->default("default.png");
            $table->string("account",100);
            $table->string("no_account",255);
            $table->enum("type",["MANUAL","AUTOMATIC","BOTH"])->defualt("MANUAL");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('channel_payments');
    }
};
