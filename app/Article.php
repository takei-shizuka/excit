<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    //セキュリティのために記述（記述しなくても動く）
    protected $fillable =[
        'title','content','user_id'
    ];

    //idはDB内で自動的に作られるものなので、人が決める必要は無い。もちろん割り当てても良い。
    protected $guarded = array('id');

    
     //入力すべきもののルールを作成する。
     //user_idは数字（integer）を指定。titleは文字列(string)を指定。contentは文字列（string）を指定。いずれも、必須項目としてrequiredを指定している。
    //この$rulesはArticleControllerのvalidate処理に使われる。
     public static $rules = array(
             
            'title' =>'required|string',
            'content' => 'required|string',

            'user_id' => 'integer',
        );

    //ユーザーと記事を結びつける
    //  public function user()
    //  {
    //     return $this->belongsTo('App\User');
    //  }
    
    //getDataの中身を指定。
    public function getData()
    {
        return $this->id.':'. $this->title.':'.$this->content.':'.$this->user_id;
    }
    }
