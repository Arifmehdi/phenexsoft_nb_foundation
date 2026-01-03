@extends('website.layouts.master')

@section('title', 'Contact Us - ' . config('app.name'))
@section('meta')
    <meta name="description" content="Contact North Bengal for inquiries, product details, or business queries. Get in touch via phone, email, or visit our office.">
    <meta name="keywords" content="contact north bengal, contact us, north bengal inquiries, phone, email, office location">
    <meta property="og:title" content="Contact Us - North Bengal">
    <meta property="og:description" content="Reach North Bengal for product inquiries or business partnerships.">
    <meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/contact_banner.png') }}">
    <meta property="og:type" content="website">
@endsection

@section('content')
    <!-- Section: inner-header -->
    <x-breadcrumb slug="Contact" image="{{ asset('frontend') }}/images/bg/bg1.jpg"/>
    
    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container pt-0">
        <div class="row mb-60 bg-deep">
          <div class="col-sm-12 col-md-4">
            <div class="contact-info text-center pt-60 pb-60 border-right">
              <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
              <h4>Call Us</h4>
              <h4 class="text-gray">Phone: {{ $ws->contact_mobile}}</h4>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="contact-info text-center  pt-60 pb-60 border-right">
              <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
              <h4>Address</h4>
              <h4 class="text-gray">{{ $ws->contact_address }}</h4>
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="contact-info text-center  pt-60 pb-60">
              <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
              <h4>Email</h4>
              <!-- <h4 class="text-gray"><a href="#" class="__cf_email__" data-cfemail="275e4852675e48525543484a464e490944484a">[email&#160;protected]</a></h4> -->
              <h4 class="text-gray"><a href="#" class="__cf_email__" data-cfemail="{{ $ws->contact_email}}">{{ $ws->contact_email}}</a></h4>
            </div>
          </div>
        </div>
        <div class="row pt-10">
          <div class="col-md-5">
          <h4 class="mt-0 mb-30 line-bottom">Find Our Location</h4>
          <!-- Google Map HTML Codes -->
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7304.019564953139!2d90.37070141831094!3d23.747030564334864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b33cffc3fb%3A0x4a826f475fd312af!2sDhanmondi%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1767423721359!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-md-7">
            <h4 class="mt-0 mb-30 line-bottom">Interested in discussing?</h4>
            <!-- Contact Form -->
             @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul class="mb-0">
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif


            <form id="contact_form" action="{{ route('contact.store') }}" method="POST">
              @csrf

              <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                          <label>Name <small>*</small></label>
                          <input name="name" class="form-control" type="text" placeholder="Enter Name" required>
                      </div>
                  </div>

                  <div class="col-sm-6">
                      <div class="form-group">
                          <label>Email <small>*</small></label>
                          <input name="email" class="form-control" type="email" placeholder="Enter Email" required>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group">
                          <label>Subject <small>*</small></label>
                          <input name="subject" class="form-control" type="text" placeholder="Enter Subject" required>
                      </div>
                  </div>

                  <div class="col-sm-6">
                      <div class="form-group">
                          <label>Phone</label>
                          <input name="phone" class="form-control" type="text" placeholder="Enter Phone">
                      </div>
                  </div>
              </div>

              <div class="form-group">
                  <label>Message</label>
                  <textarea name="message" class="form-control" rows="5" placeholder="Enter Message" required></textarea>
              </div>

              <div class="form-group">
                  <input type="checkbox" name="agree" value="1"> I agree to terms
              </div>

              <button type="submit" class="btn btn-dark">Send your message</button>
          </form>


          </div>
        </div>
      </div>
    </section>
@endsection

@push('css')

@endpush
