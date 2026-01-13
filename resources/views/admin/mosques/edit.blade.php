@extends('admin.master')
@section('title', 'Admin Dashboard | Edit Mosque')
@section('body')
    <section class="content py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Edit Mosque</h3>
                        </div>
                        <form action="{{ route('admin.mosques.update', $mosque->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="division_id">Division</label>
                                            <select name="division_id" id="division_id" class="form-control @error('division_id') is-invalid @enderror" required>
                                                <option value="">-- Select Division --</option>
                                                @foreach ($divisions as $division)
                                                    <option value="{{ $division->id }}"
                                                        {{ $mosque->division_id == $division->id ? 'selected' : '' }}>
                                                        {{ $division->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('division_id')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="district_id">District</label>
                                            <select name="district_id" id="district_id" class="form-control @error('district_id') is-invalid @enderror" required>
                                                @foreach ($districts as $district)
                                                    <option value="{{ $district->id }}"
                                                        {{ $mosque->district_id == $district->id ? 'selected' : '' }}>
                                                        {{ $district->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('district_id')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="upazila_id">Upazila</label>
                                            <select name="upazila_id" id="upazila_id" class="form-control @error('upazila_id') is-invalid @enderror" required>
                                                @foreach ($upazilas as $upazila)
                                                    <option value="{{ $upazila->id }}"
                                                        {{ $mosque->upazila_id == $upazila->id ? 'selected' : '' }}>
                                                        {{ $upazila->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('upazila_id')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Enter Name" value="{{ $mosque->name }}" required>
                                    @error('name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror" rows="3" placeholder="Enter Address" required>{{ $mosque->address }}</textarea>
                                    @error('address')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="imam_name">Imam Name</label>
                                            <input type="text" name="imam_name" id="imam_name"
                                                class="form-control @error('imam_name') is-invalid @enderror" placeholder="Enter Imam Name"
                                                value="{{ $mosque->imam_name }}" required>
                                            @error('imam_name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror"
                                                placeholder="Enter Phone Number" value="{{ $mosque->phone }}" required>
                                            @error('phone')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="5"
                                        placeholder="Enter Description"
                                        required>{{ $mosque->description }}</textarea>
                                    @error('description')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <label for="image">Image (width : 620 , Height : 495)</label>
                                    <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror" id="image">
                                    @if ($mosque->image)
                                        <img src="{{ asset('storage/' . $mosque->image) }}" alt="{{ $mosque->name }}"
                                            class="img-fluid mt-2" style="max-height: 150px;">
                                    @endif
                                    @error('image')<span class="invalid-feedback">{{ $message }}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" name="status" class="form-check-input" id="status"
                                            value="1" {{ $mosque->status ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status">Active</label>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Mosque</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#division_id').on('change', function() {
                var divisionId = $(this).val();
                if (divisionId) {
                    $.ajax({
                        url: '/get-districts/' + divisionId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#district_id').empty();
                            $('#district_id').append(
                                '<option value="">-- Select District --</option>');
                            $.each(data, function(key, value) {
                                $('#district_id').append('<option value="' + value.id +
                                    '">' + value.name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#district_id').empty();
                    $('#upazila_id').empty();
                }
            });

            $('#district_id').on('change', function() {
                var districtId = $(this).val();
                if (districtId) {
                    $.ajax({
                        url: '/get-upazilas/' + districtId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#upazila_id').empty();
                            $('#upazila_id').append(
                                '<option value="">-- Select Upazila --</option>');
                            $.each(data, function(key, value) {
                                $('#upazila_id').append('<option value="' + value.id +
                                    '">' + value.name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#upazila_id').empty();
                }
            });
        });
    </script>
@endpush
