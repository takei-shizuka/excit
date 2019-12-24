<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //index（一覧表示）
    public function index(Request $request)
    {
    $articles = Article::all();
    return view('article.index',['articles' => $articles]);
    }

    /**
     * Get a validator for an incoming article post request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    //validator（規則通りのものになっているか確認するものの指定。
//    protected function validator(array $data)
//    {
//        return Validator::make($data, [
//            'title' => ['required', 'string', 'max:255'],
//            'content' =>['required', 'string', 'max:255'],
//            'user_id' =>['integer'],
           
    //    ]);
//    }

    //add.create(新規作成)
    //routeで設定したarticle/addにコンタクトするとviewのarticleのadd.blade.phpを呼び出して表示する。
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


