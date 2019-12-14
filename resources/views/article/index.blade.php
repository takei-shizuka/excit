@extends('layouts.helloapp')

<!-- @section('title','入力した内容を表示するサンプルページ') -->
@section('title','article.index')

@section('menubar')
    @parent
    記事一覧ページ
    @endsection

@section('content')
<table>
<tr><th>Data</th></tr>
<!-- ループで回す -->

@foreach($items as $item)
    <tr>
        <td>{{$item->getData()}}</td>
    </tr>
@endforeach
</table>

@endsection
<script>
//JavaScriptで確認画面を表示
function daletePost(e){
    'use strict';

    if(confirm('本当に削除していいですか？')){
        document.getElementByID('form_'+e.dataset.id).submit();
    }
}
</script>



@section('footer')
copyright 2017 tuyano.
@endsection