@extends('layouts.front')

@push('css')

@endpush

@section('content')

<!-- ============================ Page Title Start================================== -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <h2 class="ipt-title">Welcome!</h2>
                <span class="ipn-subtitle">Welcome To Your Account</span>

            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->

<!-- ============================ User Dashboard ================================== -->
<section>
    <div class="container-fluid">

        <div class="row">

            @include('user.partials.sidebar-user')

            <div class="col-lg-9 col-md-8">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h4>@lang('Your Current Package'): <span class="pc-title theme-cl">{{ auth()->user()->is_plan != Null ? DB::table('plans')->where('id',auth()->user()->is_plan)->first()->title : 'No Plan'  }}</span></h4>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="dashboard-stat widget-1">
                            <div class="dashboard-stat-content">
                                <h4>607</h4> <span>Listings Included</span>
                            </div>
                            <div class="dashboard-stat-icon"><i class="ti-location-pin"></i></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="dashboard-stat widget-2">
                            <div class="dashboard-stat-content">
                                <h4>102</h4> <span>Listings Remaining</span>
                            </div>
                            <div class="dashboard-stat-icon"><i class="ti-pie-chart"></i></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="dashboard-stat widget-3">
                            <div class="dashboard-stat-content">
                                <h4>70</h4> <span>Featured Included</span>
                            </div>
                            <div class="dashboard-stat-icon"><i class="ti-user"></i></div>
                        </div>
                    </div>






                </div>



                <div class="dashboard-wraper">

                    <!-- Basic Information -->
                    <div class="form-submit">
                        <h4>@lang('My Account')</h4>
                        <div class="submit-section">
                            <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf


                                <div class="form-row">

                                    <div class="col-md-12 ShowImage mb-3 text-center">
                                        <img src="{{ asset('assets/images/'. auth()->user()->photo)}}" class="img-fluid w-25" alt="image" width="400">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>@lang('Your Name')</label>
                                        <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>@lang('Email')</label>
                                        <input type="email" class="form-control" name="email" readonly value="{{ auth()->user()->email }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>@lang('Photo')</label>
                                        <input type="file" class="form-control" id="image" accept="image/*" name="photo">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>@lang('Phone')</label>
                                        <input type="text" class="form-control" name="phone" value="{{ auth()->user()->phone }}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>@lang('Address')</label>
                                        <input type="text" class="form-control" name="address" value="{{ auth()->user()->address }}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>@lang('City')</label>
                                        <input type="text" class="form-control" name="city" value="{{ auth()->user()->city }}">
                                    </div>


                                    <div class="form-group col-md-12">
                                        <label>@lang('PostCode')</label>
                                        <input type="text" class="form-control" name="zip" value="{{ auth()->user()->zip }}">
                                    </div>

                                    {{-- tags  --}}
                                    <div class="form-group col-md-12">
                                        <label>@lang('Skills')</label>
                                        @php
                                        $skills = explode(',', auth()->user()->skills);
                                        @endphp
                                        <div class="d-flex">

                                            <input type="text" class="form-control" name="skills[]" value="{{ $skills[0] }}">
                                            <div id="add" class="btn  btn-success">+</div>

                                        </div>

                                        <div id="extra">
                                            @foreach (array_slice($skills, 1) as $skill)
                                            <div class="d-flex mt-2">
                                                <input type="text" class="form-control" name="skills[]" value="{{ $skill }}">
                                                <div class="btn btn-danger remove">-</div>
                                            </div>

                                            @endforeach


                                        </div>



                                    </div>
                                </div>



                                <div class="form-group col-md-12">
                                    <label>@lang('Description')</label>
                                    <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ auth()->user()->description }}</textarea>
                                </div>

                            <div class="form-group col-md-12">
                                <label>@lang('Add porfolio')</label>
                                <div class="upload__box">
                                    <div class="upload__btn-box">
                                        <h6> click "Add Portfolio" to select your portfolios</h6>
                                      <label class="upload__btn">
                                        <p>Upload images</p>
                                        <input type="file" multiple="" data-max_length="20" class="upload__inputfile" name="portfolio[]">
                                      </label>
                                    </div>
                                    @php
                                        $photos = explode(',', auth()->user()->portfolio);
                                    @endphp
                                    <div class="upload__img-wrap">
                                        @foreach ($photos as $photo)
                                        <div class="upload__img-box" >
                                            <div style="background-image: url({{ asset('assets/images/portfolio/'.$photo) }})" data-number="0" data-img="{{ $photo }}" data-file="{{ asset('assets/images/portfolio/'.$photo) }}" class="img-bg">
                                                <div class="upload__img-close" data-img="{{ $photo }}"></div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                </div> 
                            </div>



                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <button class="btn btn-theme" type="submit">@lang('Update Profile')</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</section>
<!-- ============================ User Dashboard End ================================== -->

@endsection

@push('js')

<script>
    $(document).on('change', '#image', function() {
        var file = event.target.files[0];
        var reader = new FileReader();
        reader.onload = function(e) {
            // console.log(e.target.result)
            $('.ShowImage').removeClass('d-none');
            $('.ShowImage img').attr('src', e.target.result);
        };
        reader.readAsDataURL(file);
    })

    $(document).on('click', '#add', function() {
        $('#extra').append('<div class="d-flex mt-2"><input type="text"  class="form-control" name="skills[]"><div class="btn btn-danger remove">-</div></div>');
    })

    $(document).on('click', '.remove', function() {
        $(this).parent().remove();
    })


        // image upload js 
        jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}

</script>

@endpush
