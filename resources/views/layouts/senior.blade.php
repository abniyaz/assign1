<div class="card-header">
  <i class="fas fa-table"></i> Senior Table</div>
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
            @if($reqdata->status =='1') {{"Pending"}} 
            @elseif ($reqdata->status =='2') {{"Accepted"}}
            @elseif ($reqdata->status =='3') {{"Rejected"}}
            @else {{"Error"}} @endif
          </td>
          <!--
            if have time make a model to shoe teh detail view of the selected request
            <td><a class="btn btn-primary" id="{{$reqdata->id}}" href="{{ url('review/'.$reqdata->id) }}">View</a></td>
          !-->
          <td><a class="btn btn-primary"  onclick="viewDetail({{$reqdata->id}})" href="#">View</a></td>
        </tr>
        @endforeach 
      </tbody>
    </table>
  </div>
</div>
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
