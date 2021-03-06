<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeckillOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seckill_order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('goods_id')->nullable(false);
            $table->decimal('order_price')->nullable(false);
            $table->integer('user_id')->nullable(false);
            $table->integer('shopper_id')->nullable(false);
            $table->dateTime('pay_time')->nullable(true);
            $table->tinyInteger('pay_status')->nullable(false)->default(0);
            $table->string('address', 512)->nullable(true);
            $table->string('phone', 20)->nullable(true);
            $table->string('username', 32)->nullable(true);
            $table->string('order_no')->nullable(false);
            $table->tinyInteger('pay_type')->nullable(true);
            $table->string('pay_order_no')->nullable(true);
            $table->timestamp('created_at')->nullable(false)->default(\Illuminate\Support\Facades\DB::raw("CURRENT_TIMESTAMP"));
            $table->timestamp('updated_at')->nullable(false)->default(\Illuminate\Support\Facades\DB::raw("CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP"));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seckill_order');
    }
}
