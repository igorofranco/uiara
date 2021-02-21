<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePodcastEpisodesTable extends Migration{

  public function up():void{
    Schema::create('podcast_episodes', function(Blueprint $table){
      $table->id();
      $table->unsignedBigInteger('podcast_id')->default(1);

      $table->string('title');
      $table->text('description');
      $table->string('keywords');
      $table->dateTime('publish_datetime');
      $table->string('img_uri');
      $table->string('mp3_uri');
      $table->string('explicit')->default('no');

      $table->timestamps();

      $table->foreign('podcast_id')->references('id')->on('podcasts');
    });
  }

  public function down():void{
    Schema::dropIfExists('podcast_episodes');
  }
}
