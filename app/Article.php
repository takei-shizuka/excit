<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    //セキュリティのために記述（記述しなくても動く）
    protected $fillable =['user_id','title','content'];
        protected $guarded = array('id');

    
        //
    public static $rules = array(
            'title' =>'string|required',
            'content' => 'string|required',
            'user_id' => 'integer|required',
        );
    public function getData()
    {
            return $this->id.':'. $this->title.':'.$this->content;
    }

    //投稿された記事とuserを紐付ける（1対１）
    public function user()
    {
        return $this->belongsTo('App\Article');
    }
    
    
    }
