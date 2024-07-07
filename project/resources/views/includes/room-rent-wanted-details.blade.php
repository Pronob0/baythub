<!-- ============================ Property Detail Start ================================== -->
<section class="gray">
    <div class="container">
        <div class="row">
            
            <!-- property main detail -->
            <div class="col-lg-8 col-md-12 col-sm-12">
                
                <div class="slide-property-first mb-4 d-flex justify-content-between">
                    <div class="pr-price-into">
                        <h2><i> {{ $item->title }}</i></h2>
                        
                    </div>
                    <div class="pr-price-info ">
                        <span>Max Budget</span><h5 class="text-center">  {{ $currency->sign }}{{ $item->budget }} </h5>
                    </div>
                </div>

                @php
                $photos = explode(',',$item->photo);
                @endphp
                <div class="block-wrap">
                    <img class="img-fluid main" src="{{ asset('assets/images/advertisement/'.$photos[0]) }}" alt="">

                    <div class="row mt-3">
                        @foreach ($photos as $key => $photo)
                        @if ($key <= 2)
                        <div class="col-md-4" style="cursor: pointer">
                            <img class="img-fluid click" src="{{ asset('assets/images/advertisement/'.$photo) }}" alt="">
                        </div>
                            
                        @endif
                            
                        @endforeach

                    </div>
                </div>

                
                
                <!-- Single Block Wrap -->
                <div class="block-wrap">
                    <div class="block-header">
                        <h4 class="block-title">@lang('Room Requirements')</h4>
                    </div>
                    <div class="block-body">
                        <table class="table table-light table-striped">
                            <tbody>
                                <tr>
                                    <td>@lang('Location')</td>
                                    <td>{{ $item->location }}</td>
                                    
                                </tr>
                                <tr>
                                    <td>@lang('Street')</td>
                                    <td>{{ $item->street }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('Buddy Up')</td>
                                    <td>{{ $item->buddy_up==0 ? 'No':'Yes' }}</td>
                                </tr>
                                <tr>
                                    <td>@lang('Room Sizes')</td>
                                    <td>{{ $item->room_sizes == 0 ? 'A single room' : 'Double Room' }}</td>
                                    
                                </tr>
                                {{-- period_accomodation  --}}
                                <tr>
                                    <td>@lang('Period of Accomodation')</td>
                                    <td>{{ $item->period_accomodation }}</td>
                                </tr>
                                {{-- accomodation for  --}}
                                <tr>
                                    <td>@lang('Accomodation For')</td>
                                    <td>{{ $item->accomodation_for }}</td>
                                </tr>
                                {{-- move_from --}}
                                <tr>
                                    <td>@lang('Move From')</td>
                                    <td>{{ $item->move_from }}</td>
                                </tr>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Single Block Wrap -->
               
                
                <!-- Single Block Wrap -->
                <div class="block-wrap">
                    
                    <div class="block-header">
                        <h4 class="block-title">@lang('Ameneties Desired')</h4>
                    </div>
                    
                    <div class="block-body">
                        <ul class="avl-features third">
                            @foreach (explode(',', $item->amenities) as $amn)
                            <li>{{ $amn }}</li>
                            @endforeach
                        </ul>
                    </div>
                    
                </div>

                <div class="block-wrap">
                    <div class="block-header">
                        <h4 class="block-title">@lang('About Myself')</h4>
                    </div>
                    <div class="block-body">
                        @php
                            $about = json_decode($item->about_you);
                        @endphp
                        <table class="table table-light table-striped">
                            <tbody>

                                @foreach ($about as $key => $abt)

                                @if($key == 'smoke')
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>{{ $abt == 0 ? 'No':'Yes' }}</td>
                                </tr>

                                @elseif($key == 'pets')
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>{{ $abt == 0 ? 'No':'Yes' }}</td>
                                </tr>
                                @else
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td>{{ $abt }}</td>

                                </tr>
                                @endif
                                @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="block-wrap">
                    <div class="block-header">
                        <h4 class="block-title">@lang('New Housemate Preference')</h4>
                    </div>
                    <div class="block-body">
                        @php
                            $aboutmate = json_decode($item->about_flatmte);
                        @endphp
                        <table class="table table-light table-striped">
                            <tbody>
                                    
                                    @foreach ($aboutmate as $key => $abt)
    
                                    @if($key == 'mate_smoke')
                                    <tr>
                                        <td>@lang('Smoke')</td>
                                        <td>{{ $abt == 0 ? 'No':'Yes' }}</td>
                                    </tr>
    
                                    @elseif($key == 'mate_pets')
                                    <tr>
                                        <td>@lang('Pets')</td>
                                        <td>{{ $abt == 0 ? 'No':'Yes' }}</td>
                                    </tr>
                                    @elseif($key == 'mate_age')
                                    <tr>
                                        <td>@lang('Age')</td>
                                        <td>{{ $abt }}</td>
    
                                    </tr>
                                    @elseif($key == 'mate_occupation')
                                    <tr>
                                        <td>@lang('Occupation')</td>
                                        <td>{{ $abt }}</td>
                                    </tr>
                                    @elseif($key == 'mate_gender')

                                    <tr>
                                        <td>@lang('Gender')</td>
                                        <td>{{ $abt }}</td>
                                    </tr>
                                   
                                      
                                    

                                    @endif
                                    @endforeach

                                
                            
                            </tbody>
                        </table>
                    </div>
                </div>
                 
                 
                 
                
                <div class="block-wrap">
                    
                    <div class="block-header">
                        <h4 class="block-title">@lang('Description')</h4>
                    </div>
                    
                    <div class="block-body">
                        <p class="text-justify">
                            {!! $item->description !!}
                        </p>
                    </div>
                    
                </div>
               
                
                
                
            </div>
            
            <!-- property Sidebar -->
             <!-- property Sidebar -->
             <div class="col-lg-4 col-md-12 col-sm-12 ">
                <div class="page-sidebar" style="margin-top: -48px">

                    <!-- slide-property-sec -->

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
                            <a href="{{ route('user.details',$item->user->id) }}" class=""> <small> @lang('View All Properties') <i class="fa fa-arrow-right"></i></small></a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================ Property Detail End ================================== -->
