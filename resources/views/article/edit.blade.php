@extends('layouts.helloapp')

@section('title','article_edit')

@section('menubar')
    @parent
    編集ページ
@endsection

@section('content')
    @if(count($errors) > 0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <table class="table table-striped">

    <form action='{{ route('article_update')}}' method='post' >
    {{ csrf_field() }}
    <input type="hidden" name="_method" value='put'>
    <input type="hidden" name="id" value="{{ $form->id }}">
    <tr><th>title:</th><td><input type="text" name="title" value="{{ $form->title }}"></td></tr>
    <tr><th>content:</th><td><input type="text" name="content" value="{{ $form->content }}"></td></tr>
    <tr><th>user_id:</th><td><input type="number" name="user_id" value="{{ $form->user_id }}"></td></tr>
    <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>

    <table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection
