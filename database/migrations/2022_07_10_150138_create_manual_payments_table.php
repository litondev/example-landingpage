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
        Schema::create('manual_payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("outlet_id")->unsigned()->nullable();
            $table->bigInteger("billing_id")->unsigned()->nullable();
            $table->bigInteger("channel_payment_id")->unsigned()->nullable();
            $table->bigInteger("payment_id")->unsigned()->nullable();
            $table->string("proof",100);
            $table->decimal("amount_transfred",20,2)->default(0.00);
            $table->enum("status",["PENDING","FAILED","SUCCESS"])->default("PENDING");
            $table->text("description")->nullable();
            $table->text("reason")->nullable();
            $table->timestamps();

            $table->foreign("outlet_id")->references("id")->on("outlets");
            $table->foreign("billing_id")->references("id")->on("billings");
            $table->foreign("channel_payment_id")->references("id")->on("channel_payments");  
            $table->foreign("payment_id")->references("id")->on("payments");  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manual_payments');
    }
};
