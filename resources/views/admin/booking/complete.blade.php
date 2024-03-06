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
        <h5 class="card-header">Complete Booking</h5>
        <div class="table-responsive text-nowrap">
          <table class="table" id="usersTable">
            <thead class="table-light">
              <tr>
                <th>Service Name</th>
                <th>Duration</th>
                <th>Date</th>
                <th>Start Time</th>

                <th>Status</th>
                <th>Complete By</th>
                <!--<th>Set Status</th>-->
                <th>View</th>
                <th>Created AT</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $service)
              <tr>
                <td>{{$service->booking->sname}}</td>
                <td>{{$service->booking->Duration}} Hour</td>
                <td>{{$service->booking->Date}}</td>
                <td>{{$service->booking->StartTime}}</td>

                <td>
                  <span class="badge bg-secondary">{{$service->booking->status}}</span>
                </td>   <td>
                  <span class="badge bg-secondary"> @php
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
                @endforeach</span>
                </td>
<!--                <td>-->
<!--                  <div class="dropdown">-->
<!--                    <button-->
<!--                      class="btn btn-primary dropdown-toggle"-->
<!--                      type="button"-->
<!--                      id="dropdownMenuButton1"-->
<!--                      data-bs-toggle="dropdown"-->
<!--                      aria-expanded="false"-->
<!--                    >-->
<!--                      Set-->
<!--                    </button>-->
<!--                    <ul-->
<!--                      class="dropdown-menu"-->
<!--                      aria-labelledby="dropdownMenuButton1"-->
<!--                    >-->
<!--<li>-->
<!--    <a class="dropdown-item" href="{{ route('bookings.update', ['id' => $service->id, 'status' => 'assigned']) }}">-->
<!--        Assigned-->
<!--    </a>-->
<!--</li>-->
<!--<li>-->
<!--    <a class="dropdown-item" href="{{ route('bookings.update', ['id' => $service->id, 'status' => 'complete']) }}">-->
<!--        Complete-->
<!--    </a>-->
<!--</li>-->
<!--<li>-->
<!--    <a class="dropdown-item" href="{{ route('bookings.update', ['id' => $service->id, 'status' => 'rejected']) }}">-->
<!--        Rejected-->
<!--    </a>-->
<!--</li>-->


<!--                    </ul>-->
<!--                  </div>-->
<!--                </td>-->
                <td>
                  <a href="{{route('booking.show' ,$service->booking->id )}}" class="btn btn-primary text-white" type="button">view</a>
                </td>
                <td>{{$service->created_at->format('Y-m-d')}}</td>
              </tr>
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
    $("#usersTable").DataTable({ order: [[7, "desc"]] });
  });
</script>
@endsection @section('userList')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="{{asset('public/admin_asset/assets/js/app-user-list.js')}}"></script>
@endsection
