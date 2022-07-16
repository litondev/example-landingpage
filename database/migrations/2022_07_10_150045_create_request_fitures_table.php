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
        Schema::create('request_fitures', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned()->nullable();
            $table->string("name",50)->nullable();
            $table->enum("status",["PENDING","APPROVE","DANIED","SUCCESS","PROCESS"])->default("PENDING");
            $table->text("description")->nullable();
            $table->text("reason")->nullable();
            $table->text("alternative")->nullable();
            $table->text("link")->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign("user_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_fitures');
    }
};
