@extends('layouts.front')

@push('css')
    
@endpush

@section('content')


@include('frontend.home-section.hero')

{{-- @include('frontend.home-section.landlord') --}}

{{-- @include('frontend.home-section.rent-property') --}}


{{-- @include('frontend.home-section.tenants') --}}
@include('frontend.home-section.top-search')

@include('frontend.home-section.find-jobs')

@include('frontend.home-section.all-section')

@include('frontend.home-section.blog')



    
@endsection

@push('js')

@endpush