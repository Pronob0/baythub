@extends('layouts.front')

@push('css')

@endpush

@section('content')

<!-- ============================ Page Title Start================================== -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h2 class="ipt-title">All Advertise</h2>
                <span class="ipn-subtitle">Advertiser : {{ $user->name }}</span>
            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->

<!-- ============================ Agency List Start ================================== -->
<section>

    <div class="container">
        
        <div class="row">
            @foreach ($advert as $item)

            @if ($item->category_id==11)
                @if ($type=='buy')
                    @include('user-advert.property-wanted')
                @elseif($type=='rent')
                    @include('user-advert.room-wanted')
                @endif
            @endif

            @if ($category->id==12)
                @include('user-advert.exclusive-deals')
            @endif

            @if ($category->id==13)
                @include('user-advert.room-rent')
            @endif

            @endforeach
        </div>
        

    </div>
            
</section>
<!-- ============================ Agency List End ================================== -->

<!-- ============================ Call To Action ================================== -->

<!-- ============================ Call To Action End ================================== -->

@endsection

@push('js')

@endpush