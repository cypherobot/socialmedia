<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersAllNotifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_all_notifications', function (Blueprint $table) {
            // $table->id();
            $table->id();
            $table->integer("notifyto_id")->unsigned();
            $table->integer("notifyby_id")->unsigned();
            $table->bigInteger("user_id")->unsigned();
            $table->string("title");
            $table->text("body");
            $table->string("type");
            $table->string("seenstatus");
            $table->string("text");
            $table->timestamps();
            $table->timestamp('datetime');

            // $table->foreign('user_id','note_to_user_fk')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_all_notifications');
    }
}
