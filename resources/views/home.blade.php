




<!DOCTYPE html>
<html lang="ja">
@extends('layouts.app')

@section('content')
<!-- <div class="container">
    

                <div class="card-body"> -->
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   

                    
                <!-- </div>
            
</div> -->
@endsection



@include('layouts.homeheader')

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
@include('layouts.homesidebar')
    <!-- /#sidebar-wrapper -->

@include('layouts.pagecontent')
    <!-- Page Content -->
    

  </div>
  <!-- /#wrapper -->
<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script> 
  

</body>

</html>



