@extends('layouts.home') 
@section('content')

<body id="page-top">
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      @if(Auth::user()->userType =='1')
  @include('layouts.s_sidebar')
      <!-- modal for review -->
  @include('modal_s_review') @else
  @include('layouts.p_sidebar') @endif
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Home</a>
          </li>
          <li class="breadcrumb-item active">View Service Requests</li>
        </ol>
        @if (\Session::has('success'))
        <div class="card mb-3">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Dear User!  </strong>  {!! \Session::get('success') !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
          </div>
          @endif
          <!-- DataTables Example -->
          <div class="card">
            <div class="card-header">
              <i class="fas fa-table"></i>Completed Requests</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Service Type</th>
                      <th>Note</th>
                      <th>Requested By</th>
                      <th>Request Date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Service Type</th>
                      <th>Note</th>
                      <th>Requested By</th>
                      <th>Request Date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($requestsData as $reqdata)
                    <tr>
                      <td>{{$reqdata->serviceCode}}</td>
                      <td>{{$reqdata->notes}}</td>
                      <td>{{$reqdata->name}}</td>
                      <td>{{$reqdata->requestDate}}</td>
                      <td>
                        @if($reqdata->status =='1') {{"Pending"}} @else {{"Completed"}} @endif
                      </td>
                      <!-- href="{{ url('reviewmodal/'.$reqdata->id) }}" !-->
                      <td><a class="btn btn-primary" onclick="showReviewModal({{$reqdata->id}})" href="#">Review</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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