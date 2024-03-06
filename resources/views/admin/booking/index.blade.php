@extends('admin.layout.app') @section('style')
 


    
    <style>
  table.dataTable thead th {
    border-bottom: none !important;
  }

  table.dataTable tfoot th {
    border-top: none !important;
    border-bottom: none !important;
  }

  table.dataTable.no-footer {
    border-bottom: 1px solid #fff !important;
  }

  .dataTables_wrapper .dataTables_length select {
    display: none !important;
  }

  .dataTables_wrapper .dataTables_length label {
    display: none !important;
  }

  .dataTables_filter {
    margin-bottom: 20px !important;
    margin-right: 20px !important;
  }

  .dataTables_info {
    display: none !important;
  }

  .dataTables_wrapper .dataTables_paginate {
    margin-top: 20px !important;
    margin-bottom: 20px !important;
  }
</style>
@endsection @section('content')

<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mt-5">
      <div class="card">
        <h5 class="card-header">New Booking</h5>
        <div class="table-responsive text-nowrap">
          <table class="table" id="usersTable">
            <thead class="table-light">
              <tr>
                <th>Service Name</th>
                <th>Duration</th>
                <th>Date</th>
                <th>Start Time</th>

                <th>Status</th>
                <th>Set Status</th>
                <th>View</th>
                <th>Created AT</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $service)
              <input id="serviceid" type="hidden" value="{{$service->id}}"/>
              <tr>
                <td id="sname">{{$service->sname}}</td>
                <td>{{$service->Duration}} Hour</td>
                <td>{{$service->Date}}</td>
                <td>{{$service->StartTime}}</td>

                <td>
                  <span class="badge bg-secondary">{{$service->status}}</span>
                </td>
                <td>
                  <div class="dropdown">
                    <button
                      class="btn btn-primary dropdown-toggle"
                      type="button"
                      id="dropdownMenuButton1"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Set
                    </button>
                    <ul
                      class="dropdown-menu"
                      aria-labelledby="dropdownMenuButton1"
                    >
<li>
    <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser{{$service->id}}">
        Assigned
    </a>
  
</li>
 
<li>
    <a class="dropdown-item" href="{{ route('bookings.update', ['id' => $service->id, 'status' => 'complete']) }}">
        Complete
    </a>
</li>
<li>
    <a class="dropdown-item" href="{{ route('bookings.update', ['id' => $service->id, 'status' => 'rejected']) }}">
        Rejected
    </a>
</li>


                    </ul>
                  </div>
                </td>
                <td>
                  <a href="{{route('booking.show' ,$service->id )}}" class="btn btn-primary text-white" type="button">view</a>
                </td>
                <td>{{$service->created_at->format('Y-m-d')}}</td>
              </tr>
               <!-- Offcanvas to add new user -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser{{$service->id}}" aria-labelledby="offcanvasAddUserLabel">
        <div class="offcanvas-header">
          <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Assigned Booking</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 flex-grow-0 h-100">
          <form class="add-new-user pt-0" action="{{route('bookings.assignset.new')}}" method="post" id="addNewUserForm">
            @csrf
            <div class="form-floating form-floating-outline mb-4">
              <input type="text" class="form-control" id="add-user-fullname" value="{{$service->sname}}" name="sname" aria-label="John Doe">
              <label for="add-user-fullname">Service Name</label>
            </div>
             <input name="serviceid" type="hidden" value="{{$service->id}}"/>
          
      
                         <div class="form-floating form-floating-outline mb-4">
                             <input type="hidden" name="userid[]" class="hidden-ids">
                          <div class="form-floating form-floating-outline">
                            <div class="select2-primary">
                              <select  id="select{{$service->id}}Primary"  class="select2 form-select select-primary" multiple>
                                   @foreach($employe as $emp)
                  @if($emp->status == 1)
                   <option disabled value="{{$emp->id}}">{{$emp->name}} (offline)</option>
                    @else
                    
                                <option  value="{{$emp->id}}" >{{$emp->name}}</option>
                                   @endif
                  @endforeach
                               
                              </select>
                            </div>
                            <label for="select{{$service->id}}Primary">Employee</label>
                          </div>
                        </div>
            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit waves-effect waves-light">Assigned</button>
            <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="offcanvas">Cancel</button>
          </form>
        </div>
      </div>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection @section('userList')
<link
  rel="stylesheet"
  href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"
/>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('public/admin_asset/assets/vendor/libs/select2/select2.js')}}"></script>
    <script src="{{asset('public/admin_asset/assets/vendor/libs/tagify/tagify.js')}}"></script>
    <script src="{{asset('public/admin_asset/assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
    <script src="{{asset('public/admin_asset/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
    <script src="{{asset('public/admin_asset/assets/vendor/libs/bloodhound/bloodhound.js')}}"></script>

    <script src="{{asset('public/admin_asset/assets/js/main.js')}}"></script>

    <script src="{{asset('public/admin_asset/assets/js/forms-selects.js')}}"></script>
    <script src="{{asset('public/admin_asset/assets/js/forms-tagify.js')}}"></script>
    <script src="{{asset('public/admin_asset/assets/js/forms-typeahead.js')}}"></script>
<script>
  $(document).ready(function () {
    $("#usersTable").DataTable({ order: [[7, "desc"]] });
  });
   $(document).ready(function() {
    $('.select-primary').change(function() {
        var selectedValues = $(this).val();
        $(this).closest('.offcanvas-body').find('.hidden-ids').val(selectedValues.join(','));
    });
});


</script>
@endsection @section('userList')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="{{asset('public/admin_asset/assets/js/app-user-list.js')}}"></script>
@endsection
