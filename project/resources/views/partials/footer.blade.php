

<footer class="dark-footer skin-dark-footer">
    <div>
        <div class="container">
            <div class="row">
                
                <div class="col-lg-3 col-md-4">
                    <div class="footer-widget">
                        <img src="{{ getPhoto($gs->header_logo) }}" class="img-footer" alt="" />
                        <div class="footer-add">
                            <p>@php
                                echo $fcontact->address;
                            @endphp
                            </p>
                            <p>{{ $fcontact->phone1 }}</p>
                            <p>{{ $fcontact->email1 }}</p>
                        </div>
                        
                    </div>
                </div>		
                <div class="col-lg-2 col-md-4">
                    <div class="footer-widget">
                        <h4 class="widget-title">Navigations</h4>
                        <ul class="footer-menu">
                            <li class="active"><a href="{{ route('home') }}">@lang('Home')<span></span></a></li>
								<li><a href="{{ route('browse.advert.category') }}">@lang('Browse')<span></span></a></li>
								<li><a href="{{ route('plan') }}">@lang('Pricing')<span></span></a></li>
								@foreach ($pages as $menu)
								<li><a href="{{ route('page', $menu->slug) }}">{{ $menu->title }}<span></span></a></li>
								@endforeach
								<li><a href="{{ route('about') }}">@lang('About Us')<span></span></a></li>
								<li><a href="{{ route('contact') }}">@lang('Contact Us')<span></span></a></li>
                        </ul>
                    </div>
                </div>
                

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h4 class="widget-title">The Highlights</h4>
                        @php
                          $categories = DB::table('categories')->get();
                        @endphp
                        <ul class="footer-menu">
                            @foreach ($categories as $item)
                            @if($item->id ==11)
                            <li><a href="#">@lang('Find Buyers')</a></li>
                            @elseif($item->id ==12)
                            <li><a href="#">@lang('Find Exclusive Deals')</a></li>
                            @elseif($item->id == 13)
                            <li><a href="#">@lang('Properties for Rent')</a></li>
                            @else
                            <li><a href="#">@lang('Find Projects')</a></li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                
                
                
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h4 class="widget-title">Download Apps</h4>
                        <a href="#" class="other-store-link">
                            <div class="other-store-app">
                                <div class="os-app-icon">
                                    <i class="lni-playstore theme-cl"></i>
                                </div>
                                <div class="os-app-caps">
                                    Google Play
                                    <span>Not it Available</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="other-store-link">
                            <div class="other-store-app">
                                <div class="os-app-icon">
                                    <i class="lni-apple theme-cl"></i>
                                </div>
                                <div class="os-app-caps">
                                    App Store
                                    <span>Now it Available</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-lg-6 col-md-6">
                    <p class="mb-0">{{ $gs->copyright_text }}</p>
                </div>
                
                <div class="col-lg-6 col-md-6 text-right">
                    <ul class="footer-bottom-social">
                        @foreach ($social_links as $sl)
                        <li><a href="{{ $sl->link }}"><i class="{{ $sl->icon }}"></i></a></li>
                        @endforeach
                        
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</footer>
<!-- ============================ Footer End ================================== -->