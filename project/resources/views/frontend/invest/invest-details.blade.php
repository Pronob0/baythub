@extends('layouts.front')

@push('css')

@endpush

@section('content')



<section style="padding:20px 0 !important;">

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
    
                    <div class="d-flex justify-content-between px-4 mt-4">
                        <div class="street">
    
                            <h3> <i class="fa-solid fa-location-dot"></i> {{$item->city->name}}, {{$item->location}}</h3>

    
                        </div>
                        <div>
                            <p>ID: #000{{$item->id}}</p>
                        </div>
                    </div>
                    <div class="px-4 my-4">
                        <p style="font-size: 20px"><i class="fa-solid fa-money-bill"></i> Starting From: {{ $item->starting_price }} {{ $currency->name }}</p>

                       <p style="font-size: 10px"> *Prices, availability, and purchase conditions may change frequently. Contact a representative for the latest availability and pricing.</p>

                    </div>

                    <div class="block-wrap mt-5">

                        <div class="block-body">
                            <h4>Developer: {{ $item->developer }}</h4>
                        </div>
    
                    </div>

                    <div class="block-wrap">
    
                        <div class="block-header">
                            <h4 class="block-title">@lang('Key information')</h4>
                        </div>
    
                        <div class="block-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <p>Delivery Date</p>
                                    <h6>{{ $item->handover_date }}</h6>

                                </div>

                                <div class="col-lg-4 col-md-6 mb-4">
                                    <p>Booking start</p>
                                    <h6>{{ $item->booking_started }}</h6>

                                </div>

                                <div class="col-lg-4 col-md-6 mb-4">
                                    <p>Location</p>
                                    <h6>{{ $item->location }}</h6>

                                </div>

                                <div class="col-lg-4 col-md-6 mb-4">
                                    <p>Payment Plan</p>
                                    <h6>{{ $item->payment_plan }}</h6>

                                </div>
                                
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <p>Building Name</p>
                                    <h6>{{ $item->building_name }}</h6>

                                </div>

                                <div class="col-lg-4 col-md-6 mb-4">
                                    <p>Property Types</p>
                                    <h6>{{ $item->property_type }}</h6>

                                </div>

                                <div class="col-lg-4 col-md-6 mb-4">
                                    <p>Number of Unit</p>
                                    <h6>{{ $item->unit_count }}</h6>
                                </div>

                                <div class="col-lg-4 col-md-6 mb-4">
                                    <p>Number of Floor</p>
                                    <h6>{{ $item->floor_count }}</h6>
                                </div>
                            </div>
                        </div>
    
                    </div>


                    <div class="block-wrap">
    
                        <div class="block-header">
                            <h4 class="block-title">@lang('Payment Plan')</h4>
                        </div>
    
                        <div class="block-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="card rounded">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">{{ $item->down_payment }}%</h5>
                                            <p class="card-text text-center">Down Payment</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="card rounded">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">{{ $item->during_construction }}%</h5>
                                            <p class="card-text text-center">During Construction</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="card rounded">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">{{ $item->on_handover }}%</h5>
                                            <p class="card-text text-center">On Handover</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
    
                    </div>


                    <div class="block-wrap">
    
                        <div class="block-header">
                            <h4 class="block-title">@lang('Propject Timeline')</h4>
                        </div>
    
                        <div class="block-body">

                            <div class="row">
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <div class="d-flex des">
                                            @if (\Carbon\Carbon::parse($item->announcement_date)->greaterThan(\Carbon\Carbon::now()))
                                            <i class="fa-solid fa-circle text-gray"></i>
                                            @else
                                            <i class="fa-solid fa-circle-check text-primary"></i>
                                            @endif
                                            <div class="list ml-3">
                                                <h6>Project Anouncement</h6>
                                                <p>{{ $item->announcement_date }}</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mb-3">
                                        <div class="d-flex des">
                                            @if (\Carbon\Carbon::parse($item->construction_started)->greaterThan(\Carbon\Carbon::now()))
                                            <i class="fa-solid fa-circle text-gray"></i>
                                            @else
                                            <i class="fa-solid fa-circle-check text-primary"></i>
                                            @endif
                                            <div class="list ml-3">
                                                <h6>Construction Started</h6>
                                                <p>{{ $item->construction_started }}</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mb-3">
                                        <div class="d-flex des">
                                            @if (\Carbon\Carbon::parse($item->booking_started)->greaterThan(\Carbon\Carbon::now()))
                                            <i class="fa-solid fa-circle text-gray"></i>
                                            @else
                                            <i class="fa-solid fa-circle-check text-primary"></i>
                                            @endif
                                            <div class="list ml-3">
                                                <h6>Booking Started</h6>
                                                <p>{{ $item->booking_started }}</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="mb-3">
                                        <div class="d-flex des">
                                            @if (\Carbon\Carbon::parse($item->expected_handover)->greaterThan(\Carbon\Carbon::now()))
                                            <i class="fa-solid fa-circle text-gray"></i>
                                            @else
                                            <i class="fa-solid fa-circle-check text-primary"></i>
                                            @endif
                                            <div class="list ml-3">
                                                <h6>Expected Handover</h6>
                                                <p>{{ $item->expected_handover }}</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                
                                
                            </div>
                            
                        </div>
    
                    </div>



                    <div class="block-wrap">
    
                        <div class="block-header">
                            <h4 class="block-title">@lang('Units Available')</h4>
                        </div>
    
                        <div class="block-body">
                            @php
                                $bedsize = json_decode($item->bed_sizes);
                                $bedprice = json_decode($item->bed_prices);
                            @endphp

                            
                            <div class="accordion" id="accordionExample">
                                @if(isset($bedsize->onebed))

                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      1 Bed
                                    </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">

                                        <table class="table table-light">
                                            <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Size</th>
                                                  <th scope="col">Price</th>
                                                </tr>
                                              </thead>
                                            <tbody>
                                                @foreach (array_combine($bedsize->onebed,$bedprice->onebed) as $size=>$price)
                                                <tr>
                                                    <td>Type {{ $loop->iteration }}</td>
                                                    <td>{{ $size }} Sqft</td>
                                                    <td>{{ $price }} {{ $currency->name }}</td>
                                                    
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        
                                        
                                    </div>
                                  </div>
                                </div>
                                @endif

                                @if(isset($bedsize->twobed))
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      2 Beds
                                    </button>
                                  </h2>
                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">

                                        <table class="table table-light">
                                            <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Size</th>
                                                  <th scope="col">Price</th>
                                                </tr>
                                              </thead>
                                            <tbody>
                                                @foreach (array_combine($bedsize->twobed,$bedprice->twobed) as $size=>$price)
                                                <tr>
                                                    <td>Type {{ $loop->iteration }}</td>
                                                    <td>{{ $size }} Sqft</td>
                                                    <td>{{ $price }} {{ $currency->name }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                      
                                    </div>
                                  </div>
                                </div>
                                @endif

                                @if(isset($bedsize->threebed))
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      3 Beds
                                    </button>
                                  </h2>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">

                                        <table class="table table-light">
                                            <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Size</th>
                                                  <th scope="col">Price</th>
                                                </tr>
                                              </thead>
                                            <tbody>
                                                @foreach (array_combine($bedsize->threebed,$bedprice->threebed) as $size=>$price)
                                                <tr>
                                                    <td>Type {{ $loop->iteration }}</td>
                                                    <td>{{ $size }} Sqft</td>
                                                    <td>{{ $price }} {{ $currency->name }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                      
                                    </div>
                                  </div>
                                </div>
                                @endif

                                @if(isset($bedsize->fourbed))
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                      4 Beds
                                    </button>
                                  </h2>
                                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">

                                        <table class="table table-light">
                                            <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Size</th>
                                                  <th scope="col">Price</th>
                                                </tr>
                                              </thead>
                                            <tbody>
                                                @foreach (array_combine($bedsize->fourbed,$bedprice->fourbed) as $size=>$price)
                                                <tr>
                                                    <td>Type {{ $loop->iteration }}</td>
                                                    <td>{{ $size }} Sqft</td>
                                                    <td>{{ $price }} {{ $currency->name }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                      
                                    </div>
                                  </div>
                                </div>
                                @endif

                                @if(isset($bedsize->fivebed))
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                      5 Beds
                                    </button>
                                  </h2>
                                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">

                                        <table class="table table-light">
                                            <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Size</th>
                                                  <th scope="col">Price</th>
                                                </tr>
                                              </thead>
                                            <tbody>
                                                @foreach (array_combine($bedsize->fivebed,$bedprice->fivebed) as $size=>$price)
                                                <tr>
                                                    <td>Type {{ $loop->iteration }}</td>
                                                    <td>{{ $size }} Sqft</td>
                                                    <td>{{ $price }} {{ $currency->name }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                      
                                    </div>
                                  </div>
                                </div>
                                @endif

                                @if(isset($bedsize->sixbed))
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                      6 Beds
                                    </button>
                                  </h2>
                                  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">

                                        <table class="table table-light">
                                            <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Size</th>
                                                  <th scope="col">Price</th>
                                                </tr>
                                              </thead>
                                            <tbody>
                                                @foreach (array_combine($bedsize->sixbed,$bedprice->sixbed) as $size=>$price)
                                                <tr>
                                                    <td>Type {{ $loop->iteration }}</td>
                                                    <td>{{ $size }} Sqft</td>
                                                    <td>{{ $price }} {{ $currency->name }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                      
                                    </div>
                                  </div>
                                </div>
                                @endif


                                @if(isset($bedsize->sevenbed))
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                      7 Beds
                                    </button>
                                  </h2>
                                  <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">

                                        <table class="table table-light">
                                            <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Size</th>
                                                  <th scope="col">Price</th>
                                                </tr>
                                              </thead>
                                            <tbody>
                                                @foreach (array_combine($bedsize->sevenbed,$bedprice->sevenbed) as $size=>$price)
                                                <tr>
                                                    <td>Type {{ $loop->iteration }}</td>
                                                    <td>{{ $size }} Sqft</td>
                                                    <td>{{ $price }} {{ $currency->name }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                      
                                    </div>
                                  </div>
                                </div>
                                @endif


                              </div>

                            
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
    
                                        <span class="d-block my-2"> <b>Member Since:</b> {{ $item->user->created_at->format('d M Y') }}</span>
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

    {{-- user phone contact info modal  --}}
    <div class="modal fade" id="usercallInfoModal" tabindex="-1" aria-labelledby="userInfoModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h5 class="modal-title mx-auto" id="userInfoModalLabel">Contact Us</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>

            <div class="paragraph-modal my-3">
                <p class="text-center">{{$item->title}}</p>
            </div>

            {{-- phone number with big green call icon  --}}
            <div class="mobile-number pb-3  w-75 mx-auto" >
                <div class="d-flex justify-content-center">
                    <div class="d-flex justify-content-center">
                        {{-- image height and width  --}}
                        <img src="{{asset('assets/images/call-icon.png')}}" alt="" style="height: 30px;width: 30px;">
                        
                    </div>
                    <div class="d-flex justify-content-center">
                        <h4 class="text-center ml-1">{{$item->user->phone}}</h4>
                    </div>
                </div>
            </div>
            

            <div style="border-bottom: 1px solid rgb(219, 216, 216); border-top: 1px solid rgb(219, 216, 216)" class="d-flex justify-content-center py-2  mb-4 w-75 mx-auto" >
                    <p class="text-center">Name: <b> {{$item->user->name}} </b></p>
            </div>

            <div style="border-bottom: 1px solid rgb(219, 216, 216);" class="baythub-quote w-75 py-2  mb-4 mx-auto text-center">
                <p class="text-center">Please quote property reference</p>
                <h6>Baythub - 100312-rhoErG</h6> 
                <p>  when calling us.</p>
            </div>

            <div class="more-option w-75 py-2  mb-4 mx-auto text-center" style="border-bottom: 1px solid rgb(219, 216, 216);">
                <p>Do you want more options? Finding the right property for you is easier with notifications.</p>
            </div>

            {{-- make two button in one row  one is make me notified and anothe is may be later --}}
            <div class="d-flex justify-content-center w-100 mx-auto">
                <button class="btn btn-primary w-50">Make me notified</button>
                <button class="btn btn-warning w-50 btn-close">May be later</button>
            </div>
          </div>
        </div>
      </div>
      {{-- User contact info modal end --}}

      {{-- send mail modal open with form  --}}
        <div class="modal fade" id="sendMailModal" tabindex="-1" aria-labelledby="sendMailModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header text-center">
                <h5 class="modal-title mx-auto" id="sendMailModalLabel">Send Mail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <form action="{{ route('contact.property.user') }}" method="Post">
                    @csrf
                    <div class="agent-widget mt-3">
                       
                        <input type="hidden" name="property_id" value="{{ $item->id }}">
                        <input type="hidden" name="owner_id" value="{{ $item->user->id }}">

                        <div class="form-group">
                            <input type="text"  value="{{ auth()->user() ? auth()->user()->email: '' }}" class="form-control" placeholder="Your Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Phone" name="phone">
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control">I'm interested in this property.</textarea>
                        </div>

                        @if($gs->recaptcha == 1)
                        <div class="form-input mb-3">
                            {!! NoCaptcha::display() !!}
                            {!! NoCaptcha::renderJs() !!}
                            @error('g-recaptcha-response')
                            <p class="my-2">{{$message}}</p>
                            @enderror
                        </div>
                        @endif
                        <button type="submit" class="btn btn-theme full-width">Send Message</button>
                    </div>

                </form>
            </div>
            </div>
        </div>
        {{-- send mail modal end --}}




</section>

@endsection

@push('js')

<script>
    $('.click').click(function(){
        var src = $(this).attr('src');
        $('.main').attr('src',src);
     
    })

    $('#user-call').click(function(){
        $('#usercallInfoModal').modal('show');
    })

    $('#sendcontact').click(function(){
        $('#sendMailModal').modal('show');
    })

    $('.btn-close').click(function(){
        $('.modal').modal('hide');
    })
</script>

@endpush