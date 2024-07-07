@extends('layouts.front')

@push('css')

@endpush

@section('content')



<section style="padding:20px 0 !important;">

    @if ($item->category_id==11)

    {{-- buy or rent  --}}
    @if ($item->type=='buy')
        
        @include('includes.property-wanted-details')

    @elseif($item->type=='rent')
    
            @include('includes.room-rent-wanted-details')

    @endif
        
    @endif

    @if ($item->category_id==12)
        @include('includes.exclusive-deals-details')

    @endif

    @if ($item->category_id==13)
        @include('includes.room-rent-details')

    @endif

    @if ($item->category_id==14)
        @include('includes.buy-details')

    @endif

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