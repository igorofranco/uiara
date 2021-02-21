<?php

namespace App\Models\Article;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Article extends Model{
  use HasFactory;
  protected $table = 'articles';

  public function setParametersByRequest(Request $request):void{
    $this->title=$request->title;
    $this->slug=Str::slug($this->title,'-','pt-br');
    $this->text=$request->text;
  }
}
