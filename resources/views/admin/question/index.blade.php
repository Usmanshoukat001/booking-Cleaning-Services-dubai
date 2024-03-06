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
        <h5 class="card-header">Questions</h5>
        <div class="dt-buttons">
          <button class="dt-button add-new btn btn-primary waves-effect waves-light mx-5" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser">
            <span><i class="mdi mdi-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">Add Question</span></span></button>
        </div>
        <div class="table-responsive text-nowrap">
          <table class="table" id="usersTable">
            <thead class="table-light">
              <tr>
                <th>Question</th>
                <th>Created AT</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach($data as $datas)
              <tr>
                <td>{{$datas->qname}}</td>
                <td>{{ \Carbon\Carbon::parse($datas->created_at)->isoFormat('MMMM Do, YYYY') }}</td>
                <td>
                  <form method="POST" action="{{ route('question.destroy', $datas->id) }}">
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
      <!-- Offcanvas to add new user -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
        <div class="offcanvas-header">
          <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add Question</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mx-0 flex-grow-0 h-100">
          <form class="add-new-user pt-0" action="{{route('question.store')}}" method="post" id="addNewUserForm">
            @csrf
            <div class="form-floating form-floating-outline mb-4">
              <input type="text" class="form-control" placeholder="Enter Question here" name="qname" aria-label="John Doe">
              <label for="add-user-fullname">Question</label>
            </div>
            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit waves-effect waves-light">Add</button>
            <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="offcanvas">Cancel</button>
          </form>
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
    $('#usersTable').DataTable();
  });
</script>
@endsection

@section('userList')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="{{asset('public/admin_asset/assets/js/app-user-list.js')}}"></script>
@endsection