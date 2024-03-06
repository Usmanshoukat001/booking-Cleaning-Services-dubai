@extends('admin.layout.app')

@section('content')
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-xl-12">
                <!-- HTML5 Inputs -->
                <div class="card mb-4">
                    <h5 class="card-header">Admin Setting</h5>
                    <div class="card-body">
                        <form method="post" action="{{route('admin.setting.pass')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-floating form-floating-outline mb-4 col-6">
                                    <input class="form-control" type="email" value="{{auth()->user()->email}}" name="email" id="html5-text-input">
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

            <div class="col-xl-12">
                <!-- HTML5 Inputs -->
                <div class="card mb-4">
                    <h5 class="card-header">General Setting</h5>
                    <div class="card-body">
                        <form method="post" action="{{route('save.setting')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                 @php
        $timingArray = json_decode($Sitesetting->timing, true);
        $fromTime = isset($timingArray[0]) ? $timingArray[0] : '';
    @endphp
                                <div class="mb-3 col-6">
                                    <input class="form-control" name="timing[]" value="{{ $fromTime }}" type="time" id="formFile">
                                    <label for="formFile" class="form-label">Working Time Start</label>
                                </div>
                                @php
        $toTime = isset($timingArray[1]) ? $timingArray[1] : '';
    @endphp
                                <div class="mb-3 col-6">
                                    <input class="form-control" name="timing[]" value="{{ $toTime }}"  type="time" id="formFile">
                                    <label for="formFile" class="form-label">Working Time End</label>
                                </div>
                                 <div class="mb-3 col-6">
                                    <input class="form-control" name="logo" type="file" id="formFile">
                                    <label for="formFile" class="form-label">Site Logo</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4 col-6">
                                    <input class="form-control" name="Title" value="{{$Sitesetting->Title ?? ''}}" type="search" placeholder="Title ..." id="html5-search-input">
                                    <label for="html5-search-input">Site Title</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4 col-6">
                                    <input class="form-control" name="Description" type="text" value="{{$Sitesetting->Description ?? ''}}" placeholder="Description" id="html5-email-input">
                                    <label for="html5-email-input">Site description</label>
                                </div>
                                 <div class="form-floating form-floating-outline mb-4 col-6">
                                    <input class="form-control" name="Canonical" type="text" value="{{$Sitesetting->Canonical ?? ''}}" placeholder="Description" id="html5-email-input">
                                    <label for="html5-email-input">Site Canonical Link</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4 col-6">
                                    <input class="form-control" type="address" name="address" value="{{$Sitesetting->address ?? ''}}"  id="html5-url-input">
                                    <label for="html5-url-input">Site Address</label>
                                </div>
                                 <div class="form-floating form-floating-outline mb-4 col-6">
                                    <input class="form-control" type="email" name="email" value="{{$Sitesetting->email ?? ''}}"  id="html5-url-input">
                                    <label for="html5-url-input">Site Email</label>
                                </div>
                                 <div class="form-floating form-floating-outline mb-4 col-6">
                                    <input class="form-control" type="number" name="phone" value="{{$Sitesetting->phone ?? ''}}"  id="html5-url-input">
                                    <label for="html5-url-input">Site Phone</label>
                                </div>
                                 <div class="form-floating form-floating-outline mb-4 col-6">
                                    <input class="form-control" type="email" name="contactusemail" value="{{$Sitesetting->contactusemail ?? ''}}"  id="html5-url-input">
                                    <label for="html5-url-input">Contact us Receiving Email</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4 col-6">
                                    <input class="form-control" type="tel" name="FaceBook" value="{{$Sitesetting->FaceBook ?? ''}}" placeholder="https://FaceBook.com" id="html5-tel-input">
                                    <label for="html5-tel-input">FaceBook Link</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4 col-6">
                                    <input class="form-control" type="text" name="Twiter" value="{{$Sitesetting->Twiter ?? ''}}" placeholder="https://Twiter.com" id="html5-password-input">
                                    <label for="html5-password-input">Twiter Link</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4 col-6">
                                    <input class="form-control" type="text" name="Instagram" value="{{$Sitesetting->Instagram ?? ''}}" placeholder="https://Instagram.com" id="html5-password-input">
                                    <label for="html5-password-input">Instagram Link</label>
                                </div>
                                <div class="form-floating form-floating-outline mb-4 col-6">
                                    <input class="form-control" type="text" name="Youtube" value="{{$Sitesetting->Youtube ?? ''}}" placeholder="https://Youtube.com" id="html5-password-input">
                                    <label for="html5-password-input">Youtube Link</label>
                                </div>
                                <div class="dt-button mb-4">
                                    <button class="dt-button add-new btn btn-primary waves-effect waves-light mx-5" type="submit">
                                        <span><span class="">Update</span></span></button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection