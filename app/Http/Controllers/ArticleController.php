<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //index（一覧表示）
    public function index(Request $request)
    {
    $items = Article::all();
    return view('article.index',['items' => $items]);
    }


    //add.create(新規作成)
    public function add(Request $request)
    {
        return view('article.add');
    }
    
    public function create(Request $request)
    {
            $this->validate($request, Article::$rules);
            $article = new Article;
            $form = $request->all();
            unset($form['_token']);
            $article->fill($form)->save();
            return redirect('/home');
     }


     //edit.update(編集)
     public function edit(Request $request)
     {
         $article = Article::find($request->id);
         return view('article.edit',['form' => $article]);
     }

     public function update(Request $request)
     {
         $this->validate($request, Article::$rules);
         $article = Article::find($request->id);
         $form = $request->all();
         unset($form['_token']);
         $article->fill($form)->save();
         return redirect('/home');
     }

     
     //delete.remove(削除)
        //レコードの削除
     public function destroy($id)
     {
         //対象の記事表示？
        

        //削除処理
         $article = Article::destroy($id);
         $article->delete();
        
         //articleテーブルのレコードを全件削除
        $article =Article::all();
         return redirect('article/indexß')->with('message','削除しました。')->with('article',$article);
     }

     
    }


