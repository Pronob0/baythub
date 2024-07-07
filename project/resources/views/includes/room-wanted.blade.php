<div class="search-header-banner">
    <div class="container">
        <div class="full-search-2 transparent mt-5">
            <h2 class="text-center mb-5">Find Tenants</h2>
           
            <div class="hero-search-content">
                <form action="{{ route('browse.advert',['slug'=>$category->slug, 'type'=>'rent']) }}" method="get">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <div class="input-with-icon">
                                <input type="number" class="form-control" name="budget" placeholder="Maximum Budget">
                                <i class="ti-money"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <div class="input-with-icon">
                                <select id="cities" class="form-control" name="room_size">
                                    <option value="">Select Room Size</option>
                                    <option value="1">A single room</option>
                                    <option value="2">Double room</option>
                                </select>
                                <i class="ti-briefcase"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group ">
                            <label>@lang('Select Town')</label>
                            {{-- select 2 with all country  --}}
                            <select id="towns" class="" name="town_id">
                               
                            </select>
                        
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="form-group">
                            <div class="input-with-icon">
                                <select id="cities" class="form-control" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                               
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="row d-flex justify-content-between">
                    
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

            @if (count($items)==0)
                <div class="col-md-12 text-center">
                    <h3 class="text-danger">@lang('No Advertise Found')</h3>
                </div>
                
            @else
    
       
            
            @foreach ($items as $item)
            <div class="col-lg-4 col-md-6">
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
                        
                        {{-- <span class="property-typee">{{ $item->subcategory->name }}</span> --}}
                        </div>
                        
                    </div>
                    
                    <div class="listing-detail-wrapper pb-0">
                        <div class="listing-short-detail">
                            <h4 class="listing-name"><a href="{{ route('advertise.details',$item->id) }}">  {{ $item->title }}</a></h4>
                        </div>
                    </div>
                    
                    <div class="price-features-wrapper">
                        
                        <div class="list-fx-features">
                            <div class="listing-card-info-icon">
                                
                                <small class=""><i class="fa-solid fa-money-bill"></i> {{ $currency->sign }}{{ $item->budget }}</small>
                            </div>
                            <div class="listing-card-info-icon">
                                
                                <small class=""><i class="fa-solid fa-square"></i> {{ $item->room_sizes==0 ? 'A single Room' : 'Double Room' }}</small>
                                
                            </div>
                            
                            <div class="listing-card-info-icon">
                                
                                <small class=""><i class="fa-solid fa-house-chimney-user"></i> {{ $item->accomodation_for }}</small>
                                 
                            </div>
                            <div class="listing-card-info-icon">
                                
                                <small class=""><i class="fa-solid fa-calendar-days"></i> {{ $item->move_from }}</small>
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
