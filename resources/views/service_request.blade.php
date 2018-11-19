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
          <li class="breadcrumb-item active">Submit a Serivce Request</li>
        </ol>


        <!-- DataTables Example -->
        <div class="card card-register mx-auto mt-5 old_transparent">
          @if (\Session::has('success'))
          <div class="card mb-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Dear User!  </strong> {!! \Session::get('success') !!}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
            </div>
            @endif
            <div class="card-header">Submit a Serivce Request</div>
            <div class="card-body">
              <form method="POST" action="{{action('HomeController@serviceRequestSubmit')}}">
                @csrf
                <div class="form-group">
                  <label for="sel1">Select Service Type:</label>
                  <select class="form-control" name="stype" id="stype">
                    @foreach($serviceTypes as $project) 
                    <option value="{{$project->id}}">{{$project->serviceCode}} </option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="sel1">Address:</label>
                  <input type="text" class="form-control" name="address" value="" placeholder="Address" />
                </div>
                <div class="form-group">
                  <label for="sel1">When to come:</label>
                  <input type="date" class="form-control" name="when_come" value="" placeholder="When to come" />
                </div>
                <div class="form-group">
                  <label for="sel1">Time:</label>
                  <input type="time" class="form-control" name="time" value="" placeholder="Time in am/pm" />
                </div>
                <div class="form-group">
                  <label for="comment">Note:</label>
                  <textarea class="form-control" rows="5" name="note" id="note"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                                Submit Service Request
                            </button>
              </form>
            </div>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
@endsection