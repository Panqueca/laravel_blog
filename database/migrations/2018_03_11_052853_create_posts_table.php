<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        if(!Schema::hasTable('posts')){
            Schema::create('posts', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->string('description');
                $table->text('body');
                $table->string('category');
                $table->string('author');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
