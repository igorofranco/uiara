<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article\Article;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class ArticleController extends Controller{

  public function index(){
    return view('article.index',[
      'articles' => Article::all()
    ]);
  }

  public function create(){
    return view('article.create');
  }

  public function store(Request $request):RedirectResponse{
    $article = new Article();
    $article->save([
      'title'=>$request->title,
      'slug'=>Str::slug($this->title,'-','pt-br'),
      'text'=>$request->text
    ]);
    return redirect()->route('article.show',['article'=>$article]);
  }

  public function show(string $slug){
    return view('article.show',[
      'article' => Article::where(['slug'=>$slug])->first()
    ]);
  }

  public function edit(Article $article){
    return view('article.edit',[
      'article'=>$article
    ]);
  }

  public function update(Request $request, Article $article):RedirectResponse{
    $article->update([
      'title'=>$request->title,
      'slug'=>Str::slug($this->title,'-','pt-br'),
      'text'=>$request->text
    ]);
    return redirect()->route('article.show',['article'=>$article]);
  }

  public function destroy(Article $article):RedirectResponse{
    try{
      $article->delete();
    }catch(\Exception $e){}

    return redirect()->route('article.index');
  }
}
