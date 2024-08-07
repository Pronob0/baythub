<div class="form-group col-md-6">
    <label>@lang('Select City')</label>
    {{-- select 2 with all country  --}}
    <select class="js-example-basic-single" name="city_id">
        <option value="">Select a City</option>
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
    <label>@lang('Furnished')</label>
    <select id="furnished" class="form-control" name="furnished">
        <option {{ $advertisement->furnished=="Fully" ? 'selected':'' }} value="Fully">@lang('Fully')</option> 
        <option {{ $advertisement->furnished=="Partially" ? 'selected':'' }} value="Partially">@lang('Partially')</option> 
        <option {{ $advertisement->furnished=="No" ? 'selected':'' }} value="No">@lang('No')</option>
    </select>
</div>


@php
    $tenant = json_decode($advertisement->tenant_details)
@endphp

<div class="head-ta w-100 mb-4">
    <h3>@lang('Tenancy Details')</h3>
</div>
<br>
<input type="hidden" name="is_tenancy" value="1">

<div class="form-group col-md-6">
    <label>@lang('Monthly Rent For Single Room ')</label>
    <input type="number" class="form-control" placeholder="{{ $currency->name }}" name="monthly_rent" value="{{ $tenant->monthly_rent ? $tenant->monthly_rent : '' }}" required>
</div>
 
<div class="form-group col-md-6">
    <label>@lang('Minimum Tenancy Length ')</label>
    <input type="number" class="form-control" value="{{ $tenant->month ? $tenant->month : '' }}" placeholder="Months" name="month" required>
</div>

<div class="form-group col-md-6">
    <label>@lang('Weekly Rent For Single Room')</label>
    <input type="number" class="form-control" value="{{ $tenant->weekly_rent ? $tenant->weekly_rent : '' }}" placeholder="{{ $currency->name }}" name="weekly_rent" required>
</div>

<div class="form-group col-md-6">
    <label>@lang('Maximum Number of Tenants ')</label>
    <input type="number" class="form-control" placeholder="maximum number of tenants" name="tenance_number" required value="{{ $tenant->tenance_number ? $tenant->tenance_number : '' }}">
</div>
<div class="form-group col-md-6">
    <label>@lang('Deposit Amounts')</label>
    <input type="number" class="form-control" placeholder="{{ $currency->name }}" name="deposit" required value="{{ $tenant->deposit ? $tenant->deposit : '' }}">
</div>
<div class="form-group col-md-6">
    <label>@lang('Earliest Move In Date')</label>
    <input type="date" class="form-control" placeholder="" name="date" required value="{{ $tenant->date }}">
</div>

<div class="head-ta w-100 mb-4">
    <h3>@lang('features')</h3>
</div>
<br>

<div class="form-group col-md-12 mb-5">

    <div class="o-features">
        <ul class="row d-flex">
            @php
                $features = explode(',',$advertisement->features);
            @endphp

            @foreach ($features as $feature)
                <li class="col-md-4">
                    <input id="{{ $feature }}" class="checkbox-custom" value="{{ $feature }}" name="features[]" type="checkbox" checked>
                    <label for="{{ $feature }}" class="checkbox-custom-label">
                        @lang(ucfirst(str_replace('_',' ',$feature)))
                    
                    </label>
                </li>
            @endforeach
        </ul>
    </div>
</div>


<div class="head-ta w-100 mb-4">
    <h3>@lang('Tenance Preference')</h3>
</div>
<br>
<div class="form-group col-md-12 mb-5">

    <div class="o-features">
        <ul class="row d-flex">

            @php
                $tenance = explode(',',$advertisement->tenance);
            @endphp

            @foreach ($tenance as $tenance)
                <li class="col-md-4">
                    <input id="{{ $tenance }}" class="checkbox-custom" value="{{ $tenance }}" name="tenance[]" type="checkbox" checked>
                    <label for="{{ $tenance }}" class="checkbox-custom-label">
                        @lang(ucfirst(str_replace('_',' ',$tenance)))
                    
                    </label>
                </li>
            @endforeach



        </ul>
    </div>
</div>



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