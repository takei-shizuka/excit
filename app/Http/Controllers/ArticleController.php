<?php

namespace App\Http\Controllers;
use App\Article;
use \Http\Auth;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //middleware('auth')を呼び出し、アクセス制限をかける。
    //ecept(['index'])でindexアクションを制限対象にする。
    public function __contruct()
    {
    $this->middleware('auth');
    }

    //index（一覧表示）
    public function index(Request $request)
    {
    $user = Auth::User();

    // if($user)
    // {
    //    $article = Article::all();
       return view('article.index',$user);
    }
    

    


    //add.create(新規作成)
    public function add(Request $request)
    {
        return view('article.add');
    }
    
    //ログインユーザーのみが記事を投稿できる。ログインユーザーと記事作成を結びつける。
    public function create(Request $request)
    {
            $this->validate($request, Article::$rules);
            $article = new Article;
            $form->user_id = $request->user()->id;
            $form->title = $request->title;
            $form->content = $request->content;
            unset($form['_token']);
            $article->fill($form)->save();
            return redirect('article/index');
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
         return redirect('article/index');
     }

     
     //delete.remove(削除)
        //レコードの削除
     public function destroy($id)
     {
        //削除処理
        //findOrFail:該当するレコードが見つからない場合例外を投げてくれる。
         $article = Article::findOrFail($id);
         $article->delete();
        
         //articleテーブルのレコードを全件削除
        $article =Article::all();
        //redirect()の中はパス
         return redirect('article/index')->with('message','削除しました。')->with('article',$article);
     }

     
    }


