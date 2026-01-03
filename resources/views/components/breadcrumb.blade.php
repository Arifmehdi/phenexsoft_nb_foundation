    @props([
        'slug' => null,
        'image' => null,
    ])

    <section class="inner-header divider parallax layer-overlay overlay-dark-6" data-bg-img="{{ $image }}">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h3 class="font-28 text-white">{{ $slug ?? 'Default Title' }}</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active text-theme-colored">Login</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>
