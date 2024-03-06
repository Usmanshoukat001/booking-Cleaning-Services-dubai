@extends('admin.layout.app')
@section('style')
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
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mt-5">
            <div class="card">
                <h5 class="card-header">Services</h5>
                <div class="dt-buttons">
                    <a href="{{ route('service.create') }}" class="dt-button add-new btn btn-primary waves-effect waves-light 
                    mx-5" tabindex="0"><span><i class="mdi mdi-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">Add Service</span></span></a>
                </div>
                <div class="table-responsive text-nowrap">
                    <table class="table" id="usersTable">
                        <thead class="table-light">
                            <tr>
                                <th>Service Name</th>
                                <th>Created AT</th>
                                <th>Details</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $datas)
                            <tr>
                                <td>{{$datas->servicename}}</td>
                                <td>{{ \Carbon\Carbon::parse($datas->created_at)->isoFormat('MMMM Do, YYYY') }}</td>
                                <td>
                                  
                                        <a href="{{ route('service.show', $datas->id) }}" class="btn btn-primary justify-content-between">
                                            <span class="d-none d-sm-inline-block">Show</span>
                                        </a>
                                         <a href="{{ route('service.edit', $datas->id) }}" class="btn btn-primary justify-content-between">
                                            <span class="d-none d-sm-inline-block">Edit</span>
                                        </a>
                                   
                                </td>

                                <td>
                                    <form method="POST" action="{{ route('service.destroy', $datas->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary  justify-content-between"><span>
                                                <span class="d-none d-sm-inline-block">Delete</span></span></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('userList')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
$('#usersTable').DataTable({
            order: [[1, 'desc']] // Order by the first column in ascending order
        });    });
</script>
@endsection

@section('userList')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="{{asset('public/admin_asset/assets/js/app-user-list.js')}}"></script>
@endsection