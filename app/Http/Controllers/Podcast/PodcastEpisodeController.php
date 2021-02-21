<?php

namespace App\Http\Controllers\Podcast;

use App\Http\Controllers\Controller;
use App\Models\Podcast\PodcastEpisode;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PodcastEpisodeController extends Controller{

  private Request $request;
  private PodcastEpisode $epi;

  public function index(){
    //
  }

  public function create(){
    return view('podcast.episode.create');
  }

  public function store(Request $request):RedirectResponse{
    $this->epi = new PodcastEpisode();
    $this->request = $request;
    $this->assignValues();
    $this->epi->save();
    return redirect()->route('epi.show',['epi'=>$this->epi]);
  }

  public function show(PodcastEpisode $epi){
    return view('podcast.episode.show',['epi'=>$epi]);
  }

  public function edit(PodcastEpisode $epi){
    return view('podcast.episode.edit',['epi'=>$epi]);
  }

  public function update(Request $request, PodcastEpisode $epi):RedirectResponse{
    $this->request = $request;
    $this->epi = $epi;
    $this->assignValues();
    $this->epi->update();
    return redirect()->route('epi.show',['epi'=>$this->epi]);
  }

  public function destroy(PodcastEpisode $epi){
    //
  }

  private function assignValues():void{
    $this->epi->title            = $this->request->title;
    $this->epi->description      = $this->request->description;
    $this->epi->keywords         = $this->request->keywords;
    $this->epi->publish_datetime = $this->request->publish_datetime;
    $this->epi->img_uri          = filter_var($this->request->img_uri,FILTER_SANITIZE_URL);
    $this->epi->mp3_uri          = filter_var($this->request->mp3_uri,FILTER_SANITIZE_URL);
    $this->epi->explicit         = $this->request->explicit;
  }
}
