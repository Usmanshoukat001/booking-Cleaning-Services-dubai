<!-- mobile menu info -->
@extends('layouts.app') @section('content')
<style>


  .dropdowncenter {
    display: flex;
    width: 100%;
    transform: translateY(50%);
  }

  .dropdowncontainer {
    align-items: center;
    justify-content: center;
    display: block;
    min-width: 231.5px;
    width: 100% !important;
    max-width: 483px;
  }



  /* the code below is for the dropdown menu */
  .wrapper-dropdown {
    position: relative;
    display: inline-block;
    min-width: 231.5px;
    width: 100%; !important;
    max-width: 483px;
    padding: 0px 0px 0px 0px;
    min-height: 67px;
    border-radius: 12px 12px 15px 15px;
    background: #fff;
    text-align: left;
    color: black;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    margin-bottom: 20px;
    font-family: Arial;
  }


  .scrollable-menu {
    height: auto;
    max-height: 200px;
    overflow-x: hidden;
  }

  .arrow {
    margin-left: 10px;
    margin-right: 10px;
    margin-top: 17px;
    float: right;
    rotate: 180deg;
  }

  .selected-display {
    position: absolute;
    top: 50%;
    left: 36%;
    transform: translate(-50%, -50%);
    font-weight:700;
    color:#bebebe;
  }

  svg {
    transition: all 0.3s;
  }

  .wrapper-dropdown::before {
    position: absolute;
    top: 50%;
    right: 16px;

    margin-top: -2px;

    border-width: 6px 6px 0 6px;
    border-style: solid;
    border-color: #fff transparent;
  }

  .rotated {
    transform: rotate(-180deg);
  }

  .wrapper-dropdown .dropdown {
    transition: 0.3s;

    position: absolute;
   top: 80%;
    right: 0;
    left: 0;

    margin: 0;
    padding: 0;

    list-style: none;

    z-index: 100;

    border-radius: 15px;
    box-shadow: inherit;
    background: inherit;

    -webkit-transform-origin: top;
    -moz-transform-origin: top;
    -ms-transform-origin: top;
    transform-origin: top;

    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;

    opacity: 0;
    visibility: hidden;
        height: 300px;
    overflow: scroll;
  }

  .wrapper-dropdown .dropdown li {
    padding: 0 15px;
    line-height: 45px;
    overflow: hidden;
  }

  .wrapper-dropdown .dropdown li:last-child {
    border-bottom: none;
  }

  .dropdown {
    padding: 0.5rem !important;
  }

  .wrapper-dropdown .dropdown li:hover {

    border-radius: 10px;
  }

  .wrapper-dropdown.active .dropdown {
    opacity: 1;
    visibility: visible;

    border-radius: 15px;
  }

    .container-scroll {
    width: 480px;
    height: 140px;
    overflow-x: scroll;
    overflow-y: hidden;
     margin-left: 147px;
      align-items:center;

  }

  .inner {
    height: 100%;
    white-space:nowrap;
    align-items:center;
  }

  .floatLeft {
    margin:30px 90px 50px 10px;
    display: inline-block;
  }
   .toptexthero{
           margin-top:15%; margin-left:12%; width: 50%; font-size:54px;
       }

   p h1 {
   color: #030303 !important;
   }
    .service-item {
            text-align: center;
        }

        /* Adjustments for the carousel controls */
        .carousel-control-next-icon, .carousel-control-prev-icon {
            background-color: #3d3935;
        }
          .carousel-control-next {
            left: 94%;
            bottom: 45px;
            background-color: unset !important; /* Set background color to unset */
            color: black; /* Set font color to black */
            font-size: 1.5rem; /* Increase font size */
        }
        .carousel-control-prev {
    left: -45px !important;
}
        /* Adjust layout for smaller screens */
/* Adjust layout for large and medium screens */
@media (min-width: 768px) {
    #serviceCarousel .carousel-item .row {
        display: flex;
    }
}

/* Adjust layout for small screens */
@media (max-width: 576px) {
    #serviceCarousel .carousel-item .row {
        justify-content: center;
    }
    #serviceCarousel .carousel-item .col-lg-3, 
    #serviceCarousel .carousel-item .col-md-3 {
        flex: 0 0 50%;
        max-width: 100%;
    }
}


</style>
<main>
  <!-- hero area start here -->
  <section class="tp-slider-area" style="background-color: #a9d2ff; position: relative;">
        <div class="container" ><br><br>
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 ">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <div class="lc-block mb-3">
                    <div editable="rich">
                       
                              <h2 class="tp-section-title">{{$herosection['title'] ?? ''}}</h2>

                            <p></p>
                        </h2>
                    </div>
                </div>

                <div class="lc-block mb-3">
                    <div editable="rich">
                        <p class="lead">
                            <div id="serviceCarousel" class="carousel slide" >
    <div class="carousel-inner">
        <!-- Service Items -->
        <div class="carousel-item active">
            <div class="row">
                @foreach($servics as $index => $servicss)
                    @php
                        $servicedata = json_decode($servicss->pjson , true);
                    @endphp
                    <div class="col-md-3">
                        <a href="/service/{{ Illuminate\Support\Str::slug($servicss->servicename, '-') }}">
                            <div class="text-center">
                                <img height="90" src="{{ asset('public/service/' . $servicedata['serviceicon'] ?? '') }}" />
                                <br />
                                {!! str_replace(' ', '<br>', e($servicss->servicename)) !!}
                            </div>
                        </a>
                    </div>
                    <!-- Break every 4 items -->
                    @if(($index + 1) % 4 == 0)
                        </div></div><div class="carousel-item"><div class="row">
                    @endif
                @endforeach
            </div>
        </div>
    </div>

   @if($servics->count() > 4) <!-- Check if there are more than 4 items -->
        <a class="carousel-control-prev" href="#serviceCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#serviceCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    @endif
</div>

        
                        </p>
                    </div>
                </div>

                <div class="lc-block d-grid gap-2 d-md-flex justify-content-md-start">
        <div class="dropdowncenter">
          <div class="dropdowncontainer">
            <div class="wrapper-dropdown" id="dropdown">
              <span class="selected-display" id="destination"
                >Choose the service you need</span
              >
              <svg
                class="arrow"
                id="drp-arrow"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="transition-all ml-auto rotate-180"
              >
                <path
                  d="M7 14.5l5-5 5 5"
                  stroke="currentColor"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </svg>
              <ul class="dropdown">
                  @foreach($servics as $servicss)
            @php
$servicedata = json_decode($servicss->pjson , true);
@endphp
                <li class="item">
                  <a
                    as="a"
                    class="Link__StyledLink-sc-pqpwlm-0 kTKccK"
                    href="/service/{{ Illuminate\Support\Str::slug($servicss->servicename, '-') }}"
                  >
                    <div class="">
                      <div class="row">
                        <div class="col-sm-2 text-center">
                          <img height="50" src="{{ asset('public/service/' . $servicedata['serviceicon'] ?? '') }}" />
                        </div>
                        <div class="col-sm-10">
                          <div class="row">
                            <div class="col-12">
                              <p
                                style=""
                                class="option__OptionHeader-sc-18t8vku-3 ctgRpl"
                              >
                                {{$servicss->servicename}}
                              </p>
                            </div>
                            <div class="col-12">
<!--                              <p-->
<!--                                class="option__OptionDescription-sc-18t8vku-4 bDscl"-->
<!--                              >-->
<!--{{$servicedata['shortDescription']}}-->
<!--                              </p>-->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>
                <hr>

    @endforeach
              </ul>
            </div>
          </div>
          <div
            class="d-none d-lg-block tp-appoint text-end wow fadeInUp"
            data-wow-delay=".9s"
            style="
              margin-bottom: 25px !important;
              margin-left: 25px;
              visibility: visible;
              animation-delay: 0.9s;
              animation-name: fadeInUp;
            "
          >
            <button style="border-radius: 40px" type="submit" class="theme-btn">
              Book Now
            </button>
          </div>
        </div>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block offset-lg-1 p-0 overflow-hidden shadow-lg">
                <img class="rounded-start w-100 h-100" src="{{ asset("public/siteLogo/" . optional($herosection)['image']) }}" alt="Photo by Diego PH" >
            </div>
        </div>
    </div>
      <br><br>
  </section>
  <!-- hero area end here -->
<!-- project area start here -->
  <section class="tp-project-area white-bg">
   
    <div
      class="tp-project-wrapper grey-bg pt-120 wow fadeInUp"
      data-wow-delay=".2s"
    >
      <div class="section-title-wrapper text-center mb-55 grey-bg">
        <h5 class="tp-section-subtitle common-yellow-shape mb-20" style="position: unset !important;">
         {{$servicesection['title'] ?? ''}}
        </h5>
      <h2 class="tp-section-title mb-20">{{$servicesection['title'] ?? ''}}</h2>
      </div>
      <div class="tp-project-active swiper-container">
        <div class="swiper-wrapper">
            
             @foreach($servics as $servicss)
            @php
$servicedata = json_decode($servicss->pjson , true);
@endphp

<div
            class="tp-project z-index swiper-slide mb-30 wow fadeInUp"
            data-wow-delay=".4s"
          >
            <div class="tp-project-img">
              <img
                src="{{ asset('public/service/' . $servicedata['serviceimage'] ?? '') }}"
                class="img-fluid" style="
    height: 190px;
"
                alt="img not found"
              />
            </div>
            <div class="tp-project-text">
              <div class="tp-project-text-content">
               
                <h4 class="tp-project-title">
                  <a href="/service/{{ Illuminate\Support\Str::slug($servicss->servicename, '-') }}">{{$servicss->servicename}}</a>
                </h4>
              </div>
              <div class="tp-project-text-icon">
                <a href="/service/{{ Illuminate\Support\Str::slug($servicss->servicename, '-') }}"><i class="flaticon-enter"></i></a>
              </div>
            </div>
          </div>
   @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- project area end here -->

  
  <!-- about area start here -->
  <section class="tp-about-area position-relative pt-120 pb-90 fix">
   
    <div class="container">
      <div class="row justify-content-xl-between justify-content-md-center">
        <div class="col-xl-5 col-12">
          <div class="tp-about-img z-index wow fadeInUp" data-wow-delay=".3s">
           <img
                src="{{ asset("public/siteLogo/" . optional($HowitworksSection)['image']) }}"
                alt="img not found"
              />
          </div>    
        </div>
        <div class="col-xl-6 col-md-10">
          <div class="tp-about-text z-index wow fadeInUp" data-wow-delay=".6s">
            <div class="section-title-wrapper mb-30">
              <h5 class="tp-section-subtitle common-yellow-shape mb-20">
              {{$HowitworksSection['title'] ?? ''}}
              </h5>
              <h2 class="tp-section-title">
                {{$HowitworksSection['title'] ?? ''}}
              </h2>
            </div>
            <p class="mb-40">
             {{$HowitworksSection['Description'] ?? ''}}
            </p>
            <div class="row mb-10">
              <div class="col-sm-6">
                <div class="tp-about-service mb-30">
                  <div class="tp-about-service-icon yellow-circle-shape mb-15">
                    <i class="flaticon-snowfall"></i>
                  </div>
                  <div class="tp-about-service-text">
                    <h4
                      class="tp-about-service-text-title mb-15 hover-theme-color"
                    >
                      <a href="/booking">{{$HowitworksSection['text1'] ?? ''}}</a>
                    </h4>
                   
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="tp-about-service mb-30">
                  <div class="tp-about-service-icon yellow-circle-shape mb-15">
                    <i class="flaticon-business-and-trade"></i>
                  </div>
                  <div class="tp-about-service-text">
                    <h4
                      class="tp-about-service-text-title mb-15 hover-theme-color"
                    >
                      <a href="/booking">{{$HowitworksSection['text2'] ?? ''}}</a>
                    </h4>
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-10">
              <div class="col-sm-6">
                <div class="tp-about-service mb-30">
                  <div class="tp-about-service-icon yellow-circle-shape mb-15">
                    <i class="flaticon-booking"></i>
                  </div>
                  <div class="tp-about-service-text">
                    <h4
                      class="tp-about-service-text-title mb-15 hover-theme-color"
                    >
                      <a href="/booking">{{$HowitworksSection['text3'] ?? ''}}</a>
                    </h4>
                   
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="tp-about-number mb-30">
                  <div class="tp-about-number-icon">
                    <i class="flaticon-phone-call-1"></i>
                  </div>
                  <div class="tp-about-number-text">
                    <span>Free Consutacy</span>
                    <a href="tel:{{$Sitesetting->phone ?? ''}}">{{$Sitesetting->phone ?? ''}}</a>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about area end here -->

  <!-- brand area start here -->
  <div class="brand-area theme-dark-bg pt-100 pb-100">
    <div class="container">
      <div class="brand-active swiper-container">
        <div class="swiper-wrapper">
            
            
              @if(isset($Brands))
    @foreach ($Brands as $key => $photo)
          <div
            class="brand-wrapper swiper-slide wow fadeInUp"
            data-wow-delay=".3s"
            data-swiper-autoplay="5000"
          >
            <a href="#"
              ><img
                src="{{ asset('public/siteLogo') }}/{{ $photo->brand }}"
                class="img-fluid"
                alt="img"
            /></a>
          </div>
 
 @endforeach
    @endif
 
        </div>
      </div>
    </div>
  </div>
  <!-- brand area end here -->

  <!-- service area start here -->
  <section class="tp-services-area theme-dark-bg">
    <div class="tp-custom-container">
      
    </div>
  </section>
  <!-- service area end here -->

 
  
  <!-- blog area start here -->
  <section class="tp-blog-area pt-90 pb-85">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div
            class="section-title-wrapper text-center mb-55 wow fadeInUp"
            data-wow-delay=".2s"
          >
            <h5 class="tp-section-subtitle common-yellow-shape mb-20">
            {{$MeetsomeofourStarsSection['title'] ?? ''}}
            </h5>
            <h2 class="tp-section-title mb-25">
            {{$MeetsomeofourStarsSection['title'] ?? ''}}
            </h2>
          </div>
        </div>
      </div>
      <div class="row">

          @if(isset($homepagemstar) && isset($homepagemstar['images']))
    @foreach($homepagemstar['images'] as $key => $imageData)
        <div class="col-lg-4 col-md-6">
          <div class="tp-blog mb-30 wow fadeInUp" data-wow-delay=".4s">
            <div class="tp-blog-img mb-25">
              <a href="/booking"
                ><img
                  src="{{ asset('public/siteLogo/' . $imageData['image']) }}"
                  class="img-fluid"
                  alt="img not found"
              /></a>
             
            </div>
            <div class="tp-blog-text">
              
              <h4 class="tp-blog-title mb-20">
                <a href="/booking"
                  >{{ $imageData['text'] }}</a
                >
              </h4>
             
            </div>
          </div>
        </div>
         @endforeach
@endif

      </div>
    </div>
  </section>
  <!-- blog area end here -->
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  const selectedAll = document.querySelectorAll(".wrapper-dropdown");

  selectedAll.forEach((selected) => {
    const optionsContainer = selected.children[2];
    const optionsList = selected.querySelectorAll("div.wrapper-dropdown li");

    selected.addEventListener("click", () => {
      let arrow = selected.children[1];

      if (selected.classList.contains("active")) {
        handleDropdown(selected, arrow, false);
      } else {
        let currentActive = document.querySelector(".wrapper-dropdown.active");

        if (currentActive) {
          let anotherArrow = currentActive.children[1];
          handleDropdown(currentActive, anotherArrow, false);
        }

        handleDropdown(selected, arrow, true);
      }
    });

    // update the display of the dropdown
    // for (let o of optionsList) {
    //   o.addEventListener("click", () => {
    //     selected.querySelector(".selected-display").innerHTML = o.innerHTML;
    //   });
    // }
  });

  // check if anything else ofther than the dropdown is clicked
  window.addEventListener("click", function (e) {
    if (e.target.closest(".wrapper-dropdown") === null) {
      closeAllDropdowns();
    }
  });

  // close all the dropdowns
  function closeAllDropdowns() {
    const selectedAll = document.querySelectorAll(".wrapper-dropdown");
    selectedAll.forEach((selected) => {
      const optionsContainer = selected.children[2];
      let arrow = selected.children[1];

      handleDropdown(selected, arrow, false);
    });
  }

  // open all the dropdowns
  function handleDropdown(dropdown, arrow, open) {
    if (open) {
      arrow.classList.add("rotated");
      dropdown.classList.add("active");
    } else {
      arrow.classList.remove("rotated");
      dropdown.classList.remove("active");
    }
  }
  
  $(document).ready(function(){
    $('#serviceCarousel').carousel({
        interval: false // Disable auto sliding
    });
});

</script>
@endsection
