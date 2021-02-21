<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration{

  public function up(){
    Schema::create('articles',function(Blueprint $table){
      $table->id();
      $table->unsignedBigInteger('author')->default(1);
      $table->string('slug')->unique();
      $table->string('title');
      $table->text('text');
      $table->timestamps();

      $table->foreign('author')->references('id')->on('users');
    });
  }

  public function down(){
    Schema::dropIfExists('articles');
  }
}
