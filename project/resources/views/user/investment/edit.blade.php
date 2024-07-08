@extends('layouts.front')

@push('css')

@endpush

@section('content')

<!-- ============================ Page Title Start================================== -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <h2 class="ipt-title">@lang('Post Investment')</h2>
                <span class="ipn-subtitle">@lang('You can post Investement Post Here.')</span>

            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->


<!-- ============================ Submit Property Start ================================== -->
<section>

    <div class="container">
        <div class="row">

            @if (Auth::check())
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="submit-page">

                            <form action="{{ route('user.invest.update',$item->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Basic Information -->
                                <div class="form-submit">

                                    <div class="submit-section">
                                        <div class="form-row">


                                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">



                                            <div class="form-group col-md-6">
                                                <label>@lang('Project Name')<a href="#" class="" data-tip="Project Name"></a></label>
                                                <input type="text" class="form-control" name="name" placeholder="Enter Project Name" value="{{ $item->name }}">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>@lang('Location')<a href="#" class="" data-tip="Project Name"></a></label>
                                                <input type="text" class="form-control" name="loation" value="{{ $item->location }}" placeholder="Enter Location">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>@lang('Region')</label>
                                                <select class="js-example-basic-single" name="city_id">
                                                    <option value="">Select a City</option>
                                                    @foreach ($cities as $city)
                                                    <option {{ $city->id == $item->city_id ? 'selected': '' }} value="{{ $city->id }}">{{ $city->name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>

                                            

                                            <div class="form-group col-md-6">
                                                <label>@lang('Developer Name')<a href="#" class="" data-tip="Project Name"></a></label>
                                                <input type="text" class="form-control" name="developer"  value="developer" placeholder="Enter Developer Name">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>@lang('Starting Price')</label>
                                                <input type="number" class="form-control" placeholder="Starting Price in {{ $currency->name }}" name="starting_price" value="{{ $item->starting_price }}" required>
                                            </div>

                                            <div class="form-group col-lg-12 col-md-12">
                                                <label for="textarea">@lang('Description')</label>
                                                <textarea class="form-control" id="textarea" name="description" rows="5">{{ $item->description }}</textarea>
                                            </div>

                                            <div class="head-ta w-100 mb-4">
                                                <h3>@lang('Property Information')</h3>
                                            </div>

                                            @php
                                                $pro_type = explode(",",$item->property_type)
                                            @endphp

                                            <div class="form-group col-md-12 mb-5">
                                                <label>@lang('Property Type')</label>
                                                <div class="o-features">
                                                    <ul class="row d-flex">
                                                        <li class="col-md-4">
                                                            <input id="apartment" class="checkbox-custom" {{ in_array('Apartment', $pro_type) ? 'checked' : '' }} value="Apartment" name="property_type[]" type="checkbox">
                                                            <label for="apartment" class="checkbox-custom-label">@lang('Apartment')</label>
                                                        </li>
                                                        <li class="col-md-4">
                                                            <input id="villas" class="checkbox-custom" {{ in_array('Villas', $pro_type) ? 'checked' : '' }} value="Villas" name="property_type[]" type="checkbox">
                                                            <label for="villas" class="checkbox-custom-label">@lang('Villas')</label>
                                                        </li>
                                                        <li class="col-md-4">
                                                            <input id="townhouses" class="checkbox-custom"  {{ in_array('Townhouses', $pro_type) ? 'checked' : '' }} value="Townhouses" name="property_type[]" type="checkbox">
                                                            <label for="townhouses" class="checkbox-custom-label">@lang('Townhouses')</label>
                                                        </li>


                                                    </ul>
                                                </div>
                                            </div>


                                            <div class="form-group col-md-6">
                                                <label>@lang('Expected Handover Date')</label>
                                                <input type="date" class="form-control" value="{{ $item->handover_date }}" name="handover_date" required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>@lang('Payment Plan')</label>
                                                <input type="text" class="form-control" value="{{ $item->payment_plan }}" name="payment_plan" placeholder="Enter Payment Plan">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>@lang('Building Name')</label>
                                                <input type="text" class="form-control" value="{{ $item->building_name }}" name="building_name" placeholder="Enter Building Name">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>@lang('Unit Count')</label>
                                                <input type="number" class="form-control" name="unit_count" value="{{ $item->unit_count }}" placeholder="Enter Number of Unit">
                                            </div>
                                            {{-- floor_count  --}}
                                            <div class="form-group col-md-6">
                                                <label>@lang('Floor Count')</label>
                                                <input type="number" class="form-control" name="floor_count" value="{{ $item->floor_count }}" placeholder="Enter Number of Floor">
                                            </div>
                                            {{-- Total Parking Spaces: --}}
                                            <div class="form-group col-md-6">
                                                <label>@lang('Total Parking Space')</label>
                                                <input type="number" class="form-control" value="{{ $item->parking_space }}" name="parking_space" placeholder="Enter Number of Parking Space">
                                            </div>

                                            <div class="head-ta w-100 mb-4">
                                                <h3>@lang('Payment Plan')</h3>
                                            </div>

                                            {{-- Down payment  --}}
                                            <div class="form-group col-md-6">
                                                <label>@lang('Down Payment (%)')</label>
                                                <input type="number" class="form-control" value="{{ $item->down_payment }}" name="down_payment" placeholder="Enter Down Payment">
                                            </div>

                                            {{-- During Construction  --}}
                                            <div class="form-group col-md-6">
                                                <label>@lang('During Construction (%)')</label>
                                                <input type="number" class="form-control" value="{{ $item->during_construction }}" name="during_construction" placeholder="Enter During Construction">
                                            </div>

                                            {{-- On Handover  --}}
                                            <div class="form-group col-md-6">
                                                <label>@lang('On Handover (%)')</label>
                                                <input type="number" class="form-control" value="{{ $item->on_handover }}" name="on_handover" placeholder="Enter On Handover">
                                            </div>

                                            <div class="head-ta w-100 mb-4">
                                                <h3>@lang('Project Milestones')</h3>
                                            </div>

                                            {{-- Announcement Date:  date format  --}}
                                            <div class="form-group col-md-6">
                                                <label>@lang('Announcement Date')</label>
                                                <input type="text" class="form-control" value="{{ $item->announcement_date }}" name="announcement_date" placeholder="Enter Announcement Date">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>@lang('Construction Started')</label>
                                                <input type="text" class="form-control" value="{{ $item->construction_started }}" name="construction_started" placeholder="Enter Construction Started">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>@lang('Booking Start Date')</label>
                                                <input type="text" class="form-control" value="{{ $item->booking_started }}" name="booking_started" placeholder="Enter Start Date">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>@lang('Expected Handover Date')</label>
                                                <input type="text" class="form-control" value="{{ $item->expected_handover }}" name="expected_handover" placeholder="Enter Expected Date">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>@lang('Features / Amenities') <small>seperate by (,)</small> </label>
                                                <input type="text" class="form-control" value="{{ $item->amenities }}" name="amenities" placeholder="Enter Features">
                                            </div>

                                            <div class="head-ta w-100 mb-4">
                                                <h3>@lang('Unit Available')</h3>
                                            </div>

                                          @includeIf('user.investment.bed-size')

                                          </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Location -->
                                {{-- attributes --}}
                                <div class="head-ta w-100 mb-4">
                                    <h3>@lang('Property Photos')</h3>
                                </div>
                                
                                  <div class="upload__box">
                                    <div class="upload__btn-box">
                                        <h6>Drag a photo here, or click "Add Photos" to select your photos</h6>
                                      <label class="upload__btn">
                                       
                                        <p>Upload images</p>
                                        <input type="file" multiple="" data-max_length="20" class="upload__inputfile" name="photo[]">
                                      </label>
                                    </div>
                                    <div class="upload__img-wrap"></div>
                                  </div>  

                                <div class="form-group col-lg-12 col-md-12">
                                    <button class="btn btn-theme" type="submit">Submit & Preview</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            @else


            <!-- Submit Form -->

            <div class="col-lg-12 col-md-12">

                <div class="alert alert-success text-center" role="alert">
                    <p>Please, Sign In before you submit a property. If you don't have an account you can create one </p>
                </div>

            </div>
            @endif

        </div>
    </div>

</section>
<!-- ============================ Submit Property End ================================== -->


@endsection

@push('js')
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
        $("#aj-2").val('0');
    });


    // image upload js 
    jQuery(document).ready(function() {
        ImgUpload();
    });

    function ImgUpload() {
        var imgWrap = "";
        var imgArray = [];

        $('.upload__inputfile').each(function() {
            $(this).on('change', function(e) {
                imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                var maxLength = $(this).attr('data-max_length');

                var files = e.target.files;
                var filesArr = Array.prototype.slice.call(files);
                var iterator = 0;
                filesArr.forEach(function(f, index) {

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
                            reader.onload = function(e) {
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

        $('body').on('click', ".upload__img-close", function(e) {
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

    $(document).ready(function() {
            const maxFields = 7;

            $(document).on('click', '.add-more', function() {
                const bedNum = $(this).data('bed');
                const bedFields = $(`#bed${bedNum}-fields .bed-field`).length;
                if (bedFields < maxFields) {
                    const newField = `<div class="row bed-field" id="bed${bedNum}-${bedFields + 1}">
                                        <div class="form-group col-md-5">
                                            <label>${bedNum} Bed Size</label>
                                            <input type="number" required class="form-control" name="${bedNum}bed_size[]" placeholder="Bed Size in sqft">
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label> ${bedNum} Bed Price</label>
                                            <input type="number" required class="form-control" name="${bedNum}bed_price[]" placeholder="Bed Price">
                                        </div>  
                                        <div class="col-md-2">
                                            <a href="javascript:;" class="btn btn-sm btn-danger mt-5 remove-bed">Remove</a>
                                        </div>
                                    </div>`;
                    $(`#bed${bedNum}-fields`).append(newField);
                } else {
                    alert(`You can only add up to ${maxFields} fields for bed ${bedNum}.`);
                }
            });

            $(document).on('click', '.remove-bed', function() {
                $(this).closest('.bed-field').remove();
            });
        });

</script>




@endpush
