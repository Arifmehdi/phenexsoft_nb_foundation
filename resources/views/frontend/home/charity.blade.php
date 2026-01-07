@extends('website.layouts.master') {{-- Assuming a master layout in 'website' --}}

@section('title', 'Charity - '.env('APP_NAME'))

@section('meta')
<meta name="description" content="Discover our charity initiatives and how you can contribute to various causes.">
<meta name="keywords" content="charity, donate, causes, help, support">
<meta property="og:title" content="Charity - {{ env('APP_NAME') }}">
<meta property="og:description" content="Explore our charity initiatives and find out how to support meaningful causes.">
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
              <h3 class="title text-white">Our Charity Causes</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Causes List -->
    <section>
      <div class="container">
        <div class="row multi-row-clearfix">
            @forelse($causes as $cause)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="causes bg-white maxwidth500 mb-30">
                        <div class="thumb">
                            @if($cause->image)
                                <img src="{{ asset('storage/' . $cause->image) }}" alt="{{ $cause->title }}" class="img-fullwidth">
                            @else
                                <img src="{{ asset('frontend') }}/images/project/no-image.png" alt="No Image" class="img-fullwidth">
                            @endif
                            <div class="overlay-donate-now">
                                <a href="{{ route('cause.details', $cause->slug) }}" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">View Details <i class="flaticon-charity-make-a-donation font-16 ml-5"></i></a>
                            </div>
                        </div>
                        @php
                            $progress = ($cause->goal_amount > 0) ? round(($cause->raised_amount / $cause->goal_amount) * 100) : 0;
                        @endphp
                        <div class="progress-item mt-0">
                            <div class="progress mb-0">
                                <div data-percent="{{ $progress }}" class="progress-bar"><span class="percent">{{ $progress }}%</span></div>
                            </div>
                        </div>
                        <div class="causes-details clearfix  border-bottom-theme-color-1px p-15 pt-10 pb-10">
                            <h5 class="font-weight-600 font-16"><a href="{{ route('cause.details', $cause->slug) }}">{{ $cause->title }}</a></h5>
                            <p>{{ $cause->short_description }}</p>
                            <ul class="list-inline project-conditions mt-20 text-center bg-theme-colored-transparent-1 m-0 p-10">
                                <li class="target-fund text-theme-colored"><strong>${{ number_format($cause->goal_amount, 2) }}</strong>Target</li>
                                <li class="day text-theme-colored"><i class="flaticon-charity-hand-holding-a-heart font-30"></i></li>
                                <li class="raised text-theme-colored"><strong>${{ number_format($cause->raised_amount, 2) }}</strong>Raised</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-12">
                    <p>No active charity causes found.</p>
                </div>
            @endforelse
        </div>
        {{-- Pagination links --}}
        <div class="row">
            <div class="col-md-12 text-center">
                {{ $causes->links() }}
            </div>
        </div>
      </div>
    </section>

@endsection

@push('scripts')

@endpush