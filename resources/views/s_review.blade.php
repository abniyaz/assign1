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
          <li class="breadcrumb-item active">Submit a Review</li>
        </ol>


        <!-- DataTables Example -->
        <div class="card card-register mx-auto mt-5 old_transparent">

          <div class="card-header">Submit a Review</div>
          <div class="card-body">
            <form method="POST" action="{{action('HomeController@submitReview')}}">
              @csrf
              <input type="hidden" value="{{$id}}" name="review_id" />
              <div class="form-group">
                <label for="sel1">Select a rating:</label>
                <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
                <select class="form-control" name="rating" id="rating">
                      <option value="1">1 </option>
                      <option value="2">2 </option>
                      <option value="3">3 </option>
                      <option value="4">4 </option>
                      <option value="5">5 </option>
                    </select>
              </div>
              <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
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