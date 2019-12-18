@extends('layouts.helloapp')

<!-- @section('title','入力した内容を表示するサンプルページ') -->
@section('title','article.index')

@section('menubar')
    @parent
    記事一覧ページ
    @endsection

@section('content')
<table class="table table-striped">
<tr><th>Data</th></tr>
<!-- ループで回す -->

@foreach($items as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->title}}</td>
        <td>{{$item->content}}</td>
        <td><a href="{{ action('ArticleController@edit',$item->id)}}" class="btn btn-primary btn-sm">編集</a></td>
        <td>
            <form action="{{ action('ArticleController@destroy',$item->id)}}" id="form_{{$item->id}}" >
            {{ csrf_field() }}
            {{ method_field('delete')}}   
            <a href="/artcle/destroy/{id}" data-id="{{ $item->id}}" class="btn btn-danger btn-sm" >削除</a>
             
             </form>
        </td>
        </tr>
@endforeach
</table>


<!-- <script> -->
<!-- //JavaScriptで確認画面を表示
// function daletePost(e){
//     'use strict';

//     if(confirm('本当に削除していいですか？')){
//         document.getElementByID('form_'+ e.dataset.id).submit();
//     }
// }
// </script> -->
@endsection


@section('footer')
copyright 2017 tuyano.
@endsection