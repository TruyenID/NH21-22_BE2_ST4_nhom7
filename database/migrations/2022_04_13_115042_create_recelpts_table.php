<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecelptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recelpts', function (Blueprint $table) {
            $table->id();
            $table->double('user_id',11);
            $table->double('receipt_totalPrice');
            $table->date('receiot_purcharseDate');
            $table->String('receipt_status');
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
        Schema::dropIfExists('recelpts');
    }
}
