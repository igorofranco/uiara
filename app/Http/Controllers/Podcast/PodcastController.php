<?php

namespace App\Http\Controllers\Podcast;

use App\Http\Controllers\Controller;
use App\Models\Podcast\Podcast;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PodcastController extends Controller{

  private Podcast $podcast;
  private Request $request;

  #public function rss(){
  #  $rssFile = Storage::disk('local')->get('rss.xml');
  #  return response($rssFile)
  #    //->xml($rssFile)
  #    ->header('Content-Type','application/xml');
  #}
  public function rss(){
    $podcast = Podcast::find(1);
    return response($podcast->getRSS())
      ->header('Content-Type','text/xml');
  }

  public function create(){
    return view('podcast.podcast.create');
  }

  public function store(Request $request):RedirectResponse{
    $this->request=$request;
    $this->podcast = new Podcast();
    $this->assignValues();
    $this->podcast->save();

    return redirect()->route('podcast.home');
  }

  public function show(){
    return view('podcast.home',['podcast'=>Podcast::find(1)]);
  }

  public function edit(Podcast $podcast){
    return view('podcast.podcast.edit',['podcast'=>$podcast]);
  }

  public function update(Request $request, Podcast $podcast):RedirectResponse{

    $this->request=$request;
    $this->podcast=$podcast;
    $this->assignValues();
    $this->podcast->update();

    return redirect()->route('podcast.home',['podcast'=>$podcast]);
  }

  public function destroy(Podcast $podcast){
    //
  }


  private function assignValues():void{
    $this->podcast->title       = $this->request->title;
    $this->podcast->description = $this->request->description;
    $this->podcast->category    = $this->request->category;
    $this->podcast->keywords    = $this->request->keywords;
    $this->podcast->owner_name  = $this->request->owner_name;
    $this->podcast->owner_email = $this->request->owner_email;
  }
}
