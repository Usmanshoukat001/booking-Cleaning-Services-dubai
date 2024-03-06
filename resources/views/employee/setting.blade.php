@extends('employee.layout.app')

@section('content')
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl-12">
                <!-- HTML5 Inputs -->
                <div class="card mb-4">
                    <h5 class="card-header">Employee Setting</h5>
                    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                    <div class="card-body">
                        <form method="post" action="{{route('employee.settingsave' , auth()->user()->id)}}" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="row">
                                <div class="form-floating form-floating-outline mb-4 col-6">
                                    <input class="form-control" type="email"  readonly value="{{auth()->user()->email}}" name="email" id="html5-text-input">
                                    <label for="html5-text-input">Email</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4 col-6">
                                    <input class="form-control" type="password" name="password" placeholder="*******" id="html5-text-input">
                                    <label for="html5-text-input">Password</label>
                                </div>
                            </div>
                    </div>
                    <div class="dt-button mb-4">
                        <button class="dt-button add-new btn btn-primary waves-effect waves-light mx-5" type="submit">
                            <span><span class="">Update</span></span></button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection