<!-- @extends('layouts.app') -->

<!-- @section('title','article_add') -->

<!-- @section('menubar')
    @parent
    投稿ページ
@endsection -->

<!-- //ユーザーホーム/header -->
@include('./layouts.homeheader')

<!-- //ユーザーホーム/sidebar -->
@include('./layouts.homesidebar')

<!-- //ユーザーホーム/pagecontent -->
@include('./layouts.pagecontent')

@section('article_add')

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

    <table>
    <form action='{{ route('article_create')}}' method='post'>
    {{csrf_field()}}

    <tr><th>user_id:</th><td><input type="integer" name="user_id" value="{{old('user_id')}}"></td></tr>
    <tr><th>title:</th><td><input type="text" name="title" value="{{old('title')}}"></td></tr>
    <tr><th>content:</th><td><input type="text" name="content" value="{{old('content')}}"></td></tr>
    
    <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
    </table>
@endsection






@section('footer')
copyright 2017 tuyano.
@endsection