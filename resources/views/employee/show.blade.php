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
        <h5 class="card-header">Booking Detail</h5>
        <div class="table-responsive row text-nowrap mx-3 mt-3">
            <div class="col-6"> <p><b>Service Name:</b> {{$booking->sname}}</p></div>
            <div class="col-6"> <p><b>Duration:</b> {{$booking->Duration}}</p></div>
            <div class="col-6"> <p><b>Number of Professionals:</b> {{$booking->NoP}}</p></div>
            <div class="col-6"> <p><b>Material:</b> {{$booking->Material}}</p></div>
            <div class="col-6"> <p><b>Frequency:</b> {{$booking->Frequency}}</p></div>
            <div class="col-6"> <p><b>Date:</b> {{$booking->Date}}</p></div>
              <div class="col-6"> <p><b>StartTime:</b> {{$booking->StartTime}}</p></div>
            <div class="col-6"> <p><b>ADDRESS:</b> {{$booking->ADDRESS}}</p></div>
            
           
              <div class="col-6"> <p><b>status:</b> <span class="badge bg-secondary">{{$booking->status}}</span></p></div>
 <h5>Extra:</h5>
            <div class="col-12 mx-auto gap-5 d-flex">
      @foreach($Extra as $extras)
<div class="floatLeft">
    <p class="" style="font-size: 15px; font-weight: 700;">
        <img class="image-toggle" width="100px" data-image="{{ $extras->image }}" data-id="{{ $extras->id }}" data-price="{{ $extras->price }}" src="{{ asset('public/service/'.$extras->image) }}">
        <input class="extraprice" type="hidden" value="{{$extras->price}}" />
        <br>
        <br>
        {{ $extras->name }}
    </p>
</div>
@endforeach
        </div>
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
