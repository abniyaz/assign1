<div class="card-header">
  <i class="fas fa-table"></i> Accepted Requests </div>
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
        @foreach($selectedSetData as $reqdata)
        <tr>
          <td>{{$reqdata->serviceCode}}</td>
          <td>{{$reqdata->notes}}</td>
          <td>{{$reqdata->name}}</td>
          <td>{{$reqdata->requestDate}}</td>
          <td>
            @if($reqdata->status =='2') {{"Accepted"}} @else {{"Error"}} @endif
          </td>
          <!--
            if have time make a model to shoe teh detail view of the selected request
          !-->
          <td><a class="btn btn-primary" onclick="showAcceptRequestView({{$reqdata->id}})" href="#">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    </table>
  </div>
</div>
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>