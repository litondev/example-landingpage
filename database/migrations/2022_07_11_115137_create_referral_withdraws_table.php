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
        Schema::create('referral_withdraws', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("referral_id")->unsigned()->nullable();
            $table->decimal("amount",20,2)->default(0.00);
            $table->text("description")->nullable();
            $table->string("proof",100);            
            $table->string("bank_account",100)->nullable();
            $table->string("bank_no_account",200)->nullable();
            $table->enum("status",["PENDING","FAILED","SUCCESS"])->default("PENDING");
            $table->text("reason")->nullable();
            $table->timestamps();

            $table->foreign("referral_id")->references("id")->on("referrals");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referral_withdraws');
    }
};
