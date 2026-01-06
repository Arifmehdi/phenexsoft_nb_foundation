  <header class="header">
    <div class="header-top bg-theme-colored sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <div class="widget no-border m-0">
              <ul class="styled-icons icon-dark icon-theme-colored icon-sm sm-text-center">
                <li><a href="{{ $ws->fb_url }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{ $ws->twitter_url }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{{ $ws->youtube_url }}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-8">
            <div class="widget no-border m-0">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#">{{ $ws->contact_mobile }}</a> </li>
                <li class="text-white m-0 pl-10 pr-10"> <i class="fa fa-clock-o text-white"></i> Sat-Thur 8:00 to 2:00 </li>
                <!-- <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#"><span class="__cf_email__" data-cfemail="0f6c60617b6e6c7b4f76607a7d6b60626e6661216c6062">[email&#160;protected]</span></a> </li> -->
                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="#"><span class="__cf_email__" data-cfemail="0f6c60617b6e6c7b4f76607a7d6b60626e6661216c6062">{{ $ws->contact_email }}</span></a> </li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            <div class="widget no-border m-0">
              <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                <li class="mt-sm-10 mb-sm-10">
                  <!-- Modal: Appointment Starts -->
                  <a class="btn btn-default btn-flat btn-xs bg-light p-5 font-11 pl-10 pr-10 " href="{{ route('donate') }}">Donate Now</a>
                </li>
                <li class="mt-sm-10 mb-sm-10">
                  <a class="btn btn-default btn-flat btn-xs bg-light p-5 font-11 pl-10 pr-10 " href="{{ route('login') }}">Login</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-silver-light">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default no-bg">
            <a class="menuzord-brand pull-left flip" href="{{ route('home') }}">
              @if (app()->environment('local'))
                  <img src="{{ asset('frontend/images/logo-wide.png') }}" alt="Logo">
              @else
                  <img src="{{ route('imagecache', [
                      'template' => 'original',
                      'filename' => $ws->logo_alt()
                  ]) }}" alt="Logo">
              @endif
            </a>
            <ul class="menuzord-menu">
              <li class="active"><a href="{{ route('home') }}">Home</a></li>
              <li><a href="{{ route('about') }}">About Us</a></li>
              <li><a href="{{ route('cause') }}">Our Causes</a></li>
              <li><a href="{{ route('campaign') }}">Campaigns</a></li>
              <li><a href="{{ route('donate') }}">Donate</a></li>
              <li><a href="{{ route('membership') }}">Membership</a></li>
              <li><a href="{{ route('blog') }}">News & Media</a></li>
              <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>