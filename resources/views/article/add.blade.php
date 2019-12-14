<!-- ユーザーホーム（add） -->



<!-- @extends('layouts.app') -->

<!-- @section('title','article.add') -->

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
    <form action='{{route('article_create')}}' method='post'>
    {{ csrf_field() }}
    <tr><th>title:</th><td><input type="text" name="title" value="{{ old('title') }}"></td></tr>
    <tr><th>content:</th><td><input type="text" name="content" value="{{ old('content') }}"></td></tr>
    <tr><th>user_id:</th><td><input type="number" name="user_id" value="{{ old('user_id')}}"></td></tr>
    <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
    </table>
@endsection

<!-- Bootstrap core JavaScript -->
<!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  Menu Toggle Script
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>  -->

</body>
@section('footer')
copyright 2017 tuyano.
@endsection