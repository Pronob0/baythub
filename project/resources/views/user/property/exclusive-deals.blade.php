
<div class="form-group col-md-6">
    <label>@lang('Region')</label>
    <select class="js-example-basic-single" name="city_id">
        <option value="">Select a Region</option>
        @foreach ($cities as $city)
            <option {{ $advertisement->city_id== $city->id ? 'selected' : '' }} value="{{ $city->id }}">{{ $city->name }}</option>
        @endforeach
        
    </select>
</div>

<div class="form-group col-md-6">
    <label>@lang('Select Town')</label>
    {{-- select 2 with all country  --}}
    <select id="towns" class="" name="town_id">
        <option value="{{ $advertisement->town_id }}">{{ $advertisement->town->town }}</option>
       
    </select>

</div>



<div class="form-group col-md-6">
    <label>@lang('Nearest Train Station')</label>
    <input type="text" class="form-control" value="{{ $advertisement->train_station }}" placeholder="Nearest Train Station" name="train_station" required>
</div>

<div class="form-group col-md-6">
    <label>@lang('HMO Licence Permitted')</label>
    <select id="hmo" class="form-control" name="hmo">
        <option {{ $advertisement->hmo == 'Yes' ? 'selected':'' }} value="Yes">@lang('Yes')</option> 
        <option {{ $advertisement->hmo == 'No' ? 'selected':'' }} value="No">@lang('No')</option> 
        <option {{ $advertisement->hmo == 'NA' ? 'selected':'' }} value="NA">@lang('NA')</option>
    </select>
</div>


<div class="head-ta w-100 mb-4">
    <h3>@lang('Rent Information')</h3>
</div>
<br>
@php
    $cost = json_decode($advertisement->cost);
@endphp

<div class="form-group col-md-6">
    <label>@lang('Current Rent per month')</label>
    <input type="number" class="form-control" placeholder="Current Rent per month {{ $currency->name }}" name="rent_pm" value="{{ $cost->rent_pm }}" required>
</div>
<div class="form-group col-md-6">
    <label>@lang('Potential rent per month')</label>
    <input type="number" class="form-control" placeholder="Potential rent per month {{ $currency->name }}" value="{{ $cost->potential_rent }}" name="potential_rent" required>
</div>
<div class="head-ta w-100 mb-4">
    <h3>@lang('Cost Information')</h3>
</div>
<br>


@if($advertisement->subcategory_id == 5)

<div class="form-group col-md-6">
    <label>@lang('Rent Deposit Required')</label>
    <input type="number" class="form-control" placeholder="Rent Deposit {{ $currency->name }}" name="rent_deposit" required value="{{ $cost->rent_deposit }}">
</div>
<div class="form-group col-md-6">
    <label>@lang('Damage Deposit Required')</label>
    <input type="number" class="form-control" placeholder="Damage Deposit {{ $currency->name }}" name="damage_deposit" required value="{{ $cost->damage_deposit }}">
</div>
@endif

<div class="form-group col-md-6">
    <label>@lang('Agency/Sourcing Fee')</label>
    <input type="number" class="form-control" placeholder="Agency/Sourcing Fee {{ $currency->name }}" name="agency_fee" required value="{{ $cost->agency_fee }}">
</div>

<div class="head-ta w-100 mb-4">
    <h3>@lang('Property Photos')</h3>
</div>

{{-- upload image  --}}
@php

$photos = explode(',',$advertisement->photo);

@endphp
   <div class="upload__box">
    <div class="upload__btn-box">
        <h6>Drag a photo here, or click "Add Photos" to select your photos</h6>
      <label class="upload__btn">
       
        <p>Upload images</p>
        <input type="file" multiple="" data-max_length="20" class="upload__inputfile" name="photo[]">
      </label>
    </div>
    <div class="upload__img-wrap">
        @foreach ($photos as $photo)
        <div class="upload__img-box">
            <div style="background-image: url({{ asset('assets/images/advertisement/'.$photo) }})" data-number="0" data-file="{{ asset('assets/images/advertisement/'.$photo) }}" class="img-bg">
                <div class="upload__img-close"></div>
            </div>
        </div>
        @endforeach
    </div>
  </div>   
  
  {{-- Floor Plan Picture upload --}}

  <div class="form-group col-md-12">
    <label><b>@lang('Floor Plan Photo')</b></label>
    <input  type="file" class="form-control" placeholder="Agency/Sourcing Fee" name="floor_pic" >
</div>
   
    
        {{-- EPC Picture upload --}}