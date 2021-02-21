<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodcastsTable extends Migration{

  public function up():void{
    Schema::create('podcasts', function(Blueprint $table){
      $table->id();
      $table->string('title');
      $table->text('description');
      $table->dateTime('publish_datetime');
      $table->string('category');
      $table->string('keywords');
      $table->string('img_uri');
      $table->string('owner_name');
      $table->string('owner_email');

      $table->timestamps();
    });
  }

  public function down():void{
    Schema::dropIfExists('podcasts');
  }
}
