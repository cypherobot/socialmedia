<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string("reported_entity");    // can be user/post etc
            $table->bigInteger("reported_by")->unsigned();
            $table->string("entity_id");
            $table->string("problems");
            $table->string("comment")->nullable();
            $table->timestamps();

            $table->foreign('reported_by','report_to_user_fk')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
