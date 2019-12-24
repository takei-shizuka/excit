# excit
旅行のブログを集めたサイトです。√

//ルーティングpost method→コントロールのcreate
    //validateはArticle.php（クラス）で指定したrulesを適用し、$thisに入れている。
    //Articleインスタンスをnewで作成し、これを$articleとする。
    //validateの中身に指定した$requestを全て取り出し：all()、$formに入れる。
    //csrf用非表示フィールドである「_token」はunsetで消す。
    //newで作成したArticleインスタンスに$formにいれた値を引数として「fill」メソッドを呼び出し、save();で保存する
    //保存後、return でarticle/indexへれダイレクトする。

    public　function　create(Request $request)
    {
        $this->validate($request, Article::$rules);
        $article = new Article;
        $form = $request->all();
        unset($form['_token']);
        $article->fill($form)->save();
        return redirect('article/index');
    }

