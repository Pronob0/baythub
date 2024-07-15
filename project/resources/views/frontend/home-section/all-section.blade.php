<!-- ============================ Latest Property For Sale Start ================================== -->
<section>
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="sec-heading center">
                    <h2>{{ $section->buyer_title }}</h2>
                    <!--<p>{{ $section->buyer_subtitle }}</p>-->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h4 class="mb-3">Find Buyers</h4>
                            <div class="row">
                                @foreach ($buyers as $item)
                                <!-- Single Property Start -->
                                <div class="col-lg-4 col-md-4">
                                    <div class="property_item classical-list">
                                        <div class="image">
                                        </div>
                                        <div class="proerty_content">
                                            <div class="proerty_text">
                                                <p class="proerty_price text-center"> <span class="d-block">@lang('Maximum Budget')</span> {{ $currency->sign }} {{ $item->budget }}</p>
                                            </div>
                                            <p class="property_add mt-3"><b>Desired Location: </b>{{ $item->location }}</p>
                                            <div class="property_meta">
                                                <div class="list-fx-features">
                                                    <div class="listing-card-info-icon">
                                                        <small class="d-block"><b>Buying for: </b></small>
                                                        <small class="">{{ $item->buying_for == 'living' ? 'Living' : 'Investment' }}</small>
                                                    </div>
                                                    <div class="listing-card-info-icon">

                                                        <small class="d-block"><b>Property Required: </b></small>
                                                        <small class="">{{ $item->property_type == null ? 'Land' : $item->property_type }} </small>

                                                    </div>

                                                    <div class="listing-card-info-icon">
                                                        <small class="d-block"><b>Bedroom:</b></small>
                                                        <small class="">{{ $item->bedroom==null ? 0 : $item->bedroom }}</small>

                                                    </div>

                                                    <div class="listing-card-info-icon">
                                                        <small class="d-block"><b>Finance Source: </b></small>
                                                        <small class="">{{ $item->buyer_type }}</small>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="property_links">
                                                <a href="{{ route('advertise.details',$item->id) }}" class="btn btn-theme-light w-100">@lang('More Detail')</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="carousel-item">
                            <h4 class="mb-3">Exclusive Deals</h4>
                            <div class="row">
                                @foreach ($exclusives as $item)
                                <!-- Single Property Start -->
                                <div class="col-lg-4 col-md-4">
                                    <div class="property_item classical-list">
                                        @php
                                        $photo = explode(',',$item->photo);
                                    @endphp
                                        <div class="image">
                                            <a href="{{ route('advertise.details',$item->id) }}"><img src="{{ asset('assets/images/advertisement/'.$photo[0]) }}" class="img-fluid mx-auto" alt="" /></a>
                                        </div>
                                        <div class="proerty_content">
                                            
                                            <h6 class="listing-name text-uppercase"><a class="text-warning" href="{{ route('advertise.details',$item->id) }}"> <b><i class="fa-solid fa-location-dot"></i> </b> {{ $item->city->name }}, {{ $item->town->town }}</a></h6>
                                            <div class="property_meta">
                                                <div class="list-fx-features">
                                                    <div class="listing-card-info-icon">
                                                       <small class=""><i class="fa-solid fa-house"></i> {{ $item->property_type }} </small>
                                                    </div>
                                                    <div class="listing-card-info-icon">
                                                       <small class=""><i class="fa-solid fa-location-dot"></i> {{ $item->town->town }}</small>
                                                    </div>
                                                    @php
                                                    $cost = json_decode($item->cost,true);
                                                    @endphp
                                                    <div class="listing-card-info-icon">
                                                       <small class=""> <i class="fa-solid fa-money-bill"></i> {{ $currency->sign }}{{ $cost['potential_rent']  }}</small>
                                                    </div>
                                                    <div class="listing-card-info-icon">
                                                       <small class=""><i class="fa-solid fa-bed"></i> {{ $item->bedroom }} Beds</small>
                                                    </div>
                                                 </div>
                                            </div>
                                            <div class="property_links w-100">
                                                <a href="{{ route('advertise.details',$item->id) }}" class="btn btn-theme-light w-100">@lang('More Detail')</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                    
                                @endforeach
                                
                            </div>
                        </div>
                        <div class="carousel-item">
                            <h4 class="mb-3">Properties for Rent</h4>
                            <div class="row">
                                @foreach ($rooms as $item)
                                <!-- Single Property Start -->
                                <div class="col-lg-4 col-md-4">
                                    <div class="property_item classical-list">
                                        @php
                                        $photo = explode(',',$item->photo);
                                    @endphp
                                        <div class="image">
                                            <a href="{{ route('advertise.details',$item->id) }}"><img src="{{ asset('assets/images/advertisement/'.$photo[0]) }}" class="img-fluid mx-auto" alt="" /></a>
                                        </div>
                                        <div class="proerty_content">
                                            
                                            <p class="listing-name text-uppercase"><a href="{{ route('advertise.details',$item->id) }}"> <b><i class="fa-solid fa-location-dot"></i></b> {{ $item->city->name }}, {{ $item->town->town }}</a></p>
                                            <div class="price-features-wrapper">
                        
                                                <div class="list-fx-features">
                                                    <div class="listing-card-info-icon">
                                                        
                                                        <small class=""><i class="fa-solid fa-house"></i> {{ $item->property_type }} </small>
                                                    </div>
                                                    @php
                                                        $tenant= json_decode($item->tenant_details);
                                                    @endphp
                                                    
                                                   
                                                    <div class="listing-card-info-icon">
                                                        <small class=""><i class="fa-solid fa-money-bill"></i> {{ $tenant->monthly_rent }} {{ $currency->name }}</small>
                                                        
                                                    </div>
                                                    
                                                    <div class="listing-card-info-icon">
                                                        
                                                         <small class=""><i class="fa-solid fa-calendar-days"></i> {{ $tenant->date }}</small>
                                                    </div>
                                                    <div class="listing-card-info-icon">
                                                       
                                                        <small class=""> <i class="fa-solid fa-bed"></i> {{ $item->bedroom }} Beds</small>
                                                    </div>
                                                </div> 
                                                
                                                <div class="property_links w-100">
                                                <a href="{{ route('advertise.details',$item->id) }}" class="btn btn-theme-light w-100">@lang('More Detail')</a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                                    
                                @endforeach


                            
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ============================ Latest Property For Sale End ================================== -->
