<div class="search-header-banner">
    <div class="container">
        <div class="full-search-2 transparent mt-5">

            <h2 class="text-center mb-5">Buy</h2>
           
            <div class="hero-search-content">
                <form action="{{ route('browse.advert',['slug'=>$category->slug, 'type'=>'post']) }}" method="get">
              
                
                <div class="row">

                    
                    
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <div class="input-with-icon">
                                <select id="cities" class="form-control" name="property_type">
                                    <option value="">@lang('Property Type')</option>
                                    @foreach($subs as $sub)
                                    <option value="{{ $sub->id }}">{{ $sub->name }}</option>
                                    @endforeach
                                    
                                </select>
                                <i class="ti-briefcase"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <div class="input-with-icon">
                                <select id="cities" class="form-control" name="bedroom">
                                    <option value="">@lang('Bedroom')</option>
                                    <option value="1">@lang('One')</option>
                                    <option value="2">@lang('Two')</option>
                                    <option value="3">@lang('Three')</option>
                                    <option value="4">@lang('Four')</option>
                                    <option value="5">@lang('Five')</option>
                                    <option value="6">@lang('Six')</option>
                                    <option value="7">@lang('Seven')</option>
                                    <option value="8">@lang('Eight')</option>
                                    <option value="9">@lang('Nine')</option>
                                </select>
                                <i class="ti-briefcase"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <div class="input-with-icon">
                                <input type="number" class="form-control" name="budget" placeholder="Monthly Rent">
                                <i class="ti-money"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-theme-light w-100">@lang('Search')</button>
                        </div>
                    </div>

                    
                    
                    
                </div>
                
                
            </form> 
            </div>
        </div>
    </div>
</div>



<!-- =========================== All Property =============================== -->
<section>

    <div class="container">
    
        <div class="row">

            @if ($items->count()==0)

            <div class="card w-100">
                <div class="card-body ">
                   
                    <p class="card-text text-center">Items Not Found</p>
                </div>
            </div>
                
            @else
    
       
            
            @foreach ($items as $item)
            <div class="col-lg-4 col-md-4">
            <div class="single-items">
                <div class="property-listing property-2">
                    <div class="listing-img-wrapper">
                        <div class="list-img-slidee">
                            <div class="click">
                                @php
                                $photo = explode(',',$item->photo);
                                $wishlist = DB::table('wishlists')->where('advert_id',$item->id)->where('user_id',Auth::id())->first();
                            @endphp
                                 
                                <div><img src="{{ asset('assets/images/advertisement/'.$photo[0]) }}" class="img-fluid mx-auto" alt="" />
                                    <div class="listing-like-top heart" data-id="{{ $item->id }}">
                                        <i class="fa-regular fa-heart {{ $wishlist ? 'active' : ' ' }}"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       
                        <div class="d-flex justify-content-between">
                        
                        <span class="property-typee">{{ $item->subcategory->name }}</span>
                        </div>
                        
                    </div>
                    
                    <div class="listing-detail-wrapper pb-0">
                        <div class="listing-short-detail">
                            <p class="listing-name text-uppercase"><a href="{{ route('advertise.details',$item->id) }}"> <b><i class="fa-solid fa-location-dot"></i></b> {{ $item->city->name }}, {{ $item->town->town }}</a></p>
                        </div>
                    </div>
                    
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

            @endif
        
    
</div>
        

       {{-- custom pagination link  --}}

         <div class="row">
              <div class="col-md-12">
                <div class="d-flex justify-content-center">
                     {{ $items->links('paginate') }}
                </div>
              </div>
         </div>
        
    </div>
            
</section>
<!-- =========================== All Property =============================== -->



