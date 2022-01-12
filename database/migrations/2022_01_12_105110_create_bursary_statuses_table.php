<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBursaryStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bursary_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('batch');
            $table->string('faculty');
            $table->string('installment_name');
            $table->string('bursary_description');
            $table->String('status')->default('New installment process assigned');
            $table->string('level')->default('1');
            $table->string('approved_by')->default('N');
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
        Schema::dropIfExists('bursary_statuses');
    }
}
