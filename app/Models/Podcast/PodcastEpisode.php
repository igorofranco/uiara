<?php

namespace App\Models\Podcast;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PodcastEpisode extends Model{
  use HasFactory;
  protected $table = 'podcast_episodes';

  public function podcast():BelongsTo{
    return $this->belongsTo(Podcast::class,'podcast_id','id');
  }
}
