@extends('layouts.helloapp')

@section('title','article_destroy')

@section('menubar')
    @parent削除ページ
@endsection

@section('content')
    <table>
    <!-- //loop -->
    @foreach($data as $val)
    
    <form action="/article/destroy/{id}" method='post'>
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <tr><th>title:</th><td>{{$form->title}}</td></tr>
    <tr><th>content:</th><td>{{$form->content}}</td></tr>
    <tr><th>user_id:</th><td>{{$form->usert_id}}</td></tr>   
    
    <tr><th></th><td><input type="submit" value="削除">
        </td></tr>
    </form>
    </table>
@endsection
@yield('article_delete')

@section('footer')
copyright 2017 tuyano.
@endsection
