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
        Schema::create('excel_data',function(Blueprint $table){
            $table->id('id');
            $table->string('cargo_no');
            $table->string('cargo_type');
            $table->integer('cargo_size');
            $table->float('weight', 8, 2);
            $table->string('remarks')->nullable();
            $table->float('wharfage', 10, 2);
            $table->integer('days');
            $table->float('storage', 10, 2);
            $table->float('electricity', 10, 2);
            $table->float('destuffing', 10, 2);
            $table->float('lifting', 10, 2);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('excel_data');

    }
};
