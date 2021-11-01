<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCommentLike extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_comment_like', function (Blueprint $table) {
            $table->id();
            $table->integer('post_comment_reply_id');
            $table->integer('post_comment_id');
            $table->integer('post_id');
            $table->integer('customer_id');
            $table->integer('is_like');
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
        Schema::dropIfExists('post_comment_like');
    }
}
