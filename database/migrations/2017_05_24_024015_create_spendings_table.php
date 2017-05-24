<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpendingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spendings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('spending_id')->unsigned();
            $table->char('exempt');
            $table->float('amount_to_aply', 8,2);
            $table->string('accounting_acount_exempt');
            $table->string('tax_acount_exempt');
            $table->string('accounting_acount_affection');
            $table->string('tax_acount_affection');
            $table->string('accounting_acount_remaining');
            $table->string('tax_acount_remaining');            
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
        Schema::dropIfExists('spendings');
    }
}
