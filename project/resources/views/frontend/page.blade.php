@extends('layouts.front')

@push('css')

@endpush

@section('content')

<!-- ============================ Page Title Start================================== -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h2 class="ipt-title">{{ $page->title }}</h2>
                <span class="ipn-subtitle">{{ $page->title }}</span>

            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->

<!-- ============================ Agency List Start ================================== -->
<section>

    <div class="container">
        <div class="row ">
            <div class="col-md-8 m-auto">
                <h4 class="text-center">Know About our Company</h4>
                {!! $page->details !!}

            </div>

        </div>
        
        
        
    </div>
            
</section>
<!-- ============================ Agency List End ================================== -->



@endsection

@push('js')

@endpush