<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    //セキュリティのために記述（記述しなくても動く）
    protected $fillable =['user_id','title','content'];
        protected $guarded = array('1d');

    
        //
    public static $rules = array(
            'title' =>'string|required',
            'content' => 'string|required',
            'user_id' => 'integer|required',
        );

    //
    public function user()
    {
        return $this->belongTo('App\Article');
    }
    
    public function getData()
    {
        return $this->id.':'. $this->title.'('.$this->user->name.')';
    }
    }
