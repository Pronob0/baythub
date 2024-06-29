<!-- ============================ Property Detail Start ================================== -->
<section class="gray" style="padding: 0px !important;">
    <div class="container">
        <div class="block-wrap">
            <div class="row">
                @php
                $photo = explode(',',$item->photo);
                @endphp
                <!-- property main detail -->
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <img class="img-fluid main" style="height:430px; width:100%" src="{{ asset('assets/images/advertisement/'.$photo[0]) }}" alt="">
                </div>

                <!-- property Sidebar -->

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="">
                        <div class="mb-2">
                            <img class="img-fluid click" style="cursor: pointer;height:139px; width:100%" src="{{ asset('assets/images/advertisement/'.$photo[0]) }}" alt="">
                        </div>

                        <div class="mb-2">
                            <img class="img-fluid click" style="cursor: pointer;height:139px; width:100%" src="{{ asset('assets/images/advertisement/'.$photo[1]) }}" alt="">
                        </div>
                        <div class="">
                            <img class="img-fluid click" style="cursor: pointer;height:139px; width:100%" src="{{ asset('assets/images/advertisement/'.$photo[2]) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <!-- property main detail -->
            <div class="col-lg-8 col-md-12 col-sm-12">

                <div class="d-flex justify-content-between px-4">
                    <div class="street">

                        <p> <i class="fa-solid fa-location-dot"></i> <b>{{$item->city->name}}, {{$item->town->town}}</b></p>

                    </div>
                    <div>
                        <p>ID: #000{{$item->id}}</p>
                    </div>
                </div>

                <div class="block-wrap">

                    <div class="block-header">
                        <h4 class="block-title">@lang('Property Description')</h4>
                    </div>

                    <div class="block-body">
                        <p class="text-justify">
                            {!! $item->description !!}
                        </p>
                    </div>

                </div>

                <!-- Single Block Wrap -->
                <div class="block-wrap">

                    <div class="block-header">
                        <h4 class="block-title">@lang('Property Information')</h4>
                    </div>

                    <div class="block-body">

                        <table class="table table-light table-striped">
                            <tbody>
                                <tr>
                                    <td>@lang('Property Type')</td>
                                    <td>{{ $item->property_type==null ? 'No' :  $item->property_type }}</td>
                                </tr>

                                <tr>
                                    <td>@lang('Bedrooms')</td>
                                    <td>{{ $item->bedroom==null ? 0 :  $item->bedroom }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('Bathrooms')</td>
                                    <td>{{ $item->bathroom==null ? 0 :  $item->bathroom }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('Reception')</td>
                                    <td>{{ $item->reception==null ? 0 :  $item->reception }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('Nearest Train Station')</td>
                                    <td>{{ $item->train_station==null ? 0 :  $item->train_station }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('HMO Licence Permitted:')</td>
                                    <td>{{ $item->hmo==null ? 0 :  $item->hmo }}</td>
                                </tr>




                                @if($item->furnished !=null)
                                <tr>
                                    <td>@lang('Furnished')</td>
                                    <td>{{ $item->furnished==null ? 'No' :  $item->furnished }}</td>
                                </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="block-wrap">

                    <div class="block-header">
                        <h4 class="block-title">@lang('Ameneties Available')</h4>
                    </div>

                    <div class="block-body">
                        <ul class="avl-features third">
                            @foreach (explode(',', $item->amenities) as $amn)
                            <li>{{ $amn }}</li>
                            @endforeach
                        </ul>
                    </div>

                </div>

                {{-- cost info  --}}
                <div class="block-wrap">

                    <div class="block-header">
                        <h4 class="block-title">@lang('Financial Information')</h4>
                    </div>
                    @php
                    $cost = json_decode($item->cost,true);
                    $txt ='(per month)'
                    @endphp

                    <div class="block-body">

                        <table class="table table-light table-striped">
                            <tbody>
                                <tr>
                                    <td>@lang('Purchase Price')</td>
                                    <td>{{ $currency->sign }} {{ $item->sale==null ? '0' :  $item->sale }} </td>
                                </tr>
                                <tr>
                                    <td>@lang('Strategy')</td>
                                    <td>{{ $item->strategy==null ? 'No' :  $item->strategy }}</td>
                                </tr>
                                @foreach ($cost as $key=>$value)
                                <tr>
                                    <td>{{ $key=='rent_pm' ? 'Current Rent' : ucfirst(str_replace('_',' ',$key )) }}</td>
                                    <td>{{ $currency->sign }} {{ $value }} </td>
                                </tr>
                                @endforeach



                                <tr>
                                    <td>@lang('Gross Yeild')</td>
                                    <td>{{ $item->gross }}%</td>
                                </tr>


                                <tr>
                                    <td>@lang('Occupancy')</td>
                                    <td>{{ $item->occupancy }}</td>
                                </tr>

                                <tr>
                                    <td>@lang('Current Condition')</td>
                                    <td>{{ $item->condition }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('Market Valuation')</td>
                                    <td>{{ $currency->sign }} {{ $item->market_valuation }}</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="block-wrap">

                    <div class="block-header">
                        <h4 class="block-title">@lang('Floor Plan')</h4>
                    </div>

                    <img src="{{ asset('assets/images/floor/'.$item->floor_pic) }}" class="img-fluid" alt="" />

                </div>
            </div>


            <div class="col-lg-4 col-md-12 col-sm-12 ">
                <div class="page-sidebar" style="margin-top: 40px">
                    <div class="agent-widget mt-3">
                        <div class="agent-title">
                            <div class="agent-photo"><img src="assets/img/user-6.jpg" alt=""></div>
                            <div class="agent-details mb-4">
                                <h4><a href="#">@lang('Share with')</a></h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="social-share d-flex justify-content-between mt-3">
                            <a class="btn btn-primary btn-sm" style="background-color: #3b5998;font-size: 22px;border-radius: 5px;" href="https://www.addtoany.com/add_to/email?linkurl=https%3A%2F%2Ffamillynest.com%2Frealstate%2Fadvertise%2Fdetails%2F2%2Flatest&linkname=Document&linknote=" role="button"><i class="fa-solid fa-envelope"></i></a>
                            <a class="btn btn-primary btn-sm" style="background-color: #3b5998;font-size: 22px;border-radius: 5px;" href="https://www.addtoany.com/add_to/facebook?linkurl=https%3A%2F%2Ffamillynest.com%2Frealstate%2Fadvertise%2Fdetails%2F2%2Flatest&linkname=Document&linknote=" role="button"><i class="fa-brands fa-facebook"></i></a>

                            <a class="btn btn-primary btn-sm" style="background-color: #EF0894;font-size: 22px;border-radius: 5px;" href="https://www.instagram.com/" role="button"><i class="fa-brands fa-instagram"></i></a>

                            <a class="btn btn-dark btn-sm " style="font-size: 22px;border-radius: 5px;" href="https://www.tiktok.com/" role="button"><i class="fa-brands fa-tiktok"></i></a>
                            {{-- whatsapp  --}}
                            <a class="btn btn-success btn-sm" style="background-color: #25d366;font-size: 22px;border-radius: 5px;" href="https://api.whatsapp.com/send?text=https%3A%2F%2Ffamillynest.com%2Frealstate%2Fadvertise%2Fdetails%2F2%2Flatest" role="button"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>


                    <div class="agent-widget mt-3">
                        <div class="agent-title">
                            <div class="agent-photo"><img src="{{ $item->user->photo ?  getPhoto($item->user->photo) :  getPhoto('user.png')}}" alt="user"></div>
                            <div class="agent-details ">
                                <h4><a href="{{ route('user.details',$item->user->id) }}">@lang('Posted By')</a></h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <div class="details text-center">
                            <span class="d-block my-2"> Name: <a class="name" href="{{ route('user.details',$item->user->id) }}">{{ $item->user->name }} @if ($item->user->kyc_status == 1)
                                    <span class="text-success  my-2"><i class="fa-solid fa-circle-check"></i></span>
                                    @else
                                    <span style="color:#ef4545;" class="text-danger  my-2"><i class="fa-solid fa-circle-xmark"></i></span>
                                    @endif </a> </span>

                                    <span class="d-block my-2"> <b>Member Since:</b> {{ $user->created_at->format('d M Y') }}</span>
                            {{-- ratings here --}}
                            <div class="rating">
                                <div class="star-rating">
                                    {{-- owner rating avg  --}}
                                    @php
                                    $ownerRating = $item->user->ownerRatings->avg('star_rating');
                                    @endphp
                                    <span>({{ $item->user->ownerRatings->count() }})</span>
                                    @for ($i = 0; $i < 5; $i++) <span class="fa fa-star
                                        {{ $ownerRating <= $i ? 'text-muted' : 'text-warning' }} {{ ($item->user->ownerRatings->count()) }}"></span>
                                        @endfor
                                </div>
                            </div>

                            {{-- make three modal button call, email and whatsapp   --}}
                            <div class="d-flex justify-content-between pb-4 mt-5" style="border-bottom: 1px solid #e4e4e4">
                                <a id="user-call" href="javascript:;" class="btn btn-warning btn-sm btn-rounded"><i class="fa fa-phone"></i> @lang('Call')</a>
                                <a id="sendcontact" href="javascript:;" class="btn btn-primary btn-sm btn-rounded"><i class="fa fa-envelope"></i> @lang('Email')</a>
                                <a href="https://api.whatsapp.com/send?phone={{ $item->user->phone }}" class="btn btn-success btn-sm btn-rounded"><i class="fa-brands fa-whatsapp"></i> @lang('Whatsapp')</a>
                            </div>
                            {{-- view all properties with arrow sign--}}
                            <a href="{{ route('all.user.advert',$item->user->id) }}" class=""> <small> @lang('View All Properties') <i class="fa fa-arrow-right"></i></small></a>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
<!-- ============================ Property Detail End ================================== -->
