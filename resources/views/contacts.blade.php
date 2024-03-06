@extends('layouts.app') 
@section('content')
<section class="tp-contact-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="section-title-wrapper-two mb-50 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <h2 class="tp-section-title heading-color-black">If you Have Any Query, Don’t Hesitate <br>Contact with us </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="row custom-mar-20">
                            <div class="col-lg-12 col-md-4 col-sm-6 custom-pad-20">
                                <div class="tp-contact-info mb-40 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                    <div class="tp-contact-info-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="tp-contact-info-text">
                                        <h4 class="tp-contact-info-title mb-15">Address</h4>
                                        <p>{{$Sitesetting->address ?? ''}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-4 col-sm-6 custom-pad-20">
                                <div class="tp-contact-info mb-40 wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                    <div class="tp-contact-info-icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="tp-contact-info-text">
                                        <h4 class="tp-contact-info-title mb-15">Phone</h4>
                                        <a href="tel:{{$Sitesetting->phone ?? ''}}">{{$Sitesetting->phone ?? ''}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-4 col-sm-6 custom-pad-20">
                                <div class="tp-contact-info mb-40 wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                                    <div class="tp-contact-info-icon">
                                        <i class="fas fa-envelope-open"></i>
                                    </div>
                                    <div class="tp-contact-info-text">
                                        <h4 class="tp-contact-info-title mb-15">Email</h4>
                                        <a href="mailto:{{$Sitesetting->email ?? ''}}">{{$Sitesetting->email ?? ''}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tp-contact-form">
                      <form action="{{ route('contact.submit') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row custom-mar-20">
        <!-- Email -->
        <div class="col-md-6 custom-pad-20">
            <div class="tp-contact-form-field mb-20">
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
        </div>
        <!-- Phone -->
        <div class="col-md-6 custom-pad-20">
            <div class="tp-contact-form-field mb-20">
                <input type="text" name="phone" placeholder="Phone" required>
            </div>
        </div>
        <!-- Service -->
        <div class="col-md-6 custom-pad-20">
            <div class="tp-contact-form-field select-field-arrow mb-20">
                <select name="service" required>
                    @foreach($servics as $service)
                        <option value="{{ Illuminate\Support\Str::slug($service->servicename, '-') }}">{{ $service->servicename }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- File -->
        <div class="col-md-6 custom-pad-20">
            <div class="tp-contact-form-field">
                <input class="form-control" style="padding: 20px;" type="file" name="attachment" required>
            </div>
        </div>
        <!-- Message -->
        <div class="col-md-12 custom-pad-20">
            <div class="tp-contact-form-field mb-20">
                <textarea name="message" placeholder="Your Message" required></textarea>
            </div>
        </div>
        <!-- Submit Button -->
        <div class="col-md-12 custom-pad-20">
            <div class="tp-contact-form-field">
                <button type="submit" class="theme-btn"><i class="flaticon-enter"></i> Send Message</button>
            </div>
        </div>
    </div>
</form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection