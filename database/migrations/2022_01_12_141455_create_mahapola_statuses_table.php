<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahapolaStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahapola_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('batch');
            $table->string('faculty');
            $table->string('installment_name');
            $table->string('mahalpola_description');
            $table->String('status')->default('New installment process assigned');
            $table->string('level')->default('1');
            $table->timestamps();
        });
//        DB::unprepared('ALTER TABLE `kitchen` DROP PRIMARY KEY, ADD PRIMARY KEY (  `id` ,  `restaurant_id` )');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahapola_statuses');
    }
}
