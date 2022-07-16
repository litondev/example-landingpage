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
        Schema::create('outlets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("package_id")->unsigned()->nullable();
            $table->bigInteger("user_id")->unsigned()->nullable();
            $table->string("sub_domain",200)->unique();
            $table->timestamp("trial_package_at")->nullable();        
            $table->timestamp("due_date_at")->nullable();
            $table->tinyInteger("due_date_day_add")->default(3);      
            $table->timestamps();

            $table->foreign("package_id")->references("id")->on("packages");
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
        Schema::dropIfExists('stores');
    }
};
