@extends('layouts.front')

@push('css')

@endpush

@section('content')

<!-- ============================ Page Title Start================================== -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <h2 class="ipt-title">@lang('Post Advertise')</h2>
                <span class="ipn-subtitle">@lang('Lists of our all Popular Categories')</span>

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
                <div class="row-post-ad d-flex justify-content-between">
                    <div class="image-description d-flex" style="align-items: center;">
                        <div class="image">
                            <img src="{{ getPhoto($item->photo) }}" alt="" />
                        </div>
                        <div class="short">
                            <h4>{{ $item->name }}</h4>

                            <p>@lang('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis optio ut rerum placeat aperiam explicabo omnis minima vitae ratione possimus?')</p>
                        </div>
                    </div>
                    <div class="post-btn" style="align-items: center;">
                        @if($item->id==11)
                        <a href="{{ route('post.advert',['slug'=>$item->slug, 'type'=>'rent']) }}" style="width:120px" class="btn btn-theme">@lang('Rent')</a>
                        <a href="{{ route('post.advert',['slug'=>$item->slug, 'type'=>'buy']) }}" style="width:120px" class="btn btn-theme">@lang('Buying')</a>
                        @else
                        <a href="{{ route('post.advert',['slug'=>$item->slug, 'type'=>'post']) }}" class="btn btn-theme">@lang('Post a free ad')</a>
                        @endif

                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-lg-12 col-md-12">

                <div class="row-post-ad d-flex justify-content-between">
                    <div class="image-description d-flex" style="align-items: center;">
                        <div class="image">
                            <img src="{{ getPhoto('10333237821707147890.jpg') }}" alt="" />
                        </div>
                        <div class="short">
                            <h4>@lang('Investment')</h4>

                            <p>@lang('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis optio ut rerum placeat aperiam explicabo omnis minima vitae ratione possimus?')</p>
                        </div>
                    </div>
                    <div class="post-btn" style="align-items: center;">
                       
                        <a href="{{ route('investment.create') }}" class="btn btn-theme">@lang('Post a free ad')</a>
                        

                    </div>
                </div>

            </div>
        <!-- /row -->

    </div>

</section>
<!-- ============================ Agency List End ================================== -->



@endsection

@push('js')

@endpush
