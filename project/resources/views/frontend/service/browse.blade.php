@extends('layouts.front')

@push('css')

@endpush

@section('content')
<div class="search-header-banner">
    <div class="container">
        <div class="full-search-2 transparent mt-5">

            <div class="hero-search-content">
                <form action="{{ route('browse.all.services') }}" method="get">

                    <div class="row">
@php
    $categories = DB::table('service_categories')->get();
@endphp
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <div class="input-with-icon">
                                    <select id="cities" class="form-control" name="category">
                                        <option value="">@lang('Select Category')</option>
                                        @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <i class="ti-briefcase"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <div class="input-with-icon">
                                    <select id="cities" class="form-control" name="region">
                                        <option value="">@lang('Select Region')</option>
                                        <option value="Wales">@lang('Wales')</option>
                                        <option value="East Midlands">@lang('East Midlands')</option>
                                        <option value="East of England">@lang('East of England')</option>
                                        <option value="London">@lang('London')</option>
                                        <option value="North East & Cumbria">@lang('North East & Cumbria')</option>
                                        <option value="North West">@lang('North West')</option>
                                        <option value="Northern Ireland">@lang('Northern Ireland')</option>
                                        <option value="Scotland">@lang('Scotland')</option>
                                        <option value="South East">@lang('South East')</option>
                                        <option value="South West">@lang('South West')</option>
                                        <option value="West Midlands">@lang('West Midlands')</option>
                                        <option value="Yorkshire & Humberside">@lang('Yorkshire & Humberside')</option>
                                    </select>
                                    <i class="ti-briefcase"></i>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <div class="input-with-icon">
                                    <input type="text" class="form-control" name="postcode" placeholder="@lang('Postcode')">
                                   
                                    <i class="ti-briefcase"></i>
                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="row d-flex justify-content-between">

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-theme-light w-100">@lang('Search')</button>


                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- =========================== All Property =============================== -->

<!-- =========================== All Property =============================== -->
<section>

    <div class="container">
    
            @foreach ($services as $item)
            <div class="row my-3">

                <div class="card w-100">
                    <div class="card-body ">
                        {{-- user photo and name  --}}
                       
                            
                                <div class="mr-2 d-flex head-list">
                                    <div class="budget">
                                        <p> <small class="fw-bold">Budget : <b>{{ $item->budget }} {{ $currency->sign }}</b></small>   </p>
                                    </div>
                                    <div class="date mx-4">
                                        <p> <small class="fw-bold">Start Date : <b> {{ \Carbon\Carbon::parse($item->start_date)->format('d M Y') }} </b> </small> </p>
                                    </div>
                                    <div class="location">
                                        <p> <small class="fw-bold">Location : <b> {{ $item->location }} </b></small> </p>
                                    </div>
                                </div>
                                
                            

                            <div class="title mt-3">
                                {{-- title  --}}
                            <h6 class="card-title" >{{ $item->title }}</h6>
                            {{-- description  --}}
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="w-75">
                                    <p class="card-text" style="font-size: 14px; font-weight:400; color: #6c757d;">
                                        {{-- str limit  --}}
                                        {!! Str::limit($item->description, 200) !!}
                                    </p>
                                </div>
                                <div>
                                    <a href="{{ route('service.details',$item->id) }}" class="btn btn-theme-light btn-sm">@lang('View Details')</a>
                                </div>
                            </div>
                    </div>
                </div>
            
            </div>
            @endforeach
        

       {{-- custom pagination link  --}}

         <div class="row">
              <div class="col-md-12">
                <div class="d-flex justify-content-center">
                     {{ $services->links('paginate') }}
                </div>
              </div>
         </div>
        
    </div>
            
</section>
<!-- =========================== All Property =============================== -->
<!-- ============================ Call To Action Start ================================== -->
<section class="call-to-act text-white" style="background: #00a7ff7a">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-7 col-md-8">
                <div class="clt-caption text-center mb-4">
                    <h3>@lang('Subscribe Now!')</h3>
                    <p>@lang('You will get notify if New job Added')</p>
                </div>
                <div class="inner-flexible-box subscribe-box">
                    <form  id="subForm" action="{{route('front.subscribe')}}" method="POST" class="subscribe-form">
                        {{ csrf_field() }}
                    <div class="input-group">
                        <input  type="email" name="email" class="form-control subEmail" placeholder="Enter your mail here">
                        <button class="btn btn-subscribe btn-warning" type="submit"><i class="fa fa-arrow-right"></i></button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================ Call To Action End ================================== -->
@endsection

@push('js')

@endpush