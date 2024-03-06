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
        <h5 class="card-header">Assigned Booking</h5>
        <div class="table-responsive text-nowrap">
          <table class="table" id="usersTable">
            <thead class="table-light">
              <tr>
                <th>Service Name</th>

                <th>Status</th>
                    <th>Assigned To</th>
                <th>Set Status</th>
                <th>View</th>
                <th>Created AT</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $service)
              <tr>
                <td>{{$service->sname}}</td>

                <td>
                  <span class="badge bg-secondary">{{$service->booking->status}}</span>
                </td>
                 
                <td>
                
  <span class="badge bg-secondary"> 
   @php
                    $userIds = [];
                    $ids = json_decode($service->userid, true);
                       $ids = explode(',', $ids);
                    if (is_array($ids)) {
                        $userIds = array_merge($userIds, $ids);
                    }
                    $userIds = array_unique($userIds);
                @endphp

                @foreach ($employe as $employee)
                    @if (in_array($employee->id, $userIds))
                        {{ $employee->name }},
                    @endif
                @endforeach


</span>


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
                         @if($service->booking->status !== 'Start')
<li>
    <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser{{$service->id}}">
        Change Assigned
    </a>
</li>
@endif


                    </ul>
                  </div>
                </td>
                <td>
                  <a href="{{route('booking.show' ,$service->booking->id )}}" class="btn btn-primary text-white" type="button">view</a>
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
          <form class="add-new-user pt-0" action="{{route('bookings.assignset.update')}}" method="post" id="addNewUserForm">
            @csrf
           
            <div class="form-floating form-floating-outline mb-4">
              <input type="text" class="form-control" id="add-user-fullname" value="{{$service->sname}}" name="sname" aria-label="John Doe">
              <label for="add-user-fullname">Service Name</label>
            </div>
             <input name="serviceid" type="hidden" value="{{$service->booking->id}}"/>
             <input name="assignedid" type="hidden" value="{{$service->id}}"/>
       
            
            <div class="form-floating form-floating-outline mb-4">
                          <div class="form-floating form-floating-outline">
                            <div class="select2-primary">
                              <select id="select{{$service->id}}Success" name="userid" class="select2 form-select" multiple>
                  
                                
                                 @foreach ($employe as $emp)
    @php
         $userIds = [];
           $ids = json_decode($service->userid, true);
                       $ids = explode(',', $ids);
                          if (is_array($ids)) {
                        $userIds = array_merge($userIds, $ids);
                    }
                    $userIds = array_unique($userIds);
                   
                        
                    
                       
        $selected = in_array($emp->id, $userIds) ? 'selected' : '';
       
    @endphp

    @if ($emp->status == 1)
        <option disabled value="{{ $emp->id }}" {{ $selected }}>
            {{ $emp->name }} (offline)
        </option>
    @else
        <option value="{{ $emp->id }}" {{ $selected }}>
            {{ $emp->name }}
        </option>
    @endif
@endforeach

                               
                              </select>
                            </div>
                            <label for="select{{$service->id}}Success">Employee</label>
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
    $("#usersTable").DataTable({ order: [[5, "desc"]] });
  });
</script>
@endsection @section('userList')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="{{asset('public/admin_asset/assets/js/app-user-list.js')}}"></script>
@endsection
