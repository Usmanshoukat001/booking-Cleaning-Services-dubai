@extends('employee.layout.app') @section('style')
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
        <h5 class="card-header">Active Jobs</h5>
        <div class="table-responsive text-nowrap">
          <table class="table" id="usersTable">
            <thead class="table-light">
              <tr>
                <th>Service Name</th>

                <th>Status</th>
                   
                <th>Set Status</th>
             

              
                <th>View</th>
                <th>Created AT</th>
              </tr>
            </thead>
            <tbody>
                
              @foreach($data as $service)
               @php
        $userIds = [];
        $ids = json_decode($service->userid, true);
        if (isset($ids)) {
            $ids = explode(',', $ids);
            if (is_array($ids)) {
                $userIds = array_merge($userIds, $ids);
            }
        }
        $userIds = array_unique($userIds);
    @endphp
                
    @if (in_array(auth()->user()->id, $userIds))
    
              <tr>
                <td>{{$service->sname}}</td>

                <td>
                  <span class="badge bg-secondary">{{$service->booking->status}}</span>
                </td>
                <td><a href="{{ route('employee.booking.set.Assigned', ['id' => $service->booking->id, 'status' => 'complete']) }}" class="btn btn-primary text-white">Set Complete</a>
                @if($service->booking->status !== 'Start')
               <a href="{{ route('employee.booking.set.Assigned', ['id' => $service->booking->id, 'status' => 'Start']) }}" class="btn btn-primary text-white">Start</a>@endif

                </td>
                <td>
                  <a href="{{route('employee.viewjob' ,$service->booking->id )}}" class="btn btn-primary text-white" type="button">view</a>
                </td>
                <td>{{$service->created_at->format('Y-m-d')}}</td>
              </tr>
              
               @endif
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
<script>
  $(document).ready(function () {
    $("#usersTable").DataTable({ order: [[4, "desc"]] });
  });
</script>
@endsection @section('userList')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="{{asset('public/admin_asset/assets/js/app-user-list.js')}}"></script>
@endsection