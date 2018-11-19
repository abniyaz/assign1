@extends('layouts.home') 
@section('content')

<body id="page-top">
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      @if(Auth::user()->userType =='1')
  @include('layouts.s_sidebar') @else
  @include('layouts.p_sidebar') @endif
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{url('/home')}}">Home</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>
        @if (\Session::has('success'))
        <div class="card mb-3">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Dear User!  </strong> {!! \Session::get('success') !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
          </div>
          @endif
          <!-- Icon Cards-->
          <!-- Justin said this is Miss Seetha request and remove my beautiful icon bar from home page!-->

          <!-- DataTables Example -->
          <div class="card mb-3">
            @if(Auth::user()->userType =='1')
  @include('layouts.senior')
            <!-- Logout Modal-->
  @include('modal_s_request') @else
  @include('layouts.provider')
            <!-- Logout Modal-->
  @include('modal_accepted_request')
  @include('modal_accept_request') @endif
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Old is Gold 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
@endsection