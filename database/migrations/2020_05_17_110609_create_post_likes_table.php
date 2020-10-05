<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_likes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("post_id")->unsigned();
            $table->bigInteger("liked_by")->unsigned();
            $table->timestamps();

            $table->foreign('post_id','post_like_to_post_fk')->references('post_id')->on('posts');
            $table->foreign('liked_by','post_like_to_user_fk')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_likes');
    }
}
