@extends('layouts.front')

@push('css')

@endpush

@section('content')



<section>

    <!-- ============================ Property Detail Start ================================== -->
    <section class="gray">
        <div class="container">
            <div class="row">

                <!-- property main detail -->
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="block-wrap" style="margin-top:-30px">
                        <div class="d-flex justify-content-between">
                            <div class="street">
                                <p><b>{{$service->title}}</b></p>
                            </div>
                            <div>
                                <p>ID: #000{{$service->id}}</p>
                            </div>
                        </div>
                        {{-- watch icon  --}}
                        <div class="d-flex ">

                            <div class="mx-2">
                                <p><i class="fa-solid fa-clock"></i> {{ $service->created_at->diffForHumans() }}</p>
                            </div>
                            <div class="mx-2">
                                <p><i class="fa-solid fa-eye"></i> {{ $service->usercontacts->count() }} @lang('Proposal')</p>

                            </div>
                        </div>

                        @if($user != null)
                        <div class="d-flex ">
                            <div class="street mx-2">
                                <p><i class="fa-solid fa-user"></i> <a href="javascript:;" data-bs-toggle="modal" id="allmodal" data-bs-target="#exampleModaluser" class="text-danger" href=""> +{{ count($user) }} others</a> have already sent a proposal.</p>


                            </div>

                        </div>

                        @endif

                    </div>


                    <div class="block-wrap">

                        <div class="block-header">
                            <h4 class="block-title">@lang('Job Information')</h4>
                        </div>

                        <div class="block-body">

                            <table class="table table-light table-striped">
                                <tbody>
                                    <tr>
                                        <td>@lang('Start Date')</td>
                                        {{-- carbon with month name  --}}

                                        <td>{{ \Carbon\Carbon::parse($service->start_date)->format('d M Y') }}</td>

                                    </tr>

                                    <tr>
                                        <td>@lang('Postcode')</td>
                                        <td>{{ $service->postcode }}</td>
                                    </tr>

                                    <tr>
                                        <td>@lang('Location')</td>
                                        <td>{{ $service->city->name }}, {{ $service->town->town }}</td>
                                    </tr>
                                    <tr>
                                        <td>@lang('Budget')</td>
                                        <td>{{ $service->budget }} {{ $currency->sign }}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>


                    <div class="block-wrap">

                        <div class="block-header">
                            <h4 class="block-title">@lang('Job Description')</h4>
                        </div>

                        <div class="block-body">
                            <p class="text-justify">
                                {!! $service->description !!}
                            </p>
                        </div>

                    </div>

                    <div class="block-wrap">
                        <img class="img-fluid main" src="{{ getPhoto($service->photo) }}" alt="">
                    </div>

                    <!-- Single Block Wrap -->


                </div>

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
                                <div class="agent-photo"><img src="{{ $service->user->photo ?  getPhoto($service->user->photo) :  getPhoto('user.png')}}" alt="user"></div>
                                <div class="agent-details ">
                                    <h4><a href="{{ route('user.details',$service->user->id) }}">@lang('Posted By')</a></h4>
                                </div>
                                <div class="clearfix"></div>
                            </div>
    
                            <div class="details text-center">
                                <span class="d-block my-2"> Name: <a class="name" href="{{ route('user.details',$service->user->id) }}">{{ $service->user->name }} @if ($service->user->kyc_status == 1)
                                        <span class="text-success  my-2"><i class="fa-solid fa-circle-check"></i></span>
                                        @else
                                        <span style="color:#ef4545;" class="text-danger  my-2"><i class="fa-solid fa-circle-xmark"></i></span>
                                        @endif </a> </span>
    
                                        <span class="d-block my-2"> <b>Member Since:</b> {{ $service->user->created_at->format('d M Y') }}</span>
                                {{-- ratings here --}}
                                <div class="rating">
                                    <div class="star-rating">
                                        {{-- owner rating avg  --}}
                                        @php
                                        $ownerRating = $service->user->ownerRatings->avg('star_rating');
                                        @endphp
                                        <span>({{ $service->user->ownerRatings->count() }})</span>
                                        @for ($i = 0; $i < 5; $i++) <span class="fa fa-star
                                            {{ $ownerRating <= $i ? 'text-muted' : 'text-warning' }} {{ ($service->user->ownerRatings->count()) }}"></span>
                                            @endfor
                                    </div>
                                </div>
    
                                {{-- make three modal button call, email and whatsapp   --}}
                                <div class="d-flex justify-content-between pb-4 mt-5" style="border-bottom: 1px solid #e4e4e4">
                                    <a id="user-call" href="javascript:;" class="btn btn-warning btn-sm btn-rounded"><i class="fa fa-phone"></i> @lang('Call')</a>
                                    <a id="sendcontact" href="javascript:;" class="btn btn-primary btn-sm btn-rounded"><i class="fa fa-envelope"></i> @lang('Email')</a>
                                    <a href="https://api.whatsapp.com/send?phone={{ $service->user->phone }}" class="btn btn-success btn-sm btn-rounded"><i class="fa-brands fa-whatsapp"></i> @lang('Whatsapp')</a>
                                </div>
                                {{-- view all properties with arrow sign--}}
                               
    
                            </div>
                        </div>



                        <form action="{{ route('contact.property.user') }}" method="Post">
                            @csrf
                            <div class="agent-widget mt-3">
                                <div class="agent-title mb-5 mt-2" style="margin-left: -35px">

                                    <div class="agent-details">
                                        <h4><a href="#">@lang('Apply for this job')</a></h4>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <input type="hidden" name="is_service" value="1">
                                <input type="hidden" name="property_id" value="{{ $service->id }}">
                                <input type="hidden" name="owner_id" value="{{ $service->user->id }}">

                                <div class="form-group">
                                    <input type="text" readonly value="{{ auth()->user() ? auth()->user()->email: '' }}" class="form-control" placeholder="Your Email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Phone" name="phone" readonly value="{{ auth()->user() ? auth()->user()->phone: '' }}">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control">I'm interested in this job.</textarea>
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
                                <button type="submit" class="btn btn-theme full-width">Send Proposal</button>
                            </div>

                        </form>


                       

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ Property Detail End ================================== -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModaluser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">All user</h5>

                </div>
                <div class="modal-body">

                    @foreach ($user as $item)
                    <div class="d-flex justify-content-between">
                        <div class="mr-2 d-flex">
                            <img src="{{ $item->photo ? getPhoto($item->photo) : getPhoto('no-image.jpg') }}" alt="user photo" class="img-fluid" style="width: 50px; height: 50px; border-radius: 50%; border:1px solid #9f9d9d">
                            <a href="{{ route('user.details',$item->id) }}" class="mt-2" style="font-size: 12px;margin-left: 10px">{{ $item->name }}</a>
                            {{-- city  --}}
                            <a href="#" class="mt-2" style="font-size: 12px;margin-left: 10px">{{ $item->city }}</a>
                        </div>
                        <div>
                            <p>ID: #000{{$item->id}}</p>
                        </div>
                    </div>
                    <hr>
                    @endforeach

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="close" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


      {{-- user phone contact info modal  --}}
      <div class="modal fade" id="usercallInfoModal" tabindex="-1" aria-labelledby="userInfoModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h5 class="modal-title mx-auto" id="userInfoModalLabel">Contact Us</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>

            <div class="paragraph-modal my-3">
                <p class="text-center">{{$service->title}}</p>
            </div>

            {{-- phone number with big green call icon  --}}
            <div class="mobile-number pb-3  w-75 mx-auto" >
                <div class="d-flex justify-content-center">
                    <div class="d-flex justify-content-center">
                        {{-- image height and width  --}}
                        <img src="{{asset('assets/images/call-icon.png')}}" alt="" style="height: 30px;width: 30px;">
                        
                    </div>
                    <div class="d-flex justify-content-center">
                        <h4 class="text-center ml-1">{{$service->user->phone}}</h4>
                    </div>
                </div>
            </div>
            

            <div style="border-bottom: 1px solid rgb(219, 216, 216); border-top: 1px solid rgb(219, 216, 216)" class="d-flex justify-content-center py-2  mb-4 w-75 mx-auto" >
                    <p class="text-center">Name: <b> {{$service->user->name}} </b></p>
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
                        <input type="hidden" name="is_service" value="1">
                        <input type="hidden" name="property_id" value="{{ $service->id }}">
                        <input type="hidden" name="owner_id" value="{{ $service->user->id }}">

                        <div class="form-group">
                            <input type="text"  value="{{ auth()->user() ? auth()->user()->email: '' }}" class="form-control" placeholder="Your Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Phone" name="phone">
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control">I'm interested in this Job.</textarea>
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
    $('.click').click(function() {
        var src = $(this).attr('src');
        $('.main').attr('src', src);

    })

    $('#allmodal').click(function() {
        $('#exampleModaluser').modal('show');
    })
    $('#user-call').click(function(){
        $('#usercallInfoModal').modal('show');
    })

    $('#sendcontact').click(function(){
        $('#sendMailModal').modal('show');
    })

    $('#close').click(function() {
        $('#exampleModaluser').modal('hide');
    })

    $('.btn-close').click(function(){
        $('.modal').modal('hide');
    })

</script>

@endpush
