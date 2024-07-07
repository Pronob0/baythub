@extends('layouts.front')

@push('css')

@endpush

@section('content')

<!-- ============================ Page Title Start================================== -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h2 class="ipt-title">Browse Advertise</h2>
                <span class="ipn-subtitle">Browse Advertise</span>

            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->

<!-- ============================ Agency List Start ================================== -->
<section>

    <div class="container">
    
        <!-- row Start -->
        <div class="row">
        
            

                @foreach ($categories as $item)
                <div class="col-lg-6 col-md-6">
                <div class="row-post-ad d-flex justify-content-between" >
                    <div class="image-description d-flex" style="align-items: center;">
                            <div class="image">
                                <img  src="{{ getPhoto($item->photo) }}" alt="" />
                            </div>
                            <div class="short">
                                @if($item->id ==11)
                                <h4>@lang('Find Buyers')</h4>
                                @elseif($item->id ==12)
                                <h4>@lang('Find Exclusive Deals')</h4>
                                @elseif($item->id == 13)
                                <h4>@lang('Properties for Rent')</h4>
                                @elseif($item->id == 14)
                                <h4>@lang('Buy')</h4>
                                @else
                                <h4>@lang('Find Projects')</h4>
                                @endif
                                
                                <p>@lang('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis optio ut rerum placeat aperiam explicabo omnis minima vitae ratione possimus?')</p>
                            </div>
                    </div>
                    <div class="post-btn" style="align-items: center;">
                        <a href="{{ $item->id  == 11 ? route('browse.advert',['slug'=>$item->slug, 'type'=>'buy']) : route('browse.advert',['slug'=>$item->slug, 'type'=>'post']) }}" class="btn btn-theme" style="background:#FF9409">@lang('Browse Ad')</a>
                    </div>
                </div>
                </div>
                @endforeach

                @php
                    $item = DB::table('categories')->where('id', 11)->first();
                @endphp

            <div class="col-lg-6 col-md-6">

                <div class="row-post-ad d-flex justify-content-between" >
                    <div class="image-description d-flex" style="align-items: center;">
                            <div class="image">
                                <img  src="{{ getPhoto($item->photo) }}" alt="" />
                            </div>
                            <div class="short">
                                
                                <h4>@lang('Find Tenants')</h4>
                               
                                
                                <p>@lang('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis optio ut rerum placeat aperiam explicabo omnis minima vitae ratione possimus?')</p>
                            </div>
                    </div>
                    <div class="post-btn" style="align-items: center;">
                        <a href="{{ route('browse.advert',['slug'=>$item->slug, 'type'=>'rent']) }}" class="btn btn-theme" style="background:#FF9409">@lang('Browse Ad')</a>
                    </div>
                </div>

            </div>

            {{-- Investement  --}}
         

            <div class="col-lg-6 col-md-6">

                <div class="row-post-ad d-flex justify-content-between" >
                    <div class="image-description d-flex" style="align-items: center;">
                            <div class="image">
                                <img  src="{{ getPhoto('3478667561715093939.jpg') }}" alt="" />
                            </div>
                            <div class="short">
                                
                                <h4>@lang('Investements')</h4>
                               
                                
                                <p>@lang('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis optio ut rerum placeat aperiam explicabo omnis minima vitae ratione possimus?')</p>
                            </div>
                    </div>
                    <div class="post-btn" style="align-items: center;">
                        <a href="{{ route('investement.all') }}" class="btn btn-theme" style="background:#FF9409">@lang('Browse Ad')</a>
                    </div>
                </div>

            </div>
            
           
            
        </div>
        <!-- /row -->		
        
    </div>
            
</section>
<!-- ============================ Agency List End ================================== -->

<!-- ============================ Call To Action ================================== -->
<section class="theme-bg call-to-act-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                
                <div class="call-to-act">
                    <div class="call-to-act-head">
                        <h3>Want to Become a Real Estate Agent?</h3>
                        <span>We'll help you to grow your career and growth.</span>
                    </div>
                    <a href="#" class="btn btn-call-to-act">SignUp Today</a>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- ============================ Call To Action End ================================== -->

@endsection

@push('js')

@endpush