@extends('website.layouts.master')

@section('title', 'About Us - North Bengal Foundation')

@section('meta')
<meta name="description" content="Learn about North Bengal Foundation, a non-profit organization working for education, healthcare, disaster relief, and social welfare in Bangladesh.">
<meta name="keywords" content="North Bengal Foundation, charity, NGO Bangladesh, education support, healthcare, disaster relief">
<meta property="og:title" content="About Us - North Bengal Foundation">
<meta property="og:description" content="Building a just, inclusive, and resilient society through humanitarian work across Bangladesh.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/contact_banner.png') }}">
<meta property="og:type" content="website">
@endsection

@push('styles')
@endpush

@section('content')
<div class="main-content">

  <!-- Section: inner-header -->
  <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset('frontend') }}/images/bg/bg1.jpg">
    <div class="container pt-100 pb-50">
      <div class="section-content pt-100">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title text-white">About North Bengal Foundation</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: About -->
  <section class="bg-silver-light">
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-md-6">
            <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom">
              Serving Humanity with Commitment
            </h2>

            <h4 class="text-theme-colored">
              A non-profit organization dedicated to social development and humanitarian support in Bangladesh.
            </h4>

            <p>
              North Bengal Foundation is a charitable organization working to improve the lives of underprivileged communities across Bangladesh. Our work focuses on long-term impact through education support, healthcare assistance, disaster response, and social welfare programs. We believe in community-based solutions that create sustainable and meaningful change.
            </p>

            <p>
              The organization is governed by an experienced management committee, registered under the applicable laws of Bangladesh, and operates with full transparency, accountability, and ethical standards.
            </p>

            <a class="btn btn-theme-colored btn-flat btn-lg mt-10 mb-sm-30" href="#">Read More →</a>
          </div>

          <div class="col-md-6">
            <div class="owl-carousel-1col" data-nav="true">
              <div class="item">
                <img src="{{ asset('frontend') }}/images/about/002.png" alt="">
              </div>
              <div class="item">
                <img src="{{ asset('frontend') }}/images/about/001.png" alt="">
              </div>
              <div class="item">
                <img src="{{ asset('frontend') }}/images/about/002.png" alt="">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Section: About Info -->
  <section id="about">
    <div class="container">
      <div class="section-content">
        <div class="row">

          <!-- Events -->
          <div class="col-xs-12 col-sm-6 col-md-4">
            <h3 class="line-bottom border-bottom mt-0">Our Activities</h3>
            <p>
              We regularly organize humanitarian programs including education support, medical camps, relief distribution, and community development initiatives across North Bengal and other regions of Bangladesh.
            </p>
          </div>

          <!-- Mission -->
          <div class="col-xs-12 col-md-4">
            <h3 class="line-bottom border-bottom mt-0 mt-sm-20">Our Mission</h3>
            <img src="{{ asset('frontend') }}/images/about/a1.jpg" class="img-fullwidth" alt="">
            <p class="mt-15">
              Our mission is to deliver effective and transparent social programs that address critical needs in education, health, disaster relief, and social welfare. We work with integrity, accountability, and compassion to ensure every contribution creates real impact.
            </p>
          </div>

          <!-- Get Involved -->
          <div class="col-xs-12 col-sm-6 col-md-4">
            <h3 class="text-uppercase line-bottom mt-sm-30 mt-0">
              Get <span class="text-theme-colored">Involved</span>
            </h3>

            <div class="icon-box icon-box-effect mb-20 p-15 bg-light border-bottom-theme-color-3px">
              <a href="#" class="icon mb-0 mr-0 pull-left flip">
                <i class="flaticon-charity-responsible-energy-use text-theme-colored font-48"></i>
              </a>
              <div class="ml-80">
                <h5 class="icon-box-title mt-15 mb-5"><strong>Become a Donor</strong></h5>
                <p class="text-gray">
                  Support our mission by contributing to education, healthcare, and emergency relief programs.
                </p>
              </div>
            </div>

            <div class="icon-box icon-box-effect mb-20 p-15 bg-light border-bottom-theme-color-3px">
              <a href="#" class="icon mb-0 mr-0 pull-left flip">
                <i class="flaticon-charity-shelter text-theme-colored font-48"></i>
              </a>
              <div class="ml-80">
                <h5 class="icon-box-title mt-15 mb-5"><strong>Become a Volunteer</strong></h5>
                <p class="text-gray">
                  Join us as a volunteer and be part of meaningful change in the lives of others.
                </p>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>


      <!-- divider: Emergency Services -->
    <x-emergency-service title="How You Can Support Our Mission" />

  <!-- Volunteers -->
  <section class="bg-lighter">
    <div class="container">
      <div class="section-title text-center">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h2 class="text-uppercase line-bottom-center mt-0">
              Our <span class="text-theme-colored font-weight-600">Volunteers</span>
            </h2>
            <div class="title-icon">
              <i class="flaticon-charity-hand-holding-a-heart"></i>
            </div>
            <p>
              Our volunteers are the heart of North Bengal Foundation. <br>
              They dedicate their time, skills, and energy to serve humanity and build a better society.
            </p>
          </div>
        </div>
      </div>

      <div class="section-content">
        <div class="row">

          @forelse($volunteers as $volunteer)
            <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
              <div class="team-member clearfix">
                <div class="team-thumb">
                  <img alt="" src="{{ asset('storage/' . $volunteer->image) }}" class="img-fullwidth">
                  <div class="overlay">
                    <div class="content">
                      <p>{{ $volunteer->short_bio }}</p>
                    </div>
                  </div>
                </div>
                <div class="team-info bg-theme-colored">
                  <h3 class="mt-0 text-white">{{ $volunteer->name }}</h3>
                  <ul class="styled-icons icon-circled icon-theme-colored">
                    <li><a href="{{ $volunteer->fb_url }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{ $volunteer->twitter_url }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{{ $volunteer->local_url }}" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            @empty 
            <p>Here is no volunteer</p>
            @endforelse 

        </div>
      </div>
    </div>
  </section>

</div>
@endsection

@push('js')
@endpush
