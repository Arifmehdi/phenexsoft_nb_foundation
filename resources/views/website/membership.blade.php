@extends('website.layouts.master')

@section('title', 'Membership - '.env('APP_NAME'))

@section('meta')
<meta name="description" content="Learn about Hubli’s mission to transform Bangladesh’s food supply chain and eliminate food wastage with a smart, efficient national network.">
<meta name="keywords" content="Hubli, food hub, supply chain, food wastage, Bangladesh, agriculture">
<meta property="og:title" content="About Us - Hubli">
<meta property="og:description" content="Transforming Bangladesh’s food supply chain with smart logistics and technology.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/contact_banner.png') }}">
<meta property="og:type" content="website">
@endsection

@push('styles')

@endpush

@section('content')
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset('frontend') }}/images/bg/bg1.jpg">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Membership</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Volunteer -->
    <section>
      <div class="container pt-70 pb-40">
        <div class="section-content">
          <div class="row">
            <div class="col-sm-6 col-md-3 mb-30">
              <div class="team box-hover-effect effect3 border-1px border-bottom-theme-color-2px sm-text-center maxwidth400 mb-sm-30">
                <div class="thumb"><img class="img-fullwidth" src="{{ asset('frontend') }}/images/team/5.jpg" alt=""></div>
                <div class="content p-20 text-center">
                  <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Sakib John</a></h4>
                  <p>Student / Joined May'16</p>
                  <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing</p>
                  <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>  
            <div class="col-sm-6 col-md-3 mb-30">
              <div class="team box-hover-effect effect3 border-1px border-bottom-theme-color-2px sm-text-center maxwidth400 mb-sm-30">
                <div class="thumb"><img class="img-fullwidth" src="{{ asset('frontend') }}/images/team/6.jpg" alt=""></div>
                <div class="content p-20 text-center">
                  <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Fiona John</a></h4>
                  <p>Student / Joined May'16</p>
                  <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing</p>
                  <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-30">
              <div class="team box-hover-effect effect3 border-1px border-bottom-theme-color-2px sm-text-center maxwidth400 mb-sm-30">
                <div class="thumb"><img class="img-fullwidth" src="{{ asset('frontend') }}/images/team/7.jpg" alt=""></div>
                <div class="content p-20 text-center">
                  <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Ismail Smith</a></h4>
                  <p>Student / Joined May'16</p>
                  <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing</p>
                  <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-30">
              <div class="team box-hover-effect effect3 border-1px border-bottom-theme-color-2px sm-text-center maxwidth400">
                <div class="thumb"><img class="img-fullwidth" src="{{ asset('frontend') }}/images/team/8.jpg" alt=""></div>
                <div class="content p-20 text-center">
                  <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Jerin Smith</a></h4>
                  <p>Student / Joined May'16</p>
                  <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing</p>
                  <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-30">
              <div class="team box-hover-effect effect3 border-1px border-bottom-theme-color-2px sm-text-center maxwidth400 mb-sm-30">
                <div class="thumb"><img class="img-fullwidth" src="{{ asset('frontend') }}/images/team/5.jpg" alt=""></div>
                <div class="content p-20 text-center">
                  <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Sakib John</a></h4>
                  <p>Student / Joined May'16</p>
                  <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing</p>
                  <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>  
            <div class="col-sm-6 col-md-3 mb-30">
              <div class="team box-hover-effect effect3 border-1px border-bottom-theme-color-2px sm-text-center maxwidth400 mb-sm-30">
                <div class="thumb"><img class="img-fullwidth" src="{{ asset('frontend') }}/images/team/6.jpg" alt=""></div>
                <div class="content p-20 text-center">
                  <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Fiona John</a></h4>
                  <p>Student / Joined May'16</p>
                  <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing</p>
                  <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-30">
              <div class="team box-hover-effect effect3 border-1px border-bottom-theme-color-2px sm-text-center maxwidth400 mb-sm-30">
                <div class="thumb"><img class="img-fullwidth" src="{{ asset('frontend') }}/images/team/7.jpg" alt=""></div>
                <div class="content p-20 text-center">
                  <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Ismail Smith</a></h4>
                  <p>Student / Joined May'16</p>
                  <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing</p>
                  <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-30">
              <div class="team box-hover-effect effect3 border-1px border-bottom-theme-color-2px sm-text-center maxwidth400">
                <div class="thumb"><img class="img-fullwidth" src="{{ asset('frontend') }}/images/team/8.jpg" alt=""></div>
                <div class="content p-20 text-center">
                  <h4 class="name mb-0 mt-0"><a class="text-theme-colored" href="#">Jerin Smith</a></h4>
                  <p>Student / Joined May'16</p>
                  <p class="mb-20">Lorem ipsum dolor sit amet, con amit sectetur adipisicing</p>
                  <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>   
          </div>
        </div>
      </div>
    </section>

@endsection

@push('scripts')

@endpush