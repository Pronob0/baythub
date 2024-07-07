<div class="col-lg-3 col-md-4">
    <div class="dashboard-navbar">
        
        <div class="d-user-avater">
            <img src="{{ getPhoto(auth()->user()->photo) }}" class="img-fluid avater" alt="">
            <h4>{{ auth()->user()->name }}</h4>
            <span>{{ auth()->user()->address }}</span>
        </div>
        
        <div class="d-navigation">
            <ul>
                <li class="{{ request()->routeIs('user.dashboard') ? 'active' : ''}}"><a href="{{ route('user.dashboard') }}"><i class="ti-user"></i>Dashboard</a></li>
                
                <li class="{{ request()->routeIs('user.verification') ? 'active' : ''}}"><a href="{{route('user.verification')}}"><i class="ti-user"></i>Verification</a></li>
                
                
               
                <li class="{{ request()->routeIs('user.my.properties') ? 'active' : ''}}"><a href="{{ route('user.my.properties') }}"><i class="ti-layers"></i>@lang('My Properties')</a></li>

                {{-- services  --}}
                <li class="{{ request()->routeIs('user.my.services') ? 'active' : ''}}"><a href="{{ route('user.my.services') }}"><i class="ti-layers"></i>@lang('My Jobs')</a></li>

                {{-- investments  --}}
                <li class="{{ request()->routeIs('user.investment') ? 'active' : ''}}"><a href="{{ route('user.investment') }}"><i class="ti-layers"></i>@lang('My Investments')</a></li>

                {{-- wishlist  --}}
                <li class="{{ request()->routeIs('user.own.wishlist') ? 'active' : ''}}"><a href="{{ route('user.own.wishlist') }}"><i class="ti-heart"></i>@lang('My Wishlist')</a></li>
                {{-- services  --}}

                @if ($ticket = DB::table('user_contacts')->orderBy('id','desc')->where('user_id',auth()->user()->id)->orWhere('owner_id',auth()->user()->id)->first())
                    <li class="{{ request()->routeIs('user.message') ? 'active' : ''}}"><a href="{{ route('user.message',['ticket' => $ticket->id]) }}"><i class="lni lni-envelope me-2"></i>@lang('Messages')</a></li>
                @else
                    <li class="{{ request()->routeIs('user.message') ? 'active' : ''}}"><a href="{{ route('user.message') }}"><i class="lni lni-envelope me-2"></i>@lang('Messages')</a></li>
                @endif
                
                <li class="{{ request()->routeIs('choose.advert.category') ? 'active' : ''}}"><a href="{{ route('choose.advert.category') }}"><i class="ti-pencil-alt"></i>Submit New Property</a></li>

                <li><a href="{{ route('user.logout') }}"><i class="ti-power-off"></i>Log Out</a></li>
            </ul>
        </div>
        
    </div>
</div>