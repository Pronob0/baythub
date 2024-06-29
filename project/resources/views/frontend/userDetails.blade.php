<!-- ============================ Property Detail Start ================================== -->
@extends('layouts.front')

@push('css')

@endpush

@section('content')
<section class="gray">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-12 col-sm-12 ">
                <div class="page-sidebar" style="">

                    <!-- slide-property-sec -->


                    <div class="agent-widget ">
                        <div class="agent-title">
                            <div class="agent-photo"><img src="{{ getPhoto($user->photo) }}" alt=""></div>
                            <div class="agent-details">
                                <h4><a href="{{ route('user.details',$user->id) }}">{{ $user->name }}</a></h4>
                               
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="details text-center mt-3">
                           
                            <span class="d-block my-2"> <i class="fa-solid fa-location-dot"></i> {{ $user->address }}</span>
                            {{-- email verified or not --}}
                            {{-- member since date format --}}
                            <span class="d-block my-2"> <b>Member Since:</b> {{ $user->created_at->format('d M Y') }}</span>
                            
                            {{-- email verified or not --}}
                            

                            
                        </div>
                    </div>

                    <div class="agent-widget">
                       
                            <div class="agent-widget mt-3">
                                <div class="agent-title mb-5 mt-2" style="margin-left: -35px">

                                    <div class="agent-details">
                                        <h4><a href="#">@lang('Verification')</a></h4>
                                    </div>
                                    <div class="clearfix"></div>

                                </div>

                                    <span class="d-block my-2"> @lang('Email Verified: ')
                                        @if($user->email_verified == 'Yes')
                                        <span class="badge badge-success">@lang('Yes')</span>
                                        @else
                                        <span class="badge badge-danger">@lang('No')</span>
                                        @endif
                                    </span>
                                    {{-- KYC verified --}}
        
                                    <span class="d-block my-2"> @lang('Telephone & ID verified: ')
                                        @if($user->kyc_status == 1)
                                        <span class="badge badge-success">@lang('Yes')</span>
                                        @else
                                        <span class="badge badge-danger">@lang('No')</span>
                                        @endif
                                    </span>
                                </div>
                            </div>

                    <div class="agent-widget">
                        <form action="{{ route('user.rating.store') }}" method="Post">
                            @csrf
                            <div class="agent-widget mt-3">
                                <div class="agent-title mb-5 mt-2" style="margin-left: -35px">

                                    <div class="agent-details">
                                        <h4><a href="#">@lang('Submit Review')</a></h4>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <input type="hidden" name="user_id" value="{{ auth()->user() ? auth()->user()->id :''}}">
                                <input type="hidden" name="owner_id" value="{{ $user->id }}">

                                <div class="form-group mt-3">
                                    <select class="form-control" name="star_rating" id="">
                                        <option value="5">☆☆☆☆☆</option>
                                        <option value="4">☆☆☆☆</option>
                                        <option value="3">☆☆☆</option>
                                        <option value="2">☆☆</option>
                                        <option value="1">☆</option>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <textarea name="review" class="form-control">Excellent Job.</textarea>
                                </div>


                                <button type="submit" class="btn btn-theme full-width">Submit</button>
                            </div>

                        </form>
                    </div>


                </div>
            </div>

            <!-- property main detail -->
            <div class="col-lg-8 col-md-12 col-sm-12">

                <!-- Single Block Wrap -->
                <div class="block-wrap">

                    <div class="block-header">
                        <h4 class="block-title">@lang('Information')</h4>
                    </div>

                    <div class="block-body">

                        @php
                        echo $user->description
                        @endphp
                    </div>

                </div>

                @if($user->skills != Null)

                <div class="block-wrap">

                    <div class="block-header">
                        <h4 class="block-title">@lang('Skills')</h4>
                    </div>

                    <div class="block-body">

                        <table class="table table-light">
                            <tbody>
                                @php
                                $skills = explode(',', $user->skills);
                                @endphp
                                <tr class="d-flex">
                                    @foreach ($skills as $item)

                                    <td class="border bg--site mx-2"><a href="#">{{ $item }}</a></td>


                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif

                {{-- ratings  --}}

                @if($user->ownerRatings->count() > 0)

                <div class="block-wrap">

                    <div class="block-header">
                        <h4 class="block-title">@lang('Reviews')</h4>
                    </div>

                    <div class="block-body">
                        @foreach ($user->ownerRatings as $rate)

                        <div class="review-list">
                            <div class="review-img
                            d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="review-img

                                    d-flex align-items-center">
                                        <img style="width:60px; height:60px; border:1px solid black; border-radius:50%" src="{{ getPhoto($rate->owner->photo) }}" alt="reviewer photo">
                                        <div class="mt-2" style="margin-left: 20px">
                                            <div class="d-flex" style="font-size: 12px">
                                                <p>{{ $rate->owner->name }}</p>
                                                <p class="ml-3">{{ $rate->created_at->diffForHumans() }}</p>

                                            </div>
                                            <h6>{{ $rate->review }}</h6>
                                        </div>

                                    </div>
                                </div>
                                <div class="rating">
                                    <div class="star-rating">
                                        {{-- owner rating avg  --}}
                                        @php
                                        $ownerRating = $rate->star_rating;
                                        @endphp
                                        @for ($i = 0; $i < 5; $i++) <span class="fa fa-star
                                            {{ $ownerRating <= $i ? 'text-muted' : 'text-warning' }} {{ ($user->ownerRatings->count()) }}"></span>
                                            @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        @endforeach

                    </div>
                </div>
                @endif

                @php
                    $photos = explode(',',$user->portfolio);
                @endphp

                @if ($user->portfolio != Null)
                <div class="block-wrap">

                    <div class="block-header">
                        <h4 class="block-title">@lang('User Portfolio')</h4>
                    </div>

                    <div class="block-body">

                        <div class="upload__img-wrap">
                            @foreach ($photos as $photo)
                            <div class="upload__img-box" >
                                <div style="background-image: url({{ asset('assets/images/portfolio/'.$photo) }})" data-number="0" data-img="{{ $photo }}" data-file="{{ asset('assets/images/portfolio/'.$photo) }}" class="img-bg">
                                </div>
                            </div>
                            @endforeach
                            
                        </div>

                        
                    </div>
                </div>
                    
                @endif

                {{-- reviews --}}







            </div>
        </div>
    </div>
</section>
<!-- ============================ Property Detail End ================================== -->

@endsection

@push('js')

@endpush
