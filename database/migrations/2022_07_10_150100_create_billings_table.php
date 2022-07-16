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
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("outlet_id")->unsigned()->nullable();
            $table->bigInteger("package_id")->unsigned()->nullable();            
            $table->decimal("amount",20,2)->default(0.00);
            $table->decimal("amount_add_on",20,2)->default(0.00);
            $table->decimal("grand_total",20,2)->default(0.00);
            $table->timestamp("expired_payment_at")->nullable();
            $table->timestamp("due_date_at")->nullable();
            $table->timestamp("pay_at")->nullable();
            $table->enum("status",["PAID","UNPAID"])->default("UNPAID");
            $table->boolean("active")->default(false);
            $table->text("description")->nullable();
            $table->timestamps();

            $table->foreign("outlet_id")->references("id")->on("outlets");
            $table->foreign("package_id")->references("id")->on("packages");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billings');
    }
};
