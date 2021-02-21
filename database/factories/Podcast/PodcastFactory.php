<?php

namespace Database\Factories\Podcast;

use App\Models\Podcast\Podcast;
use Illuminate\Database\Eloquent\Factories\Factory;

class PodcastFactory extends Factory{

  protected $model = Podcast::class;

  public function definition():array{
    return [
      'title'            => 'Uiara Franco Podcast',
      'description'      => 'Direito de Família e Sucessões. A importância do pacto antenupcial. Os Regimes de Bens no Ordenamento Jurídico Brasileiro.',
      'category'         => 'Culture & Society',
      'publish_datetime' => '2021-02-13 17:00:00',
      'keywords'         => 'direito,família,separação,divórcio,bens',
      'img_uri'          => 'logo.jpg',
      'owner_name'       => 'Uiara Franco',
      'owner_email'      => 'uiarafranco@hotmail.com'
    ];
  }
}
