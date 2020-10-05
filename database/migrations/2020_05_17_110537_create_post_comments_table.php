<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("post_id")->unsigned();
            $table->bigInteger("commented_by")->unsigned();
            $table->string("comment");
            $table->timestamps();
            
            $table->foreign('post_id','post_comment_to_post_fk')->references('post_id')->on('posts');
            $table->foreign('commented_by','post_comment_to_user_fk')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_comments');
    }
}
