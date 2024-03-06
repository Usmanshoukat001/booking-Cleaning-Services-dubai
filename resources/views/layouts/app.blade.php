<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$Sitesetting->Title ?? ''}} </title>
    <meta name="description" content="{{$Sitesetting->Description ?? ''}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="canonical" href="{{$Sitesetting->Canonical ?? ''}}">
 <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/custom-animation.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/venobox.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/backToTop.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/default.css')}}">
  
</head>
<style>
/*-----------------------------------------------------------------------------------

    Template Name: Klenar - Cleaning Service HTML5 Template
    Description: Klenar - Cleaning Service HTML5 Template
    Author: Theme_Pure
    Version: 1.0

-----------------------------------------------------------------------------------

    CSS INDEX
    ===================

    01. Theme default
    02. Header
    03. Hero
    04. Cta
    05. About
    06. Services
    07. Choose
    08. Fact
    09. Pricing
    10. Testimonial
    11. Project
    12. Progress
    13. Blog
    14. Footer
    16. Feature
    17. Faq
    18. Brand
    19. Breadcrumb
    20. Contact
    21. Team

-----------------------------------------------------------------------------------*/
/*----------------------------------------*/
/*  01. Theme default
/*----------------------------------------*/
/* 1. Theme default css */
@import url("https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap");
body {
  font-family: "Roboto", sans-serif;
  font-weight: 400;
  font-style: normal;
  color: #1d3164;
  font-size: 16px;
}

.tp-custom-container {
  max-width: 1630px;
  min-width: 1630px;
  padding-left: 15px;
  padding-right: 15px;
  margin: 0 auto;
}
@media only screen and (min-width: 1600px) and (max-width: 1750px) {
  .tp-custom-container {
    max-width: 1570px;
    min-width: 1570px;
  }
}
@media only screen and (min-width: 1400px) and (max-width: 1599px), only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-custom-container {
    max-width: 100%;
    min-width: 100%;
  }
}

.img, img {
  max-width: 100%;
  transition: all 1.5s cubic-bezier(0, 0, 0.2, 1);
}

.f-left {
  float: left;
}

.f-right {
  float: right;
}

.fix {
  overflow: hidden;
}

a,
button,
i {
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
  text-decoration: none;
}

a:focus,
.button:focus {
  text-decoration: none;
  outline: none;
}

a:focus,
a:hover {
  color: inherit;
  text-decoration: none;
}

a,
button {
  color: inherit;
  outline: medium none;
  text-decoration: none;
}

button:focus, input:focus, input:focus, textarea, textarea:focus {
  outline: 0;
}

.uppercase {
  text-transform: uppercase;
}

.capitalize {
  text-transform: capitalize;
}

input,
select,
textarea {
  font-family: "Roboto", sans-serif;
  font-weight: 400;
  opacity: 1;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Nunito Sans", sans-serif;
  margin: 0px;
  font-style: normal;
  font-weight: 800;
  text-transform: normal;
  margin-bottom: 10px;
}

h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a {
  color: inherit;
}

ul {
  margin: 0px;
  padding: 0px;
}

p {
  font-size: 16px;
  font-weight: 400;
  line-height: 27px;
  color: #1d3164;
  margin-bottom: 10px;
}

i {
  line-height: 1;
  display: inline-block;
}

label {
  color: #1d3164;
  cursor: pointer;
  font-size: 14px;
  font-weight: 400;
}

.display-inline {
  display: inline-block;
}

select {
  -webkit-appearance: none;
  -moz-appearance: none;
}

input,
select {
  font-family: "Roboto", sans-serif;
  font-weight: 400;
}

.custom-pad-20 {
  padding-left: 10px;
  padding-right: 10px;
}

.custom-mar-20 {
  margin-right: -10px;
  margin-left: -10px;
}

.radius-50 {
  border-radius: 50px;
}

/*--
    - Input Placeholder
-----------------------------------------*/
* input::-moz-placeholder {
  font-size: 16px;
  opacity: 1;
  font-family: "Roboto", sans-serif;
  font-weight: 400;
}

* input::placeholder {
  font-size: 16px;
  opacity: 1;
  font-family: "Roboto", sans-serif;
  font-weight: 400;
}

/*--
    - Common Classes
-----------------------------------------*/
.clear {
  clear: both;
}

.translate-y--10 {
  transform: translateY(-10px);
}

/*--
    - Background color
-----------------------------------------*/
.theme-bg {
  background: #1d3164;
}

.theme-yellow-bg {
  background: #fed10c;
}

.white-bg {
  background: #ffffff;
}

.yellow-dark-bg {
  background: #ffc000;
}

.blue-dark-bg {
  background: #051868;
}

.theme-dark-bg {
  background: #1d3164;
}

.theme-dark-bg2 {
  background: #041459;
}

.theme-dark-bg3 {
  background: #18255e;
}

.grey-bg {
  background: #ecf3f0;
}

.bg-green-light {
  background: #084d2b;
}

.bg-gray-light {
  background: #f7f7f7;
}

/*--
    - color
-----------------------------------------*/
.white-color {
  color: #ffffff;
}

.theme-yelow-color {
  color: #fed10c;
}

.theme-blue-color {
  color: #102579;
}

.theme-color {
  color: #1d3164;
}

.font-normal {
  font-weight: 400 !important;
}

.color-theme-blue {
  color: #102579 !important;
}

.heading-color-black {
  color: #09150f !important;
}

.heading-color-black-with-hover {
  color: #09150f !important;
}
.heading-color-black-with-hover:hover {
  color: #1d3164 !important;
}

/*--
    - Margin & Padding
-----------------------------------------*/
/*-- Margin Top --*/
.mt-5 {
  margin-top: 5px;
}

.mt-10 {
  margin-top: 10px;
}

.mt-15 {
  margin-top: 15px;
}

.mt-20 {
  margin-top: 20px;
}

.mt-25 {
  margin-top: 25px;
}

.mt-30 {
  margin-top: 30px;
}

.mt-35 {
  margin-top: 35px;
}

.mt-40 {
  margin-top: 40px;
}

.mt-45 {
  margin-top: 45px;
}

.mt-50 {
  margin-top: 50px;
}

.mt-55 {
  margin-top: 55px;
}

.mt-60 {
  margin-top: 60px;
}

.mt-65 {
  margin-top: 65px;
}

.mt-70 {
  margin-top: 70px;
}

.mt-75 {
  margin-top: 75px;
}

.mt-80 {
  margin-top: 80px;
}

.mt-85 {
  margin-top: 85px;
}

.mt-90 {
  margin-top: 90px;
}

.mt-95 {
  margin-top: 95px;
}

.mt-100 {
  margin-top: 100px;
}

.mt-105 {
  margin-top: 105px;
}

.mt-110 {
  margin-top: 110px;
}

.mt-115 {
  margin-top: 115px;
}

.mt-120 {
  margin-top: 120px;
}

.mt-125 {
  margin-top: 125px;
}

.mt-130 {
  margin-top: 130px;
}

.mt-135 {
  margin-top: 135px;
}

.mt-140 {
  margin-top: 140px;
}

.mt-145 {
  margin-top: 145px;
}

.mt-150 {
  margin-top: 150px;
}

.mt-155 {
  margin-top: 155px;
}

.mt-160 {
  margin-top: 160px;
}

.mt-165 {
  margin-top: 165px;
}

.mt-170 {
  margin-top: 170px;
}

.mt-175 {
  margin-top: 175px;
}

.mt-180 {
  margin-top: 180px;
}

.mt-185 {
  margin-top: 185px;
}

.mt-190 {
  margin-top: 190px;
}

.mt-195 {
  margin-top: 195px;
}

.mt-200 {
  margin-top: 200px;
}

/*-- Margin Bottom --*/
.mb-5 {
  margin-bottom: 5px;
}

.mb-10 {
  margin-bottom: 10px;
}

.mb-15 {
  margin-bottom: 15px;
}

.mb-20 {
  margin-bottom: 20px;
}

.mb-25 {
  margin-bottom: 25px;
}

.mb-30 {
  margin-bottom: 30px;
}

.mb-35 {
  margin-bottom: 35px;
}

.mb-40 {
  margin-bottom: 40px;
}

.mb-45 {
  margin-bottom: 45px;
}

.mb-50 {
  margin-bottom: 50px;
}

.mb-55 {
  margin-bottom: 55px;
}

.mb-60 {
  margin-bottom: 60px;
}

.mb-65 {
  margin-bottom: 65px;
}

.mb-70 {
  margin-bottom: 70px;
}

.mb-75 {
  margin-bottom: 75px;
}

.mb-80 {
  margin-bottom: 80px;
}

.mb-85 {
  margin-bottom: 85px;
}

.mb-90 {
  margin-bottom: 90px;
}

.mb-95 {
  margin-bottom: 95px;
}

.mb-100 {
  margin-bottom: 100px;
}

.mb-105 {
  margin-bottom: 105px;
}

.mb-110 {
  margin-bottom: 110px;
}

.mb-115 {
  margin-bottom: 115px;
}

.mb-120 {
  margin-bottom: 120px;
}

.mb-125 {
  margin-bottom: 125px;
}

.mb-130 {
  margin-bottom: 130px;
}

.mb-135 {
  margin-bottom: 135px;
}

.mb-140 {
  margin-bottom: 140px;
}

.mb-145 {
  margin-bottom: 145px;
}

.mb-150 {
  margin-bottom: 150px;
}

.mb-155 {
  margin-bottom: 155px;
}

.mb-160 {
  margin-bottom: 160px;
}

.mb-165 {
  margin-bottom: 165px;
}

.mb-170 {
  margin-bottom: 170px;
}

.mb-175 {
  margin-bottom: 175px;
}

.mb-180 {
  margin-bottom: 180px;
}

.mb-185 {
  margin-bottom: 185px;
}

.mb-190 {
  margin-bottom: 190px;
}

.mb-195 {
  margin-bottom: 195px;
}

.mb-200 {
  margin-bottom: 200px;
}

/*-- Margin Left --*/
.ml-5 {
  margin-left: 5px;
}

.ml-10 {
  margin-left: 10px;
}

.ml-15 {
  margin-left: 15px;
}

.ml-20 {
  margin-left: 20px;
}

.ml-25 {
  margin-left: 25px;
}

.ml-30 {
  margin-left: 30px;
}

.ml-35 {
  margin-left: 35px;
}

.ml-40 {
  margin-left: 40px;
}

.ml-45 {
  margin-left: 45px;
}

.ml-50 {
  margin-left: 50px;
}

.ml-55 {
  margin-left: 55px;
}

.ml-60 {
  margin-left: 60px;
}

.ml-65 {
  margin-left: 65px;
}

.ml-70 {
  margin-left: 70px;
}

.ml-75 {
  margin-left: 75px;
}

.ml-80 {
  margin-left: 80px;
}

.ml-85 {
  margin-left: 85px;
}

.ml-90 {
  margin-left: 90px;
}

.ml-95 {
  margin-left: 95px;
}

.ml-100 {
  margin-left: 100px;
}

.ml-105 {
  margin-left: 105px;
}

.ml-110 {
  margin-left: 110px;
}

.ml-115 {
  margin-left: 115px;
}

.ml-120 {
  margin-left: 120px;
}

.ml-125 {
  margin-left: 125px;
}

.ml-130 {
  margin-left: 130px;
}

.ml-135 {
  margin-left: 135px;
}

.ml-140 {
  margin-left: 140px;
}

.ml-145 {
  margin-left: 145px;
}

.ml-150 {
  margin-left: 150px;
}

.ml-155 {
  margin-left: 155px;
}

.ml-160 {
  margin-left: 160px;
}

.ml-165 {
  margin-left: 165px;
}

.ml-170 {
  margin-left: 170px;
}

.ml-175 {
  margin-left: 175px;
}

.ml-180 {
  margin-left: 180px;
}

.ml-185 {
  margin-left: 185px;
}

.ml-190 {
  margin-left: 190px;
}

.ml-195 {
  margin-left: 195px;
}

.ml-200 {
  margin-left: 200px;
}

/*-- Margin Right --*/
.mr-5 {
  margin-right: 5px;
}

.mr-10 {
  margin-right: 10px;
}

.mr-15 {
  margin-right: 15px;
}

.mr-20 {
  margin-right: 20px;
}

.mr-25 {
  margin-right: 25px;
}

.mr-30 {
  margin-right: 30px;
}

.mr-35 {
  margin-right: 35px;
}

.mr-40 {
  margin-right: 40px;
}

.mr-45 {
  margin-right: 45px;
}

.mr-50 {
  margin-right: 50px;
}

.mr-55 {
  margin-right: 55px;
}

.mr-60 {
  margin-right: 60px;
}

.mr-65 {
  margin-right: 65px;
}

.mr-70 {
  margin-right: 70px;
}

.mr-75 {
  margin-right: 75px;
}

.mr-80 {
  margin-right: 80px;
}

.mr-85 {
  margin-right: 85px;
}

.mr-90 {
  margin-right: 90px;
}

.mr-95 {
  margin-right: 95px;
}

.mr-100 {
  margin-right: 100px;
}

.mr-105 {
  margin-right: 105px;
}

.mr-110 {
  margin-right: 110px;
}

.mr-115 {
  margin-right: 115px;
}

.mr-120 {
  margin-right: 120px;
}

.mr-125 {
  margin-right: 125px;
}

.mr-130 {
  margin-right: 130px;
}

.mr-135 {
  margin-right: 135px;
}

.mr-140 {
  margin-right: 140px;
}

.mr-145 {
  margin-right: 145px;
}

.mr-150 {
  margin-right: 150px;
}

.mr-155 {
  margin-right: 155px;
}

.mr-160 {
  margin-right: 160px;
}

.mr-165 {
  margin-right: 165px;
}

.mr-170 {
  margin-right: 170px;
}

.mr-175 {
  margin-right: 175px;
}

.mr-180 {
  margin-right: 180px;
}

.mr-185 {
  margin-right: 185px;
}

.mr-190 {
  margin-right: 190px;
}

.mr-195 {
  margin-right: 195px;
}

.mr-200 {
  margin-right: 200px;
}

/*-- Padding Top --*/
.pt-5 {
  padding-top: 5px;
}

.pt-10 {
  padding-top: 10px;
}

.pt-15 {
  padding-top: 15px;
}

.pt-20 {
  padding-top: 20px;
}

.pt-25 {
  padding-top: 25px;
}

.pt-30 {
  padding-top: 30px;
}

.pt-35 {
  padding-top: 35px;
}

.pt-40 {
  padding-top: 40px;
}

.pt-45 {
  padding-top: 45px;
}

.pt-50 {
  padding-top: 50px;
}

.pt-55 {
  padding-top: 55px;
}

.pt-60 {
  padding-top: 60px;
}

.pt-65 {
  padding-top: 65px;
}

.pt-70 {
  padding-top: 70px;
}

.pt-75 {
  padding-top: 75px;
}

.pt-80 {
  padding-top: 80px;
}

.pt-85 {
  padding-top: 85px;
}

.pt-90 {
  padding-top: 90px;
}

.pt-95 {
  padding-top: 95px;
}

.pt-100 {
  padding-top: 100px;
}

.pt-105 {
  padding-top: 105px;
}

.pt-110 {
  padding-top: 110px;
}

.pt-115 {
  padding-top: 115px;
}

.pt-120 {
  padding-top: 120px;
}

.pt-125 {
  padding-top: 125px;
}

.pt-130 {
  padding-top: 130px;
}

.pt-135 {
  padding-top: 135px;
}

.pt-140 {
  padding-top: 140px;
}

.pt-145 {
  padding-top: 145px;
}

.pt-150 {
  padding-top: 150px;
}

.pt-155 {
  padding-top: 155px;
}

.pt-160 {
  padding-top: 160px;
}

.pt-165 {
  padding-top: 165px;
}

.pt-170 {
  padding-top: 170px;
}

.pt-175 {
  padding-top: 175px;
}

.pt-180 {
  padding-top: 180px;
}

.pt-185 {
  padding-top: 185px;
}

.pt-190 {
  padding-top: 190px;
}

.pt-195 {
  padding-top: 195px;
}

.pt-200 {
  padding-top: 200px;
}

/*-- Padding Bottom --*/
.pb-5 {
  padding-bottom: 5px;
}

.pb-10 {
  padding-bottom: 10px;
}

.pb-15 {
  padding-bottom: 15px;
}

.pb-20 {
  padding-bottom: 20px;
}

.pb-25 {
  padding-bottom: 25px;
}

.pb-30 {
  padding-bottom: 30px;
}

.pb-35 {
  padding-bottom: 35px;
}

.pb-40 {
  padding-bottom: 40px;
}

.pb-45 {
  padding-bottom: 45px;
}

.pb-50 {
  padding-bottom: 50px;
}

.pb-55 {
  padding-bottom: 55px;
}

.pb-60 {
  padding-bottom: 60px;
}

.pb-65 {
  padding-bottom: 65px;
}

.pb-70 {
  padding-bottom: 70px;
}

.pb-75 {
  padding-bottom: 75px;
}

.pb-80 {
  padding-bottom: 80px;
}

.pb-85 {
  padding-bottom: 85px;
}

.pb-90 {
  padding-bottom: 90px;
}

.pb-95 {
  padding-bottom: 95px;
}

.pb-100 {
  padding-bottom: 100px;
}

.pb-105 {
  padding-bottom: 105px;
}

.pb-110 {
  padding-bottom: 110px;
}

.pb-115 {
  padding-bottom: 115px;
}

.pb-120 {
  padding-bottom: 120px;
}

.pb-125 {
  padding-bottom: 125px;
}

.pb-130 {
  padding-bottom: 130px;
}

.pb-135 {
  padding-bottom: 135px;
}

.pb-140 {
  padding-bottom: 140px;
}

.pb-145 {
  padding-bottom: 145px;
}

.pb-150 {
  padding-bottom: 150px;
}

.pb-155 {
  padding-bottom: 155px;
}

.pb-160 {
  padding-bottom: 160px;
}

.pb-165 {
  padding-bottom: 165px;
}

.pb-170 {
  padding-bottom: 170px;
}

.pb-175 {
  padding-bottom: 175px;
}

.pb-180 {
  padding-bottom: 180px;
}

.pb-185 {
  padding-bottom: 185px;
}

.pb-190 {
  padding-bottom: 190px;
}

.pb-195 {
  padding-bottom: 195px;
}

.pb-200 {
  padding-bottom: 200px;
}

/*-- Padding Left --*/
.pl-5 {
  padding-left: 5px;
}

.pl-10 {
  padding-left: 10px;
}

.pl-15 {
  padding-left: 15px;
}

.pl-20 {
  padding-left: 20px;
}

.pl-25 {
  padding-left: 25px;
}

.pl-30 {
  padding-left: 30px;
}

.pl-35 {
  padding-left: 35px;
}

.pl-40 {
  padding-left: 40px;
}

.pl-45 {
  padding-left: 45px;
}

.pl-50 {
  padding-left: 50px;
}

.pl-55 {
  padding-left: 55px;
}

.pl-60 {
  padding-left: 60px;
}

.pl-65 {
  padding-left: 65px;
}

.pl-70 {
  padding-left: 70px;
}

.pl-75 {
  padding-left: 75px;
}

.pl-80 {
  padding-left: 80px;
}

.pl-85 {
  padding-left: 85px;
}

.pl-90 {
  padding-left: 90px;
}

.pl-95 {
  padding-left: 95px;
}

.pl-100 {
  padding-left: 100px;
}

.pl-105 {
  padding-left: 105px;
}

.pl-110 {
  padding-left: 110px;
}

.pl-115 {
  padding-left: 115px;
}

.pl-120 {
  padding-left: 120px;
}

.pl-125 {
  padding-left: 125px;
}

.pl-130 {
  padding-left: 130px;
}

.pl-135 {
  padding-left: 135px;
}

.pl-140 {
  padding-left: 140px;
}

.pl-145 {
  padding-left: 145px;
}

.pl-150 {
  padding-left: 150px;
}

.pl-155 {
  padding-left: 155px;
}

.pl-160 {
  padding-left: 160px;
}

.pl-165 {
  padding-left: 165px;
}

.pl-170 {
  padding-left: 170px;
}

.pl-175 {
  padding-left: 175px;
}

.pl-180 {
  padding-left: 180px;
}

.pl-185 {
  padding-left: 185px;
}

.pl-190 {
  padding-left: 190px;
}

.pl-195 {
  padding-left: 195px;
}

.pl-200 {
  padding-left: 200px;
}

/*-- Padding Right --*/
.pr-5 {
  padding-right: 5px;
}

.pr-10 {
  padding-right: 10px;
}

.pr-15 {
  padding-right: 15px;
}

.pr-20 {
  padding-right: 20px;
}

.pr-25 {
  padding-right: 25px;
}

.pr-30 {
  padding-right: 30px;
}

.pr-35 {
  padding-right: 35px;
}

.pr-40 {
  padding-right: 40px;
}

.pr-45 {
  padding-right: 45px;
}

.pr-50 {
  padding-right: 50px;
}

.pr-55 {
  padding-right: 55px;
}

.pr-60 {
  padding-right: 60px;
}

.pr-65 {
  padding-right: 65px;
}

.pr-70 {
  padding-right: 70px;
}

.pr-75 {
  padding-right: 75px;
}

.pr-80 {
  padding-right: 80px;
}

.pr-85 {
  padding-right: 85px;
}

.pr-90 {
  padding-right: 90px;
}

.pr-95 {
  padding-right: 95px;
}

.pr-100 {
  padding-right: 100px;
}

.pr-105 {
  padding-right: 105px;
}

.pr-110 {
  padding-right: 110px;
}

.pr-115 {
  padding-right: 115px;
}

.pr-120 {
  padding-right: 120px;
}

.pr-125 {
  padding-right: 125px;
}

.pr-130 {
  padding-right: 130px;
}

.pr-135 {
  padding-right: 135px;
}

.pr-140 {
  padding-right: 140px;
}

.pr-145 {
  padding-right: 145px;
}

.pr-150 {
  padding-right: 150px;
}

.pr-155 {
  padding-right: 155px;
}

.pr-160 {
  padding-right: 160px;
}

.pr-165 {
  padding-right: 165px;
}

.pr-170 {
  padding-right: 170px;
}

.pr-175 {
  padding-right: 175px;
}

.pr-180 {
  padding-right: 180px;
}

.pr-185 {
  padding-right: 185px;
}

.pr-190 {
  padding-right: 190px;
}

.pr-195 {
  padding-right: 195px;
}

.pr-200 {
  padding-right: 200px;
}

.tp-section-subtitle {
  font-size: 16px;
  font-weight: 500;
}

.tp-section-title,
.tp-section-title-two {
  font-size: 55px;
  line-height: 1.18;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-section-title,
.tp-section-title-two {
    font-size: 48px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-section-title,
.tp-section-title-two {
    font-size: 40px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-section-title,
.tp-section-title-two {
    font-size: 36px;
  }
}
@media (max-width: 767px) {
  .tp-section-title,
.tp-section-title-two {
    font-size: 32px;
  }
  .tp-section-title br,
.tp-section-title-two br {
    display: none;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .tp-section-title br,
.tp-section-title-two br {
    display: inline-block;
  }
}

.tp-section-title-two {
  color: #09150f;
}
.tp-section-title-two span {
  color: #1d3164;
}
.tp-section-title-two span.theme-yellow {
  color: #fed10c;
}

.tp-section-subtitle-three {
  font-size: 18px;
  color: #1d3164;
  font-weight: 500ss;
}

.yellow-btn {
  font-size: 16px;
  font-weight: 500;
  border: none;
  outline: none;
  box-shadow: none;
  height: 60px;
  line-height: 60px;
  color: #1d3164;
  background: #fed10c;
  text-align: center;
  padding: 0px 38px;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  display: inline-block;
}
.yellow-btn:hover {
  background: #1d3164;
  color: #ffffff;
}

.theme-btn {
  font-size: 16px;
  display: inline-block;
  font-weight: 500;
  border: none;
  outline: none;
  box-shadow: none;
  height: 60px;
  line-height: 60px;
  color: #ffffff;
  background: #1d3164;
  text-align: center;
  padding: 0px 38px;
  cursor: pointer;
  position: relative;
  overflow: hidden;
}
.theme-btn:hover {
  background: #fed10c;
  color: #1d3164;
}

.yellow-btn:before,
.theme-btn:before {
  background-color: #fff;
  content: "";
  height: 150px;
  left: -75px;
  position: absolute;
  top: -35px;
  transform: rotate(35deg);
  transition: all 1600ms cubic-bezier(0.19, 1, 0.22, 1);
  width: 40px;
  opacity: 0;
}
.yellow-btn:hover:before,
.theme-btn:hover:before {
  left: 120%;
  transition: all 1300ms cubic-bezier(0.19, 1, 0.22, 1);
  opacity: 0.25;
}
.yellow-btn i,
.theme-btn i {
  vertical-align: middle;
  display: inline-block;
  margin-right: 2px;
  line-height: 1;
}

.hover-theme-color:hover {
  color: #1d3164;
}

@media (max-width: 767px) {
  .progress-wrap {
    right: 30px;
  }
}

.z-index {
  z-index: 2;
  position: relative;
}

.swiper-pagination-fraction, .swiper-pagination-custom, .swiper-container-horizontal > .swiper-pagination-bullets {
  width: inherit;
}

.swiper-container-horizontal.common-dots {
  position: relative;
}
.swiper-container-horizontal.common-dots .slide-dots {
  position: absolute;
  bottom: 0px;
  left: 50%;
  transform: translateX(-50%);
}

.swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet {
  display: inline-block;
  margin: 0px 5px;
  padding: 0px;
  height: 20px;
  width: 20px;
  border-radius: 50%;
  border: 3px solid #c6c9cb;
  display: inline-block;
  outline: none;
  cursor: pointer;
  background: none;
  font-size: 0px;
  opacity: 1;
}
.swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet.swiper-pagination-bullet-active {
  border-color: #1d3164;
}

/*--
    - Overlay
------------------------------------------*/
[data-overlay] {
  position: relative;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
[data-overlay]::before {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  content: "";
}

/*-- Overlay Color --*/
[data-overlay=light]::before {
  background-color: #ffffff;
}

[data-overlay=dark]::before {
  background-color: #102579;
}

/*-- Overlay Opacity --*/
[data-opacity="1"]::before {
  opacity: 0.1;
}

[data-opacity="2"]::before {
  opacity: 0.2;
}

[data-opacity="3"]::before {
  opacity: 0.3;
}

[data-opacity="4"]::before {
  opacity: 0.4;
}

[data-opacity="5"]::before {
  opacity: 0.5;
}

[data-opacity="6"]::before {
  opacity: 0.6;
}

[data-opacity="7"]::before {
  opacity: 0.7;
}

[data-opacity="8"]::before {
  opacity: 0.8;
}

[data-opacity="9"]::before {
  opacity: 0.9;
}

/*----------------------------------------*/
/*  02. Header
/*----------------------------------------*/
.tp-header-menu-area.header-sticky.sticky-menu {
  position: fixed;
  top: 0px;
  left: 0px;
  width: 100%;
  z-index: 999;
  background: #ffffff;
  animation: 800ms ease-in-out 0s normal none 1 running fadeInDown;
  box-shadow: 0 0 10px 3px rgba(0, 0, 0, 0.05);
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.tp-sticky-column {
  display: none;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-sticky-column {
    display: inherit;
  }
}

.tp-sticky-column-btn {
  display: none;
}

.sticky-menu .tp-sticky-column {
  display: inherit;
}
.sticky-menu .tp-sticky-column-btn {
  display: inherit;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .sticky-menu .tp-sticky-column-btn {
    display: none;
  }
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .sticky-menu .tp-sticky-column-btn .theme-btn {
    padding: 0px 25px;
  }
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-sticky-column-btn {
    display: none;
  }
}

.tp-sticky-btn {
  margin-left: auto;
  line-height: 1;
}

.tp-transparent-header-menu {
  position: absolute;
  top: 105px;
  left: 0px;
  right: 0px;
  z-index: 9;
  width: 100%;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-transparent-header-menu {
    position: static;
    background: #ffffff;
    box-shadow: 0 0 10px 3px rgba(0, 0, 0, 0.05);
    padding: 15px 0px;
  }
}

.tp-header-top-info {
  display: flex;
  align-items: center;
}

.tp-header-top-info-single-icon {
  float: left;
}
.tp-header-top-info-single-icon i {
  font-size: 45px;
  color: #ffffff;
  line-height: 0.8;
  vertical-align: middle;
}
.tp-header-top-info-single-text {
  overflow: hidden;
}
.tp-header-top-info-single-text a {
  color: #ffffff;
}
@media only screen and (min-width: 1400px) and (max-width: 1599px) {
  .tp-header-top-info-single.mr-85 {
    margin-right: 30px;
  }
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-header-top-info-single.mr-85 {
    margin-right: 20px;
  }
}
@media only screen and (min-width: 1400px) and (max-width: 1599px) {
  .tp-header-top-info-single.pr-40 {
    padding-right: 25px;
  }
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-header-top-info-single.pr-40 {
    padding-right: 20px;
  }
}
@media only screen and (min-width: 1400px) and (max-width: 1599px) {
  .tp-header-top-info-single.mr-40 {
    margin-right: 25px;
  }
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-header-top-info-single.mr-40 {
    margin-right: 20px;
  }
}

.tp-header-top-info-single-icon-call i {
  animation: phone-icon-animate 1.5s ease-in-out infinite;
}

.tp-header-top-info-single-label {
  font-size: 15px;
  color: #ffffff;
  display: block;
}

.tp-header-top-info-single-content {
  font-size: 16px;
  color: #ffffff;
  display: block;
}

.tp-header-top-info-single-btn {
  line-height: 1;
}

.border-right-1 {
  border-right: 1px solid #417e60;
}

.tp-main-menu-bg {
  background: #ffffff;
  margin-left: 30px;
  margin-right: 30px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-main-menu-bg {
    margin: 0px;
  }
}

.tp-main-menu ul {
  list-style: none;
}
.tp-main-menu ul li {
  display: inline-block;
  margin: 0px 23px;
  position: relative;
  /*submenu start*/
  /*submenu end*/
}
.tp-main-menu ul li a {
  font-size: 17px;
  font-weight: 500;
  color: #1d3164;
  display: block;
  position: relative;
  z-index: 1;
  line-height: 1;
  padding: 31px 0px;
}
.tp-main-menu ul li a:before {
  position: absolute;
  content: "";
  height: 4px;
  width: 0%;
  left: 0px;
  bottom: 31px;
  background: #1d3164;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
  z-index: -1;
}
.tp-main-menu ul li a:hover::before, .tp-main-menu ul li a.active::before {
  width: 100%;
}
.tp-main-menu ul li .sub-menu {
  background: #ffffff none repeat scroll 0 0;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.176);
  left: 0;
  opacity: 0;
  position: absolute;
  top: 119%;
  transition: all 0.3s ease 0s;
  visibility: hidden;
  width: 240px;
  z-index: 9;
  border-top: 4px solid #1d3164;
  text-align: left;
  padding: 15px 0;
}
.tp-main-menu ul li .sub-menu li {
  display: block;
  margin: 0px;
  padding: 8px 25px 8px 25px;
}
.tp-main-menu ul li .sub-menu li a {
  padding: 0px;
  display: inline-block;
  color: #212237;
  position: relative;
}
.tp-main-menu ul li .sub-menu li a:after {
  display: none;
}
.tp-main-menu ul li .sub-menu li a:before {
  content: "";
  width: 0;
  height: 1px;
  bottom: 0;
  position: absolute;
  left: auto;
  right: 0;
  z-index: -1;
  transition: width 0.6s cubic-bezier(0.25, 0.8, 0.25, 1) 0s;
  background: #1d3164;
}
.tp-main-menu ul li .sub-menu li:hover a {
  color: #1d3164;
}
.tp-main-menu ul li .sub-menu li:hover a:before {
  width: 100%;
  left: 0;
  right: auto;
}
.tp-main-menu ul li:hover a {
  color: #1d3164;
}
.tp-main-menu ul li:hover .sub-menu {
  opacity: 1;
  visibility: visible;
  top: 100%;
}

.tp-mobile-menu.mean-container {
  clear: both;
  overflow: hidden;
}

.contact-infos {
  margin-top: 30px;
}
.contact-infos h4 {
  font-size: 27px;
  color: #ffffff;
  margin-bottom: 20px;
}
.contact-infos ul li {
  font-size: 15px;
  color: #ffffff;
  margin-bottom: 15px;
  list-style: none;
}
.contact-infos ul li:last-child {
  margin-bottom: 0px;
}
.contact-infos ul li i {
  color: #1d3164;
  vertical-align: middle;
  width: 25px;
  display: inline-block;
}

.sidebar__menu--social {
  margin-top: 25px;
}
.sidebar__menu--social a {
  height: 40px;
  width: 40px;
  line-height: 40px;
  text-align: center;
  font-size: 14px;
  display: inline-block;
  margin-right: 5px;
  background: #393f53;
  color: #ffffff;
  position: relative;
  z-index: 1;
  overflow: hidden;
  border-radius: 5px;
}
.sidebar__menu--social a:before {
  position: absolute;
  content: "";
  top: 0px;
  left: 0px;
  height: 100%;
  width: 0%;
  background: #1d3164;
  z-index: -1;
  transform: rotate(90deg);
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}
.sidebar__menu--social a:hover:before {
  width: 100%;
}
.sidebar__menu--social a:hover i {
  transform: rotate(360deg);
}
.sidebar__menu--social a:last-child {
  margin-right: 0px;
}

.tp-header-area-two.header-sticky.sticky-menu {
  position: fixed;
  top: 0px;
  left: 0px;
  width: 100%;
  z-index: 91;
  background: none;
  animation: 800ms ease-in-out 0s normal none 1 running fadeInDown;
  box-shadow: 0 0 10px 3px rgba(0, 0, 0, 0.05);
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
  background: #ffffff;
}

.tp-header-area-two.header-sticky.sticky-menu .tp-header-top-two {
  display: none;
}
.tp-header-area-two.header-sticky.sticky-menu .tp-header-logo-two-inner {
  min-height: 80px;
  padding-left: 20px;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 1400px) and (max-width: 1599px) {
  .tp-header-area-two.header-sticky.sticky-menu .tp-header-logo-two-inner {
    padding: 8px 15px;
    min-height: inherit;
  }
}

.tp-header-area-two {
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  right: 0px;
  z-index: 91;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-header-area-two {
    background: #ffffff;
  }
}

.tp-header-logo-two {
  margin-right: 35px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-header-logo-two {
    margin-right: 0px;
    max-width: 240px;
  }
}

.tp-header-menu-two-wrapper {
  margin-left: -55px;
  background: #ffffff;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-header-menu-two-wrapper {
    margin-left: 0px;
  }
}

.tp-header-logo-two-inner {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  padding-left: 35px;
  display: flex;
  align-items: center;
  min-height: 150px;
}
@media only screen and (min-width: 1400px) and (max-width: 1599px) {
  .tp-header-logo-two-inner {
    padding-left: 20px;
  }
}
@media only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 1400px) and (max-width: 1599px) {
  .tp-header-logo-two-inner {
    padding-left: 15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-header-logo-two-inner {
    min-height: inherit;
    padding: 10px 15px;
  }
}

.tp-header-top-two {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #fff;
  padding: 14px 20px;
  border-bottom: 1px solid #e5e8e9;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-header-top-two {
    display: none;
  }
}
.tp-header-top-two-info ul li, .tp-header-top-two-info ul li a {
  font-size: 16px;
  font-weight: 400;
  color: #626664;
}
.tp-header-top-two-info ul li i, .tp-header-top-two-info ul li a i {
  font-size: 30px;
  color: #1d3164;
  margin-right: 10px;
}
.tp-header-top-two-info ul li {
  display: inline-flex;
  align-items: center;
  list-style: none;
  padding-right: 25px;
  margin-right: 25px;
  border-right: 2px dashed #e5e8e9;
}
.tp-header-top-two-info ul li:last-child {
  padding-right: 0px;
  margin-right: 0px;
  border-right: 0px;
}
.tp-header-top-two-social a {
  height: 42px;
  width: 42px;
  line-height: 42px;
  text-align: center;
  font-size: 15px;
  color: #09150f;
  background: #ffffff;
  border-radius: 50%;
  box-shadow: 0px 0px 30px 0px rgba(46, 57, 88, 0.14);
  display: inline-block;
  margin-right: 8px;
}
.tp-header-top-two-social a:last-child {
  margin-right: 0px;
}
.tp-header-top-two-social a:hover {
  color: #ffffff;
  background: #1d3164;
}

.tp-header-menu-two {
  padding: 0px 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-header-menu-two {
    padding: 0px;
  }
}

.tp-main-menu-two ul li {
  margin-left: 0px;
  margin-right: 25px;
}
.tp-main-menu-two ul li:last-child {
  margin-right: 0px;
}
.tp-main-menu-two ul li a {
  font-size: 17px;
  font-weight: 500;
  color: #09150f;
}
.tp-main-menu-two ul li a::before {
  display: none;
}
.tp-main-menu-two ul li a:after {
  content: "\f067";
  margin-left: 5px;
  font-family: "Font Awesome 5 Pro";
  font-size: 14px;
  color: #09150f;
}
.tp-main-menu-two ul li:hover a:after {
  color: #1d3164;
}
.tp-main-menu-two ul li .sub-menu a::before {
  display: inherit;
}

.tp-main-menu-two-btn {
  display: inline-flex;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-main-menu-two-btn {
    display: none;
  }
}
.tp-main-menu-two-btn a {
  height: 50px;
  line-height: 50px;
  padding: 0px 34px;
}

@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-header-area-three {
    padding: 15px 0px;
  }
}

.tp-header-area-three.header-sticky.sticky-menu {
  position: fixed;
  top: 0px;
  left: 0px;
  width: 100%;
  z-index: 999;
  background: #ffffff;
  animation: 800ms ease-in-out 0s normal none 1 running fadeInDown;
  box-shadow: 0 0 10px 3px rgba(0, 0, 0, 0.05);
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.tp-main-menu-three {
  padding-left: 40px;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-main-menu-three {
    padding-left: 0px;
  }
}
.tp-main-menu-three ul li {
  margin-left: 0px;
  margin-right: 35px;
}
.tp-main-menu-three ul li a {
  color: #102579;
  padding: 41px 0px;
}
.tp-main-menu-three ul li a::before {
  bottom: 40px;
}

.tp-header-right-three {
  display: flex;
  justify-content: end;
  align-items: center;
}
.tp-header-right-three .tp-header-number-three {
  margin-right: 60px;
}
@media only screen and (min-width: 1400px) and (max-width: 1599px) {
  .tp-header-right-three .tp-header-number-three {
    margin-right: 40px;
  }
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-header-right-three .tp-header-number-three {
    display: none;
  }
}
.tp-header-right-three .tp-header-number-three span {
  font-weight: 500;
  font-size: 18px;
  color: #1d3164;
  line-height: 1;
}
.tp-header-right-three .tp-header-number-three span a {
  font-weight: 500;
  font-size: 20px;
  color: #09150f;
}
.tp-header-right-three .tp-header-btn-three {
  transform: translateY(4px);
}
.tp-header-right-three .tp-header-btn-three a {
  color: #102579;
}
.tp-header-right-three .tp-header-btn-three a:hover {
  color: #ffffff;
}

.tp-main-menu-inner ul li a {
  color: #09150f;
}
.tp-main-menu-inner ul li:hover a {
  color: #1d3164;
}

/*----------------------------------------*/
/*  03. Hero
/*----------------------------------------*/
.tp-single-slider {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.tp-slider-height {
  min-height: 800px;
}
@media (max-width: 767px) {
  .tp-slider-height {
    min-height: 700px;
  }
}

.slider-img {
  position: absolute;
  top: 0px;
  right: 0px;
  z-index: 1;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .slider-img {
    width: 50%;
    height: 100%;
  }
  .slider-img img {
    height: 100%;
    object-fit: cover;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .slider-img {
    width: 100%;
    height: 100%;
  }
  .slider-img:before {
    position: absolute;
    content: "";
    height: 100%;
    width: 100%;
    top: 0px;
    left: 0px;
    background: rgba(255, 255, 255, 0.7);
  }
  .slider-img img {
    height: 100%;
    width: 100%;
    object-fit: cover;
  }
}

.slide-bg {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  opacity: 1;
  z-index: 0;
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  transform: scale(1);
  -webkit-transition: all 8s ease-out 0s;
  -moz-transition: all 8s ease-out 0s;
  -ms-transition: all 8s ease-out 0s;
  -o-transition: all 8s ease-out 0s;
  transition: all 8s ease-out 0s;
}

.swiper-slide-active .slide-bg {
  -webkit-transform: scale(1.12);
  -moz-transform: scale(1.12);
  transform: scale(1.12);
}

.tp-slider-subtitle {
  font-size: 16px;
  font-weight: 500;
}

.common-yellow-shape {
  position: relative;
  padding-left: 13px;
  z-index: 1;
  font-family: "Roboto", sans-serif;
  display: inline-block;
  margin-top: 3px;
}
.common-yellow-shape:before {
  position: absolute;
  content: "";
  top: -4px;
  left: 0px;
  height: 28px;
  width: 50px;
  background: #fed10c;
  border-top-right-radius: 30px;
  border-bottom-right-radius: 30px;
  z-index: -1;
}
.common-yellow-shape.w-80::before {
  width: 80px;
}

.tp-slider-title {
  font-size: 90px;
  line-height: 1;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-slider-title {
    font-size: 72px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-slider-title {
    font-size: 60px;
  }
}
@media (max-width: 767px) {
  .tp-slider-title {
    font-size: 48px;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-slider-wrapper {
    padding-top: 100px;
  }
}

.tp-slider-video-btn {
  border-radius: 50%;
  display: inline-block;
  padding: 10px;
  background: #ffffff;
  position: absolute;
  top: 50%;
  left: calc(50% + 85px);
  transform: translate(-50%, -50%);
  z-index: 4;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-slider-video-btn {
    left: calc(75% + 50px);
    transform: translate(-75%, -50%);
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-slider-video-btn {
    padding: 8px;
    top: 0px;
    transform: inherit;
    left: 0px;
    z-index: 5;
  }
}
.tp-slider-video-btn a {
  height: 90px;
  line-height: 90px;
  width: 90px;
  background: #1d3164;
  text-align: center;
  display: inline-block;
  border-radius: 50%;
  font-size: 16px;
  color: #ffffff;
  position: relative;
  z-index: 2;
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-slider-video-btn a {
    height: 50px;
    width: 50px;
    line-height: 50px;
  }
}

.play_btn::after, .play_btn::before {
  position: absolute;
  left: 0;
  top: 0;
  content: "";
  border-radius: 50%;
  width: 100%;
  height: 100%;
  border: 1px solid #ffffff;
  animation-name: popupBtn;
  animation-duration: 1.8s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
}

.play_btn::before {
  animation-delay: 0.8s;
}

@keyframes popupBtn {
  0% {
    transform: scale(1);
    opacity: 0.6;
  }
  50% {
    transform: scale(1.6);
    opacity: 0.3;
  }
  100% {
    transform: scale(2.2);
    opacity: 0;
  }
}
.tp-slider-active .slide-prev, .tp-slider-active .slide-next {
  position: absolute;
  font-size: 20px;
  background: #ffffff;
  height: 65px;
  width: 65px;
  line-height: 65px;
  font-size: 20px;
  color: #09150f;
  border-radius: 50%;
  border: none;
  outline: none;
  cursor: pointer;
  z-index: 9;
  text-align: center;
  top: 50%;
  transform: translateY(-50%);
  left: 80px;
  margin: 0px;
  vertical-align: middle;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
  box-shadow: 0px 0px 30px 0px rgba(0, 5, 63, 0.1);
}
@media only screen and (min-width: 1400px) and (max-width: 1599px), only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-slider-active .slide-prev, .tp-slider-active .slide-next {
    left: 40px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-slider-active .slide-prev, .tp-slider-active .slide-next {
    left: calc(50% - 60px);
    top: auto;
    bottom: 120px;
    height: 50px;
    width: 50px;
    line-height: 50px;
    font-size: 18px;
  }
}
.tp-slider-active .slide-prev:hover, .tp-slider-active .slide-next:hover {
  background: #1d3164;
  color: #ffffff;
}

.tp-slider-active .slide-next {
  left: auto;
  right: 80px;
  z-index: 9;
}
@media only screen and (min-width: 1400px) and (max-width: 1599px), only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-slider-active .slide-next {
    right: 40px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-slider-active .slide-next {
    right: calc(50% - 60px);
    top: auto;
    bottom: 120px;
  }
}

.swiper-button-prev.swiper-button-disabled, .swiper-button-next.swiper-button-disabled {
  opacity: 0.7;
}

.swiper-button-prev::after, .swiper-button-next::after {
  display: none;
}

@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-slider-area-three .tp-slider-active .slide-prev {
    left: calc(50% - 60px);
    top: auto;
    bottom: 40px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-slider-area-three .tp-slider-active .slide-next {
    right: calc(50% - 60px);
    top: auto;
    bottom: 40px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-slider-area-three .tp-slider-active .slide-prev {
    left: calc(50% - 75px);
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-slider-area-three .tp-slider-active .slide-next {
    right: calc(50% - 75px);
  }
}

.swiper-container-horizontal.common-dots .slide-dots {
  left: 50%;
  transform: translateX(-50%);
  bottom: 30px;
}
.swiper-container-horizontal.common-dots .slide-dots .swiper-pagination-bullet {
  font-size: 0px;
  height: 12px;
  width: 12px;
  padding: 3px;
  background: #97bdaa;
  cursor: pointer;
  border-radius: 50%;
  border: none;
  display: inline-block;
  outline: none;
  position: relative;
  margin: 6px;
}
.swiper-container-horizontal.common-dots .slide-dots .swiper-pagination-bullet:before {
  position: absolute;
  content: "";
  height: 18px;
  width: 18px;
  border-radius: 50%;
  border: 2px solid transparent;
  top: -6px;
  left: -6px;
}
.swiper-container-horizontal.common-dots .slide-dots .swiper-pagination-bullet.swiper-pagination-bullet-active {
  height: 6px;
  width: 6px;
  background: #1d3164;
  margin: 11px;
  margin-left: 9px;
  transform: translateY(2px);
}
.swiper-container-horizontal.common-dots .slide-dots .swiper-pagination-bullet.swiper-pagination-bullet-active:before {
  border-color: #1d3164;
}

.tp-slider-active.swiper-container-horizontal.common-dots .slide-dots {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 80px;
  z-index: 5;
  width: 20px;
  bottom: auto;
}
@media only screen and (min-width: 1400px) and (max-width: 1599px), only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-slider-active.swiper-container-horizontal.common-dots .slide-dots {
    left: 20px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-slider-active.swiper-container-horizontal.common-dots .slide-dots {
    left: 50%;
    transform: translateX(-50%);
    bottom: 30px;
    top: inherit;
    right: inherit;
    width: inherit;
  }
}

.tp-slider-height-two {
  min-height: 950px;
}
@media (max-width: 767px) {
  .tp-slider-height-two {
    min-height: 800px;
  }
}

.tp-slider-title-two {
  font-size: 90px;
  line-height: 1.1;
  color: #09150f;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-slider-title-two {
    font-size: 70px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-slider-title-two {
    font-size: 60px;
  }
}
@media (max-width: 767px) {
  .tp-slider-title-two {
    font-size: 42px;
    margin-bottom: 20px;
  }
}
.tp-slider-title-two span {
  display: block;
  font-size: 80px;
  line-height: 1.2;
  font-weight: 700;
  position: relative;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-slider-title-two span {
    font-size: 60px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-slider-title-two span {
    font-size: 48px;
  }
}
@media (max-width: 767px) {
  .tp-slider-title-two span {
    font-size: 36px;
  }
}

.tp-slider-subtitle-two {
  font-size: 30px;
  color: #09150f;
  font-weight: 700;
}
@media (max-width: 767px) {
  .tp-slider-subtitle-two {
    font-size: 24px;
  }
}

@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-slider-wrapper-two {
    margin: 0px;
  }
}

.tp-slider-video-btn-two {
  border-radius: 50%;
  display: inline-block;
  padding: 10px;
  background: rgba(6, 174, 90, 0.302);
  position: relative;
  z-index: 3;
  animation: pulse-green 6s infinite;
}
.tp-slider-video-btn-two a {
  height: 80px;
  line-height: 80px;
  width: 80px;
  background: #1d3164;
  text-align: center;
  display: inline-block;
  border-radius: 50%;
  font-size: 16px;
  color: #ffffff;
  position: relative;
  z-index: 2;
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-slider-video-btn-two a {
    height: 50px;
    width: 50px;
    line-height: 50px;
  }
}

.tp-slider-height-three {
  min-height: 850px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-slider-height-three {
    min-height: 750px;
  }
}
@media (max-width: 767px) {
  .tp-slider-height-three {
    min-height: 650px;
  }
  .tp-slider-height-three h1 br {
    display: none;
  }
}

.slider-img-three {
  position: absolute;
  top: 0px;
  right: 0px;
  z-index: 1;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .slider-img-three {
    width: 40%;
    height: 100%;
  }
  .slider-img-three img {
    height: 100%;
    object-fit: cover;
  }
}
@media only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .slider-img-three {
    width: 100%;
    height: 100%;
  }
  .slider-img-three:before {
    position: absolute;
    content: "";
    height: 100%;
    width: 100%;
    top: 0px;
    left: 0px;
    background: rgba(0, 0, 0, 0.4);
  }
  .slider-img-three img {
    height: 100%;
    width: 100%;
    object-fit: cover;
  }
}

.tp-slider-three-subtitle {
  font-size: 16px;
  color: #ffffff;
  font-weight: 500;
  margin-bottom: 25px;
}
.tp-slider-three-subtitle img {
  transform: translateY(-3px);
}

.tp-slider-three-title {
  font-size: 90px;
  line-height: 1;
  color: #ffffff;
  margin-bottom: 45px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-slider-three-title {
    font-size: 70px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-slider-three-title {
    font-size: 60px;
  }
}
@media (max-width: 767px) {
  .tp-slider-three-title {
    font-size: 42px;
  }
}

.tp-slider-three-btn a {
  color: #102579;
}
.tp-slider-three-btn a:hover {
  color: #ffffff;
}

.tp-slider-area-three .tp-slider-active .slide-prev:hover, .tp-slider-area-three .tp-slider-active .slide-next:hover {
  background: #1e3077;
  color: #ffffff;
}

/*----------------------------------------*/
/*  04. Cta
/*----------------------------------------*/
.tp-appoint {
  margin-bottom: 15px;
}
.tp-appoint input, .tp-appoint select {
  color: #1d3164;
  font-size: 15px;
  display: block;
  width: 100%;
  height: 70px;
  background: #ffffff;
  font-weight: 400;
  border: 1px solid transparent;
  outline: none;
  padding: 0px 25px;
  width: 100%;
}
.tp-appoint select {
  padding-left: 20px;
}
.tp-appoint button {
  height: 70px;
  line-height: 70px;
  width: 100%;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-appoint button {
    padding: 0px 25px;
  }
}

.tp-appoint-three input, .tp-appoint-three select {
  color: #66686b;
}

.tp-appoint input::-moz-placeholder {
  color: #1d3164;
  font-size: 15px;
  font-weight: 400;
}
.tp-appoint input::placeholder {
  color: #1d3164;
  font-size: 15px;
  font-weight: 400;
}
.tp-appoint.tp-appoint-three input::-moz-placeholder, .tp-appoint.tp-appoint-three input::placeholder {
  color: #66686b;
}

.tp-appoint-title {
  margin-bottom: 0px;
  font-size: 27px;
  line-height: 1.33;
}

.select-field-arrow {
  position: relative;
}
.select-field-arrow:after {
  position: absolute;
  content: "\f078";
  top: 50%;
  transform: translateY(-50%);
  right: 28px;
  font-size: 13px;
  color: #1d3164;
  font-family: "Font Awesome 5 Pro";
  z-index: 2;
}

.tp-appoint-three.select-field-arrow:after {
  color: #66686b;
}

.tp-cta-area-two-bg {
  max-width: 1390px;
  margin: 0 auto;
  padding: 50px 50px 20px 50px;
  background: #f7f7f7;
  position: relative;
  margin-top: -130px;
  z-index: 8;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-cta-area-two-bg {
    padding: 30px;
    padding-bottom: 0px;
  }
}

.tp-cta-two-icon {
  height: 80px;
  line-height: 94px;
  width: 80px;
  background: #fed10c;
  border-radius: 50%;
  border: 5px solid #ffffff;
  float: left;
  margin-right: 25px;
  text-align: center;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-cta-two-icon {
    margin-right: 15px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-cta-two-icon {
    float: inherit;
    margin-right: 0px;
    margin-bottom: 25px;
  }
}
.tp-cta-two-icon i {
  font-size: 36px;
  color: #09150f;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.tp-cta-two-text-title {
  font-size: 24px;
  margin-bottom: 15px;
  color: #ffffff;
  line-height: 1;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-cta-two-text-title {
    font-size: 20px;
  }
}

.tp-cta-two {
  padding: 60px 30px 50px 30px;
  background: #1d3164;
  border-radius: 4px;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-cta-two {
    padding: 50px 25px 40px 25px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-cta-two {
    padding: 30px 30px 20px 30px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-cta-two {
    padding: 30px 20px 20px 20px;
  }
}
.tp-cta-two p {
  color: #ffffff;
  margin-bottom: 0px;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}
.tp-cta-two:hover {
  background: #fed10c;
}
.tp-cta-two:hover p {
  color: #09150f;
}
.tp-cta-two:hover h4 {
  color: #09150f;
}
.tp-cta-two:hover .tp-cta-two-icon {
  background: #1d3164;
}
.tp-cta-two:hover .tp-cta-two-icon i {
  color: #ffffff;
  transform: rotateY(360deg);
}

.tp-contact-cta-area {
  margin-bottom: -60px;
}

.tp-contact-cta-bg {
  background: #1d3164;
  padding: 0px 80px;
  border-radius: 10px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-contact-cta-bg {
    padding: 0px 20px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-contact-cta-bg {
    padding: 30px 30px 0px 30px;
  }
}
@media (max-width: 767px) {
  .tp-contact-cta-bg {
    padding: 30px 20px 0px 20px;
  }
}

.tp-contact-cta {
  padding: 40px 0px;
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-contact-cta {
    padding: 0px;
    padding-bottom: 30px;
  }
}
.tp-contact-cta.border-r-1, .tp-contact-cta.border-r-2 {
  position: relative;
}
.tp-contact-cta.border-r-1:before, .tp-contact-cta.border-r-2:before {
  position: absolute;
  content: "";
  top: 0px;
  right: 0px;
  height: 100%;
  width: 1px;
  background: #83d7ad;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-contact-cta.border-r-1:before, .tp-contact-cta.border-r-2:before {
    right: -18px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-contact-cta.border-r-1:before, .tp-contact-cta.border-r-2:before {
    display: none;
  }
}
.tp-contact-cta.border-r-2:before {
  right: -35px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-contact-cta.border-r-2:before {
    right: -18px;
  }
}
.tp-contact-cta-inner {
  display: inline-flex;
  align-items: center;
  width: 100%;
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-contact-cta-inner {
    justify-content: start !important;
  }
}
.tp-contact-cta-inner-icon {
  height: 70px;
  width: 70px;
  text-align: center;
  line-height: 86px;
  background: #ffffff;
  color: #102579;
  margin-right: 25px;
  border-radius: 50%;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), (max-width: 767px) {
  .tp-contact-cta-inner-icon {
    margin-right: 10px;
  }
}
@media (max-width: 767px) {
  .tp-contact-cta-inner-icon {
    height: 60px;
    width: 60px;
    line-height: 76px;
  }
}
.tp-contact-cta-inner-icon i {
  font-size: 32px;
}
.tp-contact-cta-inner-text span {
  font-size: 16px;
  color: #ffffff;
  display: block;
  margin-bottom: 10px;
}
.tp-contact-cta-inner-text h5, .tp-contact-cta-inner-text h5 a {
  font-size: 20px;
  font-weight: 500;
  margin-bottom: 0px;
  color: #ffffff;
}
@media (max-width: 767px) {
  .tp-contact-cta-inner-text h5, .tp-contact-cta-inner-text h5 a {
    font-size: 18px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .tp-contact-cta-inner-text h5, .tp-contact-cta-inner-text h5 a {
    font-size: 18px;
  }
}

.tp-newsletter-area-three-bg {
  padding: 60px 0px 65px 0px;
  border-radius: 5px;
  margin-top: -110px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-newsletter-area-three-bg {
    padding: 60px 60px 65px 60px;
  }
}
@media (max-width: 767px) {
  .tp-newsletter-area-three-bg {
    padding: 40px 30px 45px 30px;
  }
}

.tp-newsletter-area-three-text [type=radio]:checked,
.tp-newsletter-area-three-text [type=radio]:not(:checked) {
  position: absolute;
  left: -9999px;
}
.tp-newsletter-area-three-text [type=radio]:checked + label,
.tp-newsletter-area-three-text [type=radio]:not(:checked) + label {
  position: relative;
  padding-left: 28px;
  cursor: pointer;
  line-height: 20px;
  display: inline-block;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
}
@media (max-width: 767px) {
  .tp-newsletter-area-three-text [type=radio]:checked + label,
.tp-newsletter-area-three-text [type=radio]:not(:checked) + label {
    font-size: 16px;
  }
}
.tp-newsletter-area-three-text [type=radio]:checked + label:before,
.tp-newsletter-area-three-text [type=radio]:not(:checked) + label:before {
  content: "";
  position: absolute;
  left: 1px;
  top: 1px;
  width: 18px;
  height: 18px;
  border: 2px solid #fff;
  border-radius: 100%;
  background: transparent;
}
.tp-newsletter-area-three-text [type=radio]:checked + label:after,
.tp-newsletter-area-three-text [type=radio]:not(:checked) + label:after {
  content: "";
  width: 8px;
  height: 8px;
  background: #fff;
  position: absolute;
  top: 6px;
  left: 6px;
  border-radius: 100%;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
.tp-newsletter-area-three-text [type=radio]:not(:checked) + label:after {
  opacity: 0;
  -webkit-transform: scale(0);
  transform: scale(0);
}
.tp-newsletter-area-three-text [type=radio]:checked + label:after {
  opacity: 1;
  -webkit-transform: scale(1);
  transform: scale(1);
}

.tp-newsletter-radio {
  display: inline-block;
}

.tp-newsletter-area-three form {
  position: relative;
}
.tp-newsletter-area-three form input {
  height: 80px;
  width: 100%;
  background: #ffffff;
  font-size: 16px;
  color: #66686b;
  border: none;
  outline: none;
  padding-left: 165px;
  padding-right: 190px;
}
.tp-newsletter-area-three form input::-moz-placeholder {
  color: #ffffff;
}
.tp-newsletter-area-three form input::placeholder {
  color: #ffffff;
}
@media (max-width: 767px) {
  .tp-newsletter-area-three form input {
    padding: 0px 15px;
    height: 60px;
  }
  .tp-newsletter-area-three form input::-moz-placeholder {
    color: #66686b;
  }
  .tp-newsletter-area-three form input::placeholder {
    color: #66686b;
  }
}
.tp-newsletter-area-three form span {
  font-size: 16px;
  color: #66686b;
  display: inline-block;
  position: absolute;
  left: 20px;
  padding-right: 15px;
  border-right: 1px solid #66686b;
  top: 50%;
  transform: translateY(-50%);
}
@media (max-width: 767px) {
  .tp-newsletter-area-three form span {
    display: none;
  }
}
.tp-newsletter-area-three form span i {
  margin-right: 3px;
}
.tp-newsletter-area-three form button {
  position: absolute;
  top: 10px;
  right: 10px;
}
@media (max-width: 767px) {
  .tp-newsletter-area-three form button {
    position: relative;
    margin-top: 15px;
    top: inherit;
    right: inherit;
  }
}

.tp-newsletter-area-three-title {
  font-size: 42px;
  color: #ffffff;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-newsletter-area-three-title {
    margin-bottom: 10px;
  }
}
@media (max-width: 767px) {
  .tp-newsletter-area-three-title {
    font-size: 32px;
  }
}

@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-newsletter-area-three-text {
    margin-bottom: 25px;
  }
}

.tp-appoint-contact-area {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.tp-appoint-contact {
  margin-left: 35px;
}
@media (max-width: 767px) {
  .tp-appoint-contact {
    margin-left: 0px;
  }
}
.tp-appoint-contact .tp-testimonial-two-form-wrapper {
  background: #1d3164;
}
.tp-appoint-contact button:hover {
  background: #1d3164;
}

/*----------------------------------------*/
/*  05. About
/*----------------------------------------*/
.tp-about-text p {
  font-size: 20px;
  line-height: 1.5;
}

.tp-about-service-icon i {
  font-size: 52px;
  line-height: 1;
  color: #1d3164;
}
.tp-about-service-text p {
  font-size: 16px;
}
.tp-about-service:hover i {
  animation-name: wobble-vertical;
  animation-duration: 1s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: 3;
}

.yellow-circle-shape {
  position: relative;
  padding-left: 30px;
  display: inline-block;
  z-index: 1;
}
.yellow-circle-shape::before {
  position: absolute;
  content: "";
  height: 65px;
  width: 65px;
  border-radius: 50%;
  background: #fed10c;
  top: -6px;
  left: 0px;
  z-index: -1;
}

.tp-about-service-text-title {
  font-size: 24px;
  line-height: 1.41;
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-about-service-text-title {
    font-size: 22px;
  }
}

.tp-about-author {
  display: flex;
  align-items: center;
}
.tp-about-author-img {
  margin-right: 18px;
}
.tp-about-author-img img {
  height: 66px;
  width: 66px;
  border-radius: 50%;
  object-fit: cover;
}
.tp-about-author-text {
  overflow: hidden;
}
.tp-about-author-text span {
  font-size: 16px;
  display: block;
}

.tp-about-author-text-title {
  font-size: 24px;
  margin-bottom: 0px;
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-about-author-text-title {
    font-size: 22px;
  }
}

.tp-about-number {
  display: flex;
  align-items: center;
}
.tp-about-number-icon {
  height: 66px;
  width: 66px;
  text-align: center;
  line-height: 86px;
  background: #ecf3f0;
  margin-right: 25px;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-about-number-icon {
    margin-right: 20px;
  }
}
.tp-about-number-icon i {
  font-size: 34px;
  animation: phone-icon-animate 1.5s ease-in-out infinite;
}
.tp-about-number-text span {
  margin-bottom: 5px;
  display: block;
}
.tp-about-number-text a {
  font-size: 20px;
  font-weight: 500;
  display: block;
}
@media (max-width: 767px) {
  .tp-about-number-text a {
    font-size: 18px;
  }
}

.tp-about-img {
  margin-left: -60px;
}
@media only screen and (min-width: 1400px) and (max-width: 1599px) {
  .tp-about-img {
    margin-left: 0px;
  }
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-about-img {
    margin-left: 0px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-about-img {
    margin-left: 0px;
    margin-bottom: 30px;
    text-align: center;
  }
}
.tp-about-img img {
  height: 615px;
  width: 615px;
  object-fit: cover;
  border-radius: 50%;
  border: 10px solid #ffffff;
  max-width: inherit;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-about-img img {
    height: 500px;
    width: 500px;
  }
}
@media (max-width: 767px) {
  .tp-about-img img {
    height: 280px;
    width: 280px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .tp-about-img img {
    height: 350px;
    width: 350px;
  }
}

.tp-about-shape {
  position: absolute;
  top: 0px;
  left: 0px;
}

@media only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-about-area-two.pb-140 {
    padding-bottom: 115px;
  }
}

.tp-about-text-two p {
  font-size: 16px;
  color: #626664;
}

.tp-about-text-two-service-single-icon {
  float: left;
  margin-right: 34px;
}
@media (max-width: 767px) {
  .tp-about-text-two-service-single-icon {
    float: inherit;
    margin-right: 0px;
    margin-bottom: 15px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .tp-about-text-two-service-single-icon {
    float: left;
    margin-right: 30px;
    margin-bottom: 0px;
  }
}
.tp-about-text-two-service-single-icon span {
  position: relative;
  height: 75px;
  width: 75px;
  line-height: 83px;
  display: inline-block;
  color: #ffffff;
  background: #1d3164;
  text-align: center;
  font-size: 45px;
  border-radius: 4px;
}
.tp-about-text-two-service-single-icon span::before {
  position: absolute;
  content: "";
  height: 75px;
  width: 75px;
  border: 1px solid #1d3164;
  border-radius: 5px;
  top: -6px;
  right: -6px;
}
.tp-about-text-two-service-single p {
  margin-bottom: 0px;
}
.tp-about-text-two-service-single:hover i {
  animation: scale-up-one infinite 1.5s linear;
}

.tp-about-text-two-service-title {
  font-size: 24px;
  color: #09150f;
}
.tp-about-text-two-service-title:hover {
  color: #1d3164;
}

.tp-about-text-two-sign-img {
  width: 160px;
  float: left;
  margin-right: 50px;
}
@media (max-width: 767px) {
  .tp-about-text-two-sign-img {
    margin-right: 15px;
    width: 120px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .tp-about-text-two-sign-img {
    width: 140px;
  }
}
.tp-about-text-two-sign-text {
  overflow: hidden;
}
.tp-about-text-two-sign-text span {
  font-size: 16px;
  font-weight: 500;
  color: #1d3164;
  display: block;
}

.tp-about-text-two-sign-name {
  font-size: 24px;
  color: #09150f;
}
@media (max-width: 767px) {
  .tp-about-text-two-sign-name {
    font-size: 20px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .tp-about-text-two-sign-name {
    font-size: 22px;
  }
}

@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-about-img-two {
    margin-right: 30px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-about-img-two {
    margin-right: 0px;
  }
}
.tp-about-img-two .img-second {
  position: absolute;
  right: 0px;
  top: 205px;
  z-index: 1;
  border-radius: 50%;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-about-text-two {
    padding-top: 150px;
  }
}
@media (max-width: 767px) {
  .tp-about-text-two {
    padding-top: 170px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .tp-about-text-two {
    padding-top: 150px;
  }
}

.tp-about-img-two-badge {
  position: absolute;
  top: 0px;
  right: 0px;
  background: #fed10c;
  text-align: center;
  height: 220px;
  width: 110px;
  padding-top: 30px;
  border-bottom-left-radius: 60px;
  border-bottom-right-radius: 60px;
}
.tp-about-img-two-badge h3 {
  font-size: 36px;
  color: #09150f;
  line-height: 1;
  font-family: "Roboto", sans-serif;
  margin-bottom: 30px;
  overflow: hidden;
  display: inline-block;
}
.tp-about-img-two-badge h5 {
  font-size: 22px;
  color: #09150f;
  line-height: 1.2;
  transform: rotate(90deg);
  margin-bottom: 0px;
  text-align: left;
  font-family: "Roboto", sans-serif;
  font-weight: 500;
}

.tp-about-text-three .tp-about-service-text-title {
  color: #102579;
}
.tp-about-text-three .tp-about-service-text-title:hover {
  color: #1d3164;
}
.tp-about-text-three .tp-about-service-icon i {
  color: #102579;
}
.tp-about-text-three p {
  color: #66686b;
}

.tp-about-img-three {
  z-index: 2;
}
.tp-about-img-three .tp-about-img-three-second {
  position: absolute;
  top: 0px;
  right: -30px;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-about-img-three .tp-about-img-three-second {
    right: 15px;
  }
}
@media (max-width: 767px) {
  .tp-about-img-three .tp-about-img-three-second {
    right: -10px;
  }
}
.tp-about-img-three .tp-about-img-three-third {
  position: absolute;
  top: 0px;
  left: -45px;
  z-index: -1;
}

.tp-about-inner-page-text p {
  color: #626664;
}
.tp-about-inner-page-text .tp-about-service-icon i {
  color: #09150f;
}
.tp-about-inner-page-text .tp-about-number-icon {
  background: #1d3164;
}
.tp-about-inner-page-text .tp-about-number-icon i {
  color: #ffffff;
}

@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-abouts-img-two {
    margin-bottom: 135px;
  }
}
@media (max-width: 767px) {
  .tp-abouts-img-two {
    margin-bottom: 165px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .tp-abouts-img-two {
    margin-bottom: 135px;
  }
}

@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-abouts-area {
    padding-bottom: 90px;
  }
}

/*----------------------------------------*/
/*  06. Services
/*----------------------------------------*/
.tp-services {
  padding: 42px 35px 45px 35px;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-services {
    padding: 27px 20px 30px 20px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-services {
    padding: 32px 25px 35px 25px;
  }
}
.tp-services-icon {
  width: 75px;
  margin-right: 25px;
  float: left;
  margin-top: 12px;
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-services-icon {
    float: inherit;
    margin-right: 0px;
    margin-bottom: 25px;
  }
}
.tp-services-icon i {
  font-size: 48px;
  line-height: 1;
}
.tp-services-text-link {
  display: inline-flex;
  align-items: center;
}
.tp-services-text-link a {
  font-size: 16px;
  font-weight: 500;
}
.tp-services-text-link a:hover {
  color: #1d3164;
  padding-left: 5px;
}
.tp-services-text-link i {
  font-size: 16px;
  transform: translateY(2px);
  display: inline-block;
  margin-right: 2px;
  line-height: 1;
}
.tp-services:hover .tp-services-icon i {
  animation-name: wobble-vertical;
  animation-duration: 1s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: 3;
}

.tp-services-text-title {
  font-size: 24px;
}
@media (max-width: 767px) {
  .tp-services-text-title {
    font-size: 22px;
  }
}

.tp-service-two-title {
  font-size: 24px;
  color: #09150f;
}
.tp-service-two-title:hover {
  color: #1d3164;
}

.tp-service-two-img {
  position: relative;
}
.tp-service-two-img-box {
  box-shadow: 0px 0px 24px 0px rgba(30, 33, 62, 0.19);
  display: inline-block;
  border-radius: 50%;
  height: 300px;
  width: 300px;
  border-radius: 50%;
  border: 10px solid #ffffff;
  position: relative;
  overflow: hidden;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-service-two-img-box {
    height: inherit;
    width: inherit;
  }
}
.tp-service-two-img-box::before {
  position: absolute;
  content: "";
  height: 100%;
  width: 100%;
  background-color: rgba(254, 209, 12, 0.8);
  transform: scale(0);
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
  z-index: 1;
}
.tp-service-two-img img {
  object-fit: cover;
}
.tp-service-two-content span {
  font-size: 16px;
  color: #626664;
  font-weight: 500;
  display: block;
}
.tp-service-two:hover .tp-service-two-img-box:before {
  transform: scale(1);
}
.tp-service-two:hover img {
  transform: scale3d(1.1, 1.1, 1.1);
}

.tp-service-two-icon-wrapper {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  bottom: -20px;
  z-index: 1;
}
.tp-service-two-icon-wrapper ul {
  transform: scale(0);
  opacity: 0;
  visibility: hidden;
  height: 0px;
  overflow: hidden;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
  z-index: 3;
}
.tp-service-two-icon-wrapper ul li {
  margin-bottom: 9px;
  list-style: none;
}
.tp-service-two-icon-wrapper ul li:last-child {
  margin-bottom: 0px;
}
.tp-service-two-icon-wrapper ul li a {
  height: 50px;
  width: 50px;
  line-height: 50px;
  color: #ffffff;
  background: #1d3164;
  display: inline-block;
  text-align: center;
  font-size: 18px;
  position: relative;
  z-index: 1;
  overflow: hidden;
  border-radius: 5px;
}
.tp-service-two-icon-wrapper ul li a:before {
  position: absolute;
  content: "";
  top: 0px;
  left: 0px;
  height: 100%;
  width: 0%;
  background: #1d3164;
  z-index: -1;
  transform: rotate(90deg);
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}
.tp-service-two-icon-wrapper ul li a:hover:before {
  width: 100%;
}
.tp-service-two-icon-wrapper ul li a:hover i {
  transform: rotate(360deg);
}

.tp-service-two-icon {
  display: inline-block;
}
.tp-service-two-icon .share-icon {
  height: 60px;
  width: 60px;
  line-height: 60px;
  display: inline-block;
  text-align: center;
  font-size: 18px;
  background: #1d3164;
  color: #ffffff;
  border-radius: 50%;
}
.tp-service-two-icon .share-icon:hover {
  color: #09150f;
  background: #ffffff;
}
.tp-service-two-icon:hover ul {
  transform: scale(1);
  opacity: 1;
  visibility: visible;
  height: inherit;
  overflow: inherit;
  margin-bottom: 13px;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-service-two-icon:hover ul {
    margin-bottom: 5px;
  }
}

.tp-quality {
  text-align: center;
}
.tp-quality-img {
  border: 1px solid #1d3164;
  border-radius: 50%;
  position: relative;
  overflow: hidden;
  height: 300px;
  width: 300px;
  display: inline-block;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-quality-img {
    height: inherit;
    width: inherit;
  }
}
.tp-quality-img:before {
  position: absolute;
  content: "";
  height: 100%;
  width: 100%;
  top: 0px;
  left: 0px;
  background-color: rgba(254, 209, 12, 0.651);
  z-index: 1;
  opacity: 0;
  visibility: hidden;
}
.tp-quality-img img {
  height: 300px;
  width: 300px;
  border-radius: 50%;
  object-fit: cover;
  transform: translateY(-10px);
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-quality-img img {
    height: inherit;
    width: inherit;
  }
}
.tp-quality-text-icon {
  margin-top: -60px;
  position: relative;
  z-index: 2;
}
.tp-quality-text-icon a {
  height: 100px;
  width: 100px;
  line-height: 100px;
  display: inline-block;
  text-align: center;
  font-size: 50px;
  color: #09150f;
  background: #fed10c;
  border-radius: 50%;
  overflow: hidden;
  position: relative;
}
.tp-quality-text-icon a i {
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}
.tp-quality-text-icon a i.tp-quality-text-icon2 {
  left: 120%;
}
.tp-quality-text span {
  font-size: 16px;
  font-weight: 500;
  color: #1d3164;
  display: block;
  margin-bottom: 5px;
}
.tp-quality:hover .tp-quality-text-icon a {
  background: #1d3164;
  color: #ffffff;
  position: relative;
}
.tp-quality:hover .tp-quality-text-icon a i {
  left: -120%;
}
.tp-quality:hover .tp-quality-text-icon a i.tp-quality-text-icon2 {
  top: 50%;
  left: 50%;
}
.tp-quality:hover img {
  transform: translateY(-1px);
}
.tp-quality:hover .tp-quality-img:before {
  opacity: 1;
  visibility: visible;
}

.tp-quality-text-title {
  font-size: 24px;
  color: #09150f;
}
.tp-quality-text-title:hover {
  color: #1d3164;
}

.tp-service-three {
  padding: 20px;
  box-shadow: 0px 5px 20px 0px rgba(5, 7, 80, 0.06);
  border-radius: 3px;
  background: #ffffff;
  overflow: hidden;
  display: flex;
  align-items: center;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), (max-width: 767px) {
  .tp-service-three {
    display: inherit;
  }
}
.tp-service-three-img {
  width: 260px;
  min-width: 260px;
  margin-right: 40px;
  position: relative;
  overflow: hidden;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-service-three-img {
    margin-right: 25px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px), (max-width: 767px) {
  .tp-service-three-img {
    width: 100%;
    min-width: inherit;
    margin-bottom: 30px;
  }
}
.tp-service-three-img img {
  width: 100%;
  object-fit: cover;
}
.tp-service-three-img-icon {
  position: absolute;
  top: 0px;
  right: 0px;
  height: 80px;
  width: 80px;
  text-align: center;
  line-height: 102px;
  background: #1d3164;
  border-radius: 30px 0px 30px 50px;
  padding-left: 6px;
}
.tp-service-three-img-icon i {
  color: #ffffff;
  font-size: 40px;
}
.tp-service-three-text p {
  font-size: 16px;
  color: #66686b;
}
.tp-service-three-text-btn a {
  height: 55px;
  line-height: 55px;
  color: #09150f;
}
.tp-service-three-text-btn a:hover {
  color: #ffffff;
}
.tp-service-three:hover .tp-service-three-img-icon i {
  transform: rotateY(360deg);
}
.tp-service-three:hover img {
  transform: scale3d(1.1, 1.1, 1.1);
}

.tp-service-three-title {
  font-size: 24px;
  color: #102579;
}
.tp-service-three-title:hover {
  color: #1d3164;
}

.tp-service-three-text-btn a {
  color: #102579;
}
.tp-service-three-text-btn a:hover {
  color: #ffffff;
}

.tp-service-active .tp-service-two-img-box {
  box-shadow: none;
}

.tp-service-four {
  border: 2px solid #ebecee;
  background: none;
}
.tp-service-four .tp-service-three-img {
  position: relative;
}
.tp-service-four .tp-service-three-img .tp-service-three-img-overlay {
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0px;
  left: 0px;
  background: rgba(254, 209, 12, 0.702);
  transform: scale(0);
  visibility: hidden;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}
.tp-service-four .tp-service-three-img .tp-service-three-img-overlay .tp-service-three-img-overlay-icon {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  height: 80px;
  width: 80px;
  text-align: center;
  line-height: 102px;
  background: #1d3164;
  border-radius: 50%;
}
.tp-service-four .tp-service-three-img .tp-service-three-img-overlay .tp-service-three-img-overlay-icon i {
  color: #ffffff;
  font-size: 40px;
}
.tp-service-four:hover .tp-service-three-img-overlay {
  transform: scale(1);
  visibility: visible;
}
.tp-service-four:hover .tp-service-three-img-icon {
  opacity: 0;
  visibility: hidden;
}
.tp-service-four:hover .tp-service-three-text-btn a {
  background: #1d3164;
  color: #ffffff;
}
.tp-service-four:hover .tp-service-three-text-btn a:hover {
  background: #fed10c;
  color: #09150f;
}

.tp-faqs-left-sidebar.tp-services-sidebar ul li {
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}
.tp-faqs-left-sidebar.tp-services-sidebar ul li a {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.tp-faqs-left-sidebar.tp-services-sidebar ul li a i {
  font-size: 14px;
}
.tp-faqs-left-sidebar.tp-services-sidebar ul li:hover {
  border-color: #1d3164;
}

.tp-services-sidebar-btn a {
  display: flex;
  align-items: center;
  background: #1d3164;
  font-family: "Nunito Sans", sans-serif;
  font-weight: 700;
  color: #ffffff;
  font-size: 20px;
}
.tp-services-sidebar-btn a i {
  height: 60px;
  line-height: 68px;
  width: 60px;
  display: inline-block;
  border-right: 0.5px solid #ffffff;
  margin-right: 20px;
  text-align: center;
  font-size: 24px;
}

.tp-service-details-img img {
  width: 100%;
}
.tp-service-details-img-overlay {
  position: absolute;
  height: 100%;
  width: 100%;
  background: rgba(7, 95, 51, 0.251);
  top: 0px;
  left: 0px;
}
.tp-service-details-img-overlay-icon {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.tp-service-details-img-overlay-icon a {
  color: #1d3164;
  font-size: 18px;
  height: 100px;
  width: 100px;
  text-align: center;
  line-height: 100px;
  border-radius: 50%;
  background: #fed10c;
  display: inline-block;
}
.tp-service-details-img-overlay-icon a:hover {
  background: #1d3164;
  color: #ffffff;
}
@media (max-width: 767px) {
  .tp-service-details-img-overlay-icon a {
    height: 60px;
    width: 60px;
    line-height: 60px;
    font-size: 16px;
  }
}

.tp-service-details p {
  color: #626664;
  font-size: 16px;
  line-height: 27px;
}
.tp-service-details p i {
  color: #1d3164;
  line-height: 1;
  transform: translateY(6px);
  display: inline-block;
  margin-right: 12px;
}

.tp-service-details-subtitle {
  font-size: 36px;
  color: #09150f;
}
@media (max-width: 767px) {
  .tp-service-details-subtitle {
    font-size: 28px;
  }
}

.tp-service-details-feature {
  padding: 35px 10px 30px 10px;
  border: 6px solid #ffffff;
  box-shadow: 0px 5px 19px 1px rgba(9, 41, 25, 0.06);
}
.tp-service-details-feature .tp-feature-three-icon {
  position: relative;
}
.tp-service-details-feature .tp-feature-three-icon i {
  font-size: 35px;
  line-height: 1;
  display: inline-block;
  position: absolute;
  top: 29px;
  left: 30px;
}
.tp-service-details-feature:hover i {
  animation-name: wobble-vertical;
  animation-duration: 1s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: 3;
}

.tp-service-details-feature-title {
  font-size: 24px;
  color: #1d3164;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-service-details-feature-title {
    font-size: 22px;
  }
}
.tp-service-details-feature-title:hover {
  color: #09150f;
}

@media only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-service-details-area {
    padding-bottom: 100px;
  }
}

/*----------------------------------------*/
/*  07. Choose
/*----------------------------------------*/
.common-yellow-shape.common-white-shape:before {
  background: #ffffff;
}

.tp-choose-timeline-single-title {
  font-size: 24px;
  line-height: 1.33;
  transform: translateY(-3px);
}
@media only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 576px) and (max-width: 767px) {
  .tp-choose-timeline-single-title {
    font-size: 22px;
  }
  .tp-choose-timeline-single-title br {
    display: none;
  }
}

.tp-choose-timeline {
  border-left: 2px solid #1d3164;
}

.tp-choose-timeline-single {
  position: relative;
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .tp-choose-timeline-single {
    padding-left: 25px;
  }
}
.tp-choose-timeline-single:before {
  position: absolute;
  content: "";
  height: 25px;
  width: 25px;
  border-radius: 50%;
  background: #1d3164;
  border: 4px solid #bbe2cf;
  left: -12.5px;
  top: 0px;
  z-index: 1;
}
.tp-choose-timeline-single:hover::before {
  animation: pulse-green 6s infinite;
}

.tp-choose-img {
  margin-left: -30px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-choose-img {
    margin-left: 0px;
  }
}
.tp-choose-img img {
  border: 10px solid #ecf3f0;
  max-width: inherit;
}
@media only screen and (min-width: 1400px) and (max-width: 1599px), only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-choose-img img {
    max-width: 100%;
  }
}

.tp-choose-yellow-bg {
  height: 590px;
  position: absolute;
  top: -255px;
  left: 0px;
  right: 0px;
  background: #fed10c;
  width: 100%;
  z-index: 1;
}

@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-section-title-wrapper.mb-105 {
    margin-bottom: 60px;
  }
}

.tp-choose-three p {
  color: #6a6b71;
}
.tp-choose-three .tp-about-service-text-title {
  color: #102579;
}
.tp-choose-three .tp-about-service-text-title:hover {
  color: #1d3164;
}
.tp-choose-three .tp-about-service-icon i {
  color: #102579;
}
.tp-choose-three .yellow-circle-shape::before {
  background: #e3e6f3;
}

.tp-choose-area-three-img {
  position: absolute;
  top: 0px;
  left: 0px;
}
@media only screen and (min-width: 1600px) and (max-width: 1750px) {
  .tp-choose-area-three-img img {
    max-width: 770px;
  }
}
@media only screen and (min-width: 1400px) and (max-width: 1599px) {
  .tp-choose-area-three-img img {
    max-width: 670px;
  }
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-choose-area-three-img img {
    max-width: 570px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-choose-area-three-img {
    position: relative;
    margin-bottom: 40px;
  }
  .tp-choose-area-three-img img {
    width: 100%;
  }
}

.tp-choose-three-year-inner {
  display: inline-block;
  text-align: left;
  padding-left: 60px;
}
@media (max-width: 767px) {
  .tp-choose-three-year-inner {
    padding-left: 20px;
  }
}
.tp-choose-three-year-inner h3 {
  font-size: 60px;
  line-height: 1;
  color: #ffffff;
  margin-bottom: 5px;
  font-family: "Roboto", sans-serif;
  font-weight: 700;
}
@media (max-width: 767px) {
  .tp-choose-three-year-inner h3 {
    font-size: 42px;
  }
}
.tp-choose-three-year-inner h4 {
  font-size: 45px;
  color: #ffffff;
  line-height: 1.3;
  margin-bottom: 0px;
  font-family: "Roboto", sans-serif;
  font-weight: 700;
}
@media (max-width: 767px) {
  .tp-choose-three-year-inner h4 {
    font-size: 32px;
  }
}

.tp-choose-three-year {
  background: #1d3164;
  height: 340px;
  width: 480px;
  border: 20px solid #ffffff;
  border-radius: 5px;
  display: inline-flex;
  align-items: center;
  position: relative;
  z-index: 1;
  margin-right: 52px;
}
@media (max-width: 767px) {
  .tp-choose-three-year {
    border: none;
    height: 200px;
    width: 280px;
  }
}

.tp-choose-three-year-responsive {
  display: none;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-choose-three-year-responsive {
    display: inline-flex;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin: 0;
  }
}

@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-choose-area-three {
    padding-bottom: 45px;
  }
}

/*----------------------------------------*/
/*  08. Fact
/*----------------------------------------*/
.tp-fact-text-title {
  font-size: 55px;
  line-height: 0.6;
}
@media (max-width: 767px) {
  .tp-fact-text-title {
    font-size: 42px;
  }
}

.tp-fact-text-subtitle {
  font-size: 20px;
  font-weight: 500;
  font-family: "Roboto", sans-serif;
  margin-bottom: 0px;
}
@media (max-width: 767px) {
  .tp-fact-text-subtitle {
    font-size: 16px;
  }
}

.tp-fact-icon {
  position: relative;
  display: inline-block;
}
.tp-fact-icon i {
  font-size: 55px;
  color: #1d3164;
  position: absolute;
  top: 31%;
  left: 30%;
}

.tp-fact:hover i {
  animation: scale-up-one infinite 1.5s linear;
}

/*----------------------------------------*/
/*  09. Pricing
/*----------------------------------------*/
@media (max-width: 767px) {
  .tp-pricing-area .section-title-wrapper.mb-55 {
    margin-bottom: 30px;
  }
}

.tp-pricing {
  padding: 60px 75px;
  border-radius: 5px;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-pricing {
    padding: 50px 35px;
  }
}
@media (max-width: 767px) {
  .tp-pricing {
    padding: 50px 0px;
  }
}
.tp-pricing-icon {
  height: 260px;
  width: 260px;
  padding: 45px;
  display: inline-block;
  border-radius: 50%;
  background: #e4ede9;
}
@media (max-width: 767px) {
  .tp-pricing-icon {
    height: 230px;
    width: 230px;
    padding: 30px;
  }
}
.tp-pricing-icon-inner {
  height: 170px;
  width: 170px;
  line-height: 250px;
  background: #ffffff;
  display: inline-block;
  border-radius: 50%;
  text-align: center;
}
.tp-pricing-icon i {
  color: #1d3164;
  font-size: 100px;
}
.tp-pricing-list {
  display: inline-block;
}
.tp-pricing-list ul li {
  font-size: 18px;
  list-style: none;
  margin-bottom: 15px;
}
.tp-pricing-list ul li:last-child {
  margin-bottom: 0px;
}
.tp-pricing-list ul li i {
  font-size: 12px;
  margin-right: 4px;
  transform: translateY(-2px);
}
.tp-pricing-btn .theme-btn:hover, .tp-pricing-btn .theme-btn.active {
  background: #fed10c;
  color: #1d3164;
}
.tp-pricing-btn .theme-btn.active:hover {
  background: #1d3164;
  color: #ffffff;
}
.tp-pricing:hover .tp-pricing-icon i {
  animation: scale-up-one infinite 2s linear;
}

.tp-pricing-rate,
.tp-pricing-list,
.tp-pricing-btn {
  display: inline-block;
  text-align: left;
}
@media (max-width: 767px) {
  .tp-pricing-rate,
.tp-pricing-list,
.tp-pricing-btn {
    display: inherit;
  }
}

@media (max-width: 767px) {
  .tp-pricing-list {
    text-align: center;
  }
  .tp-pricing-list ul {
    text-align: left;
    display: inline-block;
  }
}

@media (max-width: 767px) {
  .tp-pricing-btn {
    text-align: center;
  }
}

.tp-pricing-rate-subtitle {
  font-size: 24px;
}

.tp-pricing-rate-title {
  font-weight: 700;
  font-family: "Roboto", sans-serif;
  font-size: 60px;
  line-height: 0.5;
}
.tp-pricing-rate-title span {
  font-weight: 700;
  font-size: 24px;
}

.tp-pricing-tabs {
  display: inline-flex;
  padding: 5px;
  background: #ecf3f0;
  border-radius: 30px;
}
@media (max-width: 767px) {
  .tp-pricing-tabs {
    margin-bottom: 40px;
  }
}
.tp-pricing-tabs button {
  height: 50px;
  line-height: 50px;
  padding: 0px 30px;
  background: #fed10c;
  display: inline-block;
  border-radius: 30px;
  font-weight: 500;
  font-size: 16px;
  color: #09150f;
  border: none;
  outline: none;
  cursor: pointer;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-pricing-tabs button {
    padding: 0px 22px;
  }
}
.tp-pricing-tabs button:last-child {
  margin-left: 6px;
}
.tp-pricing-tabs button.active {
  background: #1d3164;
  color: #ffffff;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-pricing-area-two .tp-section-title-two br {
    display: none;
  }
}

.tp-pricing-two-shape {
  height: 550px;
  width: 100%;
  position: absolute;
  top: 0px;
  left: 0px;
  right: 0px;
  background: #1d3164;
}

.tp-pricing-tabs-two {
  background: #ffffff;
}

.tp-pricing-two {
  padding: 20px;
}

.tp-pricing-two-img img {
  width: 100%;
}

.tp-pricing-two-rate {
  margin-left: 40px;
  margin-right: 40px;
  background: #ffffff;
  padding: 20px 15px;
  text-align: center;
  box-shadow: 0px 5px 25px 0px rgba(0, 6, 91, 0.06);
  position: relative;
  position: absolute;
  top: -52px;
  left: 0px;
  right: 0px;
}
.tp-pricing-two-rate.active {
  background: #fed10c;
}
.tp-pricing-two-rate h3 {
  font-family: "Roboto", sans-serif;
  font-weight: 700;
  color: #09150f;
  line-height: 1;
  margin-bottom: 0px;
  font-size: 45px;
}
@media (max-width: 767px) {
  .tp-pricing-two-rate h3 {
    font-size: 30px;
  }
}
.tp-pricing-two-rate h3 span {
  font-size: 24px;
  line-height: 1;
}

.tp-pricing-two-btn a {
  padding: 0px 43px;
  border-radius: 30px;
  color: #09150f;
}
.tp-pricing-two-btn a.theme-btn {
  color: #ffffff;
}
.tp-pricing-two-btn a.theme-btn:hover {
  color: #09150f;
}

.tp-pricing-two-list {
  display: inline-block;
}
.tp-pricing-two-list ul {
  text-align: left;
}
.tp-pricing-two-list ul li {
  font-size: 18px;
  list-style: none;
  margin-bottom: 15px;
  color: #626664;
}
.tp-pricing-two-list ul li:last-child {
  margin-bottom: 0px;
}
.tp-pricing-two-list ul li i {
  font-size: 12px;
  margin-right: 4px;
  transform: translateY(-2px);
}

.tp-pricing-cat {
  font-size: 27px;
  color: #09150f;
  padding-top: 70px;
  margin-bottom: 30px;
}

.tp-pricing-two-content {
  background: #ffffff;
  position: relative;
}

.tp-pricings .tp-pricing-icon {
  background: #f0f1f2;
}
.tp-pricings .tp-pricing-rate-subtitle, .tp-pricings .tp-pricing-rate-title {
  color: #09150f;
}
.tp-pricings .tp-pricing-list ul li {
  color: #626664;
}
.tp-pricings .tp-pricing-btn .theme-btn:hover, .tp-pricings .tp-pricing-btn .theme-btn.active {
  color: #09150f;
}
.tp-pricings .tp-pricing-btn .theme-btn.active:hover {
  color: #ffffff;
}

/*----------------------------------------*/
/*  10. Testimonial
/*----------------------------------------*/
.tp-testimonial-bg {
  box-shadow: 0px 0px 20px 0px rgba(0, 6, 91, 0.08);
}

@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-testimonial {
    margin-left: 30px;
    padding: 30px 0px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-testimonial {
    margin-left: 0px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-testimonial {
    padding: 0px 30px 30px 30px;
  }
}

@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-testimonial-img {
    padding-left: 20px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-testimonial-img {
    margin-bottom: 30px;
  }
}
.tp-testimonial-img img {
  max-width: inherit;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-testimonial-img img {
    max-width: 100%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-testimonial-img img {
    width: 100%;
  }
}

.tp-testimonial-single p {
  font-size: 20px;
  line-height: 1.6;
  padding-right: 70px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-testimonial-single p {
    padding-right: 15px;
    font-size: 16px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-testimonial-single p {
    padding-right: 0px;
    font-size: 16px;
  }
}

.tp-testimonial-author {
  display: inline-flex;
  align-items: center;
}
.tp-testimonial-author-img {
  margin-right: 25px;
}
@media (max-width: 767px) {
  .tp-testimonial-author-img {
    margin-right: 15px;
  }
}
.tp-testimonial-author-img img {
  height: 75px;
  width: 75px;
  object-fit: cover;
}
@media (max-width: 767px) {
  .tp-testimonial-author-img img {
    height: 60px;
    width: 60px;
  }
}
.tp-testimonial-author-text-name {
  font-size: 24px;
  margin-bottom: 5px;
}
@media (max-width: 767px) {
  .tp-testimonial-author-text-name {
    font-size: 18px;
    margin-bottom: 0px;
  }
}
.tp-testimonial-author-text-designation {
  font-size: 16px;
}
@media (max-width: 767px) {
  .tp-testimonial-author-text-designation {
    font-size: 14px;
    line-height: 1;
  }
}

.tp-testimonial-qoute {
  position: absolute;
  right: 155px;
  bottom: 65px;
  z-index: -1;
  animation: float-bob-y infinite 3s linear;
}
@media (max-width: 767px) {
  .tp-testimonial-qoute {
    right: 50px;
    bottom: 150px;
  }
}

.tp-testimonial-slider-arrow {
  width: 65px;
  text-align: right;
  position: absolute;
  right: 0px;
  bottom: 0px;
  z-index: 3;
}
.tp-testimonial-slider-arrow .slide-prev, .tp-testimonial-slider-arrow .slide-next {
  height: 65px;
  width: 65px;
  line-height: 65px;
  display: block;
  background: #fed10c;
  color: #1d3164;
  cursor: pointer;
  border: none;
  outline: none;
  text-align: center;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
  position: static;
  font-size: 20px;
  margin: 0px;
}
.tp-testimonial-slider-arrow .slide-prev {
  background: #1d3164;
  color: #ffffff;
}

.testimonial-button-next.swiper-button-disabled, .testimonial-button-prev.swiper-button-disabled {
  opacity: 0.7;
}

.tp-testimonial-shape {
  position: absolute;
  left: 0px;
  right: 0px;
  bottom: 0px;
  height: 285px;
  width: 100%;
  background: #ecf3f0;
  z-index: 1;
}

.tp-testimonial-divide {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-testimonial-divide {
    display: inherit;
  }
}

.tp-testimonial-two-wrapper {
  width: calc(100% - 630px);
  margin-left: -125px;
  margin-bottom: 60px;
}
@media only screen and (min-width: 1600px) and (max-width: 1750px) {
  .tp-testimonial-two-wrapper {
    width: calc(100% - 565px);
  }
}
@media only screen and (min-width: 1400px) and (max-width: 1599px) {
  .tp-testimonial-two-wrapper {
    width: calc(100% - 400px);
  }
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-testimonial-two-wrapper {
    width: calc(100% - 415px);
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-testimonial-two-wrapper {
    width: 100%;
    margin: 0px;
    margin-bottom: 60px;
  }
}

.tp-testimonial-title-wrapper {
  position: absolute;
  top: 0px;
  left: 0px;
  z-index: 1;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-testimonial-title-wrapper {
    position: inherit;
    padding-top: 112px;
    margin-bottom: 50px;
  }
}

.tp-testimonial-area-two-shape {
  position: absolute;
  top: 0px;
  left: 0px;
  right: 0px;
  background: #f5f5f5;
  width: 100%;
  height: 420px;
}

.tp-testimonial-two-form {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  width: 715px;
  min-height: 100%;
  text-align: center;
}
@media only screen and (min-width: 1600px) and (max-width: 1750px) {
  .tp-testimonial-two-form {
    width: 650px;
  }
}
@media only screen and (min-width: 1400px) and (max-width: 1599px) {
  .tp-testimonial-two-form {
    width: 550px;
  }
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-testimonial-two-form {
    width: 500px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-testimonial-two-form {
    width: 100%;
  }
}

.tp-testimonial-two-form-wrapper {
  padding: 42px 50px 45px 50px;
  background: #ffffff;
  display: inline-block;
  width: 485px;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-testimonial-two-form-wrapper {
    width: 400px;
  }
}
@media (max-width: 767px) {
  .tp-testimonial-two-form-wrapper {
    width: 100%;
    padding: 22px 20px 25px 20px;
  }
}
.tp-testimonial-two-form-wrapper .input-field input, .tp-testimonial-two-form-wrapper .input-field select, .tp-testimonial-two-form-wrapper .input-field textarea {
  color: #6a6b71;
  font-size: 15px;
  font-family: "Roboto", sans-serif;
  display: block;
  font-weight: 500;
  height: 60px;
  padding: 0px 20px;
  border: none;
  outline: none;
  background: #f5f5f5;
  width: 100%;
}
.tp-testimonial-two-form-wrapper .input-field input::-moz-placeholder, .tp-testimonial-two-form-wrapper .input-field input::placeholder, .tp-testimonial-two-form-wrapper .input-field select::-moz-placeholder, .tp-testimonial-two-form-wrapper .input-field select::placeholder, .tp-testimonial-two-form-wrapper .input-field textarea::-moz-placeholder, .tp-testimonial-two-form-wrapper .input-field textarea::placeholder {
  font-size: 15px;
  color: #6a6b71;
  font-weight: 500;
  opacity: 1;
}
.tp-testimonial-two-form-wrapper .input-field textarea {
  height: 125px;
  padding-top: 15px;
}
.tp-testimonial-two-form-wrapper .input-field button {
  display: block;
  text-align: center;
  width: 100%;
}

.tp-testimonial-form-title {
  font-size: 36px;
  color: #09150f;
}
.tp-testimonial-form-title span {
  color: #1d3164;
}

.tp-testimonial-two {
  padding: 50px 40px 35px 40px;
  background: #ffffff;
  box-shadow: 0px 10px 30px 0px rgba(30, 33, 62, 0.06);
  padding: 40px 25px 25px 25px;
}
@media only screen and (min-width: 1600px) and (max-width: 1750px) {
  .tp-testimonial-two {
    padding: 40px 25px 25px 25px;
  }
}
.tp-testimonial-two-author {
  display: flex;
  align-items: center;
}
.tp-testimonial-two-author-img {
  width: 85px;
  margin-right: 15px;
}
.tp-testimonial-two-author-img img {
  height: 83px;
  width: 83px;
  border-radius: 50%;
  object-fit: cover;
}
.tp-testimonial-two-author-text span {
  font-size: 16px;
  display: block;
  color: #626664;
}
.tp-testimonial-two p {
  font-size: 16px;
  color: #6a6b71;
}

.tp-testimonial-two-name {
  font-size: 24px;
  color: #09150f;
  margin-bottom: 0px;
}
@media only screen and (min-width: 1400px) and (max-width: 1599px) {
  .tp-testimonial-two-name {
    font-size: 21px;
  }
}
@media (max-width: 767px) {
  .tp-testimonial-two-name {
    font-size: 20px;
  }
}

.tp-testimonial-two-qoute {
  position: absolute;
  top: 0px;
  right: 0px;
  background: #1d3164;
  height: 80px;
  width: 80px;
  line-height: 105px;
  text-align: center;
}
@media only screen and (min-width: 768px) and (max-width: 991px), only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 1400px) and (max-width: 1599px) {
  .tp-testimonial-two-qoute {
    height: 60px;
    width: 60px;
    line-height: 72px;
  }
}
@media (max-width: 767px) {
  .tp-testimonial-two-qoute {
    height: 50px;
    width: 50px;
    line-height: 52px;
  }
}
.tp-testimonial-two-qoute i {
  color: #ffffff;
  font-size: 50px;
}
@media only screen and (min-width: 768px) and (max-width: 991px), only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 1400px) and (max-width: 1599px) {
  .tp-testimonial-two-qoute i {
    font-size: 32px;
  }
}
@media (max-width: 767px) {
  .tp-testimonial-two-qoute i {
    font-size: 24px;
  }
}

.tp-testimonial-two-active.common-dots .slide-dots {
  bottom: -9px;
}

.tp-testimonial-two-active.swiper-container-horizontal.common-dots .slide-dots .swiper-pagination-bullet.swiper-pagination-bullet-active {
  margin-top: 0;
  margin-bottom: 9px;
}

.tp-testimonial-three-shadow {
  box-shadow: 0px 0px 30px 0px rgba(30, 33, 62, 0.06);
  position: relative;
}

.tp-testimonial-three-shadow.common-dots .slide-dots {
  left: 50%;
  transform: translateX(-50%);
  bottom: 30px;
}
.tp-testimonial-three-shadow.common-dots .slide-dots .swiper-pagination-bullet {
  font-size: 0px;
  height: 12px;
  width: 12px;
  padding: 3px;
  background: #97bdaa;
  cursor: pointer;
  border-radius: 50%;
  border: none;
  display: inline-block;
  outline: none;
  position: relative;
  margin: 6px;
}
.tp-testimonial-three-shadow.common-dots .slide-dots .swiper-pagination-bullet:before {
  position: absolute;
  content: "";
  height: 18px;
  width: 18px;
  border-radius: 50%;
  border: 2px solid transparent;
  top: -6px;
  left: -6px;
}
.tp-testimonial-three-shadow.common-dots .slide-dots .swiper-pagination-bullet.swiper-pagination-bullet-active {
  height: 6px;
  width: 6px;
  background: #1d3164;
  margin: 11px;
  margin-left: 9px;
  transform: translateY(2px);
}
.tp-testimonial-three-shadow.common-dots .slide-dots .swiper-pagination-bullet.swiper-pagination-bullet-active:before {
  border-color: #1d3164;
}

.tp-testimonial-three-shadow.common-dots .slide-dots {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  bottom: -80px;
  top: inherit;
  right: inherit;
  width: inherit;
  z-index: 9;
}

.tp-testimonial-two-wrapper .swiper-container-horizontal.common-dots .slide-dots .swiper-pagination-bullet.swiper-pagination-bullet-active {
  transform: inherit;
  margin-left: 15px;
}

.tp-about-testimonial-shape {
  bottom: auto;
  top: 0px;
  background: #f7f7f7;
  height: 255px;
}

.tp-abouts-testimonial p, .tp-abouts-testimonial .tp-testimonial-author-text-designation, .tp-abouts-testimonial i {
  color: #626664;
}

.tp-testimonial-two-form-four {
  min-height: 765px;
  display: inline-flex;
  justify-content: center;
  align-items: flex-end;
}
.tp-testimonial-two-form-four p {
  color: #626664;
}

/*----------------------------------------*/
/*  11. Project
/*----------------------------------------*/
.tp-project-shape {
  position: absolute;
  left: 0px;
  right: 0px;
  bottom: 0px;
  width: 100%;
  background: #ffffff;
  height: 110px;
}

.tp-project-subtitle {
  font-size: 16px;
  font-weight: 500;
  margin-bottom: 5px;
  display: block;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}

.tp-project-title {
  font-size: 24px;
  margin-bottom: 0px;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-project-title {
    font-size: 22px;
  }
}

.tp-project-text {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #ffffff;
  padding: 35px 40px;
  margin-left: 15px;
  margin-right: 15px;
  border-radius: 3px;
  box-shadow: 0px 5px 25px 0px rgba(0, 6, 91, 0.08);
  margin-top: -50px;
  position: relative;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-project-text {
    padding: 30px 30px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-project-text {
    padding: 30px 25px;
  }
}
.tp-project-text-icon a {
  height: 60px;
  width: 60px;
  line-height: 60px;
  border-radius: 50%;
  color: #ffffff;
  display: inline-block;
  background: #1d3164;
  text-align: center;
  font-size: 20px;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-project-text-icon a {
    height: 40px;
    width: 40px;
    line-height: 40px;
    font-size: 18px;
  }
}

.tp-project-img {
  overflow: hidden;
}
.tp-project-img img {
  width: 100%;
  border-radius: 4px;
}

.tp-project:hover .tp-project-subtitle, .tp-project:hover .tp-project-title {
  color: #ffffff !important;
}
.tp-project:hover .tp-project-text {
  background: #1d3164;
}
.tp-project:hover .tp-project-text-icon a {
  background: #fed10c;
  color: #09150f;
}
.tp-project:hover img {
  transform: scale3d(1.1, 1.1, 1.1);
}

.tp-project-title-btn a {
  color: #102579;
}
.tp-project-title-btn a:hover {
  color: #ffffff;
}

.tp-project-title-wrapper h2 {
  font-size: 54px;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-project-title-wrapper h2 {
    font-size: 45px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-project-title-wrapper h2 {
    font-size: 36px;
  }
}
@media (max-width: 767px) {
  .tp-project-title-wrapper h2 {
    font-size: 32px;
  }
}

.tp-project-three-img {
  position: relative;
}
.tp-project-three-img img {
  width: 100%;
}
@media (max-width: 767px) {
  .tp-project-three-img img {
    min-height: 290px;
    object-fit: cover;
  }
}
.tp-project-three-img-overlay {
  background-color: rgba(254, 209, 12, 0.8);
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0px;
  left: 0px;
  transform: scale(0);
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}
.tp-project-three-img-overlay-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  width: 100%;
}
.tp-project-three-img-overlay-text-icon {
  margin-bottom: 28px;
}
.tp-project-three-img-overlay-text-icon a {
  height: 64px;
  width: 64px;
  display: inline-block;
  background: #102579;
  color: #ffffff;
  font-size: 20px;
  text-align: center;
  border-radius: 50%;
  line-height: 64px;
}
.tp-project-three-img-overlay-text-icon a:hover {
  background: #1d3164;
}
.tp-project-three-img-overlay span {
  font-size: 16px;
  font-weight: 500;
  display: block;
  color: #102579;
}
.tp-project-three:hover .tp-project-three-img-overlay {
  transform: scale(0.9);
}

.tp-project-three-img-overlay-title {
  font-size: 24px;
  color: #102579;
}
.tp-project-three-img-overlay-title:hover {
  color: #1d3164;
}

@media (max-width: 767px) {
  .tp-project-title-btn {
    margin-bottom: 25px;
  }
}

.tp-prjects-tab-menu .nav-item {
  margin: 0px 6px;
}
@media (max-width: 767px) {
  .tp-prjects-tab-menu .nav-item {
    margin: 0px 4px;
  }
}
.tp-prjects-tab-menu .nav-link {
  border: 1px solid #dee0e2;
  height: 50px;
  line-height: 48px;
  padding: 0px 30px;
  border-radius: 50px;
  background: none;
  color: #09150f;
  outline: none;
  cursor: pointer;
  display: inline-block;
  font-weight: 500;
  font-family: "Roboto", sans-serif;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-prjects-tab-menu .nav-link {
    padding: 0px 25px;
  }
}
@media (max-width: 767px) {
  .tp-prjects-tab-menu .nav-link {
    padding: 0px 17px;
    height: 40px;
    line-height: 38px;
    font-size: 15px;
    margin-bottom: 5px;
  }
}
.tp-prjects-tab-menu .nav-link.active {
  background: #1d3164;
  color: #ffffff;
  border-color: #1d3164;
}

.tp-prjects-tab-content .tp-project-text {
  padding: 35px 30px;
  position: static;
  margin-top: -55px;
  z-index: 3;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-prjects-tab-content .tp-project-text {
    padding: 30px 20px;
  }
}
.tp-prjects-tab-content .tp-project-img {
  position: relative;
  z-index: -1;
}
.tp-prjects-tab-content .tp-project-img img {
  width: 100%;
}
.tp-prjects-tab-content .tp-project-subtitle {
  color: #626664;
}
.tp-prjects-tab-content .tp-project-title {
  color: #09150f;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-prjects-tab-content .tp-project-title {
    font-size: 22px;
  }
}

.tp-faqs-left-sidebar ul li {
  font-weight: 500;
  color: #09150f;
  font-size: 18px;
}
.tp-faqs-left-sidebar ul li span {
  font-weight: 400;
  color: #626664;
  font-size: 18px;
}

/*----------------------------------------*/
/*  12. Progress
/*----------------------------------------*/
.tp-progress-area {
  background: #ffffff;
}

.tp-progress-shape {
  position: absolute;
  top: 0px;
  left: 0px;
  max-width: 835px;
}
@media only screen and (min-width: 1600px) and (max-width: 1750px) {
  .tp-progress-shape {
    max-width: 40%;
  }
}
@media only screen and (min-width: 1400px) and (max-width: 1599px), only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-progress-shape {
    max-width: 40%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-progress-shape {
    max-width: 100%;
  }
}

.tp-skill--title__wrapper {
  margin-bottom: 13px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.tp-skill--title__wrapper span {
  color: #1d3164;
}

.tp-skill--title {
  font-size: 16px;
  display: inline-block;
  margin-bottom: 0px;
  font-weight: 500;
  font-family: "Roboto", sans-serif;
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-skill__wrapper {
    margin-bottom: 20px;
  }
}
.tp-skill__wrapper .progress {
  height: 8px;
  border-radius: 0px;
  overflow: inherit;
  background-color: #e9ecef;
}
.tp-skill__wrapper .progress .progress-bar {
  background: #1d3164;
  position: relative;
  overflow: inherit;
}
.tp-skill__wrapper .progress .progress-bar span {
  height: 22px;
  width: 4px;
  display: inline-block;
  background: #1d3164;
  position: absolute;
  transform: rotate(20deg);
  right: -2px;
  border-radius: 30px;
}

.tp-skill--content {
  overflow: hidden;
  padding-bottom: 15px;
}

.tp-skill--title__wrapper {
  margin-bottom: 13px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: relative;
}

.tp-skill--title__wrapper span {
  color: #1d3164;
  position: absolute;
  top: 0;
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-progress-text p {
    margin-bottom: 20px;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-progress-img {
    margin-bottom: 50px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-progress-img img {
    width: 100%;
  }
}

/*----------------------------------------*/
/*  13. Blog
/*----------------------------------------*/
.tp-blog-img {
  position: relative;
  border-radius: 5px;
}
.tp-blog-img .tp-blog-badge {
  height: 50px;
  line-height: 50px;
  width: 170px;
  padding-left: 20px;
  background: #1d3164;
  display: inline-block;
  position: absolute;
  top: 20px;
  left: 0px;
  font-size: 14px;
  font-weight: 500;
  color: #ffffff;
  text-transform: uppercase;
  clip-path: polygon(0 0, 100% 0%, 94% 100%, 0% 100%);
}
.tp-blog-img img {
  border-radius: 5px;
}

.tp-blog-meta li {
  display: inline-block;
  list-style: none;
  margin-right: 25px;
}
.tp-blog-meta li:last-child {
  margin-right: 0px;
}
.tp-blog-meta li a {
  font-size: 16px;
  font-weight: 500;
}
.tp-blog-meta li a:hover {
  color: #1d3164;
}

.tp-blog-link {
  display: inline-flex;
  align-items: center;
}
.tp-blog-link a {
  font-size: 16px;
  font-weight: 500;
}
.tp-blog-link a:hover {
  color: #1d3164;
  padding-left: 5px;
}
.tp-blog-link i {
  font-size: 16px;
  transform: translateY(2px);
  display: inline-block;
  margin-right: 2px;
  line-height: 1;
}

.tp-blog-title {
  font-size: 24px;
  line-height: 1.41;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-blog-title {
    font-size: 22px;
  }
}
.tp-blog-title:hover {
  color: #1d3164;
}

.tp-blog-img {
  overflow: hidden;
}
.tp-blog-img img {
  width: 100%;
  border-radius: 4px;
}

.tp-blog:hover img {
  transform: scale3d(1.1, 1.1, 1.1);
}

@media only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-blog-area.pt-90 {
    padding-top: 75px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-blog-area.pt-90 {
    padding-top: 70px;
  }
}
@media (max-width: 767px) {
  .tp-blog-area.pt-90 {
    padding-top: 75px;
  }
}

@media (max-width: 767px) {
  .tp-blog-area .section-title-wrapper {
    margin-bottom: 60px;
  }
}

.tp-blog-two:hover img {
  transform: scale3d(1.1, 1.1, 1.1);
}

.tp-blog-date {
  text-align: center;
  background: #1d3164;
  position: absolute;
  top: 20px;
  right: 0px;
  padding: 19px 24px 15px 24px;
}
.tp-blog-date h4 {
  font-size: 27px;
  color: #ffffff;
  margin-bottom: 0px;
  line-height: 0.8;
}
.tp-blog-date span {
  font-size: 16px;
  font-weight: 500;
  color: #ffffff;
  line-height: 1;
}

.tp-blog-title-two {
  font-size: 24px;
  color: #09150f;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), (max-width: 767px) {
  .tp-blog-title-two {
    font-size: 22px;
  }
}
.tp-blog-title-two:hover {
  color: #1d3164;
}

.tp-blog-meta-two ul {
  text-align: center;
}
.tp-blog-meta-two ul li {
  list-style: none;
  display: inline-block;
}
.tp-blog-meta-two ul li a {
  font-size: 15px;
  font-weight: 500;
  color: #09150f;
}
.tp-blog-meta-two ul li a:hover {
  color: #1d3164;
}

.tp-blog-text-two {
  padding: 35px 30px 35px 30px;
  background: #ffffff;
  box-shadow: 3.09px 9.511px 18.8px 1.2px rgba(30, 33, 62, 0.06);
  margin-left: 15px;
  margin-right: 15px;
  text-align: center;
  margin-top: -80px;
  position: relative;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-blog-text-two {
    padding: 30px 15px 25px 15px;
  }
}

.tp-blog-link-two a,
.tp-blog-three-link a {
  color: #6a6b71;
  font-weight: 500;
  position: relative;
}
.tp-blog-link-two a::before,
.tp-blog-three-link a::before {
  position: absolute;
  content: "";
  height: 1px;
  width: 0%;
  background: #1d3164;
  left: 0px;
  bottom: 0px;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}
.tp-blog-link-two a:hover,
.tp-blog-three-link a:hover {
  color: #1d3164;
}
.tp-blog-link-two a:hover:before,
.tp-blog-three-link a:hover:before {
  width: 100%;
}

.tp-blog-img {
  overflow: hidden;
}
.tp-blog-img img {
  width: 100%;
}

.tp-blog-three-img {
  overflow: hidden;
  border-radius: 5px;
}
.tp-blog-three-img img {
  width: 100%;
  border-radius: 5px;
}
.tp-blog-three-text-meta {
  height: 50px;
  line-height: 50px;
  padding-left: 20px;
  background: #1d3164;
  clip-path: polygon(0 0, 100% 0%, 97% 99%, 0% 100%);
  width: calc(100% - 100px);
  margin-top: -25px;
  margin-bottom: 30px;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-blog-three-text-meta {
    width: calc(100% - 40px);
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-blog-three-text-meta {
    width: calc(100% - 20px);
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .tp-blog-three-text-meta {
    width: calc(100% - 100px);
  }
}
@media (max-width: 767px) {
  .tp-blog-three-text-meta {
    margin-bottom: 20px;
  }
}
.tp-blog-three-text-meta a, .tp-blog-three-text-meta span {
  font-size: 16px;
  font-weight: 500;
  color: #ffffff;
}
.tp-blog-three:hover .tp-blog-three-img img {
  transform: scale3d(1.1, 1.1, 1.1);
}

.tp-blog-three-title {
  font-size: 24px;
  color: #102579;
  line-height: 34px;
}
.tp-blog-three-title:hover {
  color: #1d3164;
}

.tp-blog-three-link a:hover {
  padding-left: 5px;
}
.tp-blog-three-link a:before {
  display: none;
}
.tp-blog-three-link i {
  transform: translateY(2px);
  margin-right: 3px;
}

.ablog-4 {
  border-radius: 10px;
  overflow: hidden;
  -webkit-box-shadow: 0px 1px 2px 0px rgba(10, 0, 58, 0.14);
  -moz-box-shadow: 0px 1px 2px 0px rgba(10, 0, 58, 0.14);
  box-shadow: 0px 1px 2px 0px rgba(10, 0, 58, 0.14);
}

.ablog__text4 {
  padding: 32px 40px 40px 40px;
  border-top: 0px;
}
@media (max-width: 767px) {
  .ablog__text4 {
    padding: 27px 25px 25px 25px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .ablog__text4 {
    padding: 32px 40px 40px 40px;
  }
}

.ablog__meta4 {
  margin-bottom: 20px;
}
.ablog__meta4 ul li a {
  font-size: 18px;
}
.ablog__meta4 ul li a:hover {
  color: #1d3164;
}
.ablog__meta4 ul li a i {
  font-size: 16px;
}

.ablog__text--title4 {
  font-size: 36px;
}
@media (max-width: 767px) {
  .ablog__text--title4 {
    font-size: 32px;
  }
}
.ablog__text--title4:hover {
  color: #1d3164;
}

.ablog__img4 {
  position: relative;
}
.ablog__img4 .avideo-btn-4 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.ablog__img--active .slide-prev, .ablog__img--active .slide-next {
  position: absolute;
  color: #1d3164;
  font-size: 20px;
  height: 50px;
  width: 50px;
  line-height: 50px;
  background: #ffffff;
  border: none;
  outline: none;
  cursor: pointer;
  z-index: 3;
  text-align: center;
  top: 50%;
  transform: translateY(-50%);
  margin: 0px;
  border-radius: 50%;
}
.ablog__img--active .slide-prev:hover, .ablog__img--active .slide-next:hover {
  background: #1d3164;
  color: #ffffff;
}
.ablog__img--active .slide-prev {
  left: 40px;
}
@media (max-width: 767px) {
  .ablog__img--active .slide-prev {
    left: 25px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .ablog__img--active .slide-prev {
    left: 40px;
  }
}
.ablog__img--active .slide-next {
  right: 40px;
}
@media (max-width: 767px) {
  .ablog__img--active .slide-next {
    right: 25px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .ablog__img--active .slide-next {
    right: 40px;
  }
}

.ablog-4:hover img {
  transform: scale(1);
}

.sidebar--widget__search form {
  position: relative;
}
.sidebar--widget__search form input {
  width: 100%;
  height: 60px;
  line-height: 60px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  border: none;
  outline: none;
  padding: 0 20px;
  background: #f7f7f7;
  color: #83868c;
}
.sidebar--widget__search form button {
  position: absolute;
  top: 0;
  right: 0;
  height: 60px;
  width: 50px;
  line-height: 60px;
  color: #1d3164;
  background: transparent;
  border: none;
  outline: none;
  cursor: pointer;
}

.sidebar--widget__post {
  display: flex;
}
.sidebar--widget__post .post__img {
  height: 90px;
  width: 80px;
  border-radius: 10px;
  background-size: cover;
  background-position: left;
  margin-right: 15px;
}
.sidebar--widget__post .sidebar__post--text {
  overflow: hidden;
}

.sidebar__post--title {
  font-size: 20px;
  margin-bottom: 5px;
}
.sidebar__post--title br {
  display: none;
}
@media only screen and (min-width: 768px) and (max-width: 991px), only screen and (min-width: 576px) and (max-width: 767px) {
  .sidebar__post--title br {
    display: inline-block;
  }
}
.sidebar__post--title:hover {
  color: #1d3164;
}

.sidebar__widget--title {
  font-size: 26px;
  position: relative;
  padding-bottom: 12px;
}
.sidebar__widget--title:before {
  position: absolute;
  content: "";
  left: 0;
  bottom: 0;
  width: 60px;
  height: 2px;
  background: #1d3164;
}

.sidebar--widget__cat ul li {
  margin-bottom: 15px;
  list-style: none;
}
.sidebar--widget__cat ul li:last-child {
  margin-bottom: 0px;
}
.sidebar--widget__cat ul li a {
  display: inline-block;
  position: relative;
  padding-left: 20px;
}
.sidebar--widget__cat ul li a:before {
  position: absolute;
  content: "\f054";
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  font-family: "Font Awesome 5 Pro";
  font-size: 14px;
  color: #1d3164;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
}
.sidebar--widget__cat ul li a:hover {
  color: #1d3164;
}
.sidebar--widget__cat ul li a:hover:before {
  left: 7px;
}

.sidebar--widget__tag a {
  display: inline-block;
  height: 34px;
  line-height: 30px;
  text-align: center;
  padding: 0 19px;
  font-size: 14px;
  border: 2px solid #dce1e4;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  margin-right: 8px;
  margin-bottom: 10px;
}
.sidebar--widget__tag a:hover {
  background: #1d3164;
  color: #ffffff;
  border-color: #1d3164;
}

@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .ablog__sidebar--wrapper {
    margin-right: 0px;
  }
}

.avideo-btn {
  height: 100px;
  width: 100px;
  line-height: 100px;
  background: #ffffff;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .avideo-btn {
    height: 70px;
    width: 70px;
    line-height: 70px;
  }
}
.avideo-btn a {
  height: 86px;
  width: 86px;
  line-height: 86px;
  background: #1d3164;
  display: inline-block;
  font-size: 18px;
  color: #ffffff;
  text-align: center;
  border-radius: 50%;
  cursor: pointer;
  position: relative;
  z-index: 2;
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .avideo-btn a {
    height: 56px;
    width: 56px;
    line-height: 56px;
  }
}
.avideo-btn a:hover {
  background: #1d3164;
}

.basic-pagination ul li {
  display: inline-block;
  margin-right: 10px;
}
.basic-pagination ul li a, .basic-pagination ul li span {
  position: relative;
  overflow: hidden;
  background: #f1f1f1;
  color: #1d3164;
  font-size: 20px;
  display: inline-block;
  width: 44px;
  height: 44px;
  line-height: 44px;
  text-align: center;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
}

.basic-pagination ul li a:hover, .basic-pagination ul li span.current {
  background: #1d3164;
  color: #ffffff;
}

.tp-custom-container-box {
  max-width: 1170px;
  margin: 0 auto;
}

.ablog__meta ul li {
  display: inline-block;
  list-style: none;
  margin-right: 15px;
}
.ablog__meta ul li:last-child {
  margin-right: 0px;
}
@media (max-width: 767px) {
  .ablog__meta ul li {
    margin-right: 10px;
  }
}

.ablog__meta ul li a i {
  margin-right: 2px;
}

.ablog__text4 blockquote {
  padding: 40px;
  color: #666;
  position: relative;
  background: #F8F8F8;
  font-style: normal;
  text-align: left;
  clear: both;
  font-weight: 400;
  border-radius: 10px;
  box-shadow: 0px 1px 2px 0px rgba(10, 0, 58, 0.14);
  border: 1px solid #f6f6f8;
  margin-bottom: 30px;
  padding-bottom: 25px;
}
.ablog__text4 blockquote p {
  color: #09150f;
}
@media (max-width: 767px) {
  .ablog__text4 blockquote {
    padding: 25px;
    padding-bottom: 10px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .ablog__text4 blockquote {
    padding: 40px;
    padding-bottom: 25px;
  }
}
.ablog__text4 blockquote:before {
  content: "\f10e";
  position: static;
  font-family: "Font Awesome 5 Pro";
  font-size: 32px;
  color: #1d3164;
  line-height: 1;
  margin-bottom: 18px;
  display: inline-block;
}
.ablog__text4 blockquote cite {
  font-size: 18px;
  display: block;
  margin-top: 10px;
  color: #09150f;
  font-style: inherit;
}
.ablog__text4 blockquote cite:before {
  content: "";
  display: inline-block;
  background: #09150f;
  height: 2px;
  width: 40px;
  top: -4px;
  margin-right: 10px;
  position: relative;
}

.blog__deatails--tag span {
  font-size: 18px;
  margin-right: 10px;
  margin-bottom: 0px;
  font-weight: 600;
  color: #1d3164;
}
@media (max-width: 767px) {
  .blog__deatails--tag span {
    margin-bottom: 10px;
    display: block;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .blog__deatails--tag span {
    margin-bottom: 0px;
    display: inline-block;
  }
}
.blog__deatails--tag a {
  display: inline-block;
  height: 34px;
  line-height: 30px;
  text-align: center;
  padding: 0 19px;
  font-size: 14px;
  border: 2px solid #dce1e4;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  margin-right: 8px;
}
@media (max-width: 767px) {
  .blog__deatails--tag a {
    margin-bottom: 10px;
    padding: 0px 14px;
    margin-right: 6px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .blog__deatails--tag a {
    margin-bottom: 0px;
  }
}
.blog__deatails--tag a:hover {
  border-color: #1d3164;
  color: #ffffff;
  background: #1d3164;
}

.blog__details--subtitle {
  font-size: 27px;
  margin-bottom: 15px;
}

.blog__author {
  padding: 30px 40px;
  -webkit-box-shadow: 0px 1px 4px 0px rgba(10, 0, 58, 0.14);
  -moz-box-shadow: 0px 1px 4px 0px rgba(10, 0, 58, 0.14);
  box-shadow: 0px 1px 4px 0px rgba(10, 0, 58, 0.14);
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
}
@media (max-width: 767px) {
  .blog__author {
    padding-bottom: 18px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .blog__author {
    padding-bottom: 30px;
    padding-bottom: 20px;
  }
}
@media (max-width: 767px) {
  .blog__author-img {
    margin-bottom: 10px;
  }
}

.blog__author-content h5 {
  font-size: 18px;
  margin-bottom: 0px;
}
.blog__author-content span {
  display: inline-block;
  margin-bottom: 5px;
}
.blog__author-content p {
  margin-bottom: 0px;
}

.post-comment-title h3 {
  font-size: 24px;
}

.latest-comments ul {
  list-style: none;
}

.latest-comments li:first-child .comments-box {
  border-top: 0;
  padding-top: 0;
}

.comments-avatar {
  float: left;
  margin-right: 20px;
  width: 70px;
}
.comments-avatar img {
  border-radius: 50%;
}

.children .comments-avatar {
  width: 50px;
}

.comments-text {
  overflow: hidden;
  border-bottom: 1px solid #f1f0f7;
  padding-bottom: 30px;
  margin-bottom: 30px;
}
.comments-text p {
  margin-bottom: 20px;
}

.avatar-name {
  margin-bottom: 10px;
  overflow: hidden;
  position: relative;
}
.avatar-name h5 {
  font-size: 18px;
  margin-bottom: 0px;
}
.avatar-name span {
  font-size: 14px;
  font-weight: 500;
}

.comment-reply {
  font-weight: 600;
  font-size: 14px;
  color: #1d3164;
}
.comment-reply i {
  margin-right: 3px;
}
.comment-reply:hover {
  color: #1d3164;
}

.latest-comments li.children {
  margin-left: 105px;
}
@media (max-width: 767px) {
  .latest-comments li.children {
    margin-left: 0px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .latest-comments li.children {
    margin-left: 70px;
  }
}

.post-comment-form h4 {
  font-size: 24px;
  margin-bottom: 7px;
}

.post-comment-form > span {
  display: inline-block;
  margin-bottom: 45px;
}

.post-input input,
.post-input textarea {
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0 30px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
  border: 2px solid #f5f5f5;
  background: #f5f5f5;
  margin-bottom: 20px;
  color: #83868c;
}
.post-input input::-moz-placeholder,
.post-input textarea::-moz-placeholder {
  font-size: 16px;
  color: #83868c;
  opacity: 1;
}
.post-input input::placeholder,
.post-input textarea::placeholder {
  font-size: 16px;
  color: #83868c;
  opacity: 1;
}

.post-input textarea {
  height: 180px;
  line-height: 26px;
  resize: none;
  padding: 30px;
  padding-top: 20px;
}

.post-check input {
  margin-right: 5px;
  transform: translateY(2px);
}

.post-check span {
  color: #83868c;
}

.post-check {
  display: flex;
  align-items: start;
  line-height: 1.2;
}

@media (max-width: 767px) {
  .ablog-4 .ablog__text4 {
    padding: 17px 25px 25px 25px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .ablog-4 .ablog__text4 {
    padding: 32px 40px 40px 40px;
  }
}
@media (max-width: 767px) {
  .ablog-4 img {
    min-height: 200px;
  }
}

@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .blog__details--wrapper {
    margin-right: 0px;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .blog-details-area {
    padding-bottom: 60px;
  }
}

/*----------------------------------------*/
/*  14. Footer
/*----------------------------------------*/
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .tp-footer-area.pb-70 {
    padding-bottom: 60px;
  }
}

.tp-footer-widget-title {
  font-size: 24px;
  color: #ffffff;
  position: relative;
  padding-bottom: 10px;
}
.tp-footer-widget-title:before {
  position: absolute;
  content: "";
  height: 2px;
  width: 60px;
  background: #fed10c;
  left: 0px;
  bottom: 0px;
}

.tp-footer-info h4 {
  font-size: 24px;
  font-weight: 500;
  color: #ffffff;
  font-family: "Roboto", sans-serif;
}
.tp-footer-info h6 {
  font-size: 16px;
  font-weight: 400;
  color: #ffffff;
  font-family: "Roboto", sans-serif;
  line-height: 1.6;
  display: inline-flex;
}
.tp-footer-info h6 i {
  font-size: 16px;
  color: #ffffff;
  min-width: 25px;
  transform: translateY(4px);
}
.tp-footer-info-social a {
  height: 40px;
  width: 40px;
  display: inline-block;
  line-height: 40px;
  border-radius: 50%;
  font-size: 16px;
  color: #ffffff;
  background: #fed10c;
  margin-right: 10px;
  text-align: center;
}
.tp-footer-info-social a:last-child {
  margin-right: 0px;
}
.tp-footer-info-social a:hover {
  color: #ffffff;
  background: #fed10c;
}

.tp-footer-widget ul li {
  list-style: none;
  margin-bottom: 16px;
}
.tp-footer-widget ul li:last-child {
  margin-bottom: 0px;
}
.tp-footer-widget ul li a {
  font-size: 16px;
  position: relative;
  color: #ffffff;
}
.tp-footer-widget ul li a:hover {
  padding-left: 5px;
  color: #fed10c;
}
.tp-footer-widget ul li a:before {
  content: "\f054";
  font-size: 12px;
  display: inline-block;
  margin-right: 10px;
  font-family: "Font Awesome 5 Pro";
  transform: translateY(-2px);
}

.tp-footer-news-single h6 {
  font-size: 16px;
  font-weight: 400;
  font-family: "Roboto", sans-serif;
  color: #ffffff;
  line-height: 27px;
  margin-bottom: 5px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 576px) and (max-width: 767px) {
  .tp-footer-news-single h6 {
    line-height: 19px;
  }
}
.tp-footer-news-single h6:hover {
  color: #fed10c;
}
.tp-footer-news-single span {
  display: block;
  color: #ffffff;
  font-size: 16px;
}

.tp-footer-insta {
  display: flex;
  margin-left: -5px;
  margin-right: -5px;
  flex-wrap: wrap;
}
.tp-footer-insta a {
  width: 33.33%;
  padding: 0px 5px;
  margin-bottom: 10px;
  display: block;
}
.tp-footer-insta a img {
  width: 100%;
}

.footer-col-2 {
  padding-left: 50px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .footer-col-2 {
    padding-left: 30px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .footer-col-2 {
    padding-left: 0px;
  }
}

.footer-col-3 {
  padding-left: 30px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .footer-col-3 {
    padding-left: 5px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .footer-col-3 {
    padding-left: 0px;
  }
}

.footer-col-4 {
  padding-left: 30px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .footer-col-4 {
    padding-left: 10px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .footer-col-4 {
    padding-left: 0px;
  }
}

.tp-footer-subscribe-title {
  font-size: 36px;
}
@media (max-width: 767px) {
  .tp-footer-subscribe-title {
    font-size: 28px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-footer-subscribe-title {
    font-size: 32px;
  }
}

.tp-footer-subscribe-form form {
  display: flex;
  justify-content: end;
  padding-right: 80px;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-footer-subscribe-form form {
    padding-right: 50px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-footer-subscribe-form form {
    padding-right: 30px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-footer-subscribe-form form {
    justify-content: start;
  }
}
@media (max-width: 767px) {
  .tp-footer-subscribe-form form {
    padding-right: 0px;
    display: inherit;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .tp-footer-subscribe-form form {
    display: flex;
  }
}
.tp-footer-subscribe-form form .tp-footer-subscribe-form-field {
  position: relative;
  margin-right: 10px;
}
@media (max-width: 767px) {
  .tp-footer-subscribe-form form .tp-footer-subscribe-form-field {
    margin-right: 0px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .tp-footer-subscribe-form form .tp-footer-subscribe-form-field {
    margin-right: 10px;
  }
}
.tp-footer-subscribe-form form .tp-footer-subscribe-form-field input {
  height: 60px;
  width: 420px;
  display: block;
  padding: 0px 45px 0px 25px;
  font-size: 15px;
  color: #1d3164;
  border: none;
  background: #ffffff;
  outline: none;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-footer-subscribe-form form .tp-footer-subscribe-form-field input {
    width: 350px;
  }
}
@media (max-width: 767px) {
  .tp-footer-subscribe-form form .tp-footer-subscribe-form-field input {
    width: 100%;
    padding-left: 15px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .tp-footer-subscribe-form form .tp-footer-subscribe-form-field input {
    width: 330px;
    padding-left: 25px;
  }
}
.tp-footer-subscribe-form form .tp-footer-subscribe-form-field i {
  font-size: 16px;
  color: #1d3164;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 25px;
}
.tp-footer-subscribe-form form .tp-footer-subscribe-form-btn button {
  background: #1d3164;
}
.tp-footer-subscribe-form form .tp-footer-subscribe-form-btn button:hover {
  background: #1d3164;
  color: #ffffff;
}

.tp-footer-subscribe-area::before {
  position: absolute;
  content: "";
  height: 100%;
  width: 600px;
  background: #fed10c;
  top: 0px;
  left: 0px;
  z-index: 1;
}
@media (max-width: 767px) {
  .tp-footer-subscribe-area::before {
    width: 100%;
  }
}

.tp-footer-subscribe-shape {
  position: absolute;
  height: 60px;
  background: #084d2b;
  bottom: 0px;
  left: 0px;
  right: 0px;
  width: 100%;
}

.tp-copyright p {
  font-size: 18px;
  line-height: 1.3;
  color: #ffffff;
}
@media (max-width: 767px) {
  .tp-copyright p {
    font-size: 16px;
  }
}
.tp-copyright p span {
  color: #1d3164;
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-footer-subscribe-bg {
    padding-top: 20px;
  }
}

@media (max-width: 767px) {
  .tp-copyright-area {
    padding-top: 20px;
    padding-bottom: 10px;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-footer-subscribe-bg-two {
    padding: 20px 30px 20px 30px;
  }
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
  .tp-footer-subscribe-form form .tp-footer-subscribe-form-field input {
    width: 270px;
  }
}

@media (max-width: 767px) {
  .tp-copyright-area-two {
    padding: 20px 0px;
  }
}

.tp-footer-info-three p {
  padding-right: 21px;
}
@media (max-width: 767px) {
  .tp-footer-info-three p {
    padding-right: 0px;
  }
}

.tp-footer-info-social-three a {
  border-radius: 0px;
  background: #36437a;
}
.tp-footer-info-social-three a:hover {
  background: #1d3164;
}

.footer-col-3-3 {
  padding-left: 15px;
}

.tp-footer-news-three-single-img {
  width: 80px;
  float: left;
  margin-right: 20px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px), (max-width: 767px) {
  .tp-footer-news-three-single-img {
    margin-right: 10px;
  }
}
.tp-footer-news-three-single-text {
  overflow: hidden;
}
.tp-footer-news-three-single-text p {
  color: #fefefe;
}

.tp-footer-newsletter-three p {
  color: #ffffff;
  font-size: 16px;
  line-height: 1;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px), only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-footer-newsletter-three p {
    line-height: 1.3;
  }
}
.tp-footer-newsletter-three form input {
  height: 60px;
  width: 100%;
  background: #ffffff;
  border-radius: 4px;
  padding: 0px 40px 0px 20px;
  color: #6a6b71;
  font-size: 15px;
  border: 0px;
  outline: none;
}
.tp-footer-newsletter-three form .tp-footer-newsletter-three-field i {
  position: absolute;
  top: 23px;
  font-size: 15px;
  color: #1d3164;
  right: 20px;
}
.tp-footer-newsletter-three form button {
  color: #102579;
  border-radius: 50px;
}
.tp-footer-newsletter-three form button:hover {
  color: #ffffff;
}

/*----------------------------------------*/
/*  16. Feature
/*----------------------------------------*/
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-feature-area-two {
    padding-bottom: 70px;
  }
}

@media only screen and (min-width: 992px) and (max-width: 1199px), only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-feature-area-two.pb-90 {
    padding-bottom: 65px;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-feature-img {
    margin-bottom: 40px;
  }
}
.tp-feature-img img {
  max-width: inherit;
  border-radius: 4px;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-feature-img img {
    max-width: 500px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-feature-img img {
    max-width: 100%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-feature-img img {
    width: 100%;
  }
}

.tp-feature-icon i {
  font-size: 52px;
  line-height: 1;
  color: #09150f;
}
.tp-feature p {
  color: #626664;
  margin-bottom: 0px;
}
.tp-feature:hover i {
  animation-name: wobble-vertical;
  animation-duration: 1s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: 3;
}

.tp-feature-title {
  font-size: 24px;
  color: #09150f;
}
.tp-feature-title:hover {
  color: #1d3164;
}

.tp-feature-title-desc p {
  color: #626664;
}

.tp-feature-three-icon {
  display: inline-block;
  position: relative;
}
.tp-feature-three-icon i {
  font-size: 46px;
  line-height: 1;
  color: #ffffff;
  position: absolute;
  top: 33%;
  left: 33%;
}
.tp-feature-three-text p {
  color: #66686b;
  font-size: 16px;
  margin-bottom: 0px;
  padding: 0px 15px;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-feature-three-text p {
    padding: 0px;
  }
}
.tp-feature-three:hover i {
  transform: rotateY(360deg);
}

.tp-feature-three-title {
  font-size: 24px;
  color: #102579;
}
.tp-feature-three-title:hover {
  color: #1d3164;
}

/*----------------------------------------*/
/*  17. Faq
/*----------------------------------------*/
.tp-faq-text {
  margin-top: -10px;
}
.tp-faq-text .accordion-item:first-of-type .accordion-button {
  border-radius: 0px;
}
.tp-faq-text .accordion-button:not(.collapsed) {
  color: #09150f;
  font-weight: 800;
  background: none;
}
.tp-faq-text .accordion-button {
  border: 0px;
  padding-top: 28px;
  padding-bottom: 28px;
  font-size: 20px;
  font-weight: 800;
  color: #09150f;
}
@media (max-width: 767px) {
  .tp-faq-text .accordion-button {
    padding: 20px 5px;
    font-size: 18px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .tp-faq-text .accordion-button {
    font-size: 20px;
  }
}
.tp-faq-text .accordion-button:focus {
  box-shadow: none;
}
.tp-faq-text .accordion-item {
  margin-bottom: 20px;
  border: none;
  padding: 0px 10px;
  background: #ffffff;
  box-shadow: 0px 0px 18.8px 1.2px rgba(30, 33, 62, 0.08);
}
.tp-faq-text .accordion-collapse {
  border: none;
}
.tp-faq-text .accordion-body {
  padding-top: 0px;
  padding-bottom: 23px;
  font-size: 16px;
  color: #626664;
}
@media (max-width: 767px) {
  .tp-faq-text .accordion-body {
    padding-left: 5px;
    padding-right: 5px;
  }
}
.tp-faq-text .accordion-button::after {
  content: "\f067";
  font-family: "Font Awesome 5 Pro";
  background: none;
  transform: none;
  margin-right: -5px;
  font-size: 18px;
}
.tp-faq-text .accordion-button:not(.collapsed)::after {
  content: "\f068";
  font-family: "Font Awesome 5 Pro";
  color: #1d3164;
}

.tp-faq-img img {
  max-width: inherit;
  margin-left: -140px;
  margin-top: -45px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-faq-img img {
    margin-left: -250px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-faq-img img {
    max-width: 100%;
    margin-left: 0px;
  }
}
@media (max-width: 767px) {
  .tp-faq-img img {
    max-width: 100%;
    margin-left: 0px;
  }
}

.tp-about-faq-img img {
  margin-left: -60px;
  max-width: inherit;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-about-faq-img img {
    margin-left: -105px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-about-faq-img img {
    margin-left: 0px;
    margin-bottom: 120px;
    max-width: 100%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-about-faq-img img {
    margin-left: 0px;
    max-width: 100%;
  }
}

@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-faq-text.pt-120 {
    padding-top: 60px;
  }
}

.tp-faqs-left-sidebar {
  padding: 35px 25px 25px 25px;
  border: 2px solid #eceff0;
}
.tp-faqs-left-sidebar ul li {
  list-style: none;
  padding: 27px 0px 27px 0px;
  border-bottom: 1px solid #dadddf;
}
.tp-faqs-left-sidebar ul li:last-child {
  border-bottom: 0px;
  padding-bottom: 7px;
}
.tp-faqs-left-sidebar ul li a {
  font-size: 18px;
  line-height: 1;
  color: #626664;
  display: inline-block;
}
.tp-faqs-left-sidebar ul li a:hover {
  color: #1d3164;
}

.tp-faqs-left-sidebar-title {
  font-size: 24px;
  color: #09150f;
  line-height: 1;
  position: relative;
  padding-left: 15px;
}
.tp-faqs-left-sidebar-title::before {
  position: absolute;
  content: "";
  height: 100%;
  width: 4px;
  display: inline-block;
  top: 0px;
  left: 0px;
  background: #1d3164;
}

.tp-faqs-right .accordion-button:not(.collapsed)::after {
  content: "\f068";
  font-family: "Font Awesome 5 Pro";
  color: #ffffff;
  height: 45px;
  width: 45px;
  text-align: center;
  line-height: 45px;
  background: #1d3164;
  font-weight: 300;
  box-shadow: 0px 10px 30px 0px rgba(39, 158, 100, 0.5);
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-faqs-right .accordion-button:not(.collapsed)::after {
    height: 30px;
    width: 30px;
    line-height: 30px;
  }
}

.tp-faqs-right .accordion-button::after {
  font-weight: 300;
}

.tp-faqs-right .accordion-button.collapsed {
  padding-bottom: 28px;
}
@media (max-width: 767px) {
  .tp-faqs-right .accordion-button.collapsed {
    padding-bottom: 20px;
  }
}

.tp-faqs-right .accordion-button {
  padding-bottom: 18px;
}

.tp-contact-form-title {
  font-size: 36px;
  color: #09150f;
}

/*----------------------------------------*/
/*  18. Brand
/*----------------------------------------*/
.brand-wrapper {
  text-align: center;
}

/*----------------------------------------*/
/*  19. Breadcrumb
/*----------------------------------------*/
.tp-page-title-area {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.tp-page-title-img {
  position: absolute;
  top: 0px;
  right: 0px;
  height: 100%;
}
.tp-page-title-img img {
  min-height: 100%;
  object-fit: cover;
}

.breadcrumb-title {
  color: #09150f;
  font-size: 90px;
  line-height: 1;
  margin-bottom: 20px;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .breadcrumb-title {
    font-size: 60px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
  .breadcrumb-title {
    font-size: 52px;
  }
}
@media (max-width: 767px) {
  .breadcrumb-title {
    font-size: 38px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px) {
  .breadcrumb-title {
    font-size: 46px;
  }
}
.breadcrumb-title span {
  color: #1d3164;
}

.breadcrumb-trail {
  line-height: 1;
  padding-left: 100px;
  position: relative;
}
@media (max-width: 767px) {
  .breadcrumb-trail {
    padding-left: 45px;
  }
}
.breadcrumb-trail::before {
  position: absolute;
  content: "";
  height: 2px;
  width: 80px;
  top: 11px;
  left: 0px;
  background: #1d3164;
}
@media (max-width: 767px) {
  .breadcrumb-trail::before {
    width: 35px;
    top: 8px;
  }
}
.breadcrumb-trail .trail-item {
  font-size: 24px;
  display: inline-block;
  list-style: none;
  color: #626664;
  font-weight: 700;
  margin-right: 30px;
  font-family: "Nunito Sans", sans-serif;
}
@media (max-width: 767px) {
  .breadcrumb-trail .trail-item {
    font-size: 18px;
  }
}
.breadcrumb-trail .trail-item:last-child {
  margin-right: 0px;
}
.breadcrumb-trail .trail-item:hover a {
  color: #1d3164;
}
.breadcrumb-trail .trail-item.trail-begin {
  position: relative;
}
.breadcrumb-trail .trail-item.trail-begin:before {
  position: absolute;
  content: "\f324";
  font-size: 14px;
  color: #626664;
  top: 55%;
  transform: translateY(-50%);
  right: -25px;
  font-family: "Font Awesome 5 Pro";
}

/*----------------------------------------*/
/*  20. Contact
/*----------------------------------------*/
.tp-contact-info {
  display: flex;
}
.tp-contact-info-icon {
  min-width: 60px;
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-contact-info-icon {
    min-width: 35px;
  }
}
.tp-contact-info-icon i {
  font-size: 42px;
  color: #1d3164;
  line-height: 1;
  transform: translateY(4px);
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-contact-info-icon i {
    font-size: 24px;
  }
}
.tp-contact-info-text p, .tp-contact-info-text a {
  font-size: 16px;
  color: #626664;
  line-height: 27px;
  display: block;
  margin-bottom: 0px;
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-contact-info-text p br, .tp-contact-info-text a br {
    display: none;
  }
}

.tp-contact-info-title {
  font-size: 24px;
  color: #09150f;
}

.tp-contact-form-field input, .tp-contact-form-field select, .tp-contact-form-field textarea {
  color: #7f8080;
  font-size: 16px;
  display: block;
  width: 100%;
  height: 70px;
  background: #ffffff;
  font-weight: 400;
  border: 1px solid #dfe0e5;
  outline: none;
  padding: 0px 20px;
  width: 100%;
  border-radius: 4px;
}
.tp-contact-form-field input::-moz-placeholder, .tp-contact-form-field input::placeholder, .tp-contact-form-field select::-moz-placeholder, .tp-contact-form-field select::placeholder, .tp-contact-form-field textarea::-moz-placeholder, .tp-contact-form-field textarea::placeholder {
  color: #7f8080;
  font-weight: 400;
  font-size: 16px;
  opacity: 1;
}
.tp-contact-form-field textarea {
  height: 200px;
  padding: 20px;
}
.tp-contact-form-field.select-field-arrow::after {
  color: #7f8080;
}

@media (max-width: 767px) {
  .tp-contact-area h2 br {
    display: none;
  }
}

.tp-contact-map iframe {
  width: 100%;
  height: 600px;
}

/*----------------------------------------*/
/*  21. Team
/*----------------------------------------*/
.tp-team-bg {
  padding: 70px 70px 70px 70px;
}
@media (max-width: 767px) {
  .tp-team-bg {
    padding: 25px 25px 20px 25px;
  }
}
@media only screen and (min-width: 576px) and (max-width: 767px), only screen and (min-width: 768px) and (max-width: 991px) {
  .tp-team-bg {
    padding: 70px 70px 65px 70px;
  }
}

.tp-team-img {
  float: left;
  margin-right: 105px;
  border: 6px solid #669966;
  border-radius: 5px;
}
@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-team-img {
    margin-right: 60px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-team-img {
    margin-right: 50px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-team-img {
    margin-right: 0px;
    float: none;
  }
}
.tp-team-img img {
  height: 530px;
  width: 470px;
  object-fit: cover;
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-team-img img {
    width: 350px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-team-img img {
    width: 100%;
    height: auto;
  }
}

@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-team-text {
    padding-top: 15px;
  }
}
.tp-team-text p {
  color: #ffffff;
}
.tp-team-text ul li, .tp-team-text ul li a {
  list-style: none;
  color: #ffffff;
  font-size: 20px;
  font-weight: 800;
}
@media (max-width: 767px) {
  .tp-team-text ul li, .tp-team-text ul li a {
    font-size: 16px;
  }
}
.tp-team-text ul li i, .tp-team-text ul li a i {
  font-size: 24px;
  width: 40px;
  display: inline-block;
  line-height: 1;
  transform: translateY(2px);
  color: #fed10c;
}
@media (max-width: 767px) {
  .tp-team-text ul li i, .tp-team-text ul li a i {
    font-size: 20px;
    width: 25px;
  }
}
.tp-team-text ul li {
  margin-bottom: 30px;
}
.tp-team-text ul li:last-child {
  margin-bottom: 0px;
}

.tp-team-subtitle {
  color: #fed10c;
  font-size: 24px;
}

.tp-team-social a {
  background: none;
  border: 2px solid #669966;
  border-radius: 0px;
  height: 45px;
  width: 45px;
  line-height: 41px;
}
.tp-team-social a:hover {
  border-color: #1d3164;
}

.tp-team-progress p {
  color: #626664;
}

.tp-team-fact .tp-fact-text-subtitle {
  color: #626664;
}

@media only screen and (min-width: 1200px) and (max-width: 1399px) {
  .tp-team-progress-area {
    padding-bottom: 80px;
  }
}
@media only screen and (min-width: 992px) and (max-width: 1199px) {
  .tp-team-progress-area {
    padding-bottom: 70px;
  }
}
@media only screen and (min-width: 768px) and (max-width: 991px), (max-width: 767px) {
  .tp-team-progress-area {
    padding-bottom: 75px;
  }
}
.border-right-1 {
    border-right: 1px solid #fff !important;
}
/*# sourceMappingURL=main.css.map */
.progress-wrap svg.progress-circle path {
    stroke: #000031 !important;
}
.progress-wrap::after {
    color: #FED10C !important;
}
</style>
<body>
    


    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <header>
        <div class="tp-header-area">
            <div class="tp-header-top theme-dark-bg pt-20 pb-50 d-none d-xl-block" style="background-color:#000031 !important" >
                <div class="tp-custom-container">
                    <div class="row align-items-center">
                        <div class="col-xxl-4 col-xl-5">
                            <div class="tp-header-top-info">
                                <div class="tp-header-top-info-single pr-40 mr-40 border-right-1">
                                    <div class="tp-header-top-info-single-icon mr-10">
                                        <i class="flaticon-pin"></i>
                                    </div>
                                    <div class="tp-header-top-info-single-text">
                                        <span class="tp-header-top-info-single-label">Free Contact</span>
                                        <span class="tp-header-top-info-single-content font-medium">{{$Sitesetting->address ?? ''}}</span>
                                    </div>
                                </div>
                                <div class="tp-header-top-info-single">
                                    <div class="tp-header-top-info-single-icon mr-15">
                                        <i class="flaticon-email"></i>
                                    </div>
                                    <div class="tp-header-top-info-single-text">
                                        <span class="tp-header-top-info-single-label">Email us</span>
                                        <a class="tp-header-top-info-single-content font-medium">
                                            <span>{{$Sitesetting->email ?? ''}}</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-2">
                            <div class="header-logo text-center">
                                <a href="/"><img src="{{ asset("public/siteLogo/" . optional($Sitesetting)['logo']) }}" class="img-fluid" alt="logo not found"></a>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-5">
                            <div class="tp-header-top-info justify-content-end">
                                <div class="tp-header-top-info-single mr-85">
                                    <div class="tp-header-top-info-single-icon tp-header-top-info-single-icon-call mr-10">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="tp-header-top-info-single-text">
                                        <span class="tp-header-top-info-single-label">Free Call</span>
                                        <a href="tel:{{$Sitesetting->phone ?? ''}}" class="tp-header-top-info-single-content font-medium">{{$Sitesetting->phone ?? ''}}</a>
                                    </div>
                                </div>
                                <div class="tp-header-top-info-single">
                                    <div class="tp-header-top-info-single-btn">
                                        <a href="/booking" class="yellow-btn"><i class="flaticon-enter"></i>Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tp-header-menu-area tp-transparent-header-menu header-sticky" style="background-color:#000031 !important">
                <div class="container">
                    <div class="row justify-content-xl-center align-items-center">
                        <div class="col-xl-2 col-8 tp-sticky-column">
                            <div class="tp-sticky-logo">
                                <a href="/"><img src="{{ asset("public/siteLogo/" . optional($Sitesetting)['logo']) }}" class="img-fluid" alt="logo not found"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-4">
                            <div class="tp-main-menu-bg">
                                <div class="tp-main-menu">
                                    <nav id="tp-mobile-menu">
                                        <ul class="text-center">
                                            <li><a href="/" class="active">Home</a>
                                                <!--<ul class="sub-menu">-->
                                                <!--    <li><a href="index.html">Home Style 1</a></li>-->
                                                <!--    <li><a href="index-2.html">Home Style 2</a></li>-->
                                                <!--    <li><a href="index-3.html">Home Style 3</a></li>-->
                                                <!--</ul>-->
                                            </li>
                                            <!--<li class="menu-item-has-children"><a href="#">Pages</a>-->
                                            <!--    <ul class="sub-menu">-->
                                            <!--        <li><a href="about.html">About</a></li>-->
                                            <!--        <li><a href="appointment.html">Appointment</a></li>-->
                                            <!--        <li><a href="pricing.html">Pricing</a></li>-->
                                            <!--        <li><a href="team.html">Team</a></li>-->
                                            <!--        <li><a href="team-details.html">Team Details</a></li>-->
                                            <!--        <li><a href="faq.html">Faq</a></li>-->
                                            <!--    </ul>-->
                                            <!--</li>-->
                                            <li class="menu-item-has-children"><a href="#">Services</a>
                                                <ul class="sub-menu">
                                                    @foreach($servics as $servicss)
                                                    <li><a href="/service/{{ Illuminate\Support\Str::slug($servicss->servicename, '-') }}">{{$servicss->servicename}}</a></li>
                                                  @endforeach
                                                </ul>
                                            </li>
                                            <!--<li class="menu-item-has-children"><a href="project.html">Projects</a>-->
                                            <!--    <ul class="sub-menu">-->
                                            <!--        <li><a href="project.html">Projects</a></li>-->
                                            <!--        <li><a href="project-details.html">Projects Details</a></li>-->
                                            <!--    </ul>-->
                                            <!--</li>-->
                                            <!--<li class="menu-item-has-children"><a href="blog-sidebar.html">Blog</a>-->
                                            <!--    <ul class="sub-menu">-->
                                            <!--        <li><a href="blog-sidebar.html">Blog Sidebar</a></li>-->
                                            <!--        <li><a href="blog-details.html">Blog Details</a></li>-->
                                            <!--    </ul>-->
                                            <!--</li>-->
                                            <li><a href="/about">About Us</a></li>
                                            <li><a href="/contact">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- mobile menu activation -->
                                <div class="side-menu-icon d-xl-none text-end" style="
    background: #000031 !important;
    /* color: #fff; */
">
                                    <button class="side-toggle"><i style="color:white;" class="far fa-bars"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 tp-sticky-column-btn">
                            <div class="tp-sticky-btn text-end">
                                <a href="/booking" class="theme-btn justify-content-end"><i class="flaticon-enter"></i> Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- mobile menu info -->
    <div class="fix" >
        <div class="side-info">
            <button class="side-info-close"><i class="fal fa-times"></i></button>
            <div class="side-info-content">
                <div class="tp-mobile-menu"></div>
                <div class="contact-infos mb-30">
                    <div class="contact-list mb-30">
                        <h4>Contact Info</h4>
                        <ul>
                            <li><i class="flaticon-pin"></i>{{$Sitesetting->address ?? ''}}</li>
                            <li><i class="flaticon-email"></i><a ><span class="__cf_email__" data-cfemail="076e696168476c6b626966752964686a">{{$Sitesetting->email ?? ''}}</span></a></li>
                            <li><i class="flaticon-phone-call"></i><a href="tel:{{$Sitesetting->phone ?? ''}}">{{$Sitesetting->phone ?? ''}}</a></li>
                        </ul>
                        <div class="sidebar__menu--social">
                            <a href="{{$Sitesetting->FaceBook ?? ''}}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{$Sitesetting->Twiter ?? ''}}"><i class="fab fa-twitter"></i></a>
                            <a href="{{$Sitesetting->Instagram ?? ''}}"><i class="fab fa-instagram"></i></a>
                            <a href="{{$Sitesetting->Youtube ?? ''}}"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>

      
            @yield('content')
      
    
    <footer class="theme-dark-bg" style="background-color:#000031 !important">
        <div class="tp-footer-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="tp-footer-widget footer-col-1 mb-30 wow fadeInUp" data-wow-delay=".2s">
                            <div class="tp-footer-info">
                                <div class="tp-footer-info-logo mb-35">
                                    <a href="index.html"><img src="{{ asset("public/siteLogo/" . optional($Sitesetting)['logo']) }}" class="img-fluid" alt="img not found"></a>
                                </div>
                                <h4 class="mb-15"><a href="tel:{{$Sitesetting->phone ?? ''}}">{{$Sitesetting->phone ?? ''}}</a></h4>
                                <h6 class="mb-15"><i class="fal fa-envelope-open"></i><a><span>{{$Sitesetting->email ?? ''}}</span></a></h6>
                                <h6 class="mb-20"><i class="fal fa-map-marker-alt"></i> {{$Sitesetting->address ?? ''}}</h6>
                                <div class="tp-footer-info-social">
                                    <a href="{{$Sitesetting->FaceBook ?? ''}}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{$Sitesetting->Twiter ?? ''}}"><i class="fab fa-twitter"></i></a>
                            <a href="{{$Sitesetting->Instagram ?? ''}}"><i class="fab fa-instagram"></i></a>
                            <a href="{{$Sitesetting->Youtube ?? ''}}"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="tp-footer-widget footer-col-2 mb-30 wow fadeInUp" data-wow-delay=".4s">
                            <h4 class="tp-footer-widget-title mb-35">Our Services</h4>
                            <ul>
                                     @foreach($servics as $index => $servicss)
    @if($index < 4)
        <li><a href="/service/{{ Illuminate\Support\Str::slug($servicss->servicename, '-') }}">{{ $servicss->servicename }}</a></li>
    @else
        @break
    @endif
@endforeach

                                
                            </ul>
                        </div>
                    </div>
                     <div class="col-lg-3 col-sm-6">
                        <div class="tp-footer-widget footer-col-2 mb-30 wow fadeInUp" data-wow-delay=".4s">
                            <h4 class="tp-footer-widget-title mb-35">Pages</h4>
                            <ul>
                                <li><a href="/about">About Us</a></li>
                                <li><a href="/contact">Contact Us</a></li>
                                <li><a href="/privacy-policy">Privacy Policy</a></li>
                                <li><a href="/terms-condition">Terms and Conditions</a></li>
                               
                            </ul>
                        </div>
                    </div>
                   
                  
                </div>
            </div>
        </div>
      
        <div class="tp-copyright-area bg-green-light z-index pt-45 pb-35" style="background-color:#fed10c !important">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-copyright text-center">
                            <p>Copyright ©2024 <span>THELMA</span>. All Rights Reserved Copyright</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        


    <!-- JS here -->
    <script src="{{asset('public/assets/js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/assets/js/swiper-bundle.js')}}"></script>
    <script src="{{asset('public/assets/js/venobox.min.js')}}"></script>
    <script src="{{asset('public/assets/js/backToTop.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.meanmenu.min.js')}}"></script>
    <script src="{{asset('public/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/assets/js/ajax-form.js')}}"></script>
    <script src="{{asset('public/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('public/assets/js/main.js')}}"></script>
</body>


</html>