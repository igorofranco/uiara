<?php

namespace App\Models\Podcast;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;
use wapmorgan\Mp3Info\Mp3Info;

class Podcast extends Model{
  use HasFactory;
  protected $table = 'podcasts';

  public function episodes():HasMany{
    return $this->hasMany(PodcastEpisode::class,'podcast_id','id');
  }

  public function getRSS():string{
    //HEADER
    $xml =
'<?xml version="1.0" encoding="UTF-8"?>
<rss
 xmlns:content="http://purl.org/rss/1.0/modules/content/"
 xmlns:wfw="http://wellformedweb.org/CommentAPI/"
 xmlns:dc="http://purl.org/dc/elements/1.1/"
 xmlns:atom="http://www.w3.org/2005/Atom"
 xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
 xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
 xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd"
 xmlns:media="http://search.yahoo.com/mrss/" version="2.0">
';

    //CHANNEL INFO
    $xml .=
'
<channel>
<itunes:category text="Society &amp; Culture"/>
<itunes:explicit>NO</itunes:explicit>
<itunes:keywords>direito,família,separação,divórcio,bens</itunes:keywords>
<itunes:summary>'.$this->description.'</itunes:summary>
<itunes:subtitle>'.$this->description.'</itunes:subtitle>
<itunes:image href="'.env('APP_URL').'/podcast-media/logo.jpg"/>
<itunes:author>'.$this->owner_name.'</itunes:author>
<dc:creator>'.$this->owner_name.'</dc:creator>
<title>'.$this->title.'</title>
<description>'.$this->description.'</description>
<pubDate>'.date('r',strtotime($this->publish_datetime)).'</pubDate>
<webMaster>'.route('podcast.home').'</webMaster>
<copyright>'.$this->owner_name.'</copyright>
<language>pt-br</language>
<link>'.route('podcast.home').'</link>
<itunes:owner>
  <itunes:name>'.$this->owner_name.'</itunes:name>
  <itunes:email>'.$this->owner_email.'</itunes:email>
</itunes:owner>
<image>
  <title>'.$this->title.'</title>
  <link>'.route('podcast.home').'</link>
  <url>'.env('APP_URL').'/podcast-media/logo.jpg</url>
</image>';

    foreach($this->episodes->sortByDesc('id') as $epi){
      $audio = new Mp3Info('podcast-media/epi-0001.mp3');
      $durationInSeconds = round($audio->duration);

      $mp3 = Storage::disk('local');
      $xml .=
'<item>
<title>'.$epi->title.'</title>
<description>'.$epi->description.'</description>
<pubDate>'.date('r',strtotime($epi->publish_datetime)).'</pubDate>
<link>'.route('epi.show',['epi'=>$epi]).'</link>
<author>'.$this->owner_name.'</author>
<guid isPermaLink="false">'.route('epi.show',['epi'=>$epi]).'</guid>
<enclosure url="'.env('APP_URL').'/podcast-media/'. $epi->mp3_uri.'" length="'.($mp3->size('/podcast/'.$epi->mp3_uri)*8).'" type="audio/mpeg"/>
<image href="'.env('APP_URL').'/podcast-media/'.$epi->img_uri.'"/>
<itunes:image href="'.env('APP_URL').'/podcast-media/'.$epi->img_uri.'"/>
<itunes:duration>'.$durationInSeconds.'</itunes:duration>
<itunes:keywords>'.$this->keywords.'</itunes:keywords>
<itunes:summary>'.$epi->description.'</itunes:summary>
<itunes:subtitle>'.$epi->description.'</itunes:subtitle>
<itunes:author>'.$this->owner_name.'</itunes:author>
<itunes:explicit>NO</itunes:explicit>
<itunes:block>no</itunes:block>
</item>';
    }

    $xml .= '</channel></rss>';

    return $xml;
  }
}
