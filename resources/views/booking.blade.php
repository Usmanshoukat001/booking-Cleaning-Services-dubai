  <!DOCTYPE html>
  <html>
 <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('public/booking/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/booking/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/booking/assets/owlcarousel/dist/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/booking/assets/owlcarousel/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/booking/assets/css/intlTelInput.css')}}">
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <style>
    .image-toggle{
        -webkit-filter: grayscale(100%); 
  filter: grayscale(100%); width: 40% !important;
    }
      #goog-gt-tt {
        opacity: 0 !important;
      }
      #google_translate_element,.skiptranslate{
        display:none;
      }
      body{
        top:0!important;
      }
      .skiptranslate{
        display:none;
      }
      .goog-tooltip{
        display:none;
      }
      .goog-tooltip {
        display: none !important;
      }
      .goog-tooltip:hover {
        display: none !important;
      }
      .goog-text-highlight {
        background-color: transparent !important;
        border: none !important; 
        box-shadow: none !important;
      }
      img {
    vertical-align: middle !important;
    border-style: none !important;
    width: 100% !important;
}

fieldset .form-card .field-block .content-block .field .active {
    background-color: #000131 !important;
    color: white !important;
    border: 1px solid #000131 !important;
}
#progressbar li.active:before, #progressbar li.active:after {
    background: #000131;
}
#msform .action-button {
  
    background: #000131 !important;
  
}

    </style>
<body>
 
    <div class="page-loader" style="display:none;">
      <div class="content-load">
        <div class="loader"></div>
      </div>
    </div> <!--page-loader-->
    <div id="google_translate_element" style="display: none"></div>
    <div class="header" id="mainheader" style="background-color: #000131 !important;">
      <div class="max-container">
        <div class="row">
          <div class="col-md-6 logo">
            <a href="/"><img style="width: 180px  !important;" src="{{ asset("public/siteLogo/" . optional($Sitesetting)['logo']) }}"></a>
          </div>
          <div class="col-md-6 right-block">
            <div class="head-right-content">
              <div class="login-btn">
                <a href="#" data-toggle="modal" style="background-color: #ffc107 !important;" data-target="#verifynumber">Login <i class="fa fa-user-circle" aria-hidden="true"></i></a>
              </div>

              <div class="login-dropdown" style="display:none;">
                <div class="dropdown">
                  <div class="log-user"><h5><span class="modal_resend_lable"></span><i class="fa fa-angle-right" aria-hidden="true"></i></h5></div>
                  <div class="log-user-dropdown-menu">
                    <a href="profile.html"><span>Profile</span> <i class="fa fa-user" aria-hidden="true"></i></a>
                    <a href="index-2.html"><span>Back To Home</span> <i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>		
                    <a href="javascript:void(0)" class="logout-link logoutUser">Logout</a>	
                  </div>
                </div>
              </div> <!--login-dropdown-->

              <!-- <div class="select-country">
                <a href="#" data-toggle="modal" data-target="#languagechangemodal" ><img src="assets/images/english.png" id="flag"></a>
              </div>
              <div class="view-country-lang">
                <p id="country">English</p>
              </div> -->
            </div>
            <!--head-right-content-->
          </div>
        </div>
        <!--row-->
      </div>
      <!--max-container-->
    </div>
  <!--header-->
<style>
    .service_screen{
        max-width: 800px !important;
    }

</style>

<!-- Deep Cleaning Service Details -->
<div class="modal fade modelforallservices" id="" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
   <div class="modal-dialog service_screen" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> Includes:</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body" style="
    padding: 2rem;
">
            
      </div>
       <div class="modal-footer">
            <button type="button" class="btn "style="
    width: auto;
    font-weight: 500;
    color: white;
    border: 0 none;
    cursor: pointer;
    padding: 8px 15px;
    background: #000131;
    border-radius: 6px;
    font-size: 15px;
    letter-spacing: 1px;
    float: right;
" data-dismiss="modal">Continue</button>
         </div>
   </div>
</div>
</div>
@if(isset($firstservics))
 @php
                                        $servicesingle = json_decode($firstservics->pjson, true);
                                    @endphp
                                     @endif
                                    
                                    
<div class="main-page-wrapper">

  <div class="main-booking-form">
    <!-- MultiStep Form -->
    <div class="min-container">
      <div class="row">
        <div class="col-md-12 left-side">
          <div class=" px-0 pt-1 pb-0 mt-1 mb-1"><br><br>
            <!--<div class="form-heading">-->
            <!--  <p class="view-map-block" data-toggle="modal" data-target="#locationviewmapregister"><span id="addressName" class="my_blue">DUBAI</span> <i class="fa fa-caret-down my_blue" aria-hidden="true"></i></p>-->
              <h2><strong class="activeTabText "><span id='sel_ser'></strong></h2>
            <!--  <p>New Year Special Offer - AED 24 per hour</p>-->
            <!--</div>-->
            <div class="row">
              <div class="col-md-12 mx-0">
                <form id="msform" class="payment-form">
                  <!-- progressbar -->
                  <ul id="progressbar">
                    <li class="active" id="account"><strong>Select a Service</strong></li>
                    <li id="personal"><strong>Service Details</strong></li>
                    <li id="payment" class="type3"><strong>Date & Time</strong></li>
                  </ul>
                  <!-- fieldsets -->
                  <div class="content-left-block">
                    <div class="content mb-5">
                      <!--Frequency-start--->
                      <fieldset>
                        <div class="form-card professional-materials-block">
                          <h5 class="fs-title">Select a Service</h5>

                          <!-- <div class="card-content"> -->

                            <div class="field-block services">
                              <div class="content-block" style="display: inline-block">
                               @foreach($servics as $servicss)
    @php
        $servicedata = json_decode($servicss->pjson, true);
        $active = '';

        // Check if $firstservics is set
        if(isset($firstservics)) {
            // Compare the slugs of the service names
            $active = Illuminate\Support\Str::slug($servicss->servicename, '-') == Illuminate\Support\Str::slug($firstservics->servicename, '-') ? 'active' : '';
        } elseif($loop->first) {
            // Set the 'active' class for the first button if $firstservics is not set
            $active = 'active';
        }
    @endphp
    <div class="field mb">
        <button type="button" 
        data-price="{{ $servicedata['PRICE'] }}" data-vat="{{ $servicedata['VAT'] }}"
        
        data-professionalsPRICE="{{ $servicedata['professionalsPRICE'] }}" data-professionalsVAT="{{ $servicedata['professionalsVAT'] }}"
        
        data-HoursPRICE="{{ $servicedata['HoursPRICE'] }}" data-HoursVAT="{{ $servicedata['HoursVAT'] }}"
        
        data-MaterialPRICE="{{ $servicedata['MaterialPRICE'] }}" data-MaterialVAT="{{ $servicedata['MaterialVAT'] }}"
        
        data-modeldescription=" {{ $servicedata['modelDescription'] }}"
        class="ser selectService {{ $active }}">
            {{ $servicss->servicename }}
        </button>
    </div>
    
    <!-- Normal Cleaning Service Details -->
@endforeach



                                <!--<div class="field mb">-->
                                <!--  <button type="button" class="ser selectService active">Home Cleaning</button>-->
                                <!--</div>-->
                                <!--<div class="field mb">-->
                                <!--  <button type="button" class="ser selectService">Deep Cleaning</button>-->
                                <!--</div>-->
                                <!--<div class="field mb">-->
                                <!--  <button type="button" class="ser selectService">Disinfection Service</button>-->
                                <!--</div>-->
                                <!--<div class="field mb">-->
                                <!--  <button type="button" class="ser selectService">AC Service</button>-->
                                <!--</div>-->
                                <!--<div class="field mb">-->
                                <!--  <button type="button" class="ser selectService">AC Duct Cleaning</button>-->
                                <!--</div>-->
                                <!--<div class="field mb">-->
                                <!--  <button type="button" class="ser selectService">Annual Maintenance Contract</button>-->
                                <!--</div>-->
                                <!--<div class="field mb">-->
                                <!--  <button type="button" class="ser selectService">Handyman</button>-->
                                <!--</div>-->
                                <!--<div class="field mb">-->
                                <!--  <button type="button" class="ser selectService">Pest Control</button>-->
                                <!--</div>                                                -->
                              </div>

                            </div>                                         
                            <!--card-content-->
                          </div>


                          <!---form-card---->
                          <div class="mbl-fix"><div class="content-fix">
                            <div class="total enable-right-block-btn">
                              <p>Total</p>
                              <h5 class="infoTotal_two">AED 0.00 <span class="enable-right-block-btn">
                                  <span class="enable-right-block-btn"><img src="https://www.whitespot.ae/book-online/assets/images/upload.png"></span>
                                  </span>
                                  </h5>
                            </div>
                          </div></div> <!--mbl-fix-->
                          <button type="button" name="next" style="position:unset !important;" class="next action-button step1_btn" value="Next" >Next</button>
                        </fieldset>
                        <!--Frequency-end--->


                        <!--Servic-details-start--->
                        <fieldset>
                          <div class="form-card professional-materials-block">
                            <div class="field-block hours type1" style="display: block">
                              <h2 class="title">How many hours do you need your professional to stay?</h2>
                              <div class="content-block normal" style="display: block">
                                <!--<div class="field">-->
                                <!--  <button type="button" class="num professionalsHours active ">1</button>-->
                                <!--  </div>-->
                                  <div class="field">
                                       <button type="button" class="num professionalsHours active">2</button>
                                    </div>
                                    <div class="field">
                                      <button type="button" class="num professionalsHours">3</button>
                                    </div>
                                    <div class="field">
                                      <button type="button" class="num professionalsHours">4</button>
                                    </div>
                                    <div class="field">
                                      <button type="button" class="num professionalsHours">5</button>
                                    </div>
                                   
                                  </div>

                                  <div class="content-block handy" style="display: none">
                                    <div class="field">
                                      <button type="button" class="num professionalsHours">1</button>
                                    </div>
                                    <div class="field">
                                      <button type="button" class="num professionalsHours">2</button>
                                    </div>
                                    <div class="field">
                                      <button type="button" class="num professionalsHours">3</button>
                                    </div>
                                    <div class="field">
                                      <button type="button" class="num professionalsHours">4</button>
                                    </div>
                                    <div class="field">
                                      <button type="button" class="num professionalsHours">5</button>
                                    </div>
                                    <div class="field">
                                      <button type="button" class="num professionalsHours">6</button>
                                    </div>
                                  </div>
                                  <!--content-block-->
                                </div>

                                <!---field-block---> 
                                <div class="field-block professionals type1" style="display: block">
                                  <h2 class="title">How many professionals do you need?</h2>
                                  <div class="content-block">
                                    <!--<div class="field">-->
                                    <!--  <button type="button" class="num professionalsNeed active">1</button>-->
                                    <!--</div>-->
                                    <div class="field">
                                      <button type="button" class="num professionalsNeed active">2</button>
                                    </div>
                                    <div class="field">
                                      <button type="button" class="num professionalsNeed">3</button>
                                    </div>
                                    <div class="field">
                                      <button type="button" class="num professionalsNeed">4</button>
                                    </div>
                                     <div class="field">
                                      <button type="button" class="num professionalsNeed">5</button>
                                    </div>
                                     <div class="field">
                                      <button type="button" class="num professionalsNeed">6</button>
                                    </div>
                                     <div class="field">
                                      <button type="button" class="num professionalsNeed">7</button>
                                    </div>
                                     <div class="field">
                                      <button type="button" class="num professionalsNeed">8</button>
                                    </div>
                                     <div class="field">
                                      <button type="button" class="num professionalsNeed">9</button>
                                    </div>
                                     <div class="field">
                                      <button type="button" class="num professionalsNeed">10</button>
                                    </div>
                                     <div class="field">
                                      <button type="button" class="num professionalsNeed">11</button>
                                    </div>
                                     <div class="field">
                                      <button type="button" class="num professionalsNeed">12</button>
                                    </div>
                                  </div>
                                  <!--content-block-->
                                </div>

                                <!---field-block---> 
                                <div class="field-block materials type1" style="display: block">
                                  <h2 class="title">Do you require cleaning materials?</h2>
                                  <div class="content-block">
                                    <div class="field">
                                      <button type="button" class="num cleaningMaterial active">No</button>
                                    </div>
                                    <div class="field">
                                      <button type="button" class="num cleaningMaterial">Yes</button>
                                    </div>
                                  </div>
                                  <!--content-block-->
                                </div>


                                <div class="field-block building-type">
                                  <h2 class="title">Building Type</h2>
                                  <div class="content-block">
                                    <div class="field">
                                      <label class="container-radio">
                                        <p class="title">Apartment</p>
                                        <input type="radio" class="buildingType" value="Apartment" name="buildingType" checked>
                                        <span class="checkmark-radio"></span>
                                      </label>
                                      <label class="container-radio">
                                        <p class="title">Villa</p>
                                        <input type="radio" class="buildingType" value="Villa" name="buildingType">
                                        <span class="checkmark-radio"></span>
                                      </label>

                                    </div>

                                  </div>
                                  <!--content-block-->
                                </div>

                                <div class="field-block no-beds type2" style="display: none">
                                  <h2 class="title">No. of Bed Rooms</h2>
                                  <div class="content-block">
                                    <!-- <input type="text" id="bedroom" class="form-control" value="1"> -->
                                    <select class="form-control bedroom apt" id="bedroom_apt">
                                      <option value="Studio" class="apt" selected>Studio</option>
                                      <option value="1" class="apt">1</option>
                                      <option value="2" class="apt">2</option>
                                      <option value="3" class="apt">3</option>
                                    </select> 

                                    <select class="form-control bedroom villa" id="bedroom_villa" style="display: none">
                                      <option value="2" class="villa" selected>2</option>
                                      <option value="3" class="villa">3</option>
                                      <option value="4" class="villa">4</option>
                                      <option value="5" class="villa">5</option>
                                    </select> 

                                    <select class="form-control bedroom townhouse" id="bedroom_townhouse" style="display: none">
                                      <option value="3" class="townhouse" selected>3</option>
                                      <option value="4" class="townhouse">4</option>
                                      <option value="5" class="townhouse">5</option>
                                      <option value="6" class="townhouse">6</option>    
                                    </select>
                                  </div>
                                </div>

                                <div class="field-block no-packages type2" style="display: none;margin-top:5px">
                                  <h2 class="title">Select Package</h2>
                                  <div class="content-block">
                                    <!-- <input type="text" id="bedroom" class="form-control" value="1"> -->
                                    <select class="form-control packages" id="packages">
                                      <option value="Silver" class="package" selected>Silver</option>
                                      <option value="Gold" class="package">Gold</option>
                                      <option value="Platinum" class="package">Platinum</option>
                                    </select> 
                                  </div>
                                </div>
                                
                                  <div class="field-block no-packages type2" style="margin-top:5px">
                                  <h2 class="title">Select your extra tasks below</h2>
                                  <div class="content-block">
 @foreach($Extra as $extras)
<div class="floatLeft text-center">
    <p class="" style="font-size: 15px; font-weight: 700;">
        <img class="image-toggle" data-image="{{ $extras->image }}" data-id="{{ $extras->id }}" data-price="{{ $extras->price }}" src="{{ asset('public/service/'.$extras->image) }}">
        <input class="extraprice" type="hidden" value="{{$extras->price}}" />
        <br>
        <br>
        {{ $extras->name }}
    </p>
</div>
@endforeach
                                  </div>
                                </div>

                                <!---field-block---> 
                                <!--<div class="field-block instructions">-->
                                <!--  <h2 class="title">Do you have any specific instructions?</h2>-->
                                <!--  <div class="content-block">-->
                                <!--    <div class="field">-->
                                <!--      <textarea class="form-control" rows="6" name="instructions" placeholder="Example: Key under the mat, I have dogs etc."></textarea>-->
                                <!--    </div>-->
                                <!--  </div>-->
                                  <!--content-block-->
                                <!--</div>-->
                                <!---field-block---> 
                                <span class="terms_text" style="display:none">Please note that AMC is subject to inspection of your home, and you will not be charged at this time. Click submit to express your interest, and someone from our team will be in touch with you.</span>
                                <span class="deep_cleaning_terms" style="display:none">Please note that only indoor cleaning is included in this service.</span>
                              </div>
                              <!---form-card---->
                              <div class="mbl-fix"><div class="content-fix">
                                <div class="total enable-right-block-btn">
                                  <p>Total</p>
                                  <h5 class="infoTotal_two">AED 0.00 <span class="enable-right-block-btn"><img src="assets/images/upload.png" /></span></h5>
                                
                                </div>
                               
                              </div>  </div> <!--mbl-fix-->
                             
                                   <button type="button" name="next" style="position:unset !important;" class="next action-button  step2_btn" value="Next"> Next</button>
                                  <button type="button" name="previous"  style="position:unset !important;float: left;" class="action-button previous" value=""> Previous</button>
                             
                             
                                                           
                              
                            
                            </fieldset>
                            <!--Servic-details-end--->


                            <!--Date-time-starts--->
                            <fieldset>
                              <div class="form-card like-service-block type3">

                                <div class="field-block select-professional ">
                                  <h2 class="title">Which professional do you prefer?</h2>
                                  <p>Top-rated professionals in your area</p>
                                  <div class="content-block">
                                    <div class="select-professional-buttons">
                                      <div class="selectprofessionalNextBtn btn-new"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                                      <div class="selectprofessionalPreviousBtn btn-new"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                    </div>
                                    <div id="selectprofessional" class="owl-carousel owl-theme select-professional-carousel">




                                    </div>
                                    <!--owl-carousel-->
                                  </div>
                                  <!--content-block-->
                                </div>
                                <!---field-block---> 

                                <div class="field-block hours" style="margin-bottom: 35px">
                                  <h2 class="title">Service Region</h2>
                                  <select class="form-control region" id="regionId">
                                    <option disabled="" selected>Please select your region</option>
 <option value="Akoya-Oxygen">Akoya Oxygen</option>
  <option value="Al-Barsha-South">Al Barsha South</option>
  <option value="Arjan">Arjan</option>
  <option value="Business-Bay">Business Bay</option>
  <option value="Damac-Hills">Damac Hills</option>
  <option value="DIFC">DIFC</option>
  <option value="Downtown-Dubai">Downtown Dubai</option>
  <option value="Dubai-Hills">Dubai Hills</option>
  <option value="Dubai-Internet-City">Dubai Internet City</option>
  <option value="Dubai-Marina">Dubai Marina</option>
  <option value="Dubai-Sports-City">Dubai Sports City</option>
  <option value="IMPZ">IMPZ</option>
  <option value="Jumeirah-Beach-Residence-(JBR)">Jumeirah Beach Residence (JBR)</option>
  <option value="Jumeirah-Lakes-Towers">Jumeirah Lakes Towers</option>
  <option value="Jumeirah-Village-Circle-(JVC)">Jumeirah Village Circle (JVC)</option>
  <option value="Jumeirah-Village-Triangle-(JVT)">Jumeirah Village Triangle (JVT)</option>
  <option value="Mudon">Mudon</option>
  <option value="Palm-Jumeirah">Palm Jumeirah</option>
  <option value="Remraam">Remraam</option>
  <option value="Springs">Springs</option>
  <option value="The-Greens">The Greens</option>
  <option value="The-Lakes">The Lakes</option>
  <option value="The-Views">The Views</option>
</select>                                </div>


                                <div class="field-block service-like">
                                  <h2 class="title">When would you like your service?</h2>
                                  <div class="content-block">
                                    <div class="like-service-buttons">
                                      <div class="likeserviceNextBtn btn-new"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                                      <div class="likeservicePreviousBtn btn-new"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                    </div>
                                    <div  class="owl-carousel owl-theme" id="showdays" style="
    display: block;
">

                                          

                                    </div>
                                    <!--owl-carousel-->
                                  </div>
                                  <!--content-block-->
                                </div>
                                <!---field-block---> 
                                <div class="field-block start-like" >
                                  <h2 class="title">What time would you like us to start?</h2>
                                  <div class="content-block">

<div id="likeusstart" class="appendTimeSlot">
  
</div>
<!--owl-carousel-->
<div class="appendTimeSlotError"></div>
</div>
<!--content-block-->
<input type="hidden" id="professional_name" value="">
<p class="note">Your professional will arrive between <span class="infoTime"> </span> - <span class="end_time"></span></p>
</div>
<!---field-block---> 
</div>
<!---form-card---->
<div class="mbl-fix"><div class="content-fix">
  <div class="total enable-right-block-btn">
    <p>Total</p>
    <h5 class="infoTotal_two">AED 0.00 <span class="enable-right-block-btn"><img src="assets/images/upload.png" /></span></h5>
  </div>
</div></div> <!--mbl-fix-->
<button type="button" id="paymentlink"  style="position:unset !important;" class=" next action-button step3_btn " value="Next">Next</button>
 <button type="button" name="previous" style="position:unset !important;float: left;" class="action-button previous " value=""> Previous</button>
</fieldset>


<!--payment-starts--->
<fieldset>
  <div class="form-card type3">
    <div class="field-block payment-block">
      <h2 class="title">Pay online and confirm your booking.</h2>
      <div class="content-block">
          <div>
          <button id='mamo-checkout'  data-src='https://business.mamopay.com/pay/thelmacleaningservices-3da81' type='button'>Checkout</button>
          </div>
        <div>
</div>
  <!--content-block-->
</div>
<!--payment-block--->
</div>
<!--form-card-->
<div class="mbl-fix"><div class="content-fix">
  <div class="total enable-right-block-btn">
    <p>Total</p>
    <h5 class="infoTotal_two">AED 0.00 <span class="enable-right-block-btn"><img src="assets/images/upload.png" /></span></h5>
  </div>
</div></div> <!--mbl-fix-->
 <button type="button" name="previous" style="position:unset !important;float: left;" class="action-button previous " value=""> Previous</button>

<button id="makecomplete" class="action-button   ">
  <span>Complete</span>
</button>     
</fieldset>
<!--payment-ends--->


</div>
<!--content-->

</div> <!--content-left-block-->


<!--content-left-block-->
<div class="content-right-view-block">
  <div class="content">
    <div class="field-block summary-block">
      <div class="field-flex">
        <p class="parent-head">Booking Summary</p>
        <p class="labeltext remove-right-content-block"><b>X</b></p>
      </div>
      <!--field-flex-->
    </div>
    <div class="field-block city-block">
      <div class="field-flex">
        <p class="parent-head">Service</p>
        <p class="labeltext "><span class="infoService"></span></p>
      </div>
      <!--field-flex-->
    </div>
    <!--city-block-->
    <div class="field-block service-block">
      <h5>Service Details</h5>
      <div class="field-flex type3">
        <p class="headlabel">Frequency</p>
        <p class="labeltext infoFrequency">One-time</p>
      </div>
      <!--field-flex--> 
      <div class="field-flex type1">
        <p class="headlabel">Duration</p>
        <p class="labeltext infoDuration">2 hours</p>
      </div>
      <!--field-flex-->
      <div class="field-flex type1">
        <p class="headlabel">Number of Professionals</p>
        <p class="labeltext infoProfessionals">2</p>
      </div>
      <!--field-flex-->
      <div class="field-flex type1">
        <p class="headlabel">Material</p>
        <p class="labeltext infoMaterial">No</p>
      </div>
      <!--field-flex--> 
      <div class="field-flex type2" style="display: none">
        <p class="headlabel">Building Type</p>
        <p class="labeltext infoBuilding">Apartment</p>
      </div>
      <!--field-flex--> 
      <div class="field-flex type2 no-beds" style="display: none">
        <p class="headlabel">Bedrooms</p>
        <p class="labeltext infoBedroom">Studio</p>
      </div>
      <!--field-flex-->

      <div class="field-flex type2 no-packages" style="display: none">
        <p class="headlabel">Package Type</p>
        <p class="labeltext infoUnits">Silver</p>
      </div>
      <!--field-flex-->
    </div>
    <!--service-block-->
    <div class="field-block date-time-block type3">
      <h5>Date & Time</h5>
      <div class="field-flex">
        <p class="headlabel">Professional</p>
        <p class="labeltext InfoProfessionals">Auto assign</p>
      </div>
      <!--field-flex--> 
      <div class="field-flex">
        <p class="headlabel">Date</p>
        <p class="labeltext SelectedDate"></p>
      </div>
      <!--field-flex-->
      <div class="field-flex">
        <p class="headlabel">Start Time</p>
        <p class="labeltext infoTime infoTime2"></p>
      </div>
      <!--field-flex-->
    </div>
    <!--date-time-block-->
    <div class="field-block address-block">
      <div class="field-flex">
        <p class="parent-head">Address</p>
        <p class="labeltext infoAddress">Dubai</p>
      </div>
      <!--field-flex-->
    </div>
    <!--address-block-->
    <div class="field-block price-block">
      <h5>Price Details</h5>
      <div class="field-flex">
        <p class="headlabel">Price</p>
        <p class="labeltext ">AED <span class="infoPrice"></span></p>
      </div>

      <!--field-flex--> 
      <div class="field-flex material-field" style="display:none">
        <p class="headlabel">Material Charges</p>
        <p class="labeltext ">AED <span class="infoMat"></span></p>
      </div>

      <!--field-flex--> 
      <div class="field-flex discountDiv" style="display:none">
        <p class="headlabel">Discount</p>
        <p class="labeltext InfoDiscount"></p>
      </div>

      <!--field-flex--> 
      <div class="field-flex">
        <p class="headlabel">VAT</p>
        <p class="labeltext ">AED <span class="infoVat"></span></p>
      </div>                  


      <!--field-flex-->
      <div class="field-flex total-field">
        <p class="headlabel">Total</p>
        <p class="labeltext ">AED <span class="infoTotal"></span></p>
      </div>
      <!--field-flex-->
    </div>
    <!--date-time-block-->
  </div>
  <!--content-->
</div>
<!--content-right-view-block-->


</form>


</div>
</div>
</div>
</div>
<!--left-side-->
</div>
<!--row-->
</div>
<!--min-container--->
</div>
<!--main-booking-form-->
</div>
<!--main-page-wrapper-->


<div class="footer" style="background-color: #ffc107 !important; color:black !important;">
   <div class="max-container">
      <div class="row">
         <div class="col-md-12 copywrite" style="color:black !important;">
            <p><i class="fa fa-copyright"></i> 2024 THELMA. All Rights Reserved.</p>
         </div>
         <!--copywrite-->
      </div>
      <!--row-->
   </div>
   <!--min-container--->
</div>
<!--footer-->

<!--Modal starts from here---->
<!-- Verify number Modal -->
<div class="modal fade" id="verifynumber" tabindex="-1" role="dialog" aria-labelledby="verifynumber" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please Verify Your Number</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="login_success"></div>
        <div class="col-md-12 form-group loginOTPForm">
          <label>Your Mobile Number</label><br>
          <div class="phone-input"><span class="flag"><img src ="{{asset('public/booking/assets/images/united-arab-emirates.png')}}">+971</span><input type="number" class="form-control" id="login_number" placeholder="50 123 4567"></div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" style="
    width: auto;
    font-weight: 500;
    color: white;
    border: 0 none;
    cursor: pointer;
    padding: 8px 15px;
    background: #000131;
    border-radius: 6px;
    font-size: 15px;
    letter-spacing: 1px;
    float: right;
" class="btn  sendLoginOTP">Continue</button>
      </div>
    </div>
  </div>
</div>


<!-- Resend OTP Modal -->
<div class="modal fade" id="resendotpmodal" tabindex="-1" role="dialog" aria-labelledby="otp-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content resend-otp-modal">
      <div class="modal-header">
        <h5 class="modal-title modal_resend_lable" id="exampleModalLabel">Welcome back!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="send_otp_success"></div>
        <div class="col-md-12 form-group">
          <p>Enter the code that was sent to</p>
          <label id="mobile_number_resend">+971 12 345 678</label>
          <input type="number" class="form-control"  id="otp_number">
          <p class="code-time">Resend code in: <span id="resend_timer"> 00:59 </span></p>
          <p class="resendbtn" style="display:none; font-size: 14px; color: #818181">Did not receive the OTP? <span class="resendbtn" style="text-decoration: underline; cursor: pointer; color: #00adea">Resend OTP</span></p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary verifyLoginOTP">Continue</button>
      </div>
    </div>
  </div>
</div>
<!-- Resend OTP Modal -->

<!--Add New Location Modal--->

<div class="modal fade" id="customerProfile" tabindex="-1" role="dialog" aria-labelledby="customerProfile" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select your address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="add-new-location-map">
          <div class="row">
            <div class="col-md-12 form-group add-new">

              <a href="#" class="add-new-address" data-toggle="modal" data-target="#addAddress"><i class="fa fa-plus" aria-hidden="true"></i> Add new address</a>
            </div>

            <div class="add-address-block manage-address-block">
              <div class="appended_addresses">

              </div>
            </div> <!--add-address-block-->


          </div>
          <!--row--->
        </div>
        <!--add-new-location-map-->
      </div>
      <div class="modal-footer add-new-location-footer">
        <div class="col-md-12">
          <p>To manage your address go to your</p>
          <p class="dark"> Profile > See address section</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Add New Location Modal--->

<!-- After OTP Confirm Modal -->
<div class="modal fade" id="afterotpconfirmmodal" tabindex="-1" role="dialog" aria-labelledby="afterotpconfirmmodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 form-group">
          <p>A safe environment is our shared responsibility. Your response is going to help us protect the health of all the stakeholders in our ecosystem.</p>
        </div>
        <div class="col-md-12 form-group">
          <ul>
            <li>I do not have any flu-like symptoms such as fever, cough, sore throat, etc.</li>
            <li>I have not travelled internationally in the last 14 days.</li>
            <li>I have not contacted anyone with COVID-19 in the last 14 days.</li>
            <li>I confirm that I am healthy</li>
          </ul>
        </div>
        <div class="col-md-12 form-group">
          <label class="container-radio">
            <p class="title">I confirm that I am healthy</p>
            <input type="radio" name="radio" checked="">
            <span class="checkmark-radio"></span>
          </label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Continue</button>
      </div>
    </div>
  </div>
</div>



<!-- Deep Cleaning Service Details -->
<div class="modal fade" id="deep_cleaning_service_details" tabindex="-1" role="dialog" aria-labelledby="deep_cleaning_service_details" aria-hidden="true">
   <div class="modal-dialog service_screen" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deep Cleaning Service Includes:</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="col-md-12 form-group">
              <img src="assets/images/deep_cleaning_services.jpg" width="100%" />
            </div>
            <div class="col-md-12 form-group">
               <p>Based to the customer's property and unique requirements, professional deep cleaning rates include cleaners who are outfitted with all the necessary cleaning supplies.</p>
            </div>
            <div class="col-md-12 form-group">
               <ul style="padding-left: 10px;">
                  <li>Thorough dusting and vacuuming of entire space.</li>
                  <li>Thorough cleaning of all internal windows and window frames.</li>
                  <li>Grease removal from kitchen walls, counters and floors.</li>
                  <li>Thorough cleaning of the fridge and oven.</li>
                  <li>Thorough cleaning of all cabinets and wardrobes.</li>
                  <li>Cleaning of balcony and balcony rails.</li>
                  <li>Thorough cleaning of all floors.</li>
                  <li>Thorough cleaning of all bathroom including tiles, grouts, bath, shower heads, taps, etc.</li>
                  <li>Remove the dust and grime that builds up around the appliances.</li>
                  <li>Clean all sockets, switches, skirting, and door knobs.</li>
                  <li>Clean all AC vents from outside.</li>
               </ul>
            </div>
            <div class="col-md-12 form-group">
               <p>Cases which will require more time are the following:</p>
            </div>
            <div class="col-md-12 form-group">
              <ul style="padding-left: 10px;">
                  <li>Removal of paint stains.</li>
                  <li>Extra folding of clothes.</li>
                  <li>Re-organizing a cabinet.</li>
                  <li>Unit sat empty for months.</li>
               </ul>
            </div>
            <div class="col-md-12 form-group">
               <p>Upon inspection, the following services will be provided. (Additional charges will apply)</p>
            </div>
            <div class="col-md-12 form-group">
              <ul style="padding-left: 10px;">
                  <li>Post construction cleaning.</li>
                  <li>Marble polishing & Machine scrubbing of floors.</li>
                  <li>Extra-large & Signature villa deep cleanings.</li>
                  <li>Outdoor marble pressure washing.</li>
               </ul>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Continue</button>
         </div>
      </div>
   </div>
</div>


<!-- Add voucher code Modal -->
<div class="modal fade" id="addvouchermodal" tabindex="-1" role="dialog" aria-labelledby="addvouchermodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add voucher code</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="voucher_message"></div>
        <p>New Year Promo Code: NEWYEAR24</p>
        <div class="col-md-12 form-group">
          <label>Voucher code</label>
          <input type="text" class="form-control" id="voucher_number">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary checkVoucher">Apply</button>
      </div>
    </div>
  </div>
</div>


<!-- Location view Modal -->
<div class="modal fade" id="locationviewmapregister" tabindex="-1" role="dialog" aria-labelledby="locationviewmapregister" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Your Location</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="signup_success"></div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12 form-group view-map">
            <div id="mappicker" style="height:250px"></div>
          </div>
        </div>
        <input type="hidden" name="lat" id="lat" value="">
        <input type="hidden" name="lng" id="lng" value="">
        <div class="regsiter-form">
          <div class="row">
            <div class="col-md-12 form-group view-map">
              <div class="display-map-search">
                <div class="content-display">
                  <i class="fa fa-search" aria-hidden="true"></i>
                  <input type="text" id="pac-input" style="border: none;width: 100%;" placeholder="Search for your building or area">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              <label>Address Details</label>
              <input type="text" id="building_detail" class="form-control" placeholder="Street / Building / Flat no.">
            </div>

            <div class="col-md-6 form-group">
              <label>First Name</label>
              <input type="text" id="first_name" class="form-control" placeholder="Enter your first name">
            </div>
            <div class="col-md-6 form-group">
              <label>Last Name</label>
              <input type="text" id="last_name" class="form-control" placeholder="Enter your Last name">
            </div>

            <div class="col-md-6 form-group">
              <label>Gender</label>
              <select class="form-control" id="gender">
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
            </div>

            <div class="col-md-6 form-group loginOTPForm">
              <label>Phone No.</label>
              <div class="phone-input"><span class="flag"><img src ="assets/images/united-arab-emirates.png">+971</span><input type="number" class="form-control" id="phone_no" placeholder="50 123 4567"></div>
            </div>

            <div class="col-md-12 form-group">
              <label>Email</label>
              <input type="text" id="email" class="form-control" placeholder="e.g. name@example.com">
            </div>

            <div class="col-md-12 form-group" style="display:none">
              <label>Company</label>
              <input type="text" id="company" class="form-control" placeholder="Company" value="NA">
            </div>

            <div class="col-md-12 form-group">
              <p class="note"> This helps us refer you to relevant Whitespot service</p>
            </div>

          </div>
          <!--row--->
        </div>
        <!--regsiter-form-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary CreateCustomer">Save & Continue</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade child-modal" id="addAddress" tabindex="-1" role="dialog" aria-labelledby="locationviewmapregister" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Your Location</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="signup_success"></div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12 form-group view-map">
            <div id="mappickerAdd" style="height:250px"></div>
          </div>
        </div>
        <input type="hidden" name="lat_add" id="lat_add" value="">
        <input type="hidden" name="lng_add" id="lng_add" value="">
        <div class="regsiter-form">
          <div class="row">
            <div class="col-md-12 form-group view-map">
              <div class="display-map-search">
                <div class="content-display">
                  <i class="fa fa-search" aria-hidden="true"></i>
                  <input type="text" id="pac-input-add" class="address_detail_profile" style="border: none;width: 100%;" placeholder="Search for your building or area">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              <label>Address Details</label>
              <input type="text" id="building_detail_add" class="form-control building_detail_profile" placeholder="Street / Building / Flat no.">
            </div>

          </div>
          <input type="hidden" class="addressId" value="0">
          <!--row--->
        </div>
        <!--regsiter-form-->
        <div class=" col col-md-12" id="add_address_alert"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary CreateAddress">Create Address</button>
      </div>
    </div>
  </div>
</div>



<!-- Language change Modal -->
<div class="modal fade" id="languagechangemodal" tabindex="-1" role="dialog" aria-labelledby="languagechangemodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select your Language</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12 form-group">
          <label class="container-radio">
            <p class="title">Arabic</p>
            <input type="radio" name="lang" value="Arabic">
            <span class="checkmark-radio"></span>
          </label>
        </div>
        <div class="col-md-12 form-group">
          <label class="container-radio">
            <p class="title">English</p>
            <input type="radio" name="lang" checked value="English">
            <span class="checkmark-radio"></span>
          </label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="translateLanguage()" class="btn btn-primary">Apply</button>
      </div>
    </div>
  </div>
</div>





<!-- See People Details Modal -->
<div class="modal fade" id="seepeopledetails" tabindex="-1" role="dialog" aria-labelledby="seepeopledetails" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Professional Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body people-details-modal-body">



        <div class="col-md-12 form-group profile-img" id="professional_image_modal">
          <img src="assets/images/people.jpg">
        </div>
        <div class="col-md-12 form-group people-title">
          <h5 id="professional_name_modal">Nabirah Naluyima</h5>
          <p>Hi! My home country is Uganda and I've been living and working in UAE for around 1 year. My mother-tongue is Luganda and I can communicate fluently in English. My previous experience includes home cleaning, hotel cleaning; and my skills can be described as time-management, trustworthiness, friendliness, problem Solving, flexibility, ability to work independently. </p>
        </div>

        <div class="col-md-12 form-group rating-block">

          <div class="field">
            <h5>AVG. RATING</h5>
            <span><i class="fa fa-star" aria-hidden="true"></i> 4.4<span>
            </div>

            <div class="field">
              <h5>REVIEWS</h5>
              <span>166<span>
              </div>

              <div class="field">
                <h5>HIRED</h5>
                <span>300<span>
                </div> 

              </div>


              <div class="view-reviews-bock">

                <div class="col-md-12 form-group">
                  <h4>Reviews</h4>
                </div>


                <div class="col-md-12 form-group field">
                  <h5>renata <span>Oct 1, 2021</span></h5>
                  <span class="rating"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></span>
                </div>


                <div class="col-md-12 form-group field">
                  <h5>Glenn <span>Oct 1, 2021</span></h5>
                  <span class="rating"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></span>
                </div>

                <div class="col-md-12 form-group field">
                  <h5>renata <span>Oct 1, 2021</span></h5>
                  <span class="rating"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></span>
                </div>


                <div class="col-md-12 form-group field">
                  <h5>Glenn <span>Oct 1, 2021</span></h5>
                  <span class="rating"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></span>
                </div>




              </div> <!--view-reviews-bock-->


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Apply</button>
            </div>
          </div>
        </div>
      </div>


      <input type="hidden" id="price" value="">
      <input type="hidden" id="serviceType" value="">
      <input type="hidden" id="vat" value="">
      <input type="hidden" id="total" value="">
      <input type="hidden" id="professionalsHours" value="2">
      <input type="hidden" id="professionalsHoursvat" value="">
      <input type="hidden" id="professionalsNeed" value="2">
      <input type="hidden" id="professionalsNeedvat" value="">

      <input type="hidden" id="product_id" value="">
      <input type="hidden" id="promo_code" value="">
      <input type="hidden" id="discountAmount" value="0">
      <input type="hidden" id="materialAmount" value="">
      <input type="hidden" id="bedRooms" value="">
      <input type="hidden" id="pricing_type" value="">
      <input type="hidden" id="priceBookEntryId" value="">
      <input type="hidden" id="campaignId" value="">

    </body>
    <script src="{{asset('public/booking/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
<script src='https://assets.mamopay.com/public/checkout.min.js'></script>    
    <script src="{{asset('public/booking/assets/owlcarousel/src/js/owl.carousel.js')}}" ></script>
    <script src="{{asset('public/booking/assets/bootstrap/js/bootstrap.min.js')}}" ></script>
    <script src="{{asset('public/booking/assets/js/jquery.preloadinator.min.js')}}"></script>
    <script  type="text/javascript" src='https://maps.google.com/maps/api/js?key=AIzaSyDOS8jkm5pyE_ZbsGf5sGO5nz7NxGXHM_8&amp;libraries=places'></script>

    <script src="{{asset('public/booking/assets/js/locationpicker.jquery.js')}}"></script>
    <script src="{{asset('public/booking/assets/js/maplace.js')}}"></script>
    <script src="{{asset('public/booking/assets/js/points.js')}}"></script>


<script src="{{asset('public/admin_asset/assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/vendor/libs/quill/quill.js')}}"></script>
<script src="{{asset('public/admin_asset/assets/js/forms-editors.js')}}"></script>

<!-- Fixed_Header_Script -->
<script>

$(document).ready(function() {

    // Function to update infoTotal based on the active button's data attributes
    function updateInfoTotal() {
        var infoPrice = $('.selectService.active').data('price') || 0;
        var infoVat = $('.selectService.active').data('vat') || 0;
        var total = parseFloat(infoPrice) + parseFloat(infoVat);

        // Update the content of the infoTotal element
        $('#sel_ser').text($('.selectService.active').text());
        $('.infoService').text($('.selectService.active').text());
        $('.infoPrice').text(infoPrice);
        $('.infoVat').text(infoVat);
        $('.infoTotal').text(total.toFixed(2));
        
        $('#price').val(infoPrice);
        $('#serviceType').val($('.selectService.active').text());
        $('#vat').val(infoVat);
        $('#total').val(total.toFixed(2));
        $('.infoTotal_two').html('AED '+total.toFixed(2)+' <span class="enable-right-block-btn"><svg enable-background="new 0 0 32 32" height="16px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M18.221,7.206l9.585,9.585c0.879,0.879,0.879,2.317,0,3.195l-0.8,0.801c-0.877,0.878-2.316,0.878-3.194,0  l-7.315-7.315l-7.315,7.315c-0.878,0.878-2.317,0.878-3.194,0l-0.8-0.801c-0.879-0.878-0.879-2.316,0-3.195l9.587-9.585  c0.471-0.472,1.103-0.682,1.723-0.647C17.115,6.524,17.748,6.734,18.221,7.206z" fill="#515151"/></svg></span>');

        // Update new total
        updatenewTotal();
    }

    // Initial update on page load
    updateInfoTotal();

    // Button click event handler for selectService
    $('.selectService').click(function() {
        $('.selectService').removeClass('active');
        $(this).addClass('active');
        updateInfoTotal();
    });

    // Button click event handler for professionalsHours
    $('.professionalsHours').click(function() {
        $('.professionalsHours').removeClass('active');
        $(this).addClass('active');
        var professional_hours = $('.professionalsHours.active').text();
        $('.infoDuration').text(professional_hours + ' Hours');
        $('#professionalsHours').val(professional_hours);
        updatenewTotal();
    });

    // Button click event handler for professionalsNeed
    $('.professionalsNeed').click(function() {
        $('.professionalsNeed').removeClass('active');
        $(this).addClass('active');
        var professionalsNeed = $('.professionalsNeed.active').text();
        $('.infoProfessionals').text(professionalsNeed);
        $('.select-professional').hide();
        $('#professionalsNeed').val(professionalsNeed);
        updatenewTotal();
    });

    // Button click event handler for cleaningMaterial
    $('.cleaningMaterial').click(function() {
        $('.cleaningMaterial').removeClass('active');
        $(this).addClass('active');
        var cleaningMaterial = $('.cleaningMaterial.active').text();
        $('.infoMaterial').text(cleaningMaterial);
        if (cleaningMaterial === 'Yes') {
            $('.material-field').show();
            var professional_hours = parseFloat($(".professionalsHours.active").text());
            var professional_needs = parseFloat($(".professionalsNeed.active").text());
            var material_price = $('.selectService.active').attr('data-MaterialPRICE') * professional_hours * professional_needs;
            $('#materialAmount').val(material_price);
            updatenewTotal();
        } else {
            // Hide the material field
            $('.material-field').hide();
            var professional_hours = parseFloat($(".professionalsHours.active").text());
            var professional_needs = parseFloat($(".professionalsNeed.active").text());
            var material_price = $('.selectService.active').attr('data-MaterialPRICE') * professional_hours * professional_needs;
            $('#materialAmount').val('no-'+material_price);
            updatenewTotal();
        }
        
    });

    // Trigger update on page load
    updatenewTotal();
});

function updatenewTotal() {
    var price = parseFloat($('.selectService.active').attr('data-PRICE'));
    var vat = parseFloat($('.selectService.active').attr('data-VAT'));
    var total = parseFloat($("#total").val());
    var professionalsHours = parseFloat($("#professionalsHours").val());
    var professionalsHoursprice = parseFloat($('.selectService.active').attr('data-HoursPRICE')) || 1;
    var professionalsHoursvat = parseFloat($('.selectService.active').attr('data-HoursVAT')) || 1;

    var professionalsNeed = parseFloat($("#professionalsNeed").val());
    var professionalsNeedprice = parseFloat($('.selectService.active').attr('data-professionalsPRICE')) || 1;
    var professionalsNeedvat = parseFloat($('.selectService.active').attr('data-professionalsVAT')) || 1;

    var materialAmount = parseFloat($("#materialAmount").val());

    var calculatedPrice = (price !== null && price !== undefined && price > 0) ? price : 0;
    calculatedPrice += (professionalsHoursprice !== null && professionalsHoursprice !== undefined && professionalsHoursprice > 0) ? professionalsHoursprice * professionalsHours : 0;
    calculatedPrice += (professionalsNeedprice !== null && professionalsNeedprice !== undefined && professionalsNeedprice > 0) ? professionalsNeedprice * professionalsNeed : 0;

    var calculatedVat = (vat !== null && vat !== undefined && vat > 0) ? vat : 0;
    calculatedVat += (professionalsHoursvat !== null && professionalsHoursvat !== undefined && professionalsHoursvat > 0) ? professionalsHoursvat * professionalsHours : 0;
    calculatedVat += (professionalsNeedvat !== null && professionalsNeedvat !== undefined && professionalsNeedvat > 0) ? professionalsNeedvat * professionalsNeed : 0;

    var calculatedTotal = calculatedPrice + calculatedVat;
  

    var materialAmountcal = (materialAmount !== null && materialAmount !== undefined && materialAmount > 0) ? materialAmount : 0;
    $(".infoMat").text(parseFloat(materialAmountcal));
       
    calculatedPrice += materialAmountcal;
    
    calculatedTotal += materialAmountcal;

    $('.infoPrice').text(calculatedPrice);
    $('.infoVat').text(calculatedVat);
    $('.infoTotal').text(calculatedTotal.toFixed(2));
            $('.infoTotal_two').html('AED '+calculatedTotal.toFixed(2)+' <span class="enable-right-block-btn"><svg enable-background="new 0 0 32 32" height="16px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M18.221,7.206l9.585,9.585c0.879,0.879,0.879,2.317,0,3.195l-0.8,0.801c-0.877,0.878-2.316,0.878-3.194,0  l-7.315-7.315l-7.315,7.315c-0.878,0.878-2.317,0.878-3.194,0l-0.8-0.801c-0.879-0.878-0.879-2.316,0-3.195l9.587-9.585  c0.471-0.472,1.103-0.682,1.723-0.647C17.115,6.524,17.748,6.734,18.221,7.206z" fill="#515151"/></svg></span>');

}


  window.onscroll = function() {myFunction()};

  var mainheader = document.getElementById("mainheader");
  var stickyheader = mainheader.offsetTop;

  function myFunction() {
    if (window.pageYOffset > stickyheader) {
      mainheader.classList.add("stickyheader");
    } else {
      mainheader.classList.remove("stickyheader");
    }
  }

  $(document).ready(function(){

// Define variables for current and next fieldsets, and opacity
var current_fs, next_fs, previous_fs;
var opacity;

// Event handler for the "Next" button click
$(".next").click(function() {
  // Get the current and next fieldsets
  current_fs = $(this).parent();
  next_fs = $(this).parent().next();

  // Add 'active' class to the corresponding progress bar item
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

  // Update the displayed active tab text
 var activeTabText = $("#progressbar li").eq($("fieldset").index(next_fs)).text();
$('.activeTabText').html(activeTabText);
var servicename = $('.infoService').text().trim();


// Replace spaces with hyphens in the activeTabText
// var id = servicename.replace(/ /g, "_");
// console.log("#" + id);
// Check if it's the first "Next" button click
if ($(".next").index(this) === 0) {
    // Show the modal with the id derived from activeTabText
    $(".modelforallservices .modal-title").text(servicename);
    var btn = $('.selectService.active').data('modeldescription');
        $(".modelforallservices .modal-body").html(btn);
    var isQuillBlank = $('.ql-editor.ql-blank').length > 0;

if (isQuillBlank) {
   
} else {
    // Quill editor does not have the 'ql-blank' class, proceed to show the modal
    var quillContent = $('.ql-editor').html();
    $(".modelforallservices .modal-body").html(quillContent);
    $(".modelforallservices").modal('show');
     var quill = new Quill('.ql-editor', {
       
        readOnly: true, // if the content is not meant to be editable
        // ... other configurations
    });
    var tooltipElement = document.querySelector('.ql-tooltip');
    if (tooltipElement) {
        tooltipElement.remove();
    }
}


}

  // Show the next fieldset
  next_fs.show();

  // Animate the transition between current and next fieldsets
  current_fs.animate({ opacity: 0 }, {
    step: function(now) {
      // Animation step function to adjust opacity
      opacity = 1 - now;

      // Hide the current fieldset and set its position to relative
      current_fs.css({
        'display': 'none',
        'position': 'relative'
      });

      // Adjust the opacity of the next fieldset
      next_fs.css({ 'opacity': opacity });
    },
    duration: 600 // Animation duration in milliseconds
  });
});

$(".previous").click(function(){

  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
var activeTabText = $("#progressbar li").eq($("fieldset").index(previous_fs)).text();
$('.activeTabText').html(activeTabText); 
//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
  step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
  'display': 'none',
  'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 600
});
});

$('.radio-group .radio').click(function(){
  $(this).parent().find('.radio').removeClass('selected');
  $(this).addClass('selected');
});







});


</script>

<script>
$(document).ready(function() {
    // Initial infoTotal value
    var infoTotal = parseFloat($('.infoTotal').text());

    // Click event handler for image toggles
    $('.image-toggle').click(function() {
        // Get the price of the clicked extra
        var extraPrice = parseFloat($(this).data('price'));

        // If the image is currently active (has a border), subtract its price from infoTotal and remove the border
        if ($(this).hasClass('active')) {
            infoTotal -= extraPrice;
            $(this).removeClass('active');
        } else {
            // If the image is not active, add its price to infoTotal and add a border to indicate selection
            infoTotal += extraPrice;
            $(this).addClass('active');
        }

        // Update the displayed infoTotal
        $('.infoTotal').text(infoTotal.toFixed(2));
    });
});
   document.addEventListener('DOMContentLoaded', function () {
        const images = document.querySelectorAll('.image-toggle');

        images.forEach(function (image) {
            image.addEventListener('click', function () {
                // Toggle grayscale filter on click
                if (image.style.filter === 'grayscale(0%)') {
                    image.style.filter = 'grayscale(100%)';
                } else {
                    image.style.filter = 'grayscale(0%)';
                }
            });
        });
    });
    
    $("#regionId").change(function() {
    // Get the selected option value
    var selectedValue = $(this).val();

    // Get the current date
var currentDate = new Date();
    currentDate.setDate(currentDate.getDate() + 1);
    // Create an array to store the next 14 days
    var daysArray = [];
$('#showdays').empty();

    // Loop through the next 14 days
    for (var i = 0; i < 14; i++) {
        // Get the date for the current iteration
       var nextDate = new Date(currentDate);
        nextDate.setDate(currentDate.getDate() + i);

        // Get the day, date, and month for the current iteration
        var day = nextDate.toLocaleDateString('en-US', { weekday: 'short' });
        var date = nextDate.getDate();
        var month = nextDate.toLocaleDateString('en-US', { month: 'short' });

        // Create the full date string in the format "Day, Date Month Year"
        var fullDate = day + ', ' + date + ' ' + month + ' ' + nextDate.getFullYear();

        // Push the full date string to the daysArray
        daysArray.push(fullDate);
        // Append the days to the showdays element
        $('#showdays').append('<div class="item"><div class="field" style="margin-right: 0px !important;"><span class="day">' + day + '</span><button type="button" class="num days " data-full="' + fullDate + '" data-value="' + day + '">' + date + '</button></div></div>');
    }
   
});


$(document).ready(function() {
    
     $('#likeusstart').on('click', '.fromtime', function() {
          $(".fromtime").removeClass('active');
         $(this).addClass('active');
         $('.infoTime').text($(this).text());
          var time = $(this).text(); // Get the text content of the current element
    var hours = time.split(":")[0]; // Extract the hours part
   
          $('.end_time').text(hours + ':30');
         
     });
    // Event delegation for dynamically added elements
    $('#showdays').on('click', '.days', function() {
        $(".days").removeClass('active');
        $(this).addClass('active');
        $('.SelectedDate').text($(this).data("full"));
        
        var Value = $(this).data("value");
        var fulldate = $(this).data("full");
        var address = $("#regionId").val();
        var infoProfessionals  = $(".infoProfessionals").text();
        var infoDuration  = $(".infoDuration").text();
        
        // Create a new FormData object
        var formData = new FormData();

        // Append the variables to the formData object
        formData.append('selectedValue', Value);
        formData.append('fulldate', fulldate);
        formData.append('address', address);
        formData.append('infoProfessionals', infoProfessionals);
        formData.append('infoDuration', infoDuration);
         $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        // Perform AJAX request
        $.ajax({
            url: '/getTimeSlot', // Replace with your backend endpoint
            type: 'POST', // Adjust the HTTP method if needed
            data: formData, // Send the formData object
            processData: false, // Ensure that the data is not processed
            contentType: false, // Ensure that the content type is not set
            // Assuming 'response' contains the JSON data returned from the server
success: function(response) {
    $('#likeusstart').empty();
    // Iterate over the response data
    for (var i = 0; i < response.length; i++) {
        // Extract the 'fromTime' value
        var fromTime = response[i].fromTime;

        // Create a new element containing the 'fromTime' value
        var newElement = '<div class="item"><div class="field"><button type="button" class="num days fromtime">' + fromTime + '</button></div></div>';

        // Append the new element inside the specified <div>
      
        $('#likeusstart').append(newElement);
    }
},

            error: function(error) {
                console.error(error);
            }
        });
    });
    
    
    
        $(document).on('click', '#makecomplete', function() {
      
        
        var sname = $('.infoService').text().trim();
        var infoDuration = $('.infoDuration').text().split(" ")[0];
        var infoProfessionals  = $(".infoProfessionals").text();
        var infoMaterial  = $(".infoMaterial").text();
        var infoFrequency  = $(".infoFrequency").text();
        var fulldate  = $(".SelectedDate").text();
        var infoTime  = $(".infoTime2").text();
        var address  =  $("#regionId").val();
        var infoTotal  = $(".infoTotal").text();

        // Create a new FormData object
        var formData = new FormData();

        // Append the variables to the formData object
        formData.append('sname', sname);
        formData.append('Date', fulldate);
        formData.append('ADDRESS', address);
        formData.append('NoP', infoProfessionals);
        formData.append('Duration', infoDuration);
        formData.append('Material', infoMaterial);
        formData.append('Frequency', infoFrequency);
        formData.append('StartTime', infoTime);
        formData.append('Total', infoTotal);
        formData.append('buildingType', $(".buildingType").val());
        var idsArray = $(".image-toggle.active").map(function() {
    return $(this).data('id');
}).get();
        formData.append('extra', idsArray);
        
        
         $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        // Perform AJAX request
        $.ajax({
            url: '/savebooking', // Replace with your backend endpoint
            type: 'POST', // Adjust the HTTP method if needed
            data: formData, // Send the formData object
            processData: false, // Ensure that the data is not processed
            contentType: false, // Ensure that the content type is not set
            // Assuming 'response' contains the JSON data returned from the server
success: function(response) {
   
       
        alert("Booking successfully!");
        window.location.reload();
    
},

error: function(error) {
    // Parse the JSON response to extract the error message
    var responseJSON = JSON.parse(error.responseText);
    var errorMessage = responseJSON.error;

    // Display the error message in an alert
    alert(errorMessage);
}


        });
    });
    
    
    
    
        
        $(document).on('click', '#paymentlink', function() {
      
        
        var sname = $('.infoService').text().trim();
     
        var infoTotal  = $(".infoTotal").text();

        // Create a new FormData object
        var formData = new FormData();

        // Append the variables to the formData object
        formData.append('sname', sname);
      
        formData.append('Total', infoTotal);

        
        
         $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        
        // Perform AJAX request
        $.ajax({
            url: '/paymentlink', // Replace with your backend endpoint
            type: 'POST', // Adjust the HTTP method if needed
            data: formData, // Send the formData object
            processData: false, // Ensure that the data is not processed
            contentType: false, // Ensure that the content type is not set
            // Assuming 'response' contains the JSON data returned from the server
success: function(response) {
   
       
        alert("link gen!");
      
    
},

error: function(error) {
    // Parse the JSON response to extract the error message
    var responseJSON = JSON.parse(error.responseText);
    var errorMessage = responseJSON.error;

    // Display the error message in an alert
    alert(errorMessage);
}


        });
    });
    
    
    
});
  $(document).ready(function(){
    $(".enable-right-block-btn").click(function(){
      $(".content-right-view-block").addClass("content-right-view-block-active");
    });
  });
  
    $(".remove-right-content-block").click(function(){
      $(".content-right-view-block").removeClass("content-right-view-block-active");
    });


</script>

</html>