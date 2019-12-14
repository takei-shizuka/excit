<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')

@section('content')
        <div class="card-body">
                    @if (session('status'))
                        <!-- <div class="alert alert-success" role="alert"> -->
                            {{ session('status') }}
                        </div>
                    @endif 



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

  
  

</body>

</html>
