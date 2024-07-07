<!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			
			<div class="header  change-logo">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand static-logo" href="{{ route('home') }}"><img src="{{ getPhoto($gs->header_logo) }}" class="logo" alt="logo" /></a>
							<a class="nav-brand fixed-logo" href="{{ route('home') }}"><img src="{{ getPhoto($gs->header_logo) }}" class="logo" alt="logo" /></a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
							
								<li class="active"><a href="{{ route('home') }}">@lang('Home')<span></span></a></li>
								<li><a href="{{ route('browse.advert.category') }}">@lang('Browse')<span></span></a></li>
								<li><a href="{{ route('browse.all.services') }}">@lang('Find Jobs')<span></span></a></li>
								<li><a href="{{ route('plan') }}">@lang('Pricing')<span></span></a></li>
								

								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									  Pages
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									  <a class="dropdown-item" href="{{ route('contact') }}">@lang('Contact')</a>
									  @foreach ($pages as $page)
									  <a class="dropdown-item" href="{{ route('page',$page->slug) }}">{{ $page->title }}</a>
									  
										  
									  @endforeach
									  
									</div>
								  </li>
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">

								<li class="">
									<a href="#"><img src="{{ asset('assets/images/uae.png') }}" alt="uae" style="width: 25px;height: 25px;"></a>
								</li>
								<li class="">
									<a href="#"><img src="{{ asset('assets/images/uk.png') }}" alt="uk" style="width: 25px;height: 25px;"></a>
								</li>
								
								@if (Auth::check())
								<li class="">
									<a href="{{ route('user.dashboard') }}"><i class="fas fa-user-circle mr-1"></i>@lang('Dashboard')</a>
								</li>

								@else
								<li>
									<a href="#" data-toggle="modal" data-target="#login">
										<i class="fas fa-user-circle mr-1"></i>@lang('Signin')</a>
								</li>
								@endif
								
								<li class="add-listing theme-bg">
									<a href="{{ route('choose.advert.category') }}">@lang('Post Free Ad')</a>
								</li>

								<li class="add-listing  job-button" style="background:#FF9409">
									<a href="{{ route('service') }}">@lang('Post Free Job')</a>
								</li>
								{{-- select uae or uk option with flag  --}}
								
								
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->