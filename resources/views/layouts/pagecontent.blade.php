<!-- Page Content -->
<div id="page-content-wrapper">

<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
  <button class="btn btn-primary" id="menu-toggle">メニュー切り替え</button>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
    <!-- //{{Auth::user()->nickname}} -->
    <li class="nav-link" >ようこそ、{{ Auth::user()->nickname}}さん！</li>
      <li class="nav-item active">
        <a class="nav-link" href="#">ホーム<span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          メニュー
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">ログアウト</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        </div>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
  <h1 class="mt-4">ユーザーホーム</h1>
  <p>こんにちは、{{ Auth::user()->nickname }}さん。こちらはユーザーホームです。記事の投稿・編集・削除ができます。</p>
  <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
</div>
</div>
<!-- /#page-content-wrapper -->


  <!-- /#wrapper -->

 
 <!-- Bootstrap core JavaScript -->
 <script src="simplesidebarvendor/jquery/jquery.min.js"></script>
  <script src="simplesidebarvendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script> 

  