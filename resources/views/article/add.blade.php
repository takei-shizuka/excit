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
    <form action='{{route('article_create')}}' method='post'>
    {{ csrf_field() }}
    <table>
    <tr><th>title:</th><td><input type="text" name="title" ></td></tr>
    <tr><th>content:</th><td><input type="text" name="content"></td></tr>
   
    <tr><th></th><td><input type="submit" value="send"></td></tr>
    $form->user_id = $request->user()->id;
    </table>
    </form>
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