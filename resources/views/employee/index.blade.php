@extends('employee.layout.app')

@section('content')


<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Employer /</span> Dashboard</h4>

    <!-- Card Border Shadow -->
    <div class="row">
      <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-border-shadow-primary h-100">
          <div class="card-body">
            <div class="d-flex align-items-center mb-2 pb-1">
              <h4 class="ms-1 mb-0 display-6">{{$bookingcount}}</h4>
            </div>
            <p class="mb-0 text-heading">Total Jobs</p>
          </div>
        </div>
      </div>
   
      <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-border-shadow-danger h-100">
          <div class="card-body">
    <button  class="btn btn-primary waves-effect waves-light">
        @if(auth()->user()->status == 1)
             On work
        @else
             Online
        @endif
    </button>

      </div>
        </div>
      </div>
    </div>
    


    @endsection