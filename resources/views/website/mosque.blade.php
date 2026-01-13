@extends('website.layouts.master')

@section('title', 'Mosque - '. env('APP_NAME') )

@section('meta')
<meta name="description"
  content="Contact North Bengal for inquiries, product details, or business queries. Get in touch via phone, email, or visit our office.">
<meta name="keywords" content="contact north bengal, contact us, north bengal inquiries, phone, email, office location">
<meta property="og:title" content="Contact Us - North Bengal">
<meta property="og:description" content="Reach North Bengal for product inquiries or business partnerships.">
<meta property="og:image" content="{{ asset('frontend/assets/img/northbengal/contact_banner.png') }}">
<meta property="og:type" content="website">
@endsection
@section('content')

<style>
  .mosque-card{
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 5px 15px rgba(0,0,0,0.08);
  transition: 0.3s;
  background: #fff;
}
.mosque-card:hover{
  transform: translateY(-5px);
}

</style>

<!-- Section: inner-header -->
<x-breadcrumb slug="Mosque" image="{{ asset('frontend') }}/images/bg/bg1.jpg" />

<section>
  <div class="container">
<form method="GET" action="{{ url()->current() }}" class="mb-40">
  <div class="row">

    <div class="col-md-3">
      <select name="division_id" id="division" class="form-control">
        <option value="">-- Select Division --</option>
        @foreach($divisions as $div)
          <option value="{{ $div->id }}" {{ request('division_id') == $div->id ? 'selected' : '' }}>
            {{ $div->name }}
          </option>
        @endforeach
      </select>
    </div>

    <div class="col-md-3">
      <select name="district_id" id="district" class="form-control">
        <option value="">-- Select District --</option>
      </select>
    </div>

    <div class="col-md-3">
      <select name="upazila_id" id="upazila" class="form-control">
        <option value="">-- Select Upazila --</option>
      </select>
    </div>

    <div class="col-md-3">
      <button class="btn btn-theme-colored btn-block">Search</button>
    </div>

  </div>
</form>


    <div class="row multi-row-clearfix">
      <div class="blog-posts">

        @forelse($mosques as $mosque)
<div class="col-md-4">
  <div class="card mosque-card mb-30">

    <div class="mosque-thumb">
      <img src="{{ $mosque->image 
          ? asset('storage/'.$mosque->image) 
          : asset('frontend/assets/images/no-image.png') }}" 
        class="img-responsive img-fullwidth" 
        style="height:220px;object-fit:cover;">
    </div>

    <div class="card-body p-20">

      <h4 class="text-theme-colored mb-10">
        <i class="fa fa-mosque"></i> {{ $mosque->name }}
      </h4>

      <p class="mb-5">
        <i class="fa fa-map-marker"></i> {{ $mosque->address }}
      </p>

      <p class="mb-5">
        <i class="fa fa-user"></i> <strong>Imam:</strong> {{ $mosque->imam_name }}
      </p>

      <p class="mb-5">
        <i class="fa fa-phone"></i> {{ $mosque->phone }}
      </p>

      <p class="text-muted mt-10">
        {{ $mosque->upazila->name ?? '' }},
        {{ $mosque->district->name ?? '' }},
        {{ $mosque->division->name ?? '' }}
      </p>

      {{--<a href="#" class="btn btn-sm btn-theme-colored mt-10">View Details</a>--}}

    </div>
  </div>
</div>

        @empty
        <p class="text-center">No mosques found.</p>
        @endforelse

        <div class="col-md-12">
          <nav>
            <!-- <ul class="pagination theme-colored">
                  <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">...</a></li>
                  <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
                </ul> -->

            <div class="text-center">
              {{ $mosques->links('pagination.ltn') }}
            </div>

          </nav>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){

    $('#division').on('change', function(){
      let division_id = $(this).val();

      $('#district').html('<option value="">Loading...</option>');
      $('#upazila').html('<option value="">-- Select Upazila --</option>');

      if(division_id){
        $.get("{{ url('/get-districts') }}/" + division_id, function(data){

          let html = '<option value="">-- Select District --</option>';
          data.forEach(function(row){
            html += `<option value="${row.id}">${row.name}</option>`;
          });

          $('#district').html(html);
        });
      } else {
        $('#district').html('<option value="">-- Select District --</option>');
      }
    });

    $('#district').on('change', function(){
      let district_id = $(this).val();

      $('#upazila').html('<option value="">Loading...</option>');

      if(district_id){
        $.get("{{ url('/get-upazilas') }}/" + district_id, function(data){

          let html = '<option value="">-- Select Upazila --</option>';
          data.forEach(function(row){
            html += `<option value="${row.id}">${row.name}</option>`;
          });

          $('#upazila').html(html);
        });
      } else {
        $('#upazila').html('<option value="">-- Select Upazila --</option>');
      }
    });

  });
</script>

@endsection


